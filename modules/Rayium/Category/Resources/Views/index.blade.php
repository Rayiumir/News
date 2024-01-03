<x-Admin::AdminLayout>
    <x-slot name="title">
        - لیست دسته بندی
    </x-slot>
    <a href="{{ route('category.create') }}" type="button" class="btn btn-primary"><i class="fa-duotone fa-plus"></i> ایجاد دسته جدید </a>
    <table class="table table-striped mt-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">عنوان</th>
            <th scope="col">وضعیت</th>
            <th scope="col">زیر دسته</th>
            <th scope="col">کاربر</th>
            <th scope="col">تاریخ ساخت</th>
            <th scope="col">عملیات</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $row)
            <tr>
                <th scope="row">{{$row->id}}</th>
                <td>{{$row->title}}</td>
                <td>@lang($row->status)</td>
                <td>{{$row->getParent()}}</td>
                <td>{{$row->user->name}}</td>
                <td>{{$row->getCreateAtShamsi()}}</td>
                <td>
                    <a href="{{ route('category.edit', $row->id) }}" type="button" class="btn btn-secondary btn-sm"><i class="fa-duotone fa-edit"></i> ویرایش </a>
                    <button type="button" class="btn btn-danger btn-sm" onclick="event.preventDefault();document.getElementById('trash-{{$row->id}}').submit()"><i class="fa-duotone fa-trash"></i> حذف </button>
                    <form id="trash-{{$row->id}}" action="{{ route('category.destroy', $row->id) }}" method="POST">@csrf @method('DELETE')</form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$categories->links()}}
</x-Admin::AdminLayout>
