<x-Auth::HomeLayout>
    @include('Home::parts.header')
    <div class="row mt-3">
        @include('Home::parts.sidebarRight')
        @include('Home::Single.posts')
        @include('Home::parts.sidebarLeft')
    </div>
    @include('Home::parts.videos')
    @include('Home::parts.footer')
</x-Auth::HomeLayout>
