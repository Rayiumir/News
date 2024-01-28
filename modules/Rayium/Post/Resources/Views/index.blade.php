<x-Admin::AdminLayout>
    <x-slot name="title">
        - لیست نوشته ها
    </x-slot>
    <a href="{{ route('posts.create') }}" type="button" class="btn btn-primary"><i class="fa-duotone fa-plus"></i> ایجاد نوشته جدید </a>
    <table class="table table-striped mt-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">عکس نوشته</th>
            <th scope="col">عنوان نوشته</th>
            <th scope="col">وضعیت</th>
            <th scope="col">نوع نوشته</th>
            <th scope="col">زمان خواندن</th>
            <th scope="col">امتیاز</th>
            <th scope="col">دسته بندی</th>
            <th scope="col">کاربر</th>
            <th scope="col">تاریخ ایجاد</th>
            <th scope="col">عملیات</th>
        </tr>
        </thead>
        <tbody>
            @foreach($posts as $row)
            <tr>
                <th scope="row">{{$row->id}}</th>
                <td><img src="{{asset('storage/images/' . $row->imagePath)}}" style="width: 80px;"></td>
                <td>{{$row->title}}</td>
                <td>
                    <span class="badge bg-{{$row->cssStatus()}}">
                         @lang($row->status)
                    </span>
                </td>
                <td>@lang($row->type)</td>
                <td>{{$row->time_to_read}} دقیقه </td>
                <td>{{$row->score}} امتیاز </td>
                <td>{{$row->category->title}}</td>
                <td>{{$row->user->name}}</td>
                <td>{{$row->getCreateAtShamsi()}}</td>
                <td>
                    <a href="{{ route('posts.edit', $row->id) }}" type="button" class="btn btn-secondary btn-sm"><i class="fa-duotone fa-edit"></i></a>

                    <button type="button" class="btn btn-warning btn-sm" onclick="event.preventDefault();document.getElementById('status-{{$row->id}}').submit()"><i class="fa-duotone fa-arrows-rotate"></i></button>
                    <form id="status-{{$row->id}}" action="{{ route('posts.status', $row->id) }}" method="POST">@csrf @method('PATCH')</form>

                    <button type="button" class="btn btn-danger btn-sm" onclick="event.preventDefault();document.getElementById('trash-{{$row->id}}').submit()"><i class="fa-duotone fa-trash"></i></button>
                    <form id="trash-{{$row->id}}" action="{{ route('posts.destroy', $row->id) }}" method="POST">@csrf @method('DELETE')</form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
{{--    {{$users->links()}}--}}
</x-Admin::AdminLayout>
