<div class="row">
    <nav>
        <ul class="pager">
            <li class="previous"><?= $this->tag->linkTo(['portal_file', 'Tìm file 文件搜索']) ?></li>
        </ul>
    </nav>
</div>

<div class="page-header">
    <h1>
        Chỉnh sửa file 文件更改
    </h1>
</div>

<?= $this->getContent() ?>

<?= $this->tag->form(['portal_file/save', 'method' => 'post', 'autocomplete' => 'off', 'class' => 'form-horizontal']) ?>


    
    
        
    



    
    
        
    



    
    
        
    




    
    
        
            
            
            
            
            
            
        
    


<div class="form-group">
    <label for="fieldType" class="col-sm-2 control-label">Nhóm 組</label>
    <div class="col-sm-10">
        <select name="type" class="form-control" id="fieldType">
            <option value="1">Tài Liệu Lưu Trình, Quy Trình VN HR 程序文件</option>
            <option value="2">Tài Liệu Lưu Trình, Quy Trình Int. HR 程序文件</option>
            <option value="3">Tài Liệu Quy Trình ESH 程序文件</option>
            <option value="4">Biểu Mẫu Thường Dùng 常用表單</option>
            <option value="5">Tạp Chí Công Ty 公司月刊</option>
            <option value="">Tất cả 所有文件</option>
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
        <?= $this->tag->textField(['description', 'size' => 30, 'class' => 'form-control', 'id' => 'fieldDescription']) ?>
    </div>
</div>


<div class="form-group">
    <label for="fieldFile" class="col-sm-2 control-label">File 文件</label>
    <div class="col-sm-10">
        <?= $this->tag->textField(['file', 'size' => 30, 'class' => 'form-control', 'id' => 'fieldFile', 'onclick' => 'uploadFiles(this)', 'readonly' => 'readonly', 'placeholder' => 'Select file']) ?>
        
    </div>
</div>


    
    
        
    



    
    
        
    



    
    
        
    



<?= $this->tag->hiddenField(['id']) ?>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Lưu 保存</button>
        
    </div>
</div>

</form>
