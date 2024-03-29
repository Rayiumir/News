{{-- نوشته ویژه --}}
<section class="mt-3 mb-3">
    <div class="card rounded-4 border-0">
        <div class="card-body">
            <span class="badge bg-secondary rounded-5 fs-6"><i class="fa-duotone fa-crown"></i> نوشته های ویژه </span>
            <div class="mt-2">
                <div class="row">
                    <div class="MultiCarousel" data-items="1,3,5,4" data-slide="1" id="MultiCarousel"  data-interval="1000">
                        <div class="MultiCarousel-inner">
                            @foreach($homeRepo->specials()->get() as $post)
                                <div class="item">
                                    <a href="{{ route('home.single', $post->slug) }}" class="text-decoration-none">
                                        <article class="card rounded-4">
                                            <div class="card-body">
                                                <figure>
                                                    <img src="{{asset('storage/images/' . $post->imagePath)}}" class="img-fluid rounded-4">
                                                </figure>
                                                <h1 class="fs-4 fw-bold">{{$post->title}}</h1>
                                                <div class="row">
                                                    <div class="col"><i class="fa-duotone fa-heart"></i> 1000</div>
                                                    <div class="col text-end"><i class="fa-duotone fa-comment"></i> 50</div>
                                                </div>
                                            </div>
                                        </article>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <button class="btn btn-light leftLst"><i class="fa-duotone fa-arrow-left"></i></button>
                        <button class="btn btn-light rightLst"><i class="fa-duotone fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- پایان نوشته ویژه--}}
