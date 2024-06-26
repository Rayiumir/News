<x-Admin::AdminLayout>
    <div class="col-md-8 offset-md-2">
        <div class="card rounded-4 mb-5">
            <div class="card-body">
                <div class="text-center">
                    <div class="col-md-3 offset-md-4">
                        <figure>
                            <img src="{{asset('storage/images/' . auth()->user()->imagePath)}}" class="img-fluid rounded-5" alt="" style="width: 200px; margin: 10px auto; border-radius: 15px">
                        </figure>
                    </div>
                </div>
                <form class="row g-3" action="{{ route('update.profile') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="col-md-6">
                        <label for="input1" class="form-label">نام و نام خانوادگی : </label>
                        <input type="text" name="name" class="form-control rounded-5" id="input1" value="{{ auth()->user()->name }}">
                    </div>
                    <div class="col-md-6">
                        <label for="input1" class="form-label">ایمیل : </label>
                        <input type="email" name="email" class="form-control rounded-5" id="input1" value="{{ auth()->user()->email }}">
                    </div>
                    <div class="col-md-6">
                        <label for="input1" class="form-label">رمز عبور : </label>
                        <input type="password" name="password" class="form-control rounded-5" id="input1">
                    </div>
                    <div class="col-md-6">
                        <label for="input1" class="form-label">آدرس تلگرام : </label>
                        <input type="text" name="telegram" class="form-control rounded-5" id="input1" value="{{ auth()->user()->telegram }}">
                    </div>
                    <div class="col-md-6">
                        <label for="input1" class="form-label">آدرس لینکداین : </label>
                        <input type="text" name="linkedin" class="form-control rounded-5" id="input1" value="{{ auth()->user()->linkedin }}">
                    </div>
                    <div class="col-md-6">
                        <label for="input1" class="form-label">آدرس اینستاگرام : </label>
                        <input type="text" name="instagram" class="form-control rounded-5" id="input1" value="{{ auth()->user()->instagram }}">
                    </div>
                    <div class="col-md-6">
                        <label for="input1" class="form-label">آدرس توییتر : </label>
                        <input type="text" name="twitter" class="form-control rounded-5" id="input1" value="{{ auth()->user()->twitter }}">
                    </div>
                    <div class="col-md-6">
                        <label for="input1" class="form-label">آپلود عکس : </label>
                        <input type="file" name="image" class="form-control rounded-5" id="input1">
                    </div>
                    <div class="col-md-12">
                        <label for="input1" class="form-label">درباره نمایه : </label>
                        <textarea type="text" name="bio" class="form-control rounded-5" rows="5" id="input1">{{ auth()->user()->bio }}</textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary rounded-5">به روز رسانی نمایه</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-Admin::AdminLayout>
