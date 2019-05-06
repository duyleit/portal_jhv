
<div class="row">
    <div class="col-lg-4 offset-lg-4">

        <div class="card">
            <div class="card-body">
                <h5 class="green underline"><i class="fa fa-key" aria-hidden="true"></i> Đăng Nhập 登录</h5>

                <form method="post" action="<?= $this->url->get('auth/login') ?>">
                    <div class="form-group row">
                        <!--<label for="inputEmail3" class="col-sm-5 col-form-label">ID 用户名 MSNV</label>-->
                        <div class="col-sm">
                            <input type="text" name="user" size="30" class="form-control" id="fieldUser" autofocus="true" placeholder="MSNV 用户名" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <!--<label for="inputPassword3" class="col-sm-5 col-form-label">Password 密码 Mật khẩu</label>-->
                        <div class="col-sm">
                            <input type="password" name="pass" size="30" class="form-control" id="fieldPass" placeholder="Mật khẩu 密码" required>
                        </div>
                    </div>
                    <input type='hidden' name='<?php echo $this->security->getTokenKey() ?>' value='<?php echo $this->security->getToken() ?>'/>
                    <div class="form-group row">
                        <div class="col-sm">
                            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Đăng Nhập 登录</button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm">
                            <a class="btn btn-outline-secondary btn-block" href="<?= $this->url->get('../') ?>"><i class="fa fa-home" aria-hidden="true"></i> Trang Chủ 首頁</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>
</div>