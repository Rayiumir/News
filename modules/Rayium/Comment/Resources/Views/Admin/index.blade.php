<x-Admin::AdminLayout>
    <x-slot name="title">
        - لیست نظرات
    </x-slot>
    <table class="table table-striped mt-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">عنوان نظرات</th>
            <th scope="col">وضعیت</th>
            <th scope="col">برای</th>
            <th scope="col">تعداد پاسخ</th>
            <th scope="col">کاربر</th>
            <th scope="col">تاریخ ساخت</th>
            <th scope="col" class="text-center">عملیات</th>
        </tr>
        </thead>
        <tbody>
        @foreach($comments as $row)
            <tr>
                <th scope="row">{{$row->id}}</th>
                <td>{{$row->title}}</td>
                <td>@lang($row->status)</td>
                <td>{{$row->commentable->title}}</td>
                <td>{{$row->comments->count()}}</td>
                <td>{{$row->user->name}}</td>
                <td>{{$row->getCreateAtShamsi()}}</td>
                <td class="text-center">

                    <form id="status-{{$row->id}}" action="{{ route('comments.status.active', $row->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="button" class="btn btn-warning btn-sm" onclick="event.preventDefault();document.getElementById('status-{{$row->id}}').submit()"><i class="fa-duotone fa-check-circle"></i></button>
                    </form>

                    <form id="status-{{$row->id}}" action="{{ route('comments.status.inactive', $row->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="button" class="btn btn-warning btn-sm" onclick="event.preventDefault();document.getElementById('status-{{$row->id}}').submit()"><i class="fa-duotone fa-minus-circle"></i></button>
                    </form>

                    <form id="trash-{{$row->id}}" action="{{ route('comments.destroy', $row->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger btn-sm" onclick="event.preventDefault();document.getElementById('trash-{{$row->id}}').submit()"><i class="fa-duotone fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-Admin::AdminLayout>
