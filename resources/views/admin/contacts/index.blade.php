@extends('admin.layouts.app')

@section('title', 'مدیریت پیام‌های تماس')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">مدیریت پیام‌های تماس</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>نام</th>
                                    <th>ایمیل</th>
                                    <th>موضوع</th>
                                    <th>تاریخ</th>
                                    <th>وضعیت</th>
                                    <th>عملیات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contacts as $contact)
                                <tr>
                                    <td>{{ $contact->id }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->subject }}</td>
                                    <td>{{ jdate($contact->created_at)->format('Y/m/d H:i') }}</td>
                                    <td>
                                        <span class="badge {{ $contact->is_read ? 'bg-success' : 'bg-warning' }}">
                                            {{ $contact->is_read ? 'خوانده شده' : 'جدید' }}
                                        </span>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#messageModal{{ $contact->id }}">
                                            مشاهده
                                        </button>
                                        <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('آیا از حذف این پیام مطمئن هستید؟')">
                                                حذف
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="messageModal{{ $contact->id }}" tabindex="-1"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">مشاهده پیام</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p><strong>نام:</strong> {{ $contact->name }}</p>
                                                <p><strong>ایمیل:</strong> {{ $contact->email }}</p>
                                                <p><strong>تلفن:</strong> {{ $contact->phone ?? 'ثبت نشده' }}</p>
                                                <p><strong>موضوع:</strong> {{ $contact->subject }}</p>
                                                <p><strong>پیام:</strong></p>
                                                <div class="border p-3 rounded">
                                                    {{ $contact->message }}
                                                </div>
                                                <p class="mt-3"><strong>تاریخ ارسال:</strong> {{
                                                    jdate($contact->created_at)->format('Y/m/d H:i') }}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">بستن</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{ $contacts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection