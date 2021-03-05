<div class="content-bottom">
    <div class="col-xl-12 col-lg-12 col-sm-12 col-12">
        @for($i=1; $i<=10; $i++)
            <div class="row post_item">
            <div class="post-big col-xl-4 col-lg-4 col-sm-4 col-4 pl-0">
                <div class="tag-date">25/11/2019</div>
                <div class="post-big_img">
                    <img src="{{ asset('images/posts/post.jpg') }}" alt="" width="100%">
                </div>
            </div>
            <div class="post_info col-xl-8 col-lg-8 col-sm-8 col-8 pl-0">
                <h5><a href="#">Tính năng đo điện tâm đồ được cập nhật vào Apple Watch</a></h5>
                <p class="mt-3 pr-5">
                    TTO - Apple từng công bố sẽ đưa các tính năng về tim mạch vào Apple Watch trong tháng 9, nhưng mới đây mới chính thức được áp dụng.
                    Theo đó, đồn...
                </p>
            </div>
        </div>
        @endfor
    </div>
</div>
