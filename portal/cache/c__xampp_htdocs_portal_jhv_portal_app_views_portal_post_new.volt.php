
<div class="text-center">
    <div class="btn-group btn-group-sm" role="group" aria-label="Function">
        <?= $this->tag->linkTo(['portal_post', '<i class="fa fa-search" aria-hidden="true"></i> Tìm Kiếm 搜索', 'class' => 'btn btn-outline-primary']) ?>
        
    </div>
</div>

</div></div></div>
<div id="content">
    <div class="card">
        <div class="card-body">

            <h5 class="underline">
                Tạo mới 創建
            </h5>

            <?= $this->getContent() ?>


<?= $this->tag->form(['portal_post/create', 'method' => 'post', 'autocomplete' => 'off', 'class' => 'form-horizontal']) ?>


    
    
        
    



    
    
        
    



    
    
        
    



    
    
        
    


<div class="form-group">
    <label for="fieldPostGroup">Nhóm 組</label>
    <?= $this->tag->select(['post_group', $post_group, 'using' => ['id', 'name'], 'class' => 'form-control', 'id' => 'fieldPostGroup']) ?>
</div>

<div class="form-group">
    <label for="fieldTitle">Tiêu đề 標題</label>
    <?= $this->tag->textField(['title', 'size' => 30, 'class' => 'form-control', 'id' => 'fieldTitle']) ?>
</div>

<div class="form-group">
    <label for="fieldDescription">Mô tả 描述</label>
    <?= $this->tag->textField(['description', 'size' => 30, 'class' => 'form-control', 'id' => 'fieldDescription']) ?>
</div>

<div class="form-group">
    <label for="fieldPicture">Hình ảnh 圖片</label>
    <?= $this->tag->textField(['picture', 'size' => 30, 'class' => 'form-control', 'id' => 'fieldPicture', 'onclick' => 'openKCFinder(this)', 'readonly' => 'readonly', 'placeholder' => 'Chọn hình 選擇圖片']) ?>
</div>

<div class="form-group">
    <label for="fieldContent">Nội dung 內容</label>
    <?= $this->tag->textArea(['content', 'cols' => '30', 'rows' => '4', 'class' => 'form-control', 'id' => 'fieldContent']) ?>
</div>





    
        
            
            
        
    
    
        
            
            
        
    


            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="fieldDateStart">Ngày bắt đầu</label>
                        <div class="input-group date" id="fieldDateStart" data-target-input="nearest">
                            <?= $this->tag->textField(['date_start', 'size' => 30, 'class' => 'form-control datetimepicker-input', 'id' => 'fieldDateStart', 'data-target' => '#fieldDateStart']) ?>
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
                            <?= $this->tag->textField(['date_end', 'size' => 30, 'class' => 'form-control datetimepicker-input', 'id' => 'fieldDateEnd', 'data-target' => '#fieldDateEnd']) ?>
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


    
    
        
    



    
    
        
    



    
    
        
    



    
    
        
    



    
    
        
    



<div class="form-group text-center">
    <button type="submit" class="btn btn-primary"><i class="fa fa-save" aria-hidden="true"></i> Lưu 保存</button>
</div>

</form>
