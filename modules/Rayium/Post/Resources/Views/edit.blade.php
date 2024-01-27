<x-Admin::AdminLayout>
    <x-slot name="title">
        - ویرایش نوشته
    </x-slot>
    <div class="col-md-8 offset-2">
        <div class="card rounded-4">
            <h1 class="fs-4 fw-bold text-center mt-3"><i class="fa-duotone fa-plus"></i> ویرایش نوشته </h1>
            <div class="card-body">
                <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="mb-3">
                            <label for="Input1" class="form-label">عنوان</label>
                            <input type="text" name="title" class="form-control rounded-5 @error('title') is-invalid @enderror" id="Input1" value="{{$post->title}}">
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Input2" class="form-label">کلمات کلیدی (اجباری نیست)</label>
                            <input type="text" name="keywords" class="form-control rounded-5 @error('keywords') is-invalid @enderror" id="Input2" value="{{$post->keywords}}">
                            @error('keywords')
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Input3" class="form-label">توضیح کوتاه</label>
                            <textarea rows="3" name="description" class="form-control rounded-4 @error('description') is-invalid @enderror" id="Input3">{{$post->description}}</textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="Input4" class="form-label">وضعیت نوشته</label>
                            <select type="text" name="status" class="form-select rounded-5 @error('status') is-invalid @enderror" id="Input4">
                                <option value="">انتخاب کنید ...</option>
                                @foreach(\modules\Rayium\Post\Models\Post::$statuses as $row)
                                    <option @if ($post->status === $row) selected @endif value="{{$row}}">@lang($row)</option>
                                @endforeach
                            </select>
                            @error('status')
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="Input5" class="form-label">نوع نوشته</label>
                            <select type="text" name="type" class="form-select rounded-5 @error('type') is-invalid @enderror" id="Input5">
                                <option value="">انتخاب کنید ...</option>
                                @foreach(\modules\Rayium\Post\Models\Post::$types as $row)
                                    <option @if ($post->type === $row) selected @endif value="{{$row}}">@lang($row)</option>
                                @endforeach
                            </select>
                            @error('type')
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="Input6" class="form-label">دسته بندی</label>
                            <select type="text" name="category_id" class="form-select rounded-5 @error('category_id') is-invalid @enderror" id="Input6">
                                <option value="">انتخاب کنید ...</option>
                                @foreach($categories as $row)
                                    <option @if ($post->category_id === $row->id ) selected @endif value="{{$row->id}}">{{$row->title}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="Input7" class="form-label">امتیاز</label>
                            <select name="score" class="form-select rounded-5 @error('score') is-invalid @enderror" id="Input7">
                                <option value="">انتخاب کنید ...</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>

                            </select>
                            @error('score')
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="Input8" class="form-label">زمان مطالعه</label>
                            <input type="text" name="time_to_read" class="form-control rounded-5 @error('time_to_read') is-invalid @enderror" id="Input8" value="{{$post->time_to_read}}">
                            @error('time_to_read')
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="Input9" class="form-label">متن</label>
                        <textarea rows="3" name="body" class="form-control rounded-4 @error('body') is-invalid @enderror" id="Input9">{{$post->body}}</textarea>
                        @error('body')
                        <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Input10" class="form-label">تصاویر شاخص</label>
                        <input type="file" name="image" class="form-control rounded-5 @error('image') is-invalid @enderror" id="Input10" value="{{$post->image}}">
                        <img src="{{asset('storage/images/' . $post->imagePath)}}" alt="" style="width: 200px; margin: 10px auto; border-radius: 15px">
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
