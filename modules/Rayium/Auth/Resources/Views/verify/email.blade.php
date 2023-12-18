<x-Auth::HomeLayout>
    <x-slot name="title">
        - تایید ایمیل کاربری
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
                    <i class="fa-duotone fa-mailbox fa-3x mb-2"></i>
                </div>
                <h1 class="text-center fs-4 fw-bold">تایید ایمیل کاربری</h1>
                <p>یک پیوند تایید حساب کاربری به ایمیل  {{ auth()->user()->email }}  ارسال شده است. لطفا بر روی پیوند در ایمیل خود کلیک کنید.</p>

                <div class="d-grid gap-2 mt-3">
                    <a href="{{ route('verify.resend') }}" class="btn btn-primary rounded-5" type="button">ارسال دوباره پیوند برای ایمیل</a>
                </div>
            </div>
        </div>
        <div class="mt-3">
            <a href="#" onclick="event.preventDefault();document.getElementById('verify-resend').submit()" class="text-decoration-none text-dark">بارگشت به ورود</a>
            <form action="{{ route('verify.resend') }}" method="POST" id="verify-resend">
                @csrf
            </form>
        </div>
    </section>
</x-Auth::HomeLayout>
