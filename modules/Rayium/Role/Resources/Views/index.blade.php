<x-Admin::AdminLayout>
    <x-slot name="title">
        - لیست دسترسی ها
    </x-slot>
    <a href="{{ route('roles.create') }}" type="button" class="btn btn-primary"><i class="fa-duotone fa-plus"></i> ایجاد دسترسی </a>
    <table class="table table-striped mt-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">عنوان مقام</th>
            <th scope="col">دسترسی های مقام</th>
            <th scope="col" class="text-center">عملیات</th>
        </tr>
        </thead>
        <tbody>
        @foreach($roles as $row)
            <tr>
                <th scope="row">{{$row->id}}</th>
                <td>{{$row->name}}</td>
                <td>
                    @foreach($row->permissions as $rows)
                        <div class="badge bg-secondary">
                            @lang($rows->name)
                        </div>
                    @endforeach
                </td>
                <td class="text-center">
                    <a href="{{ route('roles.edit', $row->id) }}" type="button" class="btn btn-secondary btn-sm"><i class="fa-duotone fa-edit"></i> ویرایش </a>

                    <form id="trash-{{$row->id}}" action="{{ route('roles.destroy', $row->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger btn-sm" onclick="event.preventDefault();document.getElementById('trash-{{$row->id}}').submit()"><i class="fa-duotone fa-trash"></i> حذف </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$roles->links()}}
</x-Admin::AdminLayout>
