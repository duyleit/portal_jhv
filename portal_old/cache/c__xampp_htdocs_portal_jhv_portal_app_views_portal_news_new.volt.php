<div class="row">
    <nav>
        <ul class="pager">
            <li class="previous"><?= $this->tag->linkTo(['portal_news', 'Tìm Kiếm 搜索']) ?></li>
        </ul>
    </nav>
</div>

<div class="page-header">
    <h1>
        Tạo mới 創建
    </h1>
</div>

<?= $this->getContent() ?>

<?= $this->tag->form(['portal_news/create', 'method' => 'post', 'autocomplete' => 'off', 'class' => 'form-horizontal']) ?>


    
    
        
    



    
    
        
    



    
    
        
            
            
            
        
    


<div class="form-group">
    <label for="fieldType" class="col-sm-2 control-label">Nhóm 組</label>
    <div class="col-sm-10">
        <select name="type" class="form-control" id="fieldType">
            <option value="1">Tin Mới 最新消息</option>
            <option value="2">Sự Kiện 活動訊息</option>
            <option value="3">Chính Sách Công Ty 公司政策</option>
            <option value="">Tất cả 所有</option>
        </select>
    </div>
</div>

<div class="form-group">
    <label for="fieldTitle" class="col-sm-2 control-label">Tiêu đề 標題</label>
    <div class="col-sm-10">
        <?= $this->tag->textField(['title', 'size' => 30, 'class' => 'form-control', 'id' => 'fieldTitle']) ?>
    </div>
</div>

<div class="form-group">
    <label for="fieldDescription" class="col-sm-2 control-label">Mô tả 描述</label>
    <div class="col-sm-10">
        <?= $this->tag->textField(['description', 'cols' => '30', 'rows' => '2', 'class' => 'form-control', 'id' => 'fieldDescription']) ?>
    </div>
</div>

<div class="form-group">
    <label for="fieldPicture" class="col-sm-2 control-label">Hình ảnh 圖片</label>
    <div class="col-sm-10">
        <?= $this->tag->textField(['picture', 'size' => 30, 'class' => 'form-control', 'id' => 'fieldPicture', 'onclick' => 'openKCFinder(this)', 'readonly' => 'readonly', 'placeholder' => 'Select picture']) ?>
    </div>
</div>


    
    
        
    


<div class="form-group">
    <label for="fieldContent" class="col-sm-2 control-label">Nội dung 內容</label>
    <div class="col-sm-10">
        <?= $this->tag->textArea(['content', 'cols' => '30', 'rows' => '4', 'class' => 'form-control', 'id' => 'fieldContent']) ?>
    </div>
</div>


    
    
        
    



    
    
        
    



    
    
        
    



<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Lưu 保存</button>
        
    </div>
</div>

</form>
