<div class="content-bottom">
    <div class="col-xl-12 col-lg-12 col-sm-12 col-12">
        @foreach ($posts as $post)
            <div class="row post_item">
            <div class="post-big col-xl-4 col-lg-4 col-sm-4 col-4 pl-0">
                <div class="tag-date">{{ $post->created_at }}</div>
                <div class="post-big_img">
                    <img src="{{ asset('images/posts/post' . $post->id . '.jpg') }}" alt="" width="100%">
                </div>
            </div>
            <div class="post_info col-xl-8 col-lg-8 col-sm-8 col-8 pl-0">
                <h5><a href="#">{{ $post->title }}</a></h5>
                <p class="mt-3 pr-5">
                    {{ $post->excerpt }}
                </p>
            </div>
        </div>
        @endforeach
    </div>
</div>
