<div id="banner">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <span class="breadcrumb-item"><a href="<?= $this->url->get('') ?>"><small><i class="fa fa-home" aria-hidden="true"></i> Bookmeal </small></a></span>
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
            <?= $this->tag->linkTo(['bookmeal', 'Tìm Kiếm 搜索', 'class' => 'btn btn-outline-success  btn-sm my-2 mx-4']) ?>
            <?= $this->getContent() ?>
            <?= $this->tag->form(['meal/save', 'method' => 'post', 'autocomplete' => 'off', 'class' => 'form-horizontal']) ?>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-inline my-2 ,mx-sm-1">
                        <label for="fieldDate" class="col-sm-6 control-label">Ngày Đặt: </label>
                        <div class="col-sm-6">
                            <?= $this->tag->textField(['date', 'type' => 'date', 'class' => 'form-control', 'id' => 'fieldDate', 'readonly' => 'readonly', 'size' => 15]) ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-inline mx-sm-3 my-2">
                        <label for="fieldUserCode" class="col-sm-6 control-label">Người Đặt: </label>
                        <div class="col-sm-6">
                            <?= $this->tag->textField(['user_code', 'size' => 15, 'class' => 'form-control', 'id' => 'fieldUserCode', 'readonly' => 'readonly']) ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-inline mx-sm-3 my-2">
                        <label for="fieldDeptCode" class="col-sm-4 control-label">Bộ Phận: </label>
                        <div class="col-sm-8">
                            <?= $this->tag->textField(['dept_code', 'size' => 15, 'class' => 'form-control', 'id' => 'fieldDeptCode', 'readonly' => 'readonly']) ?>
                            
                            
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
                            <?php if ($olddate < $datenow) { ?>
                                 <?= $this->tag->numericField(['lunch', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldLunch', 'min' => 0, 'max' => 9999, 'readonly' => 'readonly']) ?>
                            <?php } else { ?>
                                 <?= $this->tag->numericField(['lunch', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldLunch', 'min' => 0, 'max' => 9999]) ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-inline mx-sm-3 my-2">
                        <label for="fieldLunchVeg" class="col-sm-6 control-label">Cơm Chay Trưa: </label>
                        <div class="col-sm-6">
                            <?php if ($olddate < $datenow) { ?>
                                <?= $this->tag->numericField(['lunch_veg', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldLunchVeg', 'min' => 0, 'max' => 9999, 'readonly' => 'readonly']) ?>
                            <?php } else { ?>
                                <?= $this->tag->numericField(['lunch_veg', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldLunchVeg', 'min' => 0, 'max' => 9999]) ?>
                            <?php } ?>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-inline mx-sm-3 my-2">
                        <label for="fieldLunchSoup" class="col-sm-6 control-label">Cháo Trưa:  </label>
                        <div class="col-sm-6">
                            <?php if ($olddate < $datenow) { ?>
                                <?= $this->tag->numericField(['lunch_soup', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldLunchSoup', 'min' => 0, 'max' => 9999, 'readonly' => 'readonly']) ?>
                            <?php } else { ?>
                                <?= $this->tag->numericField(['lunch_soup', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldLunchSoup', 'min' => 0, 'max' => 9999]) ?>
                            <?php } ?>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="row green">
                <div class="col-sm">
                    <div class="form-inline mx-sm-3 my-2">
                        <label for="fieldLunchAdd" class="col-sm-6 control-label">Phụ Mặn Trưa: </label>
                        <div class="col-sm-6">
                            <?php if ($olddate < $datenow) { ?>
                                <?= $this->tag->numericField(['lunch_add', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldLunchAdd', 'min' => 0, 'max' => 9999, 'readonly' => 'readonly']) ?>
                            <?php } else { ?>
                                <?= $this->tag->numericField(['lunch_add', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldLunchAdd', 'min' => 0, 'max' => 9999]) ?>
                            <?php } ?>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-inline mx-sm-3 my-2">
                        <label for="fieldLunchVegAdd" class="col-sm-6 control-label">Phụ Chay Trưa: </label>
                        <div class="col-sm-6">
                            <?php if ($olddate < $datenow) { ?>
                                <?= $this->tag->numericField(['lunch_veg_add', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldLunchVegAdd', 'min' => 0, 'max' => 9999, 'readonly' => 'readonly']) ?>
                            <?php } else { ?>
                                <?= $this->tag->numericField(['lunch_veg_add', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldLunchVegAdd', 'min' => 0, 'max' => 9999]) ?>
                            <?php } ?>
                            
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
                            <?php if ($olddate < $datenow) { ?>
                                <?= $this->tag->numericField(['dinner', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldDinner', 'min' => 0, 'max' => 9999, 'readonly' => 'readonly']) ?>
                            <?php } else { ?>
                                <?= $this->tag->numericField(['dinner', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldDinner', 'min' => 0, 'max' => 9999]) ?>
                            <?php } ?>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm">

                    <div class="form-inline mx-sm-3 my-2">
                        <label for="fieldDinnerAdd" class="col-sm-6 control-label">Phụ Mặn Chiều: </label>
                        <div class="col-sm-6">
                            <?php if ($olddate < $datenow) { ?>
                                <?= $this->tag->numericField(['dinner_add', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldDinnerAdd', 'min' => 0, 'max' => 9999, 'readonly' => 'readonly']) ?>
                            <?php } else { ?>
                                <?= $this->tag->numericField(['dinner_add', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldDinnerAdd', 'min' => 0, 'max' => 9999]) ?>
                            <?php } ?>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-inline mx-sm-3 my-2">
                        <label for="fieldDinnerVegAdd" class="col-sm-6 control-label">Phụ Chay Chiều: </label>
                        <div class="col-sm-6">
                            <?php if ($olddate < $datenow) { ?>
                                <?= $this->tag->numericField(['dinner_veg_add', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldDinnerVegAdd', 'min' => 0, 'max' => 9999, 'readonly' => 'readonly']) ?>
                            <?php } else { ?>
                                <?= $this->tag->numericField(['dinner_veg_add', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldDinnerVegAdd', 'min' => 0, 'max' => 9999]) ?>
                            <?php } ?>
                            
                        </div>
                    </div>
                </div>
            </div>



            <div class="row red">
                <div class="col-sm">
                    <div class="form-inline mx-sm-3 my-2">
                        <label for="fieldSupper" class="col-sm-6 control-label">Mặn Suất Đêm:  </label>
                        <div class="col-sm-6">
                            <?php if ($olddate < $datenow) { ?>
                                <?= $this->tag->numericField(['supper', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldSupper', 'min' => 0, 'max' => 9999, 'readonly' => 'readonly']) ?>
                            <?php } else { ?>
                                <?= $this->tag->numericField(['supper', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldSupper', 'min' => 0, 'max' => 9999]) ?>
                            <?php } ?>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                     <div class="form-inline mx-sm-3 my-2">
                        <label for="fieldSupperVeg" class="col-sm-6 control-label">Chay Suất Đêm: </label>
                        <div class="col-sm-6">
                            <?php if ($olddate < $datenow) { ?>
                                <?= $this->tag->numericField(['supper_veg', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldSupperVeg', 'min' => 0, 'max' => 9999, 'readonly' => 'readonly']) ?>
                            <?php } else { ?>
                                <?= $this->tag->numericField(['supper_veg', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldSupperVeg', 'min' => 0, 'max' => 9999]) ?>
                            <?php } ?>
                            
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
                            <?php if ($olddate < $datenow) { ?>
                                <?= $this->tag->numericField(['separate_table', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldSeparateTable', 'min' => 0, 'max' => 9999, 'readonly' => 'readonly']) ?>
                            <?php } else { ?>
                                <?= $this->tag->numericField(['separate_table', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldSeparateTable', 'min' => 0, 'max' => 9999]) ?>
                            <?php } ?>
                            
                        </div>
                    </div>

                </div>
                <div class="col-sm">
                    <div class="form-inline mx-sm-3 my-2">
                        <label for="fieldBuffet" class="col-sm-6 control-label">Ăn Buffet: </label>
                        <div class="col-sm-6">
                            <?php if ($olddate < $datenow) { ?>
                                <?= $this->tag->numericField(['buffet', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldBuffet', 'min' => 0, 'max' => 9999, 'readonly' => 'readonly']) ?>
                            <?php } else { ?>
                                <?= $this->tag->numericField(['buffet', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldBuffet', 'min' => 0, 'max' => 9999]) ?>
                            <?php } ?>
                            
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
            <?php if ($olddate < $datenow) { ?>
                <?= $this->tag->textArea(['note', 'cols' => 120, 'rows' => '4', 'class' => 'form-control', 'id' => 'fieldNote', 'readonly' => 'readonly']) ?>
            <?php } else { ?>
                <?= $this->tag->textArea(['note', 'cols' => 120, 'rows' => '4', 'class' => 'form-control', 'id' => 'fieldNote']) ?>
            <?php } ?>
            
            
        </div>
    </div>
</div>


            
                
                
                    
                
            

            
                
                
                    
                
            

            
                
                
                    
                
            


            <?= $this->tag->hiddenField(['bm_id']) ?>
    <div class="form-group text-center my-3">
        <?php if ($olddate < $datenow) { ?>
            <?= $this->tag->submitButton(['Lưu 保存', 'class' => 'btn btn-primary d-none']) ?>
        <?php } else { ?>
            <?= $this->tag->submitButton(['Lưu 保存', 'class' => 'btn btn-primary']) ?>
        <?php } ?>

    </div>


            </form>

        </div>
    </div>
</div>
