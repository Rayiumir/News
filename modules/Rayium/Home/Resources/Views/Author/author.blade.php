<section class="col-md-6">
    <div class="card border-0 rounded-4">
        <div class="card-body">
            <div class="row">
                <div class="col-md-2">
                    <figure class="imgauthor">
                        <img src="{{asset('img/2.jpg')}}" class="img-fluid rounded-4" alt="" srcset="">
                    </figure>
                </div>
                <div class="col-md-10">
                    <h1 class="fs-5 fw-bold mt-2">{{$author->name}}</h1>
                    <p>تعداد نوشته های منتشر شده : {{$author->posts->count()}}</p>
                    <p>تعداد نظرات منتشر شده : {{$author->comments->count()}}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="alert alert-info rounded-4 text-center mt-3 mb-3 border-0" role="alert">
        همه نوشته های منتشر شده توسط {{$author->name}}
    </div>

    @foreach($posts as $row)
        <article class="card border-0 rounded-4 mb-3">
            <div class="card-body">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset('storage/images/' . $row->imagePath)}}" class="img-thumbnail rounded-4" alt="{{$row->title}}">
                    </div>
                    <div class="col-md-8">
                        <div class="p-2">
                            <h6 class="fs-5 fw-bold">{{\Illuminate\Support\Str::limit($row->title, 25)}}</h6>
                            <p class="text-muted">{{\Illuminate\Support\Str::limit($row->description, 100)}}</p>
                            <i class="fa-duotone fa-list-tree"></i> {{$row->category->title}}
                            <i class="fa-duotone fa-user"></i> <a href="{{$row->user->path()}}" class="text-decoration-none text-dark">{{$row->user->name}}</a>
                            <i class="fa-duotone fa-clock"></i> {{$row->created_at->diffForHumans()}}
                            <div class="float-end">
                                <a href="{{ route('home.single', $row->slug) }}" type="button" class="btn btn-primary btn-sm rounded-5"><i class="fa-duotone fa-eye"></i> مشاهده </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </article>
    @endforeach
    {{$posts->links()}}

</section>
