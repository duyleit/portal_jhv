<div class="page-header">
    <h1>
        Tìm kiếm tập tin 搜索文件
    </h1>
    <p>
        <?= $this->tag->linkTo(['portal_file/new', 'Tạo tập tin 創建文件']) ?>
    </p>
</div>

<?= $this->getContent() ?>

<?= $this->tag->form(['portal_file/search', 'method' => 'post', 'autocomplete' => 'off', 'class' => 'form-horizontal']) ?>


    
    
        
    



    
    
        
    



    
    
        
    



    
    
        
    



    
    
        
            
            
            
            
            
            
        
    


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
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Tìm 尋求</button>
        
    </div>
</div>

</form>
