<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">

    <title>User | Jiahsin Company</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/favicon.ico') }}"/>
</head>
<body>


<div id="banner" class="container">

    <div id="slogan">
        <p><img src="{{ url('img/logo2.png') }}" width="207" height="50" class="d-inline-block align-top" style="margin-top: 80px" alt=""></p>
        {#<p class="lead">Giá Trị Cốt Lõi: Trung Thực, Kỷ Luật, Trách Nhiệm, Dũng Khí. 核心價值:</p>#}
        {#<h1 class="display-4">誠信、紀律、當責、勇敢</h1>#}
    </div>

</div>


<div id="content" class="container">

    {{ content() }}

    <div class="card">
        <div class="card-body">

            <div class="row">
                <div class="col-md font-italic">
                    <h5 class="red underline">Chú Ý 注意:</h5>
                    <p><small>Hoan nghênh bạn sử dụng hệ thống App của công ty, hệ thống này bao gồm thông tin cá nhân quan trọng hoặc bí mật kinh doanh, hãy dựa theo quyền hạn trách nhiệm được giao lưu giữ, tuân thủ các quy định liên quan và cẩn thận khi thao tác sử dụng, tránh các hành vi vi phạm pháp luật. Nếu có hành vi vi phạm các quyền hạn và trách nhiệm được công ty trao về việc thu thập, xử lý không đúng, lợi dụng quyền hạn từ đó gây ra bất kỳ thiệt hại nào cho công ty hoặc khách hàng, sẽ căn cứ theo chính sách của công ty và pháp luật có liên quan tiến hành xử phạt. Khi sử dụng nếu bạn có bất kỳ câu hỏi nào về chương trình này, xin vui lòng liên hệ với bộ phận IT phần mềm, số nội bộ JHV 1159 , chúc bạn sử dụng vui vẻ!</small></p>
                    <p><small>欢迎您使用公司的应用系统，其中包括重要的个人或商业机密，基于公司的权利，责任和责任。使用操纵器时，避免违法行为。如果公司因不当收集和处理而侵犯了权利和责任，滥用权力导致公司或客户受到任何损害，将以公司的政策和相关法律为依据予以制裁。 如果您对此计划有任何疑问，请联系IT部门的软件，JHV 1159内部编号，祝您使用愉快！</small></p>
                </div>
            </div>

        </div>
    </div>


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
                        <small>User Version 1.0 - Developed by Jia Hsin IT.</small>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ url('vendor/jquery/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ url('vendor/popper/js/popper.min.js') }}"></script>
<script src="{{ url('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

</body>
</html>
