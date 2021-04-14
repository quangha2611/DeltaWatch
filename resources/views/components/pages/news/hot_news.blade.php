<div class="content-top row" style="padding: 0 15px">
    <div class="col-xl-9 col-lg-9 col-sm-12">
        <div class="row">
            <div class="post-big col-xl-6 col-lg-6 col-sm-6 pl-0">
                <div class="tag-date">{{ date_format($posts[0]->created_at, "d/m/Y") }}</div>
                <div class="post-big_img">
                    <img src="{{ asset('storage/'. $posts[0]->image) }}" alt="" width="100%">
                </div>
                <div class="post-big_des">
                    <p class="des_author">Người đăng: {{ $posts[0]->author->name }}</p>
                    <a href="#" title="{{ $posts[0]->title }}">{{ $posts[0]->title }}</a>
                </div>
            </div>
            <div class="post-thumbnail col-xl-6 col-lg-6 col-sm-6">
                <div class="d-flex">
                    <div class="post-big col-xl-5 col-lg-5 col-sm-4 col-4 pl-0 pr-0">
                        <div class="tag-date">{{ date_format($posts[0]->created_at, "d/m/Y") }}</div>
                        <div class="post-big_img">
                            <img src="{{ asset('storage/'. $posts[1]->image) }}" alt="" width="100%">
                        </div>
                    </div>
                    <h5 class="col-xl-7 col-lg-7 col-sm-8 col-8 pr-0">{{ $posts[2]->title }}</h5>
                </div>
                <ul class="lis-post">
                    @for ($i = 0; $i < 6; $i++)
                        <li><a href="#">{{ $posts[$i]->title }}</a></li>
                    @endfor
                </ul>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-3 col-sm-12">
        <div class="list-category">
            <div class="title">
                Danh mục tin
            </div>
            <ul class="">
                @for ($i = 0; $i < 4; $i++)
                <li class="menu-item">
                    <a href="#">{{ $posts[$i]->title }}</a>
                </li>
                @endfor
            </ul>
        </div>
    </div>
</div>
