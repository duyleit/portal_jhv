<div id="banner">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <span class="breadcrumb-item"><a href="{{ url('') }}"><small><i class="fa fa-home" aria-hidden="true"></i> Bookmeal </small></a></span>
            <li class="breadcrumb-item active" aria-current="page"><small>Edit</small></li>
        </ol>
    </nav>
</div>
<div id="content">
    <div class="card">
        <div class="page-header text-center">
            <h1 class="">
                <small>Chỉnh sửa 編輯 </small>
            </h1>
        </div>

        <div class="card-body">
            {{ link_to("meal", "Tìm Kiếm 搜索", 'class':'btn btn-outline-success  btn-sm my-2 mx-4') }}
            {{ content() }}
            {{ form("meal/save", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-inline my-2 ,mx-sm-1">
                        <label for="fieldDate" class="col-sm-6 control-label">Ngày Đặt: </label>
                        <div class="col-sm-6">
                            {{ text_field("date", "type" : "date", "class" : "form-control", "id" : "fieldDate","readonly":"readonly","size" : 15) }}
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-inline mx-sm-3 my-2">
                        <label for="fieldUserCode" class="col-sm-6 control-label">Người Đặt: </label>
                        <div class="col-sm-6">
                            {{ text_field("user_code", "size" : 15, "class" : "form-control", "id" : "fieldUserCode","readonly":"readonly") }}
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-inline mx-sm-3 my-2">
                        <label for="fieldDeptCode" class="col-sm-4 control-label">Bộ Phận: </label>
                        <div class="col-sm-8">
                            {{ text_field("dept_code", "size" : 15, "class" : "form-control", "id" : "fieldDeptCode","readonly":"readonly") }}
                            {#{{ select("mealorderdeptId", mealdept, "using":["bd_id","name"],  "class" : "form-control", "id" : "fieldMealOrderDeptId","disabled":"disabled") }}#}
                            {#{{ select("mealorderdeptId", mealdept, "using":["bd_id","name"], "useEmpty":true, "emptyText":"Tất cả 所有", "emptyValue":"", "class" : "form-control", "id" : "fieldMealOrderDeptId") }}#}
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <div class="row green">
                <div class="col-sm">
                    <div class="form-inline mx-sm-3 my-2">
                        <label for="fieldLunch" class="col-sm-6 control-label">Cơm Mặn Trưa: </label>
                        <div class="col-sm-6">
                            {% if  olddate < datenow  %}
                                 {{ numeric_field("lunch", "type" : "numeric", "class" : "form-control", "id" : "fieldLunch","min":0,"max":9999,"readonly":"readonly") }}
                            {% else %}
                                 {{ numeric_field("lunch", "type" : "numeric", "class" : "form-control", "id" : "fieldLunch","min":0,"max":9999) }}
                            {% endif %}
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-inline mx-sm-3 my-2">
                        <label for="fieldLunchVeg" class="col-sm-6 control-label">Cơm Chay Trưa: </label>
                        <div class="col-sm-6">
                            {% if  olddate < datenow  %}
                                {{ numeric_field("lunch_veg", "type" : "numeric", "class" : "form-control", "id" : "fieldLunchVeg","min":0,"max":9999,"readonly":"readonly") }}
                            {% else %}
                                {{ numeric_field("lunch_veg", "type" : "numeric", "class" : "form-control", "id" : "fieldLunchVeg","min":0,"max":9999) }}
                            {% endif %}
                            {#{{ numeric_field("lunch_veg", "type" : "numeric", "class" : "form-control", "id" : "fieldLunchVeg","min":0,"max":9999) }}#}
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-inline mx-sm-3 my-2">
                        <label for="fieldLunchSoup" class="col-sm-6 control-label">Cháo Trưa:  </label>
                        <div class="col-sm-6">
                            {% if  olddate < datenow  %}
                                {{ numeric_field("lunch_soup", "type" : "numeric", "class" : "form-control", "id" : "fieldLunchSoup","min":0,"max":9999,"readonly":"readonly") }}
                            {% else %}
                                {{ numeric_field("lunch_soup", "type" : "numeric", "class" : "form-control", "id" : "fieldLunchSoup","min":0,"max":9999) }}
                            {% endif %}
                            {#{{ numeric_field("lunch_soup", "type" : "numeric", "class" : "form-control", "id" : "fieldLunchSoup","min":0,"max":9999) }}#}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row green">
                <div class="col-sm">
                    <div class="form-inline mx-sm-3 my-2">
                        <label for="fieldLunchAdd" class="col-sm-6 control-label">Phụ Mặn Trưa: </label>
                        <div class="col-sm-6">
                            {% if  olddate < datenow  %}
                                {{ numeric_field("lunch_add", "type" : "numeric", "class" : "form-control", "id" : "fieldLunchAdd","min":0,"max":9999,"readonly":"readonly") }}
                            {% else %}
                                {{ numeric_field("lunch_add", "type" : "numeric", "class" : "form-control", "id" : "fieldLunchAdd","min":0,"max":9999) }}
                            {% endif %}
                            {#{{ numeric_field("lunch_add", "type" : "numeric", "class" : "form-control", "id" : "fieldLunchAdd","min":0,"max":9999) }}#}
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-inline mx-sm-3 my-2">
                        <label for="fieldLunchVegAdd" class="col-sm-6 control-label">Phụ Chay Trưa: </label>
                        <div class="col-sm-6">
                            {% if  olddate < datenow  %}
                                {{ numeric_field("lunch_veg_add", "type" : "numeric", "class" : "form-control", "id" : "fieldLunchVegAdd","min":0,"max":9999,"readonly":"readonly") }}
                            {% else %}
                                {{ numeric_field("lunch_veg_add", "type" : "numeric", "class" : "form-control", "id" : "fieldLunchVegAdd","min":0,"max":9999) }}
                            {% endif %}
                            {#{{ numeric_field("lunch_veg_add", "type" : "numeric", "class" : "form-control", "id" : "fieldLunchVegAdd","min":0,"max":9999) }}#}
                        </div>
                    </div>
                </div>
                <div class="col-sm">

                </div>
            </div>


            <div class="row orange">
                <div class="col-sm">
                    <div class="form-inline mx-sm-3 my-2">
                        <label for="fieldDinner" class="col-sm-6 control-label">Cơm Mặn Chiều: </label>
                        <div class="col-sm-6">
                            {% if  olddate < datenow  %}
                                {{ numeric_field("dinner", "type" : "numeric", "class" : "form-control", "id" : "fieldDinner","min":0,"max":9999,"readonly":"readonly") }}
                            {% else %}
                                {{ numeric_field("dinner", "type" : "numeric", "class" : "form-control", "id" : "fieldDinner","min":0,"max":9999) }}
                            {% endif %}
                            {#{{ numeric_field("dinner", "type" : "numeric", "class" : "form-control", "id" : "fieldDinner","min":0,"max":9999) }}#}
                        </div>
                    </div>
                </div>
                <div class="col-sm">

                    <div class="form-inline mx-sm-3 my-2">
                        <label for="fieldDinnerAdd" class="col-sm-6 control-label">Phụ Mặn Chiều: </label>
                        <div class="col-sm-6">
                            {% if  olddate < datenow  %}
                                {{ numeric_field("dinner_add", "type" : "numeric", "class" : "form-control", "id" : "fieldDinnerAdd","min":0,"max":9999,"readonly":"readonly") }}
                            {% else %}
                                {{ numeric_field("dinner_add", "type" : "numeric", "class" : "form-control", "id" : "fieldDinnerAdd","min":0,"max":9999) }}
                            {% endif %}
                            {#{{ numeric_field("dinner_add", "type" : "numeric", "class" : "form-control", "id" : "fieldDinnerAdd","min":0,"max":9999) }}#}
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-inline mx-sm-3 my-2">
                        <label for="fieldDinnerVegAdd" class="col-sm-6 control-label">Phụ Chay Chiều: </label>
                        <div class="col-sm-6">
                            {% if  olddate < datenow  %}
                                {{ numeric_field("dinner_veg_add", "type" : "numeric", "class" : "form-control", "id" : "fieldDinnerVegAdd","min":0,"max":9999,"readonly":"readonly") }}
                            {% else %}
                                {{ numeric_field("dinner_veg_add", "type" : "numeric", "class" : "form-control", "id" : "fieldDinnerVegAdd","min":0,"max":9999) }}
                            {% endif %}
                            {#{{ numeric_field("dinner_veg_add", "type" : "numeric", "class" : "form-control", "id" : "fieldDinnerVegAdd","min":0,"max":9999) }}#}
                        </div>
                    </div>
                </div>
            </div>



            <div class="row red">
                <div class="col-sm">
                    <div class="form-inline mx-sm-3 my-2">
                        <label for="fieldSupper" class="col-sm-6 control-label">Mặn Suất Đêm:  </label>
                        <div class="col-sm-6">
                            {% if  olddate < datenow  %}
                                {{ numeric_field("supper", "type" : "numeric", "class" : "form-control", "id" : "fieldSupper","min":0,"max":9999,"readonly":"readonly") }}
                            {% else %}
                                {{ numeric_field("supper", "type" : "numeric", "class" : "form-control", "id" : "fieldSupper","min":0,"max":9999) }}
                            {% endif %}
                            {#{{ numeric_field("supper", "type" : "numeric", "class" : "form-control", "id" : "fieldSupper","min":0,"max":9999) }}#}
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                     <div class="form-inline mx-sm-3 my-2">
                        <label for="fieldSupperVeg" class="col-sm-6 control-label">Chay Suất Đêm: </label>
                        <div class="col-sm-6">
                            {% if  olddate < datenow  %}
                                {{ numeric_field("supper_veg", "type" : "numeric", "class" : "form-control", "id" : "fieldSupperVeg","min":0,"max":9999,"readonly":"readonly") }}
                            {% else %}
                                {{ numeric_field("supper_veg", "type" : "numeric", "class" : "form-control", "id" : "fieldSupperVeg","min":0,"max":9999) }}
                            {% endif %}
                            {#{{ numeric_field("supper_veg", "type" : "numeric", "class" : "form-control", "id" : "fieldSupperVeg","min":0,"max":9999) }}#}
                        </div>
                    </div>
                </div>
                <div class="col-sm">

                </div>
            </div>


            <div class="row blue">
                <div class="col-sm">
                    <div class="form-inline mx-sm-3 my-2">
                        <label for="fieldSeparateTable" class="col-sm-6 control-label">Dọn Bàn Riêng: </label>
                        <div class="col-sm-6">
                            {% if  olddate < datenow  %}
                                {{ numeric_field("separate_table", "type" : "numeric", "class" : "form-control", "id" : "fieldSeparateTable","min":0,"max":9999,"readonly":"readonly") }}
                            {% else %}
                                {{ numeric_field("separate_table", "type" : "numeric", "class" : "form-control", "id" : "fieldSeparateTable","min":0,"max":9999) }}
                            {% endif %}
                            {#{{ numeric_field("separate_table", "type" : "numeric", "class" : "form-control", "id" : "fieldSeparateTable","min":0,"max":9999) }}#}
                        </div>
                    </div>

                </div>
                <div class="col-sm">
                    <div class="form-inline mx-sm-3 my-2">
                        <label for="fieldBuffet" class="col-sm-6 control-label">Ăn Buffet: </label>
                        <div class="col-sm-6">
                            {% if  olddate < datenow  %}
                                {{ numeric_field("buffet", "type" : "numeric", "class" : "form-control", "id" : "fieldBuffet","min":0,"max":9999,"readonly":"readonly") }}
                            {% else %}
                                {{ numeric_field("buffet", "type" : "numeric", "class" : "form-control", "id" : "fieldBuffet","min":0,"max":9999) }}
                            {% endif %}
                            {#{{ numeric_field("buffet", "type" : "numeric", "class" : "form-control", "id" : "fieldBuffet","min":0,"max":9999) }}#}
                        </div>
                    </div>
                </div>
                <div class="col-sm">

                </div>
            </div>

<div class="row">
    <div class="form-inline mx-sm-3 my-2">
        <label for="fieldNote" class="col-sm-2 control-label">Ghi Chú: </label>
        <div class="col-sm-10">
            {% if  olddate < datenow  %}
                {{ text_area("note", "cols" : 120, "rows":"4","class" : "form-control", "id" : "fieldNote","readonly":"readonly") }}
            {% else %}
                {{ text_area("note", "cols" : 120, "rows":"4","class" : "form-control", "id" : "fieldNote") }}
            {% endif %}
            {#{{ text_area("note", "cols" : 120, "rows":"4","class" : "form-control", "id" : "fieldNote") }}#}
            {#{{ text_area("ghichu", "cols": "30", "rows": "4", "class" : "form-control", "id" : "fieldGhiChu") }}#}
        </div>
    </div>
</div>


            {#<div class="form-group">#}
                {#<label for="fieldDateCreate" class="col-sm-2 control-label">Date Of Create</label>#}
                {#<div class="col-sm-10">#}
                    {#{{ text_field("date_create", "size" : 30, "class" : "form-control", "id" : "fieldDateCreate") }}#}
                {#</div>#}
            {#</div>#}

            {#<div class="form-group">#}
                {#<label for="fieldDateModify" class="col-sm-2 control-label">Date Of Modify</label>#}
                {#<div class="col-sm-10">#}
                    {#{{ text_field("date_modify", "size" : 30, "class" : "form-control", "id" : "fieldDateModify") }}#}
                {#</div>#}
            {#</div>#}

            {#<div class="form-group">#}
                {#<label for="fieldUserCodeModify" class="col-sm-2 control-label">User Of Code Of Modify</label>#}
                {#<div class="col-sm-10">#}
                    {#{{ text_field("user_code_modify", "size" : 30, "class" : "form-control", "id" : "fieldUserCodeModify") }}#}
                {#</div>#}
            {#</div>#}


            {{ hidden_field("bm_id") }}
    <div class="form-group text-center my-3">
        {% if  olddate < datenow  %}
            {{ submit_button('Lưu 保存', 'class': 'btn btn-primary d-none') }}
        {% else %}
            {{ submit_button('Lưu 保存', 'class': 'btn btn-primary') }}
        {% endif %}

    </div>


            </form>

        </div>
    </div>
</div>
