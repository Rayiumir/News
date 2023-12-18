<x-Auth::HomeLayout>
    <x-slot name="title">
        - باز نشانی رمز عبور
    </x-slot>
    <section class="col-md-6 offset-3 mt-5">
        <div class="card border-0 rounded-4">
            <div class="card-body">
                @if(session()->has('message'))
                    <div class="alert alert-success rounded-4" role="alert">
                        <i class="fa-duotone fa-check"></i> {{ session()->get('message') }}
                    </div>
                @endif
                @if(session()->has('error'))
                    <div class="alert alert-success rounded-4" role="alert">
                        <i class="fa-duotone fa-check"></i> {{ session()->get('error') }}
                    </div>
                @endif
                <div class="text-center">
                    <i class="fa-duotone fa-lock fa-3x mb-2"></i>
                </div>
                <h1 class="text-center fs-4 fw-bold">باز نشانی رمز عبور</h1>
                <form action="{{ route('auth.password.send.email') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">ایمیل</label>
                        <input type="email" name="email" class="form-control rounded-5 @error('email') is-invalid @enderror" id="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="d-grid gap-2 mt-3">
                        <button type="submit" class="btn btn-primary rounded-5"><i class="fa-duotone fa-send"></i> ورود به سایت </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <a href="{{ route('auth.register') }}" class="text-decoration-none text-dark">حساب کاربری ندارید؟ ساخت حساب کاربری</a>
            </div>
            <div class="col">
                <a href="{{ route('auth.login') }}" class="text-decoration-none text-dark">ورود به سایت</a>
            </div>
        </div>
    </section>
</x-Auth::HomeLayout>
