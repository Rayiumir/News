<x-Admin::AdminLayout>
    <x-slot name="title">
        - ایجاد کاربر
    </x-slot>
    <div class="col-md-6 offset-3">
        <div class="card rounded-4">
            <h1 class="fs-4 fw-bold text-center mt-3"><i class="fa-duotone fa-list-tree"></i> ایجاد دسته بندی </h1>
            <div class="card-body">
                <form action="{{ route('category.store') }}" method="POST">
                    @csrf
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
                        <label for="Input3" class="form-label">توضیحات (اجباری نیست)</label>
                        <textarea rows="3" name="description" class="form-control rounded-5 @error('description') is-invalid @enderror" id="Input3"></textarea>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Input4" class="form-label">وضعیت دسته بندی</label>
                        <select type="text" name="status" class="form-select rounded-5 @error('status') is-invalid @enderror" id="Input4">
                            @foreach(\modules\Rayium\Category\Models\Category::$statuses as $row)
                                <option value="{{$row}}">{{$row}}</option>
                            @endforeach
                        </select>
                        @error('status')
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Input5" class="form-label">زیر دسته (اجباری نیست)</label>
                        <select type="text" name="parent_id" class="form-select rounded-5 @error('parent_id') is-invalid @enderror" id="Input5">
                            <option value="">--</option>
                            @foreach($category as $row)
                                <option value="{{$row->id}}">{{$row->title}}</option>
                            @endforeach
                        </select>
                        @error('parent_id')
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
