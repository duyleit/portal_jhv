
<div class="text-center">
    <div class="btn-group btn-group-sm" role="group" aria-label="Function">
        
        <?= $this->tag->linkTo(['portal_post/new', '<i class="fa fa-file-o" aria-hidden="true"></i> Tạo Mới 創建', 'class' => 'btn btn-outline-primary']) ?>
    </div>
</div>

</div></div></div>
<div id="content">
    <div class="card">
        <div class="card-body">

            <h5 class="underline">
                Tìm bài viết 找到文章
            </h5>

<?= $this->getContent() ?>

<?= $this->tag->form(['portal_post/search', 'method' => 'post', 'autocomplete' => 'off', 'class' => 'form-horizontal']) ?>


    
    
        
    



    
    
        
    





    
    
        
    



    
    
        
    





    
    
        
    


<div class="form-group">
    <label for="fieldPostGroup">Nhóm 組</label>
        <?= $this->tag->select(['post_group', $post_group, 'using' => ['id', 'name'], 'useEmpty' => true, 'emptyText' => 'Tất cả 所有', 'emptyValue' => '', 'class' => 'form-control', 'id' => 'fieldPostGroup']) ?>

        
            
            
            
            
            
            
            
            
            
            
            
        
</div>

<div class="form-group">
    <label for="fieldTitle">Tiêu đề 標題</label>
    <?= $this->tag->textField(['title', 'size' => 30, 'class' => 'form-control', 'id' => 'fieldTitle']) ?>
</div>


    
    
        
    



    
    
        
    





    
    
        
    





    
    
        
    



    
    
        
    



    
    
        
    



    
    
        
    







    
    
        
    



<div class="form-group text-center">
        <button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i> Tìm 搜索</button>
        
</div>

</form>
