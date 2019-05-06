
{{ partial("partial/headerBanner", ['title': 'Tìm Bài Viết 搜索帖子']) }}

<div id="content">

    <div class="card">
        <div class="card-body">
            <ul class="nav nav-tabs ">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('post/search/item') }}">Tìm Bài Viết 搜索文章</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('file/search/item') }}">Tìm Tập Tin 搜索文件</a>
                </li>
            </ul>

            {#<h5 class="green underline">Tìm Bài Viết 搜索帖子</h5>#}

            {{ form("post/search", "method":"post", "autocomplete" : "off", "class" : "form-inline") }}

                {#<div class="form-group">#}
                {#<label for="fieldNews" class="col-sm-2 control-label">Tin Mới 最新消息</label>#}
                {#<div class="col-sm-10">#}
                {#{{ text_field("news", "type" : "numeric", "class" : "form-control", "id" : "fieldNews") }}#}
                {#</div>#}
                {#</div>#}

                <label class="col-md-1 my-1 mr-sm-4" for="fieldTitle"></label>

                {{ select("post_group", post_group, "using":["id","name"], "useEmpty":true, "emptyText":"Tất cả 所有", "emptyValue":"", "class" : "col-md-3 custom-select my-4 mr-sm-2", "id" : "fieldPostGroup") }}

                {#<select name="post_group" class="col-md-2 custom-select my-4 mr-sm-1" id="fieldPostGroup">#}
                    {#<option value="1">Sự Kiện 活動訊息</option>#}
                    {#<option value="2">Chính Sách Công Ty 公司政策</option>#}
                    {#<option value="3">Tài Liệu Lưu Trình, Quy Trình(áp dụng cho người Việt Nam) VN HR程序文件</option>#}
                    {#<option value="4">Tài Liệu Lưu Trình, Quy Trình(áp dụng cho người nước ngoài) Int. HR程序文件</option>#}
                    {#<option value="5">Tài Liệu Quy Trình EHS程序文件</option>#}
                    {#<option value="6">Biểu Mẫu Thường Dùng 常用表單</option>#}
                    {#<option value="7">Tạp Chí Công Ty 公司月刊</option>#}
                    {#<option value="8">Lịch Công Tác 公司行事曆</option>#}
                    {#<option value="9">Quyết định 決定書</option>#}
                    {#<option value="10">Thông báo 通報</option>#}
                    {#<option value="" selected>Tất cả 所有</option>#}
                {#</select>#}

                {{ text_field("title", "size" : 30, "class" : "col-md-4 form-control mx-sm-2", "id" : "fieldTitle", "placeholder":"Tiêu đề 標題") }}

                <button type="submit" class="col-md-2 btn btn-primary my-4 ml-sm-2"><i class="fa fa-search" aria-hidden="true"></i> Tìm 搜索</button>

                {#<div class="form-group">#}
                    {#<label for="fieldPostGroup" class="col-sm-2 control-label">Nhóm 組</label>#}
                    {#<div class="col-sm-10">#}
                        {#<select name="post_group" class="form-control" id="fieldPostGroup">#}
                            {#<option value="1">Sự Kiện 活動訊息</option>#}
                            {#<option value="2">Chính Sách Công Ty 公司政策</option>#}
                            {#<option value="3">Tài Liệu Lưu Trình, Quy Trình(áp dụng cho người Việt Nam) VN HR程序文件</option>#}
                            {#<option value="4">Tài Liệu Lưu Trình, Quy Trình(áp dụng cho người nước ngoài) Int. HR程序文件</option>#}
                            {#<option value="5">Tài Liệu Quy Trình EHS程序文件</option>#}
                            {#<option value="6">Biểu Mẫu Thường Dùng 常用表單</option>#}
                            {#<option value="7">Tạp Chí Công Ty 公司月刊</option>#}
                            {#<option value="8">Lịch Công Tác 公司行事曆</option>#}
                            {#<option value="9">Quyết định 決定書</option>#}
                            {#<option value="10">Thông báo 通報</option>#}
                            {#<option value="" selected>Tất cả 所有</option>#}
                        {#</select>#}
                    {#</div>#}
                {#</div>#}

                {#<div class="form-group">#}
                    {#<label for="fieldTitle" class="col-sm-2 control-label">Tiêu đề 標題</label>#}
                    {#<div class="col-sm-10">#}
                        {#{{ text_field("title", "size" : 30, "class" : "form-control", "id" : "fieldTitle", "Placeholder":"Tiêu đề 標題") }}#}
                    {#</div>#}
                {#</div>#}

                {#<div class="form-group">#}
                {#<label for="fieldDescription" class="col-sm-2 control-label">Mô tả 描述</label>#}
                {#<div class="col-sm-10">#}
                {#{{ text_field("description", "size" : 30, "class" : "form-control", "id" : "fieldDescription") }}#}
                {#</div>#}
                {#</div>#}

                {#<div class="form-group">#}
                {#<label for="fieldStatus" class="col-sm-2 control-label">Status</label>#}
                {#<div class="col-sm-10">#}
                {#{{ text_field("status", "type" : "numeric", "class" : "form-control", "id" : "fieldStatus") }}#}
                {#</div>#}
                {#</div>#}

                {#<div class="form-group">#}
                {#<label for="fieldEditedUserFullname" class="col-sm-2 control-label">Tên cán bộ sửa 編輯</label>#}
                {#<div class="col-sm-10">#}
                {#{{ text_field("edited_user_fullname", "size" : 30, "class" : "form-control", "id" : "fieldEditedUserFullname") }}#}
                {#</div>#}
                {#</div>#}

                {#<div class="form-group">#}
                    {#<div class="col-sm-offset-2 col-sm-10">#}
                        {#<button type="submit" class="btn btn-primary">Tìm 搜索</button>#}
                    {#</div>#}
                {#</div>#}

            </form>

            {{ content() }}

        </div>
    </div>

{% if page.items is defined %}
    <div class="card">
        <div class="card-body">
            <h5 class="green underline">Kết Quả Tìm Kiếm 搜索結果</h5>
            {% for item in page.items %}
                <div class="small post-item">
                    <a href="{{ url('post/detail/'~item.id) }}">
                        <div class="media text-muted ">
                            <div class="media-body">
                                <div class="row d-flex">
                                    <div class="col-md-10 col-sm-9 text-justify">
                                        <strong class="text-gray-dark">{{ item.title }}</strong>
                                    </div>
                                    <div class="col-md-2 col-sm-3 text-right">
                                        <span class="font-italic w-25 text-right" style="color: #bbb;">({{ item.modified }})</span>
                                    </div>
                                    {#<strong class="text-gray-dark text-justify">{{ item.title }}</strong>#}
                                    {#<span class="font-italic w-25 text-right" style="color: #bbb;">({{ item.modified }})</span>#}
                                    {#<span class="font-italic" style="color: #bbb;">({{ item.modified }} - {{ item.edited_user_fullname }})</span>#}
                                </div>
                                <span class="d-block">{{ item.description }}</span>
                            </div>
                        </div>
                    </a>
                    {% if files[item.id] is defined and files[item.id] != '' %}
                        <p class="file-download">
                            <span class="font-italic">Tập tin 文件: </span>
                            {{ files[item.id] }}
                        </p>
                    {% endif %}
                </div>
            {% endfor %}

            <div class="row">
                <div class="col-sm-1">
                    <p class="pagination" style="line-height: 1.42857;padding: 6px 12px;">
                        {{ page.current~"/"~page.total_pages }}
                    </p>
                </div>
                <div class="col-sm-11">
                    <nav aria-label="...">
                        <ul class="pagination pagination-sm">
                            <li class="page-item"><a class="page-link" href="{{ url('post/search') }}" title="Trang đầu 回頁首">&nbsp;<i class="fa fa-angle-double-left" aria-hidden="true"></i>&nbsp;</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('post/search?page='~page.before) }}" title="Trang sau 下一頁">&nbsp;<i class="fa fa-angle-left" aria-hidden="true"></i>&nbsp;</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('post/search?page='~page.next) }}" title="Trang tiếp 上一頁">&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('post/search?page='~page.last) }}" title="Trang cuối 回頁尾">&nbsp;<i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
    </div>
{% endif %}

</div>