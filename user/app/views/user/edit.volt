<div class="row">
    <nav>
        <ul class="pager">
            <li class="previous">{{ link_to("user", "Go Back") }}</li>
        </ul>
    </nav>
</div>

<div class="page-header">
    <h1>
        Edit user
    </h1>
</div>

{{ content() }}

{{ form("user/save", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}

<div class="form-group">
    <label for="fieldUser" class="col-sm-2 control-label">User</label>
    <div class="col-sm-10">
        {{ text_field("user", "size" : 30, "class" : "form-control", "id" : "fieldUser") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldPass" class="col-sm-2 control-label">Pass</label>
    <div class="col-sm-10">
        {{ text_field("pass", "size" : 30, "class" : "form-control", "id" : "fieldPass") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldFullname" class="col-sm-2 control-label">Fullname</label>
    <div class="col-sm-10">
        {{ text_field("fullname", "size" : 30, "class" : "form-control", "id" : "fieldFullname") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldComCode" class="col-sm-2 control-label">Com Of Code</label>
    <div class="col-sm-10">
        {{ text_field("com_code", "size" : 30, "class" : "form-control", "id" : "fieldComCode") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldRoleCode" class="col-sm-2 control-label">Role Of Code</label>
    <div class="col-sm-10">
        {{ text_field("role_code", "size" : 30, "class" : "form-control", "id" : "fieldRoleCode") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldDeptCode" class="col-sm-2 control-label">Dept Of Code</label>
    <div class="col-sm-10">
        {{ text_field("dept_code", "size" : 30, "class" : "form-control", "id" : "fieldDeptCode") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldPosiCode" class="col-sm-2 control-label">Posi Of Code</label>
    <div class="col-sm-10">
        {{ text_field("posi_code", "size" : 30, "class" : "form-control", "id" : "fieldPosiCode") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldEmail" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
        {{ text_field("email", "size" : 30, "class" : "form-control", "id" : "fieldEmail") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldPhoneExtend" class="col-sm-2 control-label">Phone Of Extend</label>
    <div class="col-sm-10">
        {{ text_field("phone_extend", "size" : 30, "class" : "form-control", "id" : "fieldPhoneExtend") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldAbout" class="col-sm-2 control-label">About</label>
    <div class="col-sm-10">
        {{ text_area("about", "cols": "30", "rows": "4", "class" : "form-control", "id" : "fieldAbout") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldCommonDisease" class="col-sm-2 control-label">Common Of Disease</label>
    <div class="col-sm-10">
        {{ text_field("common_disease", "type" : "numeric", "class" : "form-control", "id" : "fieldCommonDisease") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldOccupationalDisease" class="col-sm-2 control-label">Occupational Of Disease</label>
    <div class="col-sm-10">
        {{ text_field("occupational_disease", "type" : "numeric", "class" : "form-control", "id" : "fieldOccupationalDisease") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldLaborAccident" class="col-sm-2 control-label">Labor Of Accident</label>
    <div class="col-sm-10">
        {{ text_field("labor_accident", "type" : "numeric", "class" : "form-control", "id" : "fieldLaborAccident") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldPoisonArea" class="col-sm-2 control-label">Poison Of Area</label>
    <div class="col-sm-10">
        {{ text_field("poison_area", "type" : "numeric", "class" : "form-control", "id" : "fieldPoisonArea") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldHealthClassCode" class="col-sm-2 control-label">Health Of Class Of Code</label>
    <div class="col-sm-10">
        {{ text_field("health_class_code", "size" : 30, "class" : "form-control", "id" : "fieldHealthClassCode") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldExpiryHealthCheck" class="col-sm-2 control-label">Expiry Of Health Of Check</label>
    <div class="col-sm-10">
        {{ text_field("expiry_health_check", "type" : "date", "class" : "form-control", "id" : "fieldExpiryHealthCheck") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldStatus" class="col-sm-2 control-label">Status</label>
    <div class="col-sm-10">
        {{ text_field("status", "type" : "numeric", "class" : "form-control", "id" : "fieldStatus") }}
    </div>
</div>


{{ hidden_field("id") }}

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {{ submit_button('Send', 'class': 'btn btn-default') }}
    </div>
</div>

</form>
