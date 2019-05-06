
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= $this->url->get('vendor/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= $this->url->get('vendor/font-awesome/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= $this->url->get('vendor/lightGallery/css/lightgallery.min.css') ?>">
    <link rel="stylesheet" href="<?= $this->url->get('vendor/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') ?>">
    <link rel="stylesheet" href="<?= $this->url->get('css/style.css') ?>">
    <link rel="stylesheet" href=" <?= $this->url->get('vendor/bootstrap4-datetime-picker-rails/css/tempusdominus-bootstrap-4.min.css') ?>">

   <?= $this->tag->getTitle() ?>
    <link rel="shortcut icon" type="image/x-icon" href="<?= $this->url->get('img/favicon.ico') ?>"/>
</head>
<body>

<header>

    <nav id="header-menu" class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?= $this->url->get('') ?>">
                <img src="<?= $this->url->get('img/logo2.png') ?>" width="207" height="50" class="d-inline-block align-top" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample07">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                            <a class="nav-link<?php if ($this->dispatcher->getControllerName() == 'index') { ?> active<?php } ?>" href="<?= $this->url->get('') ?>"><small>Trang Chủ</small><br />首頁<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php if ($this->dispatcher->getControllerName() == 'bookmeal') { ?> active<?php } ?>" href="<?= $this->url->get('bookmeal') ?>"><small>Ban Tổng Giám Đốc</small><br />總經理部</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php if ($this->dispatcher->getControllerName() == 'hr') { ?> active<?php } ?>" href="<?= $this->url->get('hr') ?>"><small>Bộ Phận Nhân Sự</small><br />人力資源</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($this->dispatcher->getControllerName() == 'ga') { ?> active<?php } ?>" href="<?= $this->url->get('ga') ?>"><small>Hành Chánh-Tổng Vụ</small><br />行政總務</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php if ($this->dispatcher->getControllerName() == 'sb') { ?> active<?php } ?>" href="<?= $this->url->get('sb') ?>"><small>Hộp Thư Góp Ý</small><br />意見箱</a>
                    </li>

                    <?php if ($this->session->get('user') != null) { ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <small>Người Dùng</small><br />用户
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?= $this->url->get('../user/auth/logged') ?>">Người Dùng 用户</a>
                                <a class="dropdown-item" href="<?= $this->url->get('../user/edit/password') ?>">Đổi mật khẩu 更改密碼</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= $this->url->get('../user/auth/logout') ?>">Thoát 登出</a>
                            </div>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $this->url->get('../user/auth/login') ?>"><small>Đăng Nhập</small><br />登录</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
</header>


<div class="container">

    <?= $this->getContent() ?>
</div>


<footer>
    <div class="container">
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-sm">
                        <small>&copy; 2017-2019 by Jiahsin Co.,Ltd.</small>
                    </div>

                    <div class="col-sm text-right">
                        <small>Portal Version 1.0 - Developed by Jia Hsin IT.</small>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>

<!-- Optional JavaScript -->

<script src="<?= $this->url->get('vendor/jquery/js/jquery-3.3.1.min.js') ?>"></script>
<script src="<?= $this->url->get('vendor/popper/js/popper.min.js') ?>"></script>
<script src="<?= $this->url->get('vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
<script src="<?= $this->url->get('vendor/moment/min/moment.min.js') ?>"> </script>
<script src="<?= $this->url->get('vendor/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') ?>"></script>
<script src="<?= $this->url->get('vendor/bootstrap4-datetime-picker-rails/js/tempusdominus-bootstrap-4.min.js') ?>"></script>

<script type="text/javascript" src="<?= $this->url->get('vendor/jQuery-Waterwheel-Carousel/js/jquery.waterwheelCarousel.min.js') ?>"></script>
<script type="text/javascript" src="<?= $this->url->get('vendor/jquery-mousewheel/js/jquery.mousewheel.min.js') ?>"></script>
<script type="text/javascript" src="<?= $this->url->get('vendor/lightGallery/js/lightgallery.min.js') ?>"></script>
<script type="text/javascript" src="<?= $this->url->get('vendor/lg-zoom/js/lg-zoom.min.js') ?>"></script>

<script src="<?= $this->url->get('vendor/ckeditor/ckeditor.js') ?>"></script>

<script type="text/javascript">
    $(document).ready(function() {


        $("#carousel").waterwheelCarousel({
            autoPlay: 3000
        });

        $('#fieldDate').datetimepicker({
            useCurrent: false,
            format: 'YYYY-MM-DD',
            sideBySide: true,
            minDate: new Date()

        });

    });
    function uploadFiles(field) {
        window.KCFinder = {
            callBack: function(url) {
                field.value = url;
                window.KCFinder = null;
            }
        };
        window.open('<?= $this->url->get('vendor/kcfinder/browse.php?type=files&dir=files/public') ?>', 'kcfinder_textbox',
            'status=0, toolbar=0, location=0, menubar=0, directories=0, ' +
            'resizable=1, scrollbars=0, width=800, height=600'
        );
    }
</script>

</body>
</html>
