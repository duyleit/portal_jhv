
{{ partial("partial/headerBanner", ['title': 'Hộp Thư Góp Ý 意見箱']) }}

<div id="content">

    <div class="card">
        <div class="card-body">
            <h5 class="green underline">Hộp Thư Góp Ý 意見箱</h5>
            <div class="row">

                <div class="col-md">

                    <img src="{{ url('img/sb.jpg') }}" class="img-fluid">

                </div>

                <div class="col-md-7">

                    <form method="post" action="{{ url('sb/create') }}">
                        <div class="form-group">
                            <label for="inputEmail">Email 電子郵件</label>
                            <input type="email" class="form-control" id="inputEmail" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="inputFullname">Họ và tên 姓名</label>
                            <input type="text" class="form-control" id="inputFullname" name="fullname" required>
                        </div>
                        <div class="form-group">
                            <label for="inputDepartment">Bộ phận 部門</label>
                            <input type="text" class="form-control" id="inputDepartment" name="department" required>
                        </div>
                        <div class="form-group">
                            <label for="inputTitle">Tiêu đề 標題</label>
                            <input type="text" class="form-control" id="inputTitle" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="inputMessage">Nội dung 內容</label>
                            <textarea class="form-control" id="inputMessage" rows="5" name="message" required></textarea>
                        </div>

                        {#<input type='hidden' name='<?php echo $this->security->getTokenKey() ?>' value='<?php echo $this->security->getToken() ?>'/>#}
                        <button type="submit" class="btn btn-primary">Gửi 提交</button>
                    </form>

                </div>
            </div>

        </div>
    </div>


</div>