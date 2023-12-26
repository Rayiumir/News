<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading text-center">میزکار ارکیده</div>
    <div style="width: 250px">
        <div class="p-3">
            <div class="text-center">
                <a href="{{ route('auth.logout') }}" type="button" class="btn btn-danger rounded-5 btn-sm"><i class="fa-duotone fa-sign-out"></i> خروج</a>
            </div>
            <div class="d-grid gap-2">
                @foreach(config('AdminConfig.menus') as $row)
                    <a href="{{$row['url']}}" type="button" class="btn btn-light mt-3 mb-2"><i class="fa-duotone {{$row['icon']}}"></i> {{$row['title']}} </a>
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
