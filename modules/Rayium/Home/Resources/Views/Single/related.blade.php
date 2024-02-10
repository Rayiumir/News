<section class="card border-0 rounded-4 mt-2 mb-2">
    <div class="card-body">
        <i class="fa-duotone fa-random"></i> نوشته های مرتبط
        <ul class="mt-2 mb-2">
            @foreach($relatedPost as $post)
                <li class="card rounded-4 mb-2"><a href="{{ $post->path() }}" class="text-decoration-none text-dark"><span class="ms-2">{{\Illuminate\Support\Str::limit($post->title, 25)}}</span></a> </li>
            @endforeach
        </ul>
    </div>
</section>
