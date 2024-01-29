<x-Home::HomeLayout>
    {{-- سربرگ --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary rounded-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{asset('img/n.png')}}" style="width: 50px">
            </a>
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
    <div class="row">
        <aside class="col-md-3">
            <div class="card border-0 rounded-4 mb-3">
                <div class="card-body">
                    <i class="fa-duotone fa-list-tree"></i> دسته بندی ها

                    <ul>
                        <li>لورم ایپسوم</li>
                        <li>لورم ایپسوم</li>
                        <li>لورم ایپسوم</li>
                        <li>لورم ایپسوم</li>
                        <li>لورم ایپسوم</li>
                        <li>لورم ایپسوم</li>
                        <li>لورم ایپسوم</li>
                    </ul>
                </div>
            </div>
        </aside>
        <section class="col-md-6">
            <article class="card border-0 rounded-4 mb-3">
                <div class="card-body">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="{{asset('img/1.jpg')}}" class="img-fluid rounded-4" alt="...">
                        </div>
                        <div class="col-md-9">
                            <div class="p-2">
                                <h6 class="fs-5 fw-bold">لورم ایپسوم متن ساختگی</h6>
                                <p class="text-muted">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>

                                <div class="float-end">
                                    <button type="button" class="btn btn-primary btn-sm rounded-5"><i class="fa-duotone fa-eye"></i> مشاهده </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </article>

            <article class="card border-0 rounded-4 mb-3">
                <div class="card-body">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="{{asset('img/1.jpg')}}" class="img-fluid rounded-4" alt="...">
                        </div>
                        <div class="col-md-9">
                            <div class="p-2">
                                <h6 class="fs-5 fw-bold">لورم ایپسوم متن ساختگی</h6>
                                <p class="text-muted">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>

                                <div class="float-end">
                                    <button type="button" class="btn btn-primary btn-sm rounded-5"><i class="fa-duotone fa-eye"></i> مشاهده </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </article>
            <article class="card border-0 rounded-4 mb-3">
                <div class="card-body">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="{{asset('img/1.jpg')}}" class="img-fluid rounded-4" alt="...">
                        </div>
                        <div class="col-md-9">
                            <div class="p-2">
                                <h6 class="fs-5 fw-bold">لورم ایپسوم متن ساختگی</h6>
                                <p class="text-muted">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>

                                <div class="float-end">
                                    <button type="button" class="btn btn-primary btn-sm rounded-5"><i class="fa-duotone fa-eye"></i> مشاهده </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </article>
            <article class="card border-0 rounded-4 mb-3">
                <div class="card-body">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="{{asset('img/1.jpg')}}" class="img-fluid rounded-4" alt="...">
                        </div>
                        <div class="col-md-9">
                            <div class="p-2">
                                <h6 class="fs-5 fw-bold">لورم ایپسوم متن ساختگی</h6>
                                <p class="text-muted">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>

                                <div class="float-end">
                                    <button type="button" class="btn btn-primary btn-sm rounded-5"><i class="fa-duotone fa-eye"></i> مشاهده </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </article>
        </section>
        <aside class="col-md-3">

            <div class="card border-0 rounded-4 mb-3">
                <div class="card-body">
                    <i class="fa-duotone fa-search"></i> جستجو
                    <input type="text" class="form-control rounded-5 mt-2" placeholder="جستجو در سایت ...">
                </div>
            </div>

            <div class="card border-0 rounded-4 mb-3">
                <div class="card-body">
                    <i class="fa-duotone fa-pen-nib mb-3"></i> نوشته های اخیر

                    <article class="card rounded-4 mb-2">
                        <div class="p-2">
                            <a href="#" class="text-decoration-none text-dark">لورم ایپسوم <span class="float-end"><i class="fa-duotone fa-arrow-left"></i> </span></a>
                        </div>
                    </article>

                    <article class="card rounded-4 mb-2">
                        <div class="p-2">
                            <a href="#" class="text-decoration-none text-dark">لورم ایپسوم <span class="float-end"><i class="fa-duotone fa-arrow-left"></i> </span></a>
                        </div>
                    </article>

                    <article class="card rounded-4 mb-2">
                        <div class="p-2">
                            <a href="#" class="text-decoration-none text-dark">لورم ایپسوم <span class="float-end"><i class="fa-duotone fa-arrow-left"></i> </span></a>
                        </div>
                    </article>

                    <article class="card rounded-4 mb-2">
                        <div class="p-2">
                            <a href="#" class="text-decoration-none text-dark">لورم ایپسوم <span class="float-end"><i class="fa-duotone fa-arrow-left"></i> </span></a>
                        </div>
                    </article>

                    <article class="card rounded-4 mb-2">
                        <div class="p-2">
                            <a href="#" class="text-decoration-none text-dark">لورم ایپسوم <span class="float-end"><i class="fa-duotone fa-arrow-left"></i> </span></a>
                        </div>
                    </article>

                    <article class="card rounded-4 mb-2">
                        <div class="p-2">
                            <a href="#" class="text-decoration-none text-dark">لورم ایپسوم <span class="float-end"><i class="fa-duotone fa-arrow-left"></i> </span></a>
                        </div>
                    </article>

                </div>
            </div>

            <div class="card border-0 rounded-4 mb-3">
                <div class="card-body">
                    <i class="fa-duotone fa-comments mb-3"></i> نظرات کاربران

                    <article class="card rounded-4 mb-2">
                        <div class="p-2">
                            <span>رایموند میگه : </span>
                            <br>
                            <a href="#" class="text-decoration-none text-dark">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </a>
                        </div>
                    </article>

                    <article class="card rounded-4 mb-2">
                        <div class="p-2">
                            <span>رایموند میگه : </span>
                            <br>
                            <a href="#" class="text-decoration-none text-dark">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </a>
                        </div>
                    </article>

                    <article class="card rounded-4 mb-2">
                        <div class="p-2">
                            <span>رایموند میگه : </span>
                            <br>
                            <a href="#" class="text-decoration-none text-dark">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </a>
                        </div>
                    </article>

                    <article class="card rounded-4 mb-2">
                        <div class="p-2">
                            <span>رایموند میگه : </span>
                            <br>
                            <a href="#" class="text-decoration-none text-dark">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </a>
                        </div>
                    </article>

                </div>
            </div>

        </aside>
    </div>
    <section class="mt-3 mb-3">
        <div class="card border-0 rounded-4">
            <div class="card-body">
                <i class="fa-duotone fa-video"></i> ویدئو های خبری

                <div class="row mt-3">
                    <div class="col-md-3 mb-2">
                        <div class="card rounded-4">
                            <div class="card-body">
                                <figure>
                                    <img src="{{asset('img/1.jpg')}}" class="img-fluid rounded-4">
                                </figure>
                                <h1 class="fs-5 fw-bold">لورم ایپسورم</h1>
                                <div class="d-grid gep-2">
                                    <button type="button" class="btn btn-secondary btn-sm rounded-4 mt-2"><i class="fa-duotone fa-eye"></i> مشاهده ویدئو </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-2">
                        <div class="card rounded-4">
                            <div class="card-body">
                                <figure>
                                    <img src="{{asset('img/1.jpg')}}" class="img-fluid rounded-4">
                                </figure>
                                <h1 class="fs-5 fw-bold">لورم ایپسورم</h1>
                                <div class="d-grid gep-2">
                                    <button type="button" class="btn btn-secondary btn-sm rounded-4 mt-2"><i class="fa-duotone fa-eye"></i> مشاهده ویدئو </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-2">
                        <div class="card rounded-4">
                            <div class="card-body">
                                <figure>
                                    <img src="{{asset('img/1.jpg')}}" class="img-fluid rounded-4">
                                </figure>
                                <h1 class="fs-5 fw-bold">لورم ایپسورم</h1>
                                <div class="d-grid gep-2">
                                    <button type="button" class="btn btn-secondary btn-sm rounded-4 mt-2"><i class="fa-duotone fa-eye"></i> مشاهده ویدئو </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-2">
                        <div class="card rounded-4">
                            <div class="card-body">
                                <figure>
                                    <img src="{{asset('img/1.jpg')}}" class="img-fluid rounded-4">
                                </figure>
                                <h1 class="fs-5 fw-bold">لورم ایپسورم</h1>
                                <div class="d-grid gep-2">
                                    <button type="button" class="btn btn-secondary btn-sm rounded-4 mt-2"><i class="fa-duotone fa-eye"></i> مشاهده ویدئو </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-2">
                        <div class="card rounded-4">
                            <div class="card-body">
                                <figure>
                                    <img src="{{asset('img/1.jpg')}}" class="img-fluid rounded-4">
                                </figure>
                                <h1 class="fs-5 fw-bold">لورم ایپسورم</h1>
                                <div class="d-grid gep-2">
                                    <button type="button" class="btn btn-secondary btn-sm rounded-4 mt-2"><i class="fa-duotone fa-eye"></i> مشاهده ویدئو </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-2">
                        <div class="card rounded-4">
                            <div class="card-body">
                                <figure>
                                    <img src="{{asset('img/1.jpg')}}" class="img-fluid rounded-4">
                                </figure>
                                <h1 class="fs-5 fw-bold">لورم ایپسورم</h1>
                                <div class="d-grid gep-2">
                                    <button type="button" class="btn btn-secondary btn-sm rounded-4 mt-2"><i class="fa-duotone fa-eye"></i> مشاهده ویدئو </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-2">
                        <div class="card rounded-4">
                            <div class="card-body">
                                <figure>
                                    <img src="{{asset('img/1.jpg')}}" class="img-fluid rounded-4">
                                </figure>
                                <h1 class="fs-5 fw-bold">لورم ایپسورم</h1>
                                <div class="d-grid gep-2">
                                    <button type="button" class="btn btn-secondary btn-sm rounded-4 mt-2"><i class="fa-duotone fa-eye"></i> مشاهده ویدئو </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-2">
                        <div class="card rounded-4">
                            <div class="card-body">
                                <figure>
                                    <img src="{{asset('img/1.jpg')}}" class="img-fluid rounded-4">
                                </figure>
                                <h1 class="fs-5 fw-bold">لورم ایپسورم</h1>
                                <div class="d-grid gep-2">
                                    <button type="button" class="btn btn-secondary btn-sm rounded-4 mt-2"><i class="fa-duotone fa-eye"></i> مشاهده ویدئو </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <footer class="card border-0 rounded-4 mt-3 mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <i class="fa-duotone fa-user-tie"></i> درباره ما
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. </p>
                </div>
                <div class="col-md-3">
                    <i class="fa-duotone fa-link"></i> پیوند های مفید
                    <ul>
                        <li>تست</li>
                        <li>تست</li>
                        <li>تست</li>
                        <li>تست</li>
                        <li>تست</li>
                        <li>تست</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <i class="fa-duotone fa-share"></i>  راه های ارتباطی
                    <ul>
                        <li><i class="fa-duotone fa-location"></i> آدرس : تهران </li>
                        <li><i class="fa-duotone fa-at"></i> ایمیل : info@gmail.com</li>
                        <li><i class="fa-duotone fa-phone"></i> شماره تماس : 021000000 </li>
                        <li><i class="fa-duotone fa-clock"></i> ساعت اداری : 8 الی 17 بعد از ظهر </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</x-Home::HomeLayout>
