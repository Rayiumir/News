<x-Admin::AdminLayout>
    <x-slot name="title">
        - ویرایش کاربر
    </x-slot>
    <div class="col-md-6 offset-3">
        <div class="card rounded-4">
            <h1 class="fs-4 fw-bold text-center mt-3"><i class="fa-duotone fa-user-plus"></i> ایجاد کاربر </h1>
            <div class="card-body">
                <form action="{{ route('users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="Input1" class="form-label">نام و نام خانوادگی</label>
                        <input type="text" name="name" class="form-control rounded-5 @error('name') is-invalid @enderror" id="Input1" value="{{$user->name}}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Input2" class="form-label">ایمیل</label>
                        <input type="email" name="email" class="form-control rounded-5 @error('email') is-invalid @enderror" id="Input2" value="{{$user->email}}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Password1" class="form-label">رمز عبور</label>
                        <input type="password" name="password" class="form-control rounded-5 @error('password') is-invalid @enderror" id="Password1" value="{{$user->password}}">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary rounded-5"><i class="fa-duotone fa-send"></i> ثبت نام کاربر جدید </button>
                </form>
            </div>
        </div>
    </div>
</x-Admin::AdminLayout>

