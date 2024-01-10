<x-Admin::AdminLayout>
    <x-slot name="title">
        - ویرایش دسترسی
    </x-slot>
    <div class="col-md-6 offset-3">
        <div class="card rounded-4">
            <h1 class="fs-4 fw-bold text-center mt-3"><i class="fa-duotone fa-list-tree"></i> ایجاد دسته بندی </h1>
            <div class="card-body">
                <form action="{{ route('roles.update', $role->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                        <label for="Input1" class="form-label">عنوان</label>
                        <input type="text" name="name" class="form-control rounded-5 @error('name') is-invalid @enderror" id="Input1" value="{{ $role->name }}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3 form-check">
                        @foreach($permissions as $row)
                            <div>
                                <input type="checkbox" class="form-check-input" id="permissions[{{$row->name}}]" name="permissions[{{$row->name}}]" value="{{$row->name}}" @if($role->hasPermissionTo($row)) checked @endif>
                                <label class="form-check-label" for="permissions[{{$row->name}}]">@lang($row->name)</label>
                            </div>
                        @endforeach
                        @error('permissions')
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary rounded-5"><i class="fa-duotone fa-send"></i> ویرایش دسته جدید </button>
                </form>
            </div>
        </div>
    </div>
</x-Admin::AdminLayout>

