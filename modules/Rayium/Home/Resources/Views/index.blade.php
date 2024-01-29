<x-Home::HomeLayout>
    {{-- سربرگ --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary rounded-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">نشان</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">خانه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">پیوند</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            دیگر ...
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>

                </ul>
                <div class="d-flex">
                    @if (Route::has('login'))
                        @auth
                            <div class="btn-group me-3">
                                <button type="button" class="btn btn-success dropdown-toggle rounded-4" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-light fa-list"></i> منو کاربری
                                </button>
                                <ul class="dropdown-menu rounded-4">
                                    <li><a class="dropdown-item" href="{{ route('admin.index') }}">میزکار مدیر کل</a></li>
                                    <li><a class="dropdown-item" href="{{ route('auth.logout') }}">خروج</a></li>
                                </ul>
                            </div>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-primary me-3 rounded-4"><i class="fa-light fa-sign-in"></i> ورود </a>
                            @if (Route::has('register'))
                                <a href="{{ route('auth.register') }}" class="btn btn-primary me-3 rounded-4"><i class="fa-light fa-user-plus"></i> عضویت </a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>
    {{-- پایان سربرگ --}}
    {{-- نوشته ویژه --}}
    <section class="mt-3 mb-3">
        <div class="card rounded-4 border-0">
            <div class="card-body">
                <span class="badge bg-secondary rounded-5 fs-6"><i class="fa-duotone fa-crown"></i> نوشته های ویژه </span>
                <div class="mt-2">
                    <div class="row">
                        <div class="MultiCarousel" data-items="1,3,5,4" data-slide="1" id="MultiCarousel"  data-interval="1000">
                            <div class="MultiCarousel-inner">
                                <div class="item">
                                    <article class="card rounded-4">
                                        <div class="card-body">
                                            <figure>
                                                <img src="{{asset('img/1.jpg')}}" class="img-fluid rounded-4">
                                            </figure>
                                            <h1 class="fs-4 fw-bold">لورم ایپسوم</h1>
                                            <div class="row">
                                                <div class="col"><i class="fa-duotone fa-heart"></i> 1000</div>
                                                <div class="col text-end"><i class="fa-duotone fa-comment"></i> 50</div>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <div class="item">
                                    <article class="card rounded-4">
                                        <div class="card-body">
                                            <figure>
                                                <img src="{{asset('img/1.jpg')}}" class="img-fluid rounded-4">
                                            </figure>
                                            <h1 class="fs-4 fw-bold">لورم ایپسوم</h1>
                                            <div class="row">
                                                <div class="col"><i class="fa-duotone fa-heart"></i> 1000</div>
                                                <div class="col text-end"><i class="fa-duotone fa-comment"></i> 50</div>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <div class="item">
                                    <article class="card rounded-4">
                                        <div class="card-body">
                                            <figure>
                                                <img src="{{asset('img/1.jpg')}}" class="img-fluid rounded-4">
                                            </figure>
                                            <h1 class="fs-4 fw-bold">لورم ایپسوم</h1>
                                            <div class="row">
                                                <div class="col"><i class="fa-duotone fa-heart"></i> 1000</div>
                                                <div class="col text-end"><i class="fa-duotone fa-comment"></i> 50</div>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <div class="item">
                                    <article class="card rounded-4">
                                        <div class="card-body">
                                            <figure>
                                                <img src="{{asset('img/1.jpg')}}" class="img-fluid rounded-4">
                                            </figure>
                                            <h1 class="fs-4 fw-bold">لورم ایپسوم</h1>
                                            <div class="row">
                                                <div class="col"><i class="fa-duotone fa-heart"></i> 1000</div>
                                                <div class="col text-end"><i class="fa-duotone fa-comment"></i> 50</div>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <div class="item">
                                    <article class="card rounded-4">
                                        <div class="card-body">
                                            <figure>
                                                <img src="{{asset('img/1.jpg')}}" class="img-fluid rounded-4">
                                            </figure>
                                            <h1 class="fs-4 fw-bold">لورم ایپسوم</h1>
                                            <div class="row">
                                                <div class="col"><i class="fa-duotone fa-heart"></i> 1000</div>
                                                <div class="col text-end"><i class="fa-duotone fa-comment"></i> 50</div>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <div class="item">
                                    <article class="card rounded-4">
                                        <div class="card-body">
                                            <figure>
                                                <img src="{{asset('img/1.jpg')}}" class="img-fluid rounded-4">
                                            </figure>
                                            <h1 class="fs-4 fw-bold">لورم ایپسوم</h1>
                                            <div class="row">
                                                <div class="col"><i class="fa-duotone fa-heart"></i> 1000</div>
                                                <div class="col text-end"><i class="fa-duotone fa-comment"></i> 50</div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="item">
                                    <article class="card rounded-4">
                                        <div class="card-body">
                                            <figure>
                                                <img src="{{asset('img/1.jpg')}}" class="img-fluid rounded-4">
                                            </figure>
                                            <h1 class="fs-4 fw-bold">لورم ایپسوم</h1>
                                            <div class="row">
                                                <div class="col"><i class="fa-duotone fa-heart"></i> 1000</div>
                                                <div class="col text-end"><i class="fa-duotone fa-comment"></i> 50</div>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <div class="item">
                                    <article class="card rounded-4">
                                        <div class="card-body">
                                            <figure>
                                                <img src="{{asset('img/1.jpg')}}" class="img-fluid rounded-4">
                                            </figure>
                                            <h1 class="fs-4 fw-bold">لورم ایپسوم</h1>
                                            <div class="row">
                                                <div class="col"><i class="fa-duotone fa-heart"></i> 1000</div>
                                                <div class="col text-end"><i class="fa-duotone fa-comment"></i> 50</div>
                                            </div>
                                        </div>
                                    </article>
                                </div>


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
</x-Home::HomeLayout>
