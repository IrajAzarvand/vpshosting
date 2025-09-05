<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'is_human' => 'required|accepted'
        ]);

        Contact::create($validated);

        return redirect()->back()->with('success', 'پیام شما با موفقیت ارسال شد. به زودی با شما تماس خواهیم گرفت.');
    }

    public function adminIndex(Request $request)
    {
        // Get filter parameter
        $filter = $request->get('filter', 'all');

        // Build query based on filter
        $query = Contact::latest();

        if ($filter === 'new') {
            $query->where('is_read', false)->whereNull('admin_response');
        } elseif ($filter === 'read') {
            $query->where('is_read', true)->whereNull('admin_response');
        } elseif ($filter === 'replied') {
            $query->whereNotNull('admin_response');
        }

        // Search functionality
        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('subject', 'like', "%{$search}%");
            });
        }

        $contacts = $query->paginate(10);

        // Get counts for stats
        $totalCount = Contact::count();
        $newCount = Contact::where('is_read', false)->whereNull('admin_response')->count();
        $readCount = Contact::where('is_read', true)->whereNull('admin_response')->count();
        $repliedCount = Contact::whereNotNull('admin_response')->count();

        return view('admin.messages', compact(
            'contacts',
            'filter',
            'totalCount',
            'newCount',
            'readCount',
            'repliedCount'
        ));
    }

    public function show(Contact $contact)
    {
        // Mark as read if it's new
        if (!$contact->is_read) {
            $contact->update(['is_read' => true]);
        }

        return response()->json($contact);
    }

    public function respond(Contact $contact, Request $request)
    {
        $validated = $request->validate([
            'response' => 'required|string|min:10'
        ]);

        $contact->update([
            'admin_response' => $validated['response'],
            'is_read' => true,
            'responded_at' => now()
        ]);

        // Here you would typically send the response email
        // Mail::to($contact->email)->send(new ContactResponseMail($contact, $validated['response']));

        return response()->json([
            'success' => true,
            'message' => 'پاسخ با موفقیت ارسال شد.'
        ]);
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return response()->json([
            'success' => true,
            'message' => 'پیام با موفقیت حذف شد.'
        ]);
    }

    public function bulkAction(Request $request)
    {
        $validated = $request->validate([
            'action' => 'required|in:delete,mark_read,mark_replied',
            'ids' => 'required|array',
            'ids.*' => 'exists:contacts,id'
        ]);

        $count = 0;

        switch ($validated['action']) {
            case 'delete':
                Contact::whereIn('id', $validated['ids'])->delete();
                $count = count($validated['ids']);
                break;

            case 'mark_read':
                $count = Contact::whereIn('id', $validated['ids'])
                    ->update(['is_read' => true]);
                break;

            case 'mark_replied':
                $count = Contact::whereIn('id', $validated['ids'])
                    ->update([
                        'admin_response' => 'پاسخ داده شده (علامت گذاری شده)',
                        'is_read' => true,
                        'responded_at' => now()
                    ]);
                break;
        }

        return response()->json([
            'success' => true,
            'message' => "تعداد $count پیام پردازش شد."
        ]);
    }

    public function update(Request $request, Contact $contact)
    {
        $validated = $request->validate([
            'is_read' => 'sometimes|boolean'
        ]);

        $contact->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'وضعیت پیام با موفقیت به روز شد.'
        ]);
    }
}
