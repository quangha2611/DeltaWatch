<div class="container">
    @if(Session::has('fail_repass'))
        <div class="alert alert-danger" role="alert" style="margin: 0 -15px 1rem -15px;">
            {{ Session::get('fail_repass') }}
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-xl-4 col-lg-4 col-md-6 content_main">
            <form method="POST" action="{{ route('post.sign-up.signup') }}">
                @csrf
                <h4>Đăng Ký</h4>
                <p>Nếu bạn đã có tài khoản,&nbsp;<a href="{{ route('get.login.index') }}">đăng nhập tại đây</a></p>
                <input name="name" type="text" placeholder="Họ và tên" class="form-control mt-3">
                @error('name')
                    <p class="text-danger text-left">{{ $message }}</p>
                @enderror
                <input name="email" type="email" placeholder="Email" class="form-control">
                @error('email')
                    <p class="text-danger text-left">{{ $message }}</p>
                @enderror
                <input name="password" type="password" placeholder="Mật khẩu" class="form-control">
                @error('password')
                    <p class="text-danger text-left">{{ $message }}</p>
                @enderror
                <input name="repassword" type="password" placeholder="Nhập lại mật khẩu" class="form-control">
                <button>Đăng ký</button>
            </form>
        </div>
    </div>
</div>
