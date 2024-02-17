{{-- خبرهای دسته بندی --}}
<section class="col-md-6">
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
                            <i class="fa-duotone fa-user"></i> {{$row->user->name}}
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
{{-- پایان دسته بندی --}}
