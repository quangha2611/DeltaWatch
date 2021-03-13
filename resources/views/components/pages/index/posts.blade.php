<div class="knowledge">
    <div class="container">
        <div class="row">
            <h2 class="title">
                <span class="big">Kiến thức đồng hồ</span>
                <span class="mini">
                            Những sản phẩm mới nhất, thông minh nhất đã được Delta Watch cập nhật vào bộ sưu tập
                            </span>
            </h2>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-between">
            @foreach ($posts as $post)
                <div class="knowledge_item">
                    <div class="tag-date">25/11/2019</div>
                    <div class="knowledge_item_img">
                        <img src="{{ asset('images/posts/post' . $post->image .'.jpg') }}" alt="" width="100%">
                    </div>
                    <div class="knowledge_item_des">
                        <p class="des_author">Đăng bởi: {{ $post->author->name }}</p>
                        <a href="#" title="Đồng hồ thông minh Apple Watch mới ra mắt">{{ $post->title }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
