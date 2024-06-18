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
            <th scope="col">دسترسی ها</th>
            <th scope="col">وضعیت تایید ایمیل</th>
            <th scope="col">وضعیت کاربر</th>
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
                        <ul style="list-style: none;">
                            @foreach($row->roles as $rows)
                                <li>
                                    <span class="badge bg-secondary">{{$rows->name}}</span>
                                    <span class="badge bg-danger" onclick="event.preventDefault();document.getElementById('trash-{{$rows->id}}').submit()" title="حذف"><i class="fa-duotone fa-minus-circle"></i></span>
                                </li>
                                <form id="trash-{{$rows->id}}" action="{{ route('users.remove.roles', ['userId' => $row->id, 'roleId' => $rows->id]) }}" method="POST">@csrf @method('DELETE')</form>
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        @if( !empty($row->email_verified_at))
                            <span class="badge bg-success"><i class="fa-duotone fa-check"></i> تایید شده </span>
                        @else
                            <span class="badge bg-danger"><i class="fa-duotone fa-xmark"></i> تایید نشده </span>
                        @endif
                    </td>
                    <td class="text-center">
                        <span class="badge text-bg-{{$row->last_seen >= now()->subMinute(2) ? 'success' : 'danger'}}">
                            {{$row->last_seen >= now()->subMinute(2) ? 'آنلاین' : 'آفلاین'}}
                        </span>
                    </td>
                    <td>{{$row->getCreateAtShamsi()}}</td>
                    <td>
                        <a href="{{ route('users.edit', $row->id) }}" type="button" class="btn btn-secondary btn-sm"><i class="fa-duotone fa-edit"></i> ویرایش </a>
                        <a href="{{ route('users.add.roles', $row->id) }}" type="button" class="btn btn-secondary btn-sm"><i class="fa-duotone fa-lock"></i> افزودن دسترسی </a>
                        <button type="button" class="btn btn-danger btn-sm" onclick="event.preventDefault();document.getElementById('trash-{{$row->id}}').submit()"><i class="fa-duotone fa-trash"></i> حذف </button>
                        <form id="trash-{{$row->id}}" action="{{ route('users.destroy', $row->id) }}" method="POST">@csrf @method('DELETE')</form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$users->links()}}
</x-Admin::AdminLayout>
