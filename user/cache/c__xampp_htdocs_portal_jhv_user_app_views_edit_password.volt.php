
<div class="row">
    <div class="col-lg-4 offset-lg-4">

        <div class="card">
            <div class="card-body">
                <h5 class="green underline"><i class="fa fa-key" aria-hidden="true"></i> Đổi mật khẩu 更改密碼</h5>

                <form method="post" action="<?= $this->url->get('edit/password') ?>">
                    <div class="form-group row">
                        <div class="col-sm">
                            <input type="password" name="oldPass" size="30" class="form-control" id="fieldOldPass" autofocus="true" placeholder="Mật khẩu cũ 舊密碼" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm">
                            <input type="password" name="newPass" size="30" class="form-control" id="fieldNewPass" placeholder="Mật khẩu mới 新密碼" required>
                        </div>
                    </div>
                    <input type='hidden' name='<?php echo $this->security->getTokenKey() ?>' value='<?php echo $this->security->getToken() ?>'/>
                    <div class="form-group row">
                        <div class="col-sm">
                            <button type="submit" class="btn btn-primary btn-block">Đổi mật khẩu 更改密碼</button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm">
                            <a class="btn btn-outline-secondary btn-block" href="<?= $this->url->get('auth/logged') ?>"><i class="fa fa-user" aria-hidden="true"></i> Người Dùng 用户</a>
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