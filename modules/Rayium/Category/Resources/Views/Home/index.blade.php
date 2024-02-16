<x-Home::HomeLayout>
    @include('Home::parts.header')
    <div class="row mt-3">
        @include('Home::parts.sidebarRight')
        @include('Category::Home.Single.posts')
        @include('Home::parts.sidebarLeft')
    </div>
    @include('Home::parts.videos')
    @include('Home::parts.footer')
</x-Home::HomeLayout>
