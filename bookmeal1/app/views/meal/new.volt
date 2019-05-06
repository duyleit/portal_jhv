<div id="banner">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <span class="breadcrumb-item"><a href="{{ url('') }}"><small><i class="fa fa-home" aria-hidden="true"></i> Bookmeal </small></a></span>
            <li class="breadcrumb-item active" aria-current="page"><small>Create New</small></li>
        </ol>
    </nav>
</div>
<div id="content">
    <div class="card">
        <div class="page-header text-center">
            <h1>
                <small>Tạo Mới 創建 </small>
            </h1>
        </div>
        <div class="card-body">
            <div class="row">
                 <span class="previous">{{ link_to("meal", "Tìm Kiếm 搜索",'class':'btn btn-outline-primary my-2 mx-3') }}</span>
             </div>
            <div>
                <p style="color: red; font-size: large;text-decoration: underline;"> Lưu ý:</p>
                <marquee style="color:yellowgreen"> Bộ phận nào không ăn cơm vui lòng nhập số 0 vào đúng vị trí của bộ phần mình và ghi chú cắt cơm ở dòng ghi chú.Đối với các bộ phận không báo cơm đúng thời gian quy định nhà ăn sẽ không phục vụ phần cơm của bộ phận đó.</marquee>
            </div>
            <hr>
            {{ content() }}

            {{ form("meal/create", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}

            <div class="row">
                <div class="col-sm-4">
                    {#<div class="form-inline mx-sm-3 my-2">#}
                        {#<label for="fieldDate" class="col-sm-6 control-label">Ngày Đặt: </label>#}

                        {#<div class="col-sm-6">#}
                            {#{{ text_field("date", "type" : "date", "class" : "form-control", "id" : "fieldDate_new","size" : 15) }}#}
                            {#<input type="date" id="fieldDate_new" size="15" class="form-control">#}
                            {#<input type="date" id="myDate2" class="form-control" min="2018-01-01" max="2018-12-31" value="2018-05-18">#}
                            {#<input type="datetime-local" id="myDateTimeLocal2" class="form-control"  min="2018-06-07T00:00" max="2018-06-14T00:00" value="2018-06-08T14:02">#}
                            {#<input type="checkbox"  class="form-control"> check#}
                        {#</div>#}
                    <div class="form-inline mx-1 my-2">
                        <label for="fieldDate" class="col-sm-4 control-label">Ngày Đặt:</label>
                        <div class="input-group date col-sm-8 " id="fieldDate" data-target-input="nearest">
                            <input type="text" id="fieldDate" name="date" class="form-control datetimepicker-input" size="25"  data-target="#fieldDate" />
                            <div class="input-group-append" data-target="#fieldDate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i>
                                </div>
                            </div>
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
                            {#{{ select("mealdeptid", mealdept, "using":["bd_id","name"],  "class" : "form-control", "id" : "fieldMealOrderDeptId","disabled":"disabled") }}#}
                            {#{{ select("mealorderdeptId", mealdept, "using":["bd_id","name"], "useEmpty":true, "emptyText":"Tất cả 所有", "emptyValue":"", "class" : "form-control", "id" : "fieldMealOrderDeptId") }}#}
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <div>
                <p style="color: red; font-size: medium;text-decoration: underline;"> Qui định:</p>
                <marquee style="color:green"> <small>Sau 9h thì sẽ khóa đặt cơm trưa. Thanh you.</small></marquee>
            </div>

            <div class="row green">
                <div class="col-sm">
                    <div class="form-inline mx-sm-3 my-2">
                        <label for="fieldLunch" class="col-sm-6 control-label">Cơm Mặn Trưa: </label>
                        <div class="col-sm-6">
                            {{ numeric_field("lunch", "type" : "numeric", "class" : "form-control", "id" : "fieldLunch","value":0,"min":0,"max":9999) }}
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-inline mx-sm-3 my-2">
                        <label for="fieldLunchVeg" class="col-sm-6 control-label">Cơm Chay Trưa: </label>
                        <div class="col-sm-6">
                            {{ numeric_field("lunch_veg", "type" : "numeric", "class" : "form-control", "id" : "fieldLunchVeg","min":0,"max":9999,"value":0) }}
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-inline mx-sm-3 my-2">
                        <label for="fieldLunchSoup" class="col-sm-6 control-label">Cháo Trưa:  </label>
                        <div class="col-sm-6">
                            {{ numeric_field("lunch_soup", "type" : "numeric", "class" : "form-control", "id" : "fieldLunchSoup","min":0,"max":9999,"value":0) }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row green">
                <div class="col-sm">
                    <div class="form-inline mx-sm-3 my-2">
                        <label for="fieldLunchAdd" class="col-sm-6 control-label">Phụ Mặn Trưa: </label>
                        <div class="col-sm-6">
                            {{ numeric_field("lunch_add", "type" : "numeric", "class" : "form-control", "id" : "fieldLunchAdd","min":0,"max":9999,"value":0) }}
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-inline mx-sm-3 my-2">
                        <label for="fieldLunchVegAdd" class="col-sm-6 control-label">Phụ Chay Trưa: </label>
                        <div class="col-sm-6">
                            {{ numeric_field("lunch_veg_add", "type" : "numeric", "class" : "form-control", "id" : "fieldLunchVegAdd","min":0,"max":9999,"value":0) }}
                        </div>
                    </div>
                </div>
                <div class="col-sm">

                </div>
            </div>

            <div>
                <p style="color: red; font-size: medium;text-decoration: underline;"> Qui định:</p>
                <marquee style="color:orange"><small> Sau 14h thì sẽ khóa đặt cơm chiều và tối. Thanh you.</small> </marquee>
            </div>
            <div class="row orange">
                <div class="col-sm">
                    <div class="form-inline mx-sm-3 my-2">
                        <label for="fieldDinner" class="col-sm-6 control-label">Cơm Mặn Chiều: </label>
                        <div class="col-sm-6">
                            {{ numeric_field("dinner", "type" : "numeric", "class" : "form-control", "id" : "fieldDinner","min":0,"max":9999,"value":0) }}
                        </div>
                    </div>
                </div>
                <div class="col-sm">

                    <div class="form-inline mx-sm-3 my-2">
                        <label for="fieldDinnerAdd" class="col-sm-6 control-label">Phụ Mặn Chiều: </label>
                        <div class="col-sm-6">
                            {{ numeric_field("dinner_add", "type" : "numeric", "class" : "form-control", "id" : "fieldDinnerAdd","min":0,"max":9999,"value":0) }}
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-inline mx-sm-3 my-2">
                        <label for="fieldDinnerVegAdd" class="col-sm-6 control-label">Phụ Chay Chiều: </label>
                        <div class="col-sm-6">
                            {{ numeric_field("dinner_veg_add", "type" : "numeric", "class" : "form-control", "id" : "fieldDinnerVegAdd","min":0,"max":9999,"value":0) }}
                        </div>
                    </div>
                </div>
            </div>



            <div class="row red">
                <div class="col-sm">
                    <div class="form-inline mx-sm-3 my-2">
                        <label for="fieldSupper" class="col-sm-6 control-label">Mặn Suất Đêm:  </label>
                        <div class="col-sm-6">
                            {{ numeric_field("supper", "type" : "numeric", "class" : "form-control", "id" : "fieldSupper","min":0,"max":9999,"value":0) }}
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-inline mx-sm-3 my-2">
                        <label for="fieldSupperVeg" class="col-sm-6 control-label">Chay Suất Đêm: </label>
                        <div class="col-sm-6">
                            {{ numeric_field("supper_veg", "type" : "numeric", "class" : "form-control", "id" : "fieldSupperVeg","min":0,"max":9999,"value":0) }}
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
                            {{ numeric_field("separate_table", "type" : "numeric", "class" : "form-control", "id" : "fieldSeparateTable","min":0,"max":9999,"value":0) }}
                        </div>
                    </div>

                </div>
                <div class="col-sm">
                    <div class="form-inline mx-sm-3 my-2">
                        <label for="fieldBuffet" class="col-sm-6 control-label">Ăn Buffet: </label>
                        <div class="col-sm-6">
                            {{ numeric_field("buffet", "type" : "numeric", "class" : "form-control", "id" : "fieldBuffet","min":0,"max":9999,"value":0) }}
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
                        {{ text_area("note", "cols" : 120, "rows":"4","class" : "form-control", "id" : "fieldNote") }}
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
                {{ submit_button('Lưu 保存', 'class': 'btn btn-primary') }}

            </div>


            </form>
        </div>
    </div>
</div>

