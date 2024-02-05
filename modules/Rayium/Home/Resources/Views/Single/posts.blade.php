<section class="col-md-6">
    <article class="card border-0 rounded-4 mb-3">
        <div class="card-body">
            <figure>
                <img src="{{asset('storage/images/' . $post->imagePath)}}" class="img-thumbnail rounded-4" alt="{{$post->title}}">
            </figure>
            <h6 class="fs-5 fw-bold">{{\Illuminate\Support\Str::limit($post->title, 25)}}</h6>
            <div class="alert alert-light rounded-4 mt-3">{{\Illuminate\Support\Str::limit($post->description, 100)}}</div>
            <p>{{$post->body}}</p>
            <i class="fa-duotone fa-list-tree"></i> {{$post->category->title}}
            <i class="fa-duotone fa-user"></i> {{$post->user->name}}
            <i class="fa-duotone fa-clock"></i> {{$post->created_at->diffForHumans()}}
        </div>
    </article>
</section>
