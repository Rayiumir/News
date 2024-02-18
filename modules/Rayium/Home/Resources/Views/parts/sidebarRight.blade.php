{{-- ابزارک سمت راست --}}
<aside class="col-md-3">
    <div class="card border-0 rounded-4 mb-3">
        <div class="card-body">
            <i class="fa-duotone fa-list-tree"></i> دسته بندی ها

            <ul>
                @foreach($homeRepo->getActioveCategories() as $row)
                    <li><a href="#" class="text-decoration-none text-dark"></a>{{$row->title}}</li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="card border-0 rounded-4 mb-3">
        <div class="card-body">
            <i class="fa-duotone fa-eye mb-3"></i> از دست ندهید

            @foreach($homeRepo->getVipPostsOrderByView() as $row)
            <article class="card rounded-4 mb-2">
                <div class="p-2">
                    <a href="#" class="text-decoration-none text-dark">{{$row->title}} <span class="float-end"><i class="fa-duotone fa-arrow-left"></i> </span></a>
                </div>
            </article>
            @endforeach
        </div>
    </div>

    <div class="card border-0 rounded-4 mb-3">
        <div class="card-body">
            <i class="fa-duotone fa-user-group mb-3"></i>  نویسندگان

            @foreach($homeRepo->getAuthorUsers() as $row)
                <article class="card rounded-4 mb-2">
                    <div class="p-2">
                        <a href="#" class="text-decoration-none text-dark">{{$row->name}} <span class="float-end"> {{$row->posts->count()}} </span></a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>

    <div class="card border-0 rounded-4 mb-3">
        <div class="card-body">
            <i class="fa-duotone fa-user-group mb-3"></i> نوشته های پرطرفدار

            @foreach($viewsPosts as $row)
                <article class="card rounded-4 mb-2">
                    <div class="p-2">
                        <a href="{{$row->path()}}" class="text-decoration-none text-dark">{{$row->title}} <span class="float-end"> <i class="fa-duotone fa-arrow-left"></i> </span></a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>

</aside>
{{-- پایان ابزارک سمت راست --}}
