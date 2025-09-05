<?php

use App\Livewire\Settings\Profile;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Appearance;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::get('/template', function () {
//     return view('template');
// });

// Route::get('/about', function () {
//     return view('about');
// });

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

//contact us
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/admin/contacts', [ContactController::class, 'adminIndex'])->name('admin.contacts.index');
Route::delete('/admin/contacts/{contact}', [ContactController::class, 'destroy'])->name('admin.contacts.destroy');

// Admin contact management routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/contacts', [ContactController::class, 'adminIndex'])->name('contacts.index');
    Route::get('/contacts/{contact}', [ContactController::class, 'show'])->name('contacts.show');
    Route::post('/contacts/{contact}/respond', [ContactController::class, 'respond'])->name('contacts.respond');
    Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');
    Route::post('/contacts/bulk-action', [ContactController::class, 'bulkAction'])->name('contacts.bulk-action');
    Route::patch('/admin/contacts/{contact}', [ContactController::class, 'update'])->name('admin.contacts.update');
});


require __DIR__.'/auth.php';