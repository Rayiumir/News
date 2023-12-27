<x-Home::HomeLayout>
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
                            <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">میزکار</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-light rounded-5"><i class="fa-duotone fa-sign-in"></i> ورود </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-primary rounded-5"><i class="fa-duotone fa-user-plus"></i> عضویت </a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>
</x-Home::HomeLayout>
