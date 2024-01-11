<x-Auth::HomeLayout>
    <div class="text-center">
        <h1 style="font-size: 250px">404</h1>
        <p>متاسفیم ... صفحه مورد نظر شما یافت نشد </p>
        <p>برای پیدا کردن محتوای جدید از جستجو زیر استفاده کنید</p>

        <div class="mb-3 col-md-6 offset-3">
            <label for="Input1" class="form-label fw-bold">جستجو در سایت</label>
            <input type="text" class="form-control rounded-5 form-control-lg" id="Input1">
        </div>

        <a href="{{ route('home.index') }}" type="button" class="btn btn-primary rounded-5"><i class="fa-duotone fa-home"></i> بازگشت به صفحه اول </a>
    </div>
</x-Auth::HomeLayout>
