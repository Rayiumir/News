<div class="card mt-3 rounded-4">
    <div class="card-body">
        <form class="row g-3" action="{{ route('comments.single.store') }}" method="POST">
            @csrf
            <input type="hidden" name="commentable_id" value="{{$post->id}}">
            <input type="hidden" name="commentable_type" value="{{get_class($post)}}">
            <div class="col-12">
                <label for="textarea" class="form-label">متن نظر : </label>
                <textarea type="text" name="body" class="form-control rounded-4 @error('body') is-invalid @enderror" id="textarea" rows="3" placeholder="متن نظر ...">{{old('body')}}</textarea>
                @error('body')
                    <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary rounded-5"><i class="fa-duotone fa-send"></i> ثبت نظر </button>
            </div>
        </form>
    </div>
</div>
