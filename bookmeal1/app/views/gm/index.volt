
<div id="banner">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <span class="breadcrumb-item"><a href="{{ url('') }}"><small><i class="fa fa-home" aria-hidden="true"></i> Bookmeal </small></a></span>
            <li class="breadcrumb-item active" aria-current="page"><small>Search</small></li>
        </ol>
    </nav>
</div>

<div id="content">
    <div class="card">
        <div class="card-body">
            <div class="row">
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

                {#<div class="form-group">#}
                    {#<label for="fieldMealOrderDeptId" class="col-sm-2 control-label">Bộ Phận: </label>#}
                    {#<div class="col-sm-4">#}
                        {#{{ select("mealorderdeptId", mealdept, "using":["bd_id","name"], "useEmpty":true, "emptyText":"Tất cả 所有", "emptyValue":"", "class" : "form-control", "id" : "fieldMealOrderDeptId") }}#}
                    {#</div>#}
                {#</div>#}

                {#<div class="form-group">#}
                    {#<label for="fieldDate" class="col-sm-4 control-label">Ngày Tìm:</label>#}
                    {#<div class="input-group date col-sm-4" id="fieldDate" data-target-input="nearest">#}
                        {#<input type="text" id="fieldDate" name="date" class="form-control datetimepicker-input" size="25"  data-target="#fieldDate" />#}
                        {#<div class="input-group-append" data-target="#fieldDate" data-toggle="datetimepicker">#}
                            {#<div class="input-group-text"><i class="fa fa-calendar"></i>#}
                            {#</div>#}
                        {#</div>#}
                    {#</div>#}
                {#</div>#}

                <div class="form-group">
                    <label for="fieldDate" class="col-sm-2 control-label">Ngày Đặt: </label>
                    <div class="col-sm-4">
                        {{ text_field("date", "size" : 30, "class" : "form-control", "id" : "fieldDate") }}
                    </div>
                </div>

                <div class="form-group ">
                    <label for="fieldNguoiDat" class="col-sm-2 control-label">Người Đặt: </label>
                    <div class="col-sm-4">
                        {{ text_field("nguoidat", "size" : 30, "class" : "form-control","id" : "fieldNguoiDat") }}
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        {{ submit_button('Tìm kiếm', 'class': 'btn btn-default') }}
                        <button type="submit" class="btn btn-primary">Tìm 搜索</button>
                    </div>
                </div>
                

                </form>

            </div>
        </div>

    </div>
</div>

{#<div id="content">#}

    {#<div class="card">#}
        {#<div class="card-body">#}
            {#<div class="row">#}

                {#<div class="col-md news">#}
                    {#<h5 class="green underline">Chính Sách Công Ty 公司政策{% if session.get('user') != null %} <a href="{{ url('portal_post') }}" title="Chỉnh sửa 編輯"><i class="fa fa-edit" aria-hidden="true"></i></a>{% endif %}</h5>#}

                    {#{% for policy in policies %}#}
                        {#<a href="{{ url('post/detail/'~policy.id) }}">#}
                            {#<div class="media text-muted pt-3">#}
                                {#<img alt="32x32" class="mr-2 rounded" src="{{ url('img/awards.jpg') }}" data-holder-rendered="true">#}
                                {#<div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">#}
                                    {#<div class="d-flex justify-content-between align-items-center w-100">#}
                                        {#<strong class="text-gray-dark">{{ policy.title }}</strong>#}
                                    {#</div>#}
                                    {#<span class="d-block">{{ policy.description }}</span>#}
                                {#</div>#}
                            {#</div>#}
                        {#</a>#}
                    {#{% endfor %}#}
                    {#<p class="text-right"><small><a href="{{ url('post/group/2') }}">Khác 其他 &blacktriangleright;</a></small></p>#}

                {#</div>#}


                {#<div class="col-md">#}
                    {#<h5 class="blue underline">Sơ Đồ Tổ Chức 組織</h5>#}
                    {#<div class="lightBox">#}
                        {#<a href="{{ url('upload/images/2_BTGĐ_總經理部/2.2_Sơ_đồ_tổ_chức_組織/2019/ORG_VN.jpg') }}">#}
                            {#<img class="img-fluid img-thumbnail" src="{{ url('upload/images/2_BTGĐ_總經理部/2.2_Sơ_đồ_tổ_chức_組織/2019/ORG_VN.jpg') }}">#}
                        {#</a>#}
                        {#<a href="{{ url('upload/images/2_BTGĐ_總經理部/2.2_Sơ_đồ_tổ_chức_組織/2019/ORG_CH.jpg') }}">#}
                            {#<img class="img-fluid img-thumbnail" src="{{ url('upload/images/2_BTGĐ_總經理部/2.2_Sơ_đồ_tổ_chức_組織/2019/ORG_CH.jpg') }}">#}
                        {#</a>#}
                    {#</div>#}

                {#</div>#}
            {#</div>#}

            {#<div class="row">#}
                {#<div class="col-md">#}
                    {#<h5 class="orange underline">Lịch Công Tác 公司行事曆{% if session.get('user') != null %} <a href="{{ url('portal_post') }}" title="Chỉnh sửa 編輯"><i class="fa fa-edit" aria-hidden="true"></i></a>{% endif %}</h5>#}
                    {#<img class="img-fluid" src="{{ url('img/c.jpg') }}">#}
                    {#<div id='script-warning'>#}
                        {#<code>php/get-events.php</code> must be running.#}
                    {#</div>#}

                    {#<div id='loading'>loading...</div>#}

                    {#<div id='calendar'></div>#}
                {#</div>#}
            {#</div>#}

        {#</div>#}
    {#</div>#}


{#</div>#}