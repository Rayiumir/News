<x-Home::HomeLayout>
    @include('Home::parts.header')
    @include('Home::parts.special')
    <div class="row">
        @include('Home::parts.sidebarRight')
        @include('Home::parts.posts')
        @include('Home::parts.sidebarLeft')
    </div>
    @include('Home::parts.videos')
    @include('Home::parts.footer')
</x-Home::HomeLayout>
