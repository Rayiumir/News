<section class="card mt-3 mb-3 border-0 rounded-4">
    {{ $post->activeComments()->count() }}
    <div class="card-body">

        @foreach($post->activeComments()->latest()->get() as $row)
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">

                    <div class="d-flex flex-start mb-4">
                        <img class="rounded-circle shadow-1-strong me-3"
                             src="{{$row->user->image()}}" alt="avatar" width="65"
                             height="65" />
                        <div class="card rounded-4">
                            <div class="card-body p-4">
                                <div class="">
                                    <h5>{{$row->user->name}}</h5>
                                    <p class="small">{{$row->created_at->diffForHumans()}}</p>
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

                                <div class="d-flex flex-start mb-4">
                                    <img class="rounded-circle shadow-1-strong me-3"
                                         src="{{$rows->user->image()}}" alt="avatar" width="65"
                                         height="65" />
                                    <div class="card rounded-4">
                                        <div class="card-body p-4">
                                            <div class="">
                                                <h5>{{$rows->user->name}}</h5>
                                                <p class="small">{{$rows->created_at->diffForHumans()}}</p>
                                                <p>
                                                    {{$rows->body}}
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
