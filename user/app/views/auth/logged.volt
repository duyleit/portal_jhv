
<div class="row">
    <div class="col-md">

        <div class="card">
            <div class="card-body">
                <h5 class="green underline"><i class="fa fa-bars" aria-hidden="true"></i> Chương Trình 程序</h5>

                <a class="btn btn-outline-success" href="{{ url('../meal') }}">Cổng thông tin 门户</a>

            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="green underline"><i class="fa fa-user" aria-hidden="true"></i> Hi 嗨: {{ userFullname }}</h5>

                <a class="btn btn-outline-success btn-block" href="{{ url('edit/password') }}"><i class="fa fa-key" aria-hidden="true"></i> Đổi mật khẩu 更改密碼</a>
                <a class="btn btn-outline-success btn-block" href="{{ url('auth/logout') }}"><i class="fa fa-toggle-left" aria-hidden="true"></i> Thoát 登出</a>

            </div>
        </div>

    </div>
</div>