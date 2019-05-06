<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('vendor/font-awesome/css/font-awesome.min.css') }}">
    {#<link rel="stylesheet" href="{{ url('vendor/jquery-ui/jquery-ui.min.css') }}">#}
    {#<link rel="stylesheet" href="{{ url('vendor/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}">#}
    <link rel="stylesheet" href="{{ url('vendor/bootstrap4-datetime-picker-rails/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ url('vendor/lightGallery/css/lightgallery.min.css') }}">
    <link rel="stylesheet" href="{{ url('vendor/Delete-Confirmation-Dialog/bootstrap-confirm-delete.css') }}">

    {#Full calendard#}
    <link rel="stylesheet" href="{{ url('vendor/fullcalendar/packages/core/main.css') }}">
    <link rel="stylesheet" href="{{ url('vendor/fullcalendar/packages/daygrid/main.css') }}">
    {#<link rel="stylesheet" href="{{ url('vendor/fullcalendar/packages/timegrid/main.css') }}">#}
    {#<link rel="stylesheet" href="{{ url('vendor/fullcalendar/packages/list/main.css') }}">#}
    {#Full calendard#}
    {#<link rel="stylesheet" href="{{ url('vendor/qTip2/dist/basic/jquery.qtip.min.css') }}">#}

    {{ assets.outputCss() }}

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
                <ul class="navbar-nav ml-auto small">
                    <li class="nav-item">
                        <a class="nav-link{% if dispatcher.getControllerName()=='index' %} active{% endif %}" href="{{ url('') }}">Trang Chủ<br />首頁<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{% if dispatcher.getControllerName()=='gm' %} active{% endif %}" href="{{ url('gm') }}">Ban Tổng Giám Đốc<br />總經理部</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link{% if dispatcher.getControllerName()=='hr' %} active{% endif %}" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bộ Phận Nhân Sự<br />人力資源</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            {#<a class="dropdown-item" href="{{ url('hr/vn') }}">Lưu Trình, Quy Trình(cho người Việt) VN HR程序文件</a>#}
                            {#<a class="dropdown-item" href="{{ url('hr/int') }}">Lưu Trình, Quy Trình(cho CB hải ngoại) Int.HR程序文件</a>#}
                            {#<a class="dropdown-item" href="{{ url('hr/ehs') }}">Tài Liệu Quy Trình HSE 程序文件</a>#}
                            {#<a class="dropdown-item" href="{{ url('hr/cf') }}">Biểu Mẫu Thường Dùng 常用表單</a>#}
                            {#<a class="dropdown-item" href="{{ url('hr/mz') }}">Tạp Chí Công Ty 公司月刊</a>#}
                            {#<div class="dropdown-divider"></div>#}
                            {#<a class="dropdown-item" href="{{ url('hr/dc') }}">Quyết định 決定書</a>#}
                            {#<a class="dropdown-item" href="{{ url('hr/nt') }}">Thông báo 通報</a>#}

                            <a class="dropdown-item" href="{{ url('post/group/3') }}">Lưu Trình, Quy Trình(cho người Việt) VN HR程序文件</a>
                            {#<a class="dropdown-item" href="{{ url('post/group/4') }}">Lưu Trình, Quy Trình(cho CB hải ngoại) Int.HR程序文件</a>#}
                            {#<a class="dropdown-item" href="{{ url('post/group/5') }}">Tài Liệu Quy Trình HSE 程序文件</a>#}
                            {#<a class="dropdown-item" href="{{ url('post/group/6') }}">Biểu Mẫu Thường Dùng 常用表單</a>#}
                            <a class="dropdown-item" href="{{ url('post/group/7') }}">Tạp Chí Công Ty 公司月刊</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ url('post/group/9') }}">Quyết định 決定書</a>
                            <a class="dropdown-item" href="{{ url('post/group/10') }}">Thông báo 通報</a>
                        </div>
                    </li>
                    {#<li class="nav-item">#}
                        {#<a class="nav-link disabled{% if dispatcher.getControllerName()=='ga' %} active{% endif %}" href="{{ url('ga') }}" aria-disabled="true">Hành Chánh-Tổng Vụ<br />行政總務</a>#}
                    {#</li>#}
                    <li class="nav-item">
                        <a class="nav-link{% if dispatcher.getControllerName()=='sb' %} active{% endif %}" href="{{ url('sb') }}">Hộp Thư Góp Ý<br />意見箱</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{% if dispatcher.getControllerName()=='search' %} active{% endif %}" href="{{ url('post/search/item') }}">Tìm kiếm<br />搜索</a>
                    </li>

                    {% if session.get('user') != null %}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Người Dùng<br />用户
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('post/detail/2') }}">Hướng dẫn 用戶指南</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ url('../user/auth/logged') }}">Người Dùng 用户</a>
                                <a class="dropdown-item" href="{{ url('../user/edit/password') }}">Đổi mật khẩu 更改密碼</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ url('../user/auth/logout') }}">Thoát 登出</a>
                            </div>
                        </li>
                    {% else %}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('../user/auth/login') }}">Đăng Nhập<br />登录</a>
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

{#<a tabindex="0" class="btn btn-outline-primary popover-dismiss" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</a>#}

<footer>
    <div class="container">
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-sm">
                        <small>&copy; 2017-2019 by Jiahsin Co.,Ltd.</small>
                    </div>

                    <div class="col-sm text-right">
                        <small>Portal Version 2.0 - Developed by Jia Hsin IT.</small>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ url('vendor/jquery/js/jquery-3.3.1.min.js') }}"></script>
{#<script src="{{ url('vendor/jquery-ui/jquery-ui.min.js') }}"></script>#}
<script src="{{ url('vendor/popper/js/popper.min.js') }}"></script>
<script src="{{ url('vendor/moment/min/moment.min.js') }}"></script>
<script src="{{ url('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ url('vendor/bootstrap4-datetime-picker-rails/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<script type="text/javascript" src="{{ url('vendor/jQuery-Waterwheel-Carousel/js/jquery.waterwheelCarousel.min.js') }}"></script>
<script type="text/javascript" src="{{ url('vendor/jquery-mousewheel/js/jquery.mousewheel.min.js') }}"></script>
<script type="text/javascript" src="{{ url('vendor/lightGallery/js/lightgallery.min.js') }}"></script>
<script type="text/javascript" src="{{ url('vendor/lg-zoom/js/lg-zoom.min.js') }}"></script>
<script type="text/javascript" src="{{ url('vendor/Delete-Confirmation-Dialog/bootstrap-confirm-delete.js') }}"></script>
<script type="text/javascript" src="{{ url('vendor/ckeditor/ckeditor.js') }}"></script>

{#Full calendard#}
<script type="text/javascript" src="{{ url('vendor/fullcalendar/packages/core/main.js') }}"></script>
{#<script type="text/javascript" src="{{ url('vendor/fullcalendar/packages/interaction/main.js') }}"></script>#}
<script type="text/javascript" src="{{ url('vendor/fullcalendar/packages/daygrid/main.js') }}"></script>
{#<script type="text/javascript" src="{{ url('vendor/fullcalendar/packages/timegrid/main.js') }}"></script>#}
{#<script type="text/javascript" src="{{ url('vendor/fullcalendar/packages/list/main.js') }}"></script>#}
{#Full calendard#}
{#<script type="text/javascript" src="{{ url('vendor/qTip2/dist/basic/jquery.qtip.min.js') }}"></script>#}

{{ assets.outputJs() }}

<script type="text/javascript">
    $(document).ready(function(e) {
        $("#carousel").waterwheelCarousel({
            autoPlay: 3000
        });

        $(".lightBox").lightGallery();

        <?php if ($this->router->getActionName() == 'edit' || $this->router->getActionName() == 'new') { ?>
        CKEDITOR.replace( 'fieldContent', {
            filebrowserBrowseUrl: "{{ url('vendor/kcfinder/browse.php?opener=ckeditor&type=files') }}",
            filebrowserImageBrowseUrl: "{{ url('vendor/kcfinder/browse.php?opener=ckeditor&type=images') }}",
            filebrowserFlashBrowseUrl: "{{ url('vendor/kcfinder/browse.php?opener=ckeditor&type=flash') }}",
            filebrowserUploadUrl: "{{ url('vendor/kcfinder/upload.php?opener=ckeditor&type=files') }}",
            filebrowserImageUploadUrl: "{{ url('vendor/kcfinder/upload.php?opener=ckeditor&type=images') }}",
            filebrowserFlashUploadUrl: "{{ url('vendor/kcfinder/upload.php?opener=ckeditor&type=flash') }}"
        });
        <?php } ?>

        $('.del-file,.del-post').bootstrap_confirm_delete({
            heading: '',
            message: 'Bạn có chắc muốn xóa?<br />你想刪除嗎？',
            data_type: null
        });

        $(".readonly").on('keydown paste', function(e){
            e.preventDefault();
        });

        $('#fieldDateStart').datetimepicker({
            useCurrent: false,
            format: 'YYYY-MM-DD HH:mm',
            sideBySide: true
        });
        $('#fieldDateEnd').datetimepicker({
            useCurrent: false,
            format: 'YYYY-MM-DD HH:mm',
            sideBySide: true
        });
        $("#fieldDateStart").on("change.datetimepicker", function (e) {
            $('#fieldDateEnd').datetimepicker('minDate', e.date);
        });
        $("#fieldDateEnd").on("change.datetimepicker", function (e) {
            $('#fieldDateStart').datetimepicker('maxDate', e.date);
        });

        <?php /*
        $('a').qtip({
            content: 'My common piece of text here'
        });

        $('.popover-dismiss').popover({
            trigger: 'focus'
        });
        */ ?>


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
            'resizable=1, scrollbars=0, width=900, height=600'
        );
    }


    <?php if ($this->router->getControllerName() == 'gm') { ?>

        document.addEventListener('DOMContentLoaded', function() {

            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: [ 'dayGrid' ],
                defaultView: 'dayGridMonth',
                titleFormat: { year: 'numeric', month: 'numeric' },
                buttonText: {
                    today:    'Hiện tại 這個月',
                    month:    'Tháng 月',
                    week:     'Tuần 週',
                    day:      'Ngày 天',
                    list:     'Danh sách 名單'
                },
                defaultDate: '{{ date('Y-m-d') }}',
                editable: false,
                navLinks: false,
                eventLimit: true,
                events: {
                    url: '{{ url('gm/calendarevent') }}',
                    failure: function() {
                        document.getElementById('script-warning').style.display = 'block'
                    }
                },
                loading: function(bool) {
                    document.getElementById('loading').style.display =
                        bool ? 'block' : 'none';
                }
            });

            calendar.render();
        });

    <?php } ?>





</script>

</body>
</html>
