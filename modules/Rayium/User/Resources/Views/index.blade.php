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
                    <td class="text-center">
                        @if(Cache::has('is_online' . $row->id))
                            <span class="text-success"><i class="fas fa-circle"></i> آنلاین</span>
                        @else
                            <span class="text-secondary"><i class="fas fa-circle"></i> آفلاین</span>
                        @endif
                    </td>
                    <td>{{$row->getCreateAtShamsi()}}</td>
                    <td>
                        <a href="{{ route('users.edit', $row->id) }}" type="button" class="btn btn-secondary btn-sm"><i class="fa-duotone fa-edit"></i> ویرایش </a>
                        <button type="button" class="btn btn-danger btn-sm" onclick="event.preventDefault();document.getElementById('trash-{{$row->id}}').submit()"><i class="fa-duotone fa-trash"></i> حذف </button>
                        <form id="trash-{{$row->id}}" action="{{ route('users.destroy', $row->id) }}" method="POST">@csrf @method('DELETE')</form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$users->links()}}
</x-Admin::AdminLayout>
