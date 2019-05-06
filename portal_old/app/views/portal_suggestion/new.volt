<div class="row">
    <nav>
        <ul class="pager">
            <li class="previous">{{ link_to("portal_suggestion", "Go Back") }}</li>
        </ul>
    </nav>
</div>

<div class="page-header">
    <h1>
        Create portal_suggestion
    </h1>
</div>

{{ content() }}

{{ form("portal_suggestion/create", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}

<div class="form-group">
    <label for="fieldUserId" class="col-sm-2 control-label">User</label>
    <div class="col-sm-10">
        {{ text_field("user_id", "type" : "numeric", "class" : "form-control", "id" : "fieldUserId") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldEmail" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
        {{ text_field("email", "size" : 30, "class" : "form-control", "id" : "fieldEmail") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldFullname" class="col-sm-2 control-label">Fullname</label>
    <div class="col-sm-10">
        {{ text_field("fullname", "size" : 30, "class" : "form-control", "id" : "fieldFullname") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldDepartment" class="col-sm-2 control-label">Department</label>
    <div class="col-sm-10">
        {{ text_field("department", "size" : 30, "class" : "form-control", "id" : "fieldDepartment") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldTitle" class="col-sm-2 control-label">Title</label>
    <div class="col-sm-10">
        {{ text_field("title", "size" : 30, "class" : "form-control", "id" : "fieldTitle") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldMessage" class="col-sm-2 control-label">Message</label>
    <div class="col-sm-10">
        {{ text_area("message", "cols": "30", "rows": "4", "class" : "form-control", "id" : "fieldMessage") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldStatus" class="col-sm-2 control-label">Status</label>
    <div class="col-sm-10">
        {{ text_field("status", "type" : "numeric", "class" : "form-control", "id" : "fieldStatus") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldCreated" class="col-sm-2 control-label">Created</label>
    <div class="col-sm-10">
        {{ text_field("created", "size" : 30, "class" : "form-control", "id" : "fieldCreated") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldModified" class="col-sm-2 control-label">Modified</label>
    <div class="col-sm-10">
        {{ text_field("modified", "size" : 30, "class" : "form-control", "id" : "fieldModified") }}
    </div>
</div>


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {{ submit_button('Save', 'class': 'btn btn-default') }}
    </div>
</div>

</form>
