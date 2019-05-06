
<div class="text-center">
    <div class="btn-group btn-group-sm" role="group" aria-label="Function">
        {{ link_to("portal_post", '<i class="fa fa-search" aria-hidden="true"></i> Tìm Kiếm 搜索', 'class': 'btn btn-outline-primary') }}
        {#{{ link_to("portal_post/new", '<i class="fa fa-file-o" aria-hidden="true"></i> Tạo Mới 創建', 'class': 'btn btn-outline-primary', 'target':'_blank') }}#}
    </div>
</div>

</div></div></div>
<div id="content">
    <div class="card">
        <div class="card-body">

            <h5 class="underline">
                Tạo mới 創建
            </h5>

            {{ content() }}


{{ form("portal_post/create", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}

{#<div class="form-group">#}
    {#<label for="fieldUserId" class="col-sm-2 control-label">Mã số cán bộ</label>#}
    {#<div class="col-sm-10">#}
        {#{{ text_field("user_id", "type" : "numeric", "class" : "form-control", "id" : "fieldUserId") }}#}
    {#</div>#}
{#</div>#}

{#<div class="form-group">#}
    {#<label for="fieldUserFullname" class="col-sm-2 control-label">Tên cán bộ</label>#}
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
    {{ select("post_group", post_group, "using":["id","name"], "class" : "form-control", "id" : "fieldPostGroup") }}
</div>

<div class="form-group">
    <label for="fieldTitle">Tiêu đề 標題</label>
    {{ text_field("title", "size" : 30, "class" : "form-control", "id" : "fieldTitle") }}
</div>

<div class="form-group">
    <label for="fieldDescription">Mô tả 描述</label>
    {{ text_field("description", "size" : 30, "class" : "form-control", "id" : "fieldDescription") }}
</div>

<div class="form-group">
    <label for="fieldPicture">Hình ảnh 圖片</label>
    {{ text_field("picture", "size" : 30, "class" : "form-control", "id" : "fieldPicture", "onclick":"openKCFinder(this)", "readonly": "readonly", "placeholder" :"Chọn hình 選擇圖片") }}
</div>

<div class="form-group">
    <label for="fieldContent">Nội dung 內容</label>
    {{ text_area("content", "cols": "30", "rows": "4", "class" : "form-control", "id" : "fieldContent") }}
</div>




{#<div class="row">#}
    {#<div class="col-md">#}
        {#<div class="form-group">#}
            {#<label for="fieldDateStart">Ngày bắt đầu</label>#}
            {#{{ text_field("dateStart", "size" : 30, "class" : "form-control datetimepicker-input", "id" : "fieldDateStart", "data-toggle":"datetimepicker", "data-target":"#fieldDateStart") }}#}
        {#</div>#}
    {#</div>#}
    {#<div class="col-md">#}
        {#<div class="form-group">#}
            {#<label for="fieldDateEnd">Ngày kết thúc</label>#}
            {#{{ text_field("dateEnd", "size" : 30, "class" : "form-control datetimepicker-input", "id" : "fieldDateEnd", "data-toggle":"datetimepicker", "data-target":"#fieldDateEnd") }}#}
        {#</div>#}
    {#</div>#}
{#</div>#}

            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="fieldDateStart">Ngày bắt đầu</label>
                        <div class="input-group date" id="fieldDateStart" data-target-input="nearest">
                            {{ text_field("date_start", "size" : 30, "class" : "form-control datetimepicker-input", "id" : "fieldDateStart", "data-target":"#fieldDateStart") }}
                            <div class="input-group-append" data-target="#fieldDateStart" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="form-group">
                        <label for="fieldDateEnd">Ngày kết thúc</label>
                        <div class="input-group date" id="fieldDateEnd" data-target-input="nearest">
                            {{ text_field("date_end", "size" : 30, "class" : "form-control datetimepicker-input", "id" : "fieldDateEnd", "data-target":"#fieldDateEnd") }}
                            <div class="input-group-append" data-target="#fieldDateEnd" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="row">
                <div class="col-md">
                    <div class="form-group form-check">
                        <input name="news" value="1" type="checkbox" class="form-check-input" id="fieldNews">
                        <label class="form-check-label" for="fieldNews">Tin mới 最新消息</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group form-check">
                        <input name="status" value="1" type="checkbox" class="form-check-input" id="fieldStatus" checked>
                        <label class="form-check-label" for="fieldStatus">Hiển thị 顯示</label>
                    </div>
                </div>
            </div>

            <hr>

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
    {#<label for="fieldEditedUserId" class="col-sm-2 control-label">Edited Of User</label>#}
    {#<div class="col-sm-10">#}
        {#{{ text_field("edited_user_id", "type" : "numeric", "class" : "form-control", "id" : "fieldEditedUserId") }}#}
    {#</div>#}
{#</div>#}

{#<div class="form-group">#}
    {#<label for="fieldEditedUserFullname" class="col-sm-2 control-label">Edited Of User Of Fullname</label>#}
    {#<div class="col-sm-10">#}
        {#{{ text_field("edited_user_fullname", "size" : 30, "class" : "form-control", "id" : "fieldEditedUserFullname") }}#}
    {#</div>#}
{#</div>#}


<div class="form-group text-center">
    <button type="submit" class="btn btn-primary"><i class="fa fa-save" aria-hidden="true"></i> Lưu 保存</button>
</div>

</form>
