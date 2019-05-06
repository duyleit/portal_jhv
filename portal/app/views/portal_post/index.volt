
<div class="text-center">
    <div class="btn-group btn-group-sm" role="group" aria-label="Function">
        {#{{ link_to("portal_post", '<i class="fa fa-search" aria-hidden="true"></i> Tìm Kiếm 搜索', 'class': 'btn btn-outline-primary') }}#}
        {{ link_to("portal_post/new", '<i class="fa fa-file-o" aria-hidden="true"></i> Tạo Mới 創建', 'class': 'btn btn-outline-primary') }}
    </div>
</div>

</div></div></div>
<div id="content">
    <div class="card">
        <div class="card-body">

            <h5 class="underline">
                Tìm bài viết 找到文章
            </h5>

{{ content() }}

{{ form("portal_post/search", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}

{#<div class="form-group">#}
    {#<label for="fieldId" class="col-sm-2 control-label">Id</label>#}
    {#<div class="col-sm-10">#}
        {#{{ text_field("id", "type" : "numeric", "class" : "form-control", "id" : "fieldId") }}#}
    {#</div>#}
{#</div>#}

{#<div class="form-group">#}
    {#<label for="fieldUserId" class="col-sm-2 control-label">Mã số cán bộ</label>#}
    {#<div class="col-sm-10">#}
        {#{{ text_field("user_id", "type" : "numeric", "class" : "form-control", "id" : "fieldUserId") }}#}
    {#</div>#}
{#</div>#}



{#<div class="form-group">#}
    {#<label for="fieldUserFullname" class="col-sm-2 control-label">Tên cán bộ tạo 創作者</label>#}
    {#<div class="col-sm-10">#}
        {#{{ text_field("user_fullname", "size" : 30, "class" : "form-control", "id" : "fieldUserFullname") }}#}
    {#</div>#}
{#</div>#}

{#<div class="form-group">#}
    {#<label for="fieldNews" class="col-sm-2 control-label">Tin Mới 最新消息</label>#}
    {#<div class="col-sm-10">#}
        {#{{ text_field("news", "type" : "numeric", "class" : "form-control", "id" : "fieldNews") }}#}
    {#</div>#}
{#</div>#}



{#<div class="form-group">#}
    {#<label for="fieldPostGroup" class="col-sm-2 control-label">Nhóm 組</label>#}
    {#<div class="col-sm-10">#}
        {#{{ text_field("post_group", "type" : "numeric", "class" : "form-control", "id" : "fieldPostGroup") }}#}
    {#</div>#}
{#</div>#}

<div class="form-group">
    <label for="fieldPostGroup">Nhóm 組</label>
        {{ select("post_group", post_group, "using":["id","name"], "useEmpty":true, "emptyText":"Tất cả 所有", "emptyValue":"", "class" : "form-control", "id" : "fieldPostGroup") }}

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
</div>

<div class="form-group">
    <label for="fieldTitle">Tiêu đề 標題</label>
    {{ text_field("title", "size" : 30, "class" : "form-control", "id" : "fieldTitle") }}
</div>

{#<div class="form-group">#}
    {#<label for="fieldPicture" class="col-sm-2 control-label">Picture</label>#}
    {#<div class="col-sm-10">#}
        {#{{ text_field("picture", "size" : 30, "class" : "form-control", "id" : "fieldPicture") }}#}
    {#</div>#}
{#</div>#}

{#<div class="form-group">#}
    {#<label for="fieldContent" class="col-sm-2 control-label">Content</label>#}
    {#<div class="col-sm-10">#}
        {#{{ text_area("content", "cols": "30", "rows": "4", "class" : "form-control", "id" : "fieldContent") }}#}
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
    {#<label for="fieldCreated" class="col-sm-2 control-label">Created</label>#}
    {#<div class="col-sm-10">#}
        {#{{ text_field("created", "size" : 30, "class" : "form-control", "id" : "fieldCreated") }}#}
    {#</div>#}
{#</div>#}

{#<div class="form-group">#}
    {#<label for="fieldModified" class="col-sm-2 control-label">Modified</label>#}
    {#<div class="col-sm-10">#}
        {#{{ text_field("modified", "size" : 30, "class" : "form-control", "id" : "fieldModified") }}#}
    {#</div>#}
{#</div>#}

{#<div class="form-group">#}
    {#<label for="fieldEditedUserId" class="col-sm-2 control-label">Mã số cán bộ sửa</label>#}
    {#<div class="col-sm-10">#}
        {#{{ text_field("edited_user_id", "type" : "numeric", "class" : "form-control", "id" : "fieldEditedUserId") }}#}
    {#</div>#}
{#</div>#}





{#<div class="form-group">#}
    {#<label for="fieldEditedUserFullname" class="col-sm-2 control-label">Tên cán bộ sửa 編輯</label>#}
    {#<div class="col-sm-10">#}
        {#{{ text_field("edited_user_fullname", "size" : 30, "class" : "form-control", "id" : "fieldEditedUserFullname") }}#}
    {#</div>#}
{#</div>#}


<div class="form-group text-center">
        <button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i> Tìm 搜索</button>
        {#{{ submit_button('Search', 'class': 'btn btn-default') }}#}
</div>

</form>
