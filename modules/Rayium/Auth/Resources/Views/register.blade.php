<x-Auth::HomeLayout>
    <section class="col-md-6 offset-3 mt-5">
        <div class="card border-0 rounded-4">
            <div class="card-body">
                <div class="text-center">
                    <i class="fa-duotone fa-user-plus fa-3x mb-2"></i>
                </div>
                <h1 class="text-center fs-4 fw-bold">عضویت در سایت</h1>
                <form action="{{ route('auth.register.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="Input1" class="form-label">نام و نام خانوادگی</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror rounded-5" id="Input1">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Input2" class="form-label">ایمیل</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror rounded-5" id="Input2">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Input3" class="form-label">رمز عبور</label>
                        <input type="password" name="password" class="form-control @error('email') is-invalid @enderror rounded-5" id="Input3">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary rounded-5"><i class="fa-duotone fa-send"></i> ثبت نام </button>
                </form>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <a href="{{ route('auth.login') }}" class="text-decoration-none text-dark">قبلا ثبت نام کردید؟ وارد شوید</a>
            </div>
        </div>
    </section>
</x-Auth::HomeLayout>
