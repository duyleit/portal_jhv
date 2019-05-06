<div class="row">
    <nav>
        <ul class="pager">
            <li class="previous">{{ link_to("portal_file", "Tìm file 文件搜索") }}</li>
        </ul>
    </nav>
</div>

<div class="page-header">
    <h1>
        Chỉnh sửa file 文件更改
    </h1>
</div>

{{ content() }}

{{ form("portal_file/save", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}

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
        {#{{ text_field("type", "type" : "numeric", "class" : "form-control", "id" : "fieldType") }}#}
    {#</div>#}
{#</div>#}


{#<div class="form-group">#}
    {#<label for="fieldType" class="col-sm-2 control-label">Type</label>#}
    {#<div class="col-sm-10">#}
        {#<select name="type" class="form-control" id="fieldType">#}
            {#<option value="1">VN HR 程序文件 Tài Liệu Lưu Trình, Quy Trình</option>#}
            {#<option value="2">Int. HR 程序文件 Tài Liệu Lưu Trình, Quy Trình</option>#}
            {#<option value="3">EHS 程序文件 Tài Liệu Quy Trình ESH</option>#}
            {#<option value="4">Common form 常用表單 Biểu Mẫu Thường Dùng</option>#}
            {#<option value="5">Company Magazine 公司月刊 Tạp Chí Công Ty</option>#}
            {#<option value="">All</option>#}
        {#</select>#}
    {#</div>#}
{#</div>#}

<div class="form-group">
    <label for="fieldType" class="col-sm-2 control-label">Nhóm 組</label>
    <div class="col-sm-10">
        <select name="type" class="form-control" id="fieldType">
            <option value="1">Tài Liệu Lưu Trình, Quy Trình VN HR 程序文件</option>
            <option value="2">Tài Liệu Lưu Trình, Quy Trình Int. HR 程序文件</option>
            <option value="3">Tài Liệu Quy Trình ESH 程序文件</option>
            <option value="4">Biểu Mẫu Thường Dùng 常用表單</option>
            <option value="5">Tạp Chí Công Ty 公司月刊</option>
            <option value="">Tất cả 所有文件</option>
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
    {#<label for="fieldFile" class="col-sm-2 control-label">File</label>#}
    {#<div class="col-sm-10">#}
        {#{{ text_field("file", "size" : 30, "class" : "form-control", "id" : "fieldFile") }}#}
    {#</div>#}
{#</div>#}

<div class="form-group">
    <label for="fieldDescription" class="col-sm-2 control-label">Mô tả 描述</label>
    <div class="col-sm-10">
        {{ text_field("description", "size" : 30, "class" : "form-control", "id" : "fieldDescription") }}
    </div>
</div>


<div class="form-group">
    <label for="fieldFile" class="col-sm-2 control-label">File 文件</label>
    <div class="col-sm-10">
        {{ text_field("file", "size" : 30, "class" : "form-control", "id" : "fieldFile", "onclick":"uploadFiles(this)", "readonly": "readonly", "placeholder" :"Select file") }}
        {#{{ text_field("file", "size" : 30, "class" : "form-control", "id" : "fieldFile") }}#}
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


{{ hidden_field("id") }}

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Lưu 保存</button>
        {#{{ submit_button('Send', 'class': 'btn btn-default') }}#}
    </div>
</div>

</form>
