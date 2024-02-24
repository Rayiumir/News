<section class="card mt-3 mb-3 border-0 rounded-4">
    <div class="card-body">
        {{$post->comments->count()}} نظرات
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <div class="d-flex flex-start mb-4">
                    <img class="rounded-circle shadow-1-strong me-3"
                         src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" alt="avatar" width="65"
                         height="65" />
                    <div class="card rounded-4">
                        <div class="card-body p-4">
                            <div class="">
                                <h5>رایموند</h5>
                                <p class="small">۳ ساعت پیش</p>
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                                </p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="link-muted text-dark text-decoration-none"><i class="fa-duotone fa-reply me-1"></i> پاسخ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-start">
                    <img class="rounded-circle shadow-1-strong me-3"
                         src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(31).webp" alt="avatar" width="65"
                         height="65" />
                    <div class="card rounded-4">
                        <div class="card-body p-4">
                            <div class="">
                                <h5>سارا</h5>
                                <p class="small">۵ ساعت پیش</p>
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
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

        <div class="card mt-3 rounded-4">
            <div class="card-body">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="input1" class="form-label">نام : </label>
                        <input type="text" class="form-control rounded-4" id="input1">
                    </div>
                    <div class="col-md-6">
                        <label for="input2" class="form-label">ایمیل : </label>
                        <input type="email" class="form-control rounded-4" id="input2">
                    </div>
                    <div class="col-12">
                        <label for="textarea" class="form-label">متن نظر : </label>
                        <textarea type="text" class="form-control rounded-4" id="textarea" rows="3" placeholder="متن نظر ..."></textarea>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary rounded-5"><i class="fa-duotone fa-send"></i> ثبت نظر </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>
