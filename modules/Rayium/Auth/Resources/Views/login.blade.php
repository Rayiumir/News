<x-Auth::HomeLayout>
    <x-slot name="title">
        - ورود به سایت
    </x-slot>
    <section class="col-md-6 offset-3 mt-5">
        <div class="card border-0 rounded-4">
            <div class="card-body">
                <div class="text-center">
                    <i class="fa-duotone fa-sign-in fa-3x mb-2"></i>
                </div>
                <h1 class="text-center fs-4 fw-bold">ورود به سایت</h1>
                <form action="{{ route('auth.login.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="Input2" class="form-label">ایمیل</label>
                        <input type="email" name="email" class="form-control rounded-5 @error('email') is-invalid @enderror" id="Input2">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Input3" class="form-label">رمز عبور</label>
                        <input type="password" name="password" class="form-control rounded-5 @error('password') is-invalid @enderror" id="Input3">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" name="privacy" class="form-check-input" id="Check1" value="1">
                        <label class="form-check-label" for="Check1">مرا به خاطر بسپار</label>
                    </div>
                    <button type="submit" class="btn btn-primary rounded-5"><i class="fa-duotone fa-send"></i> ورود به سایت </button>
                </form>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <a href="{{ route('auth.register') }}" class="text-decoration-none text-dark">حساب کاربری ندارید؟ ساخت حساب کاربری</a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none text-dark">باز نشانی رمز عبور</a>
            </div>
        </div>
    </section>
</x-Auth::HomeLayout>
