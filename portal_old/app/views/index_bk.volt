
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('vendor/lightGallery/css/lightgallery.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">

    <title>Portal | Jiahsin Company</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/favicon.ico') }}"/>
</head>
<body>

<header>
    <nav id="header-menu" class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('') }}">
                <img src="{{ url('img/logo2.png') }}" width="207" height="50" class="d-inline-block align-top" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample07">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link{% if dispatcher.getControllerName()=='index' %} active{% endif %}" href="{{ url('') }}"><small>Trang Chủ</small><br />首頁<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{% if dispatcher.getControllerName()=='bookmeal' %} active{% endif %}" href="{{ url('bookmeal') }}"><small>Ban Tổng Giám Đốc</small><br />總經理部</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{% if dispatcher.getControllerName()=='hr' %} active{% endif %}" href="{{ url('hr') }}"><small>Bộ Phận Nhân Sự</small><br />人力資源</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled{% if dispatcher.getControllerName()=='ga' %} active{% endif %}" href="{{ url('ga') }}" aria-disabled="true"><small>Hành Chánh-Tổng Vụ</small><br />行政總務</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{% if dispatcher.getControllerName()=='sb' %} active{% endif %}" href="{{ url('sb') }}"><small>Hộp Thư Góp Ý</small><br />意見箱</a>
                    </li>

                    {% if session.get('user') != null %}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <small>Người Dùng</small><br />用户
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('../user/auth/logged') }}">Người Dùng 用户</a>
                                <a class="dropdown-item" href="{{ url('../user/edit/password') }}">Đổi mật khẩu 更改密碼</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ url('../user/auth/logout') }}">Thoát 登出</a>
                            </div>
                        </li>
                    {% else %}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('../user/auth/login') }}"><small>Đăng Nhập</small><br />登录</a>
                        </li>
                    {% endif %}
                </ul>
            </div>
        </div>
    </nav>
</header>


<div class="container">
    {{ content() }}
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
{#<!-- jQuery first, then Popper.js, then Bootstrap JS -->#}
<script src="{{ url('vendor/jquery/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ url('vendor/popper/js/popper.min.js') }}"></script>
<script src="{{ url('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

<script type="text/javascript" src="{{ url('vendor/jQuery-Waterwheel-Carousel/js/jquery.waterwheelCarousel.min.js') }}"></script>
<script type="text/javascript" src="{{ url('vendor/jquery-mousewheel/js/jquery.mousewheel.min.js') }}"></script>
<script type="text/javascript" src="{{ url('vendor/lightGallery/js/lightgallery.min.js') }}"></script>
{#<script type="text/javascript" src="{{ url('vendor/lg-zoom/js/lg-zoom.min.js') }}"></script>#}

<script src="{{ url('vendor/ckeditor/ckeditor.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {

        $("#carousel").waterwheelCarousel({
            autoPlay: 3000
        });

        $(".lightBox").lightGallery();

        CKEDITOR.replace( 'fieldContent', {
            filebrowserBrowseUrl: "{{ url('vendor/kcfinder/browse.php?opener=ckeditor&type=files') }}",
            filebrowserImageBrowseUrl: "{{ url('vendor/kcfinder/browse.php?opener=ckeditor&type=images') }}",
            filebrowserFlashBrowseUrl: "{{ url('vendor/kcfinder/browse.php?opener=ckeditor&type=flash') }}",
            filebrowserUploadUrl: "{{ url('vendor/kcfinder/upload.php?opener=ckeditor&type=files') }}",
            filebrowserImageUploadUrl: "{{ url('vendor/kcfinder/upload.php?opener=ckeditor&type=images') }}",
            filebrowserFlashUploadUrl: "{{ url('vendor/kcfinder/upload.php?opener=ckeditor&type=flash') }}"
        });


    });

    function openKCFinder(field) {
        window.KCFinder = {
            callBack: function(url) {
                field.value = url;
                window.KCFinder = null;
            }
        };
        window.open('{{ url('vendor/kcfinder/browse.php?type=images&dir=files/public') }}', 'kcfinder_textbox',
            'status=0, toolbar=0, location=0, menubar=0, directories=0, ' +
            'resizable=1, scrollbars=0, width=800, height=600'
        );
    }

    function uploadFiles(field) {
        window.KCFinder = {
            callBack: function(url) {
                field.value = url;
                window.KCFinder = null;
            }
        };
        window.open('{{ url('vendor/kcfinder/browse.php?type=files&dir=files/public') }}', 'kcfinder_textbox',
            'status=0, toolbar=0, location=0, menubar=0, directories=0, ' +
            'resizable=1, scrollbars=0, width=800, height=600'
        );
    }
</script>

</body>
</html>
