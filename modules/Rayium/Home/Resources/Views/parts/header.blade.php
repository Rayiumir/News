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
                    <a class="nav-link active" aria-current="page" href="{{ route('home.index') }}"><i class="fa-duotone fa-home"></i></a>
                </li>
                @foreach($categories as $row)
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{$row->path()}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{$row->title}}
                    </a>
                    <ul class="dropdown-menu">
                        @foreach($row->subCategories as $rows)
                            <li><a class="dropdown-item" href="{{$rows->path()}}">{{$rows->title}}</a></li>
                        @endforeach
                    </ul>
                </li>
                @endforeach
            </ul>
            <div class="d-flex">
                @if (Route::has('login'))
                    @auth
                        <div class="btn-group me-3">
                            <button type="button" class="btn btn-success dropdown-toggle rounded-4" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-light fa-list"></i> منو کاربری
                            </button>
                            <ul class="dropdown-menu rounded-4">
                                <li><a class="dropdown-item" href="{{ route('admin.index') }}">میزکار </a></li>
                                <li><a class="dropdown-item" href="{{ route('update.profile') }}">پروفایل</a></li>
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
