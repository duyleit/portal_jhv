<div class="page-header">
    <h1>
        Tìm bài viết 找到文章
    </h1>
    <p>
        <?= $this->tag->linkTo(['portal_news/new', 'Tạo bài mới 創建新的']) ?>
    </p>
</div>

<?= $this->getContent() ?>

<?= $this->tag->form(['portal_news/search', 'method' => 'post', 'autocomplete' => 'off', 'class' => 'form-horizontal']) ?>


    
    
        
    



    
    
        
    



    
    
        
    


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
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Tìm 搜索</button>
        
    </div>
</div>

</form>
