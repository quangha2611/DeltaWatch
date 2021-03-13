<div class="container">
    @if(Session::has('fail_login'))
        <div class="alert alert-danger" role="alert" style="margin: 0 -15px 1rem -15px;">
            {{ Session::get('fail_login') }}
        </div>
    @endif
    @if(Session::has('signup_success'))
        <div class="alert alert-success" role="alert" style="margin: 0 -15px 1rem -15px;">
            {{ Session::get('signup_success') }}
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-xl-4 col-lg-4 col-md-6 content_main">
            <form action="{{ route('post.login.login') }}" method="POST">
                @csrf
                <h4>Đăng nhập</h4>
                <p>Nếu bạn chưa có tài khoản,&nbsp;<a href="{{ route('get.sign-up.index') }}">đăng ký tại đây</a></p>

                <input type="email" name="email" placeholder="Email" class="form-control" value="{{ old('email') }}">
                @error('email')
                    <p class="text-danger text-left">{{ $message }}</p>
                @enderror

                <input type="password" name="password" placeholder="Password" class="form-control">
                @error('password')
                <p class="text-danger text-left">{{ $message }}</p>
                @enderror

                <button type="submit">Đăng nhập</button>
            </form>
        </div>
    </div>
</div>
