<div class="row">
    <nav>
        <ul class="pager">
            <li class="previous">{{ link_to("portal_news", "Tìm Kiếm 搜索") }}</li>
        </ul>
    </nav>
</div>

<div class="page-header">
    <h1>
        Tạo mới 創建
    </h1>
</div>

{{ content() }}

{{ form("portal_news/create", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}

{#<div class="form-group">#}
    {#<label for="fieldUserId" class="col-sm-2 control-label">User</label>#}
    {#<div class="col-sm-10">#}
        {#{{ text_field("user_id", "type" : "numeric", "class" : "form-control", "id" : "fieldUserId") }}#}
    {#</div>#}
{#</div>#}

{#<div class="form-group">#}
    {#<label for="fieldUserFullname" class="col-sm-2 control-label">User Of Fullname</label>#}
    {#<div class="col-sm-10">#}
        {#{{ text_field("user_fullname", "size" : 30, "class" : "form-control", "id" : "fieldUserFullname") }}#}
    {#</div>#}
{#</div>#}

{#<div class="form-group">#}
    {#<label for="fieldType" class="col-sm-2 control-label">Type</label>#}
    {#<div class="col-sm-10">#}
        {#<select name="type" class="form-control" id="fieldType">#}
            {#<option value="1">News 最新消息 Tin Mới</option>#}
            {#<option value="2">Activities 活動訊息 Sự Kiện</option>#}
            {#<option value="3">Policy 公司政策 Chính Sách Công Ty</option>#}
        {#</select>#}
    {#</div>#}
{#</div>#}

<div class="form-group">
    <label for="fieldType" class="col-sm-2 control-label">Nhóm 組</label>
    <div class="col-sm-10">
        <select name="type" class="form-control" id="fieldType">
            <option value="1">Tin Mới 最新消息</option>
            <option value="2">Sự Kiện 活動訊息</option>
            <option value="3">Chính Sách Công Ty 公司政策</option>
            <option value="">Tất cả 所有</option>
        </select>
    </div>
</div>

<div class="form-group">
    <label for="fieldTitle" class="col-sm-2 control-label">Tiêu đề 標題</label>
    <div class="col-sm-10">
        {{ text_field("title", "size" : 30, "class" : "form-control", "id" : "fieldTitle") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldDescription" class="col-sm-2 control-label">Mô tả 描述</label>
    <div class="col-sm-10">
        {{ text_field("description", "cols": "30", "rows": "2", "class" : "form-control", "id" : "fieldDescription") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldPicture" class="col-sm-2 control-label">Hình ảnh 圖片</label>
    <div class="col-sm-10">
        {{ text_field("picture", "size" : 30, "class" : "form-control", "id" : "fieldPicture", "onclick":"openKCFinder(this)", "readonly": "readonly", "placeholder" :"Select picture") }}
    </div>
</div>

{#<div class="form-group">#}
    {#<label for="fieldPicture" class="col-sm-2 control-label">Picture</label>#}
    {#<div class="col-sm-10">#}
        {#{{ text_field("picture", "size" : 30, "class" : "form-control", "id" : "fieldPicture") }}#}
    {#</div>#}
{#</div>#}

<div class="form-group">
    <label for="fieldContent" class="col-sm-2 control-label">Nội dung 內容</label>
    <div class="col-sm-10">
        {{ text_area("content", "cols": "30", "rows": "4", "class" : "form-control", "id" : "fieldContent") }}
    </div>
</div>

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


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Lưu 保存</button>
        {#{{ submit_button('Save', 'class': 'btn btn-default') }}#}
    </div>
</div>

</form>
