<x-Admin::AdminLayout>
    <x-slot name="title">
        - ایجاد نوشته
    </x-slot>
    <div class="col-md-8 offset-2">
        <div class="card rounded-4">
            <h1 class="fs-4 fw-bold text-center mt-3"><i class="fa-duotone fa-plus"></i> ایجاد نوشته </h1>
            <div class="card-body">
                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="mb-3">
                            <label for="Input1" class="form-label">عنوان</label>
                            <input type="text" name="title" class="form-control rounded-5 @error('title') is-invalid @enderror" id="Input1">
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Input2" class="form-label">کلمات کلیدی (اجباری نیست)</label>
                            <input type="text" name="keywords" class="form-control rounded-5 @error('keywords') is-invalid @enderror" id="Input2">
                            @error('keywords')
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Input3" class="form-label">توضیح کوتاه</label>
                            <textarea rows="3" name="description" class="form-control rounded-4 @error('description') is-invalid @enderror" id="Input3"></textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="Input4" class="form-label">وضعیت نوشته</label>
                            <select type="text" name="status" class="form-select rounded-5 @error('status') is-invalid @enderror" id="Input4">
                                <option value="">انتخاب کنید ...</option>
                                @foreach(\modules\Rayium\Post\Models\Post::$statuses as $row)
                                    <option value="{{$row}}">@lang($row)</option>
                                @endforeach
                            </select>
                            @error('status')
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="Input5" class="form-label">نوع نوشته</label>
                            <select type="text" name="type" class="form-select rounded-5 @error('type') is-invalid @enderror" id="Input5">
                                <option value="">انتخاب کنید ...</option>
                                @foreach(\modules\Rayium\Post\Models\Post::$types as $row)
                                    <option value="{{$row}}">@lang($row)</option>
                                @endforeach
                            </select>
                            @error('type')
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="Input6" class="form-label">دسته بندی</label>
                            <select type="text" name="category_id" class="form-select rounded-5 @error('category_id') is-invalid @enderror" id="Input6">
                                <option value="">انتخاب کنید ...</option>
                                @foreach($categories as $row)
                                    <option value="{{$row->id}}">{{$row->title}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="Input7" class="form-label">متن</label>
                        <textarea rows="3" name="body" class="form-control rounded-4 @error('body') is-invalid @enderror" id="Input7"></textarea>
                        @error('body')
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Input8" class="form-label">تصاویر شاخص</label>
                        <input type="file" name="image" class="form-control rounded-5 @error('image') is-invalid @enderror" id="Input8">
                        @error('image')
                        <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary rounded-5"><i class="fa-duotone fa-send"></i> ایجاد دسته جدید</button>
                </form>
            </div>
        </div>
    </div>
</x-Admin::AdminLayout>
