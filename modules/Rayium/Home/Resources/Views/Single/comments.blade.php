<section class="card mt-3 mb-3 border-0 rounded-4">
    <div class="text-center mt-3 fw-bold">
        نظرات {{ $post->activeComments()->count() }}
    </div>
    <div class="card-body">

        @foreach($post->activeComments()->latest()->get() as $row)
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">

                    <div class="mb-4">
                        <div class="card rounded-4">
                            <div class="card-body p-4">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img class="rounded-circle shadow-1-strong me-3"
                                             src="{{asset('img/1.jpg')}}" alt="avatar" width="65"
                                             height="65" />
                                    </div>
                                    <div class="col-md-10">
                                        <h5>{{$row->user->name}}</h5>
                                        <p class="small">{{$row->created_at->diffForHumans()}}</p>
                                    </div>
                                </div>

                                <div class="mt-3">

                                    <p>
                                        {{$row->body}}
                                    </p>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#" class="link-muted text-dark text-decoration-none"><i class="fa-duotone fa-reply me-1"></i> پاسخ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @foreach($row->comments as $rows)
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-12">

                                <div class="mb-4">
                                    <div class="card rounded-4">
                                        <div class="card-body p-4">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <img class="rounded-circle shadow-1-strong me-3"
                                                         src="{{asset('img/1.jpg')}}" alt="avatar" width="65"
                                                         height="65" />
                                                </div>
                                                <div class="col-md-10">
                                                    <h5>{{$row->user->name}}</h5>
                                                    <p class="small">{{$row->created_at->diffForHumans()}}</p>
                                                </div>
                                            </div>

                                            <div class="mt-3">

                                                <p>
                                                    {{$row->body}}
                                                </p>

                                                <div class="d-flex justify-content-between align-items-center">
                                                    <a href="#" class="link-muted text-dark text-decoration-none"><i class="fa-duotone fa-reply me-1"></i> پاسخ</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        @endforeach

        @include('Home::Single.CommentForm')

    </div>
</section>
