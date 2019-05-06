<div class="page-header">
    <h1>
        Tìm bài viết 找到文章
    </h1>
    <p>
        {{ link_to("portal_news/new", "Tạo bài mới 創建新的") }}
    </p>
</div>

{{ content() }}

{{ form("portal_news/search", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}

{#<div class="form-group">#}
    {#<label for="fieldId" class="col-sm-2 control-label">Id</label>#}
    {#<div class="col-sm-10">#}
        {#{{ text_field("id", "type" : "numeric", "class" : "form-control", "id" : "fieldId") }}#}
    {#</div>#}
{#</div>#}

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
        <button type="submit" class="btn btn-primary">Tìm 搜索</button>
        {#{{ submit_button('Search', 'class': 'btn btn-default') }}#}
    </div>
</div>

</form>
