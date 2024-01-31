{{-- ابزارک سمت چپ --}}
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
            @foreach($homeRepo->getNewPostSidebars() as $row)
            <article class="card rounded-4 mb-2">
                <div class="p-2">
                    <a href="#" class="text-decoration-none text-dark"> {{$row->title}} <span class="float-end"><i class="fa-duotone fa-arrow-left"></i> </span></a>
                </div>
            </article>
            @endforeach
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
{{-- پایان ابزارک سمت چپ --}}
