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

    {{ assets.outputCss() }}

    <link rel="stylesheet" href="{{ url('css/style.css') }}">

    <title>Portal | Jiahsin Company</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/favicon.ico') }}"/>
</head>
<body style="padding-top: 10px;">

    <div class="container-fluid">

        {{ content() }}

    {#<hr>#}
    {#<h5>Chọn tập tin đính kèm 選擇附件</h5>#}
    {{ form("portal_post/upload/"~post_id, "method":"post", "autocomplete" : "off", "class" : "form-horizontal needs-validation") }}

    <div class="d-none">
        <input name="post_id" value="{{ post_id }}">
    </div>

    <div class="form-group">
        <input type="text" id="fieldFile" name="file" class="form-control" onclick="uploadFiles(this)" id="fieldFile" placeholder="Chọn file tải lên 選擇上傳文件" required readonly>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Gửi tập tin mới 發送新文件 </button>
        </div>
    </div>

    </form>


    {#FILE UPLOAD#}
    <div class="row">
        <table class="table table-bordered">
            <thead>
            <tr>
                {#<th>ID</th>#}
                <th>Tập tin 文件名</th>
                <th>Người gửi 用戶已上傳</th>
                <th></th>
            </tr>
            </thead>
            <tbody>

                {% for portal_file in portal_files %}
                    <tr>
                        {#<td>{{ portal_file.id }}</td>#}
                        <td><a href="{{ portal_file.file }}">{{ portal_file.filename }} <i class="fa fa-download" aria-hidden="true"></i></a></td>
                        <td>{{ portal_file.user_fullname }} ({{ portal_file.modified }})</td>
                        <td>{{ link_to("portal_file/delete/"~portal_file.id, "Xóa 刪除") }}</td>
                    </tr>
                {% endfor %}

            </tbody>
        </table>
    </div>



    </div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ url('vendor/jquery/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ url('vendor/popper/js/popper.min.js') }}"></script>
<script src="{{ url('vendor/bootstrap/js/bootstrap.min.js') }}"></script>




    <script type="text/javascript">

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
