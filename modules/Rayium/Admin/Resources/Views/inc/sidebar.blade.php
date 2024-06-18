<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading text-center">میزکار راییوم</div>
    <div style="width: 250px">
        <figure class="text-center">
            <img src="{{asset('storage/images/' . auth()->user()->imagePath)}}" class="img-fluid rounded-5" alt="" style="width: 80px; margin: 10px auto; border-radius: 15px">
        </figure>
        <div class="text-center">
            <span class="badge text-bg-primary rounded-5"><i class="fa-duotone fa-user"></i> {{auth()->user()->name}} </span>
            <span class="badge text-bg-success rounded-5">
                <i class="fa-duotone fa-lock"></i>
                @if(auth()->check() && auth()->user()->roles->isNotEmpty())
                    {{ auth()->user()->roles->first()->name }}
                @else
                    کاربر عادی
                @endif
            </span>
        </div>
        <div class="p-3">
            <div class="text-center">
                <a href="{{ route('update.profile') }}" type="button" class="btn btn-danger rounded-5 btn-sm"><i class="fa-duotone fa-gear"></i> پروفایل </a>
                <a href="{{ route('auth.logout') }}" type="button" class="btn btn-danger rounded-5 btn-sm"><i class="fa-duotone fa-sign-out"></i> خروج</a>
            </div>
            <div class="d-grid gap-2 mt-3">
                @foreach(config('AdminConfig.menus') as $row)
                    <a href="{{$row['url']}}" type="button" class="btn btn-light text-start"><i class="fa-duotone {{$row['icon']}}"></i> {{$row['title']}} </a>
                @endforeach
            </div>
            <details class="js-list mt-2 mb-2">
                <summary class="title js-title"> مقالات <span class="icon"></span></summary>
                <div class="content js-content">
                    <ul>
                        <li><a href="#" class="text-decoration-none text-dark">مقالات</a></li>
                        <li><a href="#" class="text-decoration-none text-dark">ایجاد نوشته</a></li>
                    </ul>
                </div>
            </details>
        </div>
    </div>
</div>
<!-- /#sidebar-wrapper -->
