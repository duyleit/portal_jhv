<div class="page-header">
    <h1>
        Search user
    </h1>
    <p>
        <?= $this->tag->linkTo(['user/new', 'Create user']) ?>
    </p>
</div>

<?= $this->getContent() ?>

<?= $this->tag->form(['user/search', 'method' => 'post', 'autocomplete' => 'off', 'class' => 'form-horizontal']) ?>

<div class="form-group">
    <label for="fieldId" class="col-sm-2 control-label">Id</label>
    <div class="col-sm-10">
        <?= $this->tag->textField(['id', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldId']) ?>
    </div>
</div>

<div class="form-group">
    <label for="fieldUser" class="col-sm-2 control-label">User</label>
    <div class="col-sm-10">
        <?= $this->tag->textField(['user', 'size' => 30, 'class' => 'form-control', 'id' => 'fieldUser']) ?>
    </div>
</div>

<div class="form-group">
    <label for="fieldPass" class="col-sm-2 control-label">Pass</label>
    <div class="col-sm-10">
        <?= $this->tag->textField(['pass', 'size' => 30, 'class' => 'form-control', 'id' => 'fieldPass']) ?>
    </div>
</div>

<div class="form-group">
    <label for="fieldFullname" class="col-sm-2 control-label">Fullname</label>
    <div class="col-sm-10">
        <?= $this->tag->textField(['fullname', 'size' => 30, 'class' => 'form-control', 'id' => 'fieldFullname']) ?>
    </div>
</div>

<div class="form-group">
    <label for="fieldComCode" class="col-sm-2 control-label">Com Of Code</label>
    <div class="col-sm-10">
        <?= $this->tag->textField(['com_code', 'size' => 30, 'class' => 'form-control', 'id' => 'fieldComCode']) ?>
    </div>
</div>

<div class="form-group">
    <label for="fieldRoleCode" class="col-sm-2 control-label">Role Of Code</label>
    <div class="col-sm-10">
        <?= $this->tag->textField(['role_code', 'size' => 30, 'class' => 'form-control', 'id' => 'fieldRoleCode']) ?>
    </div>
</div>

<div class="form-group">
    <label for="fieldDeptCode" class="col-sm-2 control-label">Dept Of Code</label>
    <div class="col-sm-10">
        <?= $this->tag->textField(['dept_code', 'size' => 30, 'class' => 'form-control', 'id' => 'fieldDeptCode']) ?>
    </div>
</div>

<div class="form-group">
    <label for="fieldPosiCode" class="col-sm-2 control-label">Posi Of Code</label>
    <div class="col-sm-10">
        <?= $this->tag->textField(['posi_code', 'size' => 30, 'class' => 'form-control', 'id' => 'fieldPosiCode']) ?>
    </div>
</div>

<div class="form-group">
    <label for="fieldEmail" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
        <?= $this->tag->textField(['email', 'size' => 30, 'class' => 'form-control', 'id' => 'fieldEmail']) ?>
    </div>
</div>

<div class="form-group">
    <label for="fieldPhoneExtend" class="col-sm-2 control-label">Phone Of Extend</label>
    <div class="col-sm-10">
        <?= $this->tag->textField(['phone_extend', 'size' => 30, 'class' => 'form-control', 'id' => 'fieldPhoneExtend']) ?>
    </div>
</div>

<div class="form-group">
    <label for="fieldAbout" class="col-sm-2 control-label">About</label>
    <div class="col-sm-10">
        <?= $this->tag->textArea(['about', 'cols' => '30', 'rows' => '4', 'class' => 'form-control', 'id' => 'fieldAbout']) ?>
    </div>
</div>

<div class="form-group">
    <label for="fieldCommonDisease" class="col-sm-2 control-label">Common Of Disease</label>
    <div class="col-sm-10">
        <?= $this->tag->textField(['common_disease', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldCommonDisease']) ?>
    </div>
</div>

<div class="form-group">
    <label for="fieldOccupationalDisease" class="col-sm-2 control-label">Occupational Of Disease</label>
    <div class="col-sm-10">
        <?= $this->tag->textField(['occupational_disease', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldOccupationalDisease']) ?>
    </div>
</div>

<div class="form-group">
    <label for="fieldLaborAccident" class="col-sm-2 control-label">Labor Of Accident</label>
    <div class="col-sm-10">
        <?= $this->tag->textField(['labor_accident', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldLaborAccident']) ?>
    </div>
</div>

<div class="form-group">
    <label for="fieldPoisonArea" class="col-sm-2 control-label">Poison Of Area</label>
    <div class="col-sm-10">
        <?= $this->tag->textField(['poison_area', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldPoisonArea']) ?>
    </div>
</div>

<div class="form-group">
    <label for="fieldHealthClassCode" class="col-sm-2 control-label">Health Of Class Of Code</label>
    <div class="col-sm-10">
        <?= $this->tag->textField(['health_class_code', 'size' => 30, 'class' => 'form-control', 'id' => 'fieldHealthClassCode']) ?>
    </div>
</div>

<div class="form-group">
    <label for="fieldExpiryHealthCheck" class="col-sm-2 control-label">Expiry Of Health Of Check</label>
    <div class="col-sm-10">
        <?= $this->tag->textField(['expiry_health_check', 'type' => 'date', 'class' => 'form-control', 'id' => 'fieldExpiryHealthCheck']) ?>
    </div>
</div>

<div class="form-group">
    <label for="fieldStatus" class="col-sm-2 control-label">Status</label>
    <div class="col-sm-10">
        <?= $this->tag->textField(['status', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldStatus']) ?>
    </div>
</div>


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?= $this->tag->submitButton(['Search', 'class' => 'btn btn-default']) ?>
    </div>
</div>

</form>
