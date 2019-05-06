{#<div id="banner">#}
    {#<nav aria-label="breadcrumb">#}
        {#<ol class="breadcrumb">#}
            {#<span class="breadcrumb-item"><a href="{{ url('') }}"><small><i class="fa fa-home" aria-hidden="true"></i> Bookmeal </small></a></span>#}
            {#<li class="breadcrumb-item active" aria-current="page"><small>Search</small></li>#}
        {#</ol>#}
    {#</nav>#}
{#</div>#}
{{ partial("partial/headerBanner", ['title': 'Search']) }}

<div id="content">
<div class="card">
    <div class="card-body">
        {#<div class="row">#}
            <div class="page-header text-center">
                <h1>
                    <small> Tìm Kiếm Suất Đặt Thức Ăn   </small>
                </h1>

            </div>
        <p>
            {{ link_to("meal/new", "Tạo suất ăn mới",'class':'btn btn-outline-primary btn-sm my-2 mx-3') }}
        </p>
            {{ content() }}

            {{ form("meal/search", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}

            <div class="form-group">
            <label for="fieldMealOrderDeptId" class="col-sm-2 control-label">Bộ Phận: </label>
            <div class="col-sm-4">
            {{ select("mealorderdeptId", mealdept, "using":["bd_id","name"], "useEmpty":true, "emptyText":"Tất cả 所有", "emptyValue":"", "class" : "form-control", "id" : "fieldMealOrderDeptId") }}
            </div>
            </div>

        <div class="form-group">
            <label for="fieldDate" class="col-sm-4 control-label">Ngày Tìm:</label>
            <div class="input-group date col-sm-4" id="fieldDate" data-target-input="nearest">
                <input type="text" id="fieldDate" name="date" class="form-control datetimepicker-input" size="25"  data-target="#fieldDate" />
                <div class="input-group-append" data-target="#fieldDate" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i>
                    </div>
                </div>
            </div>
        </div>

            {#<div class="form-group">#}
                {#<label for="fieldDate" class="col-sm-2 control-label">Ngày Đặt: </label>#}
                {#<div class="col-sm-4">#}
                    {#{{ text_field("date", "size" : 30, "class" : "form-control", "id" : "fieldDate") }}#}
                {#</div>#}
            {#</div>#}

            {#<div class="form-group ">#}
                {#<label for="fieldNguoiDat" class="col-sm-2 control-label">Người Đặt: </label>#}
                {#<div class="col-sm-4">#}
                    {#{{ text_field("nguoidat", "size" : 30, "class" : "form-control","id" : "fieldNguoiDat") }}#}
                {#</div>#}
            {#</div>#}

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    {#{{ submit_button('Tìm kiếm', 'class': 'btn btn-default') }}#}
                    <button type="submit" class="btn btn-primary">Tìm搜索</button>
                </div>
            </div>



            </form>

        {#</div>#}
    </div>

</div>
</div>

