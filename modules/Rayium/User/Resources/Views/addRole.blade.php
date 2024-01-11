<x-Admin::AdminLayout>
    <x-slot name="title">
        - افزودن دسترسی کاربر
    </x-slot>
    <div class="col-md-6 offset-3">
        <div class="card rounded-4">
            <h1 class="fs-4 fw-bold text-center mt-3"><i class="fa-duotone fa-lock"></i> افزودن دسترسی کاربر </h1>
            <div class="card-body">
                <form action="{{ route('users.store.roles', $user_id) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="Input5" class="form-label">دسترسی ها</label>
                        <select type="text" name="role" class="form-select rounded-5 @error('role') is-invalid @enderror" id="Input5">
                            <option value="">انتخاب کنید ...</option>
                            @foreach($roles as $row)
                                <option value="{{$row->name}}">{{$row->name}}</option>
                            @endforeach
                        </select>
                        @error('role')
                        <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary rounded-5"><i class="fa-duotone fa-send"></i> افزودن دسترسی کاربر </button>
                </form>
            </div>
        </div>
    </div>
</x-Admin::AdminLayout>
