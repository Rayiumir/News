<x-Admin::AdminLayout>
    <x-slot name="title">
        - لیست کاربران
    </x-slot>
    <a href="{{ route('users.create') }}" type="button" class="btn btn-primary"><i class="fa-duotone fa-plus"></i> ایجاد کاربر جدید </a>
    <table class="table table-striped mt-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">نام و نام خانوادگی</th>
            <th scope="col">ایمیل</th>
            <th scope="col">وضعیت تایید ایمیل</th>
            <th scope="col">تاریخ عضویت</th>
            <th scope="col">عملیات</th>
        </tr>
        </thead>
        <tbody>
            @foreach($users as $row)
                <tr>
                    <th scope="row">{{$row->id}}</th>
                    <td>{{$row->name}}</td>
                    <td>{{$row->email}}</td>
                    <td>
                        @if( !empty($row->email_verified_at))
                            <span class="badge bg-success"><i class="fa-duotone fa-check"></i> تایید شده </span>
                        @else
                            <span class="badge bg-danger"><i class="fa-duotone fa-xmark"></i> تایید نشده </span>
                        @endif
                    </td>
                    <td>{{$row->created_at}}</td>
                    <td>
                        <button type="button" class="btn btn-secondary btn-sm"><i class="fa-duotone fa-edit"></i> ویرایش </button>
                        <button type="button" class="btn btn-danger btn-sm"><i class="fa-duotone fa-trash"></i> حذف </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-Admin::AdminLayout>
