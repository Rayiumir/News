<x-Auth::HomeLayout>
    <x-slot name="title">
        - ورود به سایت
    </x-slot>
    <section class="col-md-6 offset-3 mt-5">
        <div class="card border-0 rounded-4">
            <div class="card-body">
                @if(session()->has('message'))
                    <div class="alert alert-success rounded-4" role="alert">
                        <i class="fa-duotone fa-check"></i> {{ session()->get('message') }}
                    </div>
                @endif
                <div class="text-center">
                    <i class="fa-duotone fa-sign-in fa-3x mb-2"></i>
                </div>
                <h1 class="text-center fs-4 fw-bold">تغییر رمز عبور</h1>
                <form action="{{ route('auth.password.reset') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="Input2" class="form-label">رمز عبور</label>
                        <input type="password" name="password" class="form-control rounded-5 @error('password') is-invalid @enderror" id="Input2">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Input3" class="form-label">رمز عبور مجدد</label>
                        <input type="password" name="confirmed" class="form-control rounded-5 @error('password') is-invalid @enderror" id="Input3">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary rounded-5"><i class="fa-duotone fa-send"></i> به روز رسانی رمز عبور </button>
                </form>
            </div>
        </div>
    </section>
</x-Auth::HomeLayout>
