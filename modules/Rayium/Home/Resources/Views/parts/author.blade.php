<x-Home::HomeLayout>
    @include('Home::parts.header')
    @include('Home::parts.special', ['specials' => $homeRepo])
    <div class="row">
        @include('Home::parts.sidebarRight')
        <section class="col-md-6">
            تست
        </section>
        @include('Home::parts.sidebarLeft')
    </div>
    @include('Home::parts.videos')
    @include('Home::parts.footer')
</x-Home::HomeLayout>
