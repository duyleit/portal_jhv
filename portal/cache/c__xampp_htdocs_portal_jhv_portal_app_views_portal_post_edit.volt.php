
<div class="text-center">
    <div class="btn-group btn-group-sm" role="group" aria-label="Function">
        <?= $this->tag->linkTo(['portal_post', '<i class="fa fa-search" aria-hidden="true"></i> Tìm Kiếm 搜索', 'class' => 'btn btn-outline-primary']) ?>
        <?= $this->tag->linkTo(['portal_post/new', '<i class="fa fa-file-o" aria-hidden="true"></i> Tạo Mới 創建', 'class' => 'btn btn-outline-primary', 'target' => '_blank']) ?>
        <?= $this->tag->linkTo(['post/detail/' . $post_id, '<i class="fa fa-file-text-o" aria-hidden="true"></i> Xem 視圖', 'class' => 'btn btn-outline-primary', 'target' => '_blank']) ?>
    </div>
</div>

</div></div></div>
<div id="content">
    <div class="card">
        <div class="card-body">

            <h5 class="underline">
                Chỉnh sửa 編輯
            </h5>

<?= $this->getContent() ?>

            <?= $this->tag->form(['portal_post/save', 'method' => 'post', 'autocomplete' => 'off', 'class' => 'form-horizontal']) ?>

            <div class="form-group d-none">
                <label for="fieldId" class="col-sm-2 control-label">Id</label>
                <div class="col-sm-10">
                    <?= $this->tag->textField(['id', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldId']) ?>
                </div>
            </div>


    
    
        
    



    
    
        
    



    
    
        
    



            <div class="form-group">
                <label for="fieldPostGroup">Nhóm 組: <span class="font-weight-bold"></span></label>
                <input type="text" class="form-control" id="fieldPostGroup" aria-describedby="Nhóm 組" placeholder="<?= $post_group->name ?>" disabled>
                
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
                <small><a class="text-muted" href="https://squoosh.app/" target="_blank">Tiện ích nén hình ảnh 圖像壓縮工具</a></small>
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
                        <input name="news" value="1" type="checkbox" class="form-check-input" id="fieldNews"<?php if ($news == 1) { ?> checked<?php } ?>>
                        <label class="form-check-label" for="fieldNews">Tin mới 最新消息</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group form-check">
                        <input name="status" value="1" type="checkbox" class="form-check-input" id="fieldStatus"<?php if ($status == 1) { ?> checked<?php } ?>>
                        <label class="form-check-label" for="fieldStatus">Hiển thị 顯示</label>
                    </div>
                </div>
            </div>

            <hr>




            
                
                
                    
                
            

            
                
                
                    
                
            

            
                
                
                    
                
            

            
                
                
                    
                
            

            
                
                
                    
                
            


            <?= $this->tag->hiddenField(['id']) ?>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary"><i class="fa fa-save" aria-hidden="true"></i> Lưu 保存</button>
            </div>

            </form>




</div></div></div>
<div id="content">
    <div class="card">
        <div class="card-body">







<h5 class="underline" id="upload">Chọn tập tin đính kèm 選擇附件</h5>
<?= $this->tag->form(['portal_post/upfile/' . $post_id, 'method' => 'post', 'autocomplete' => 'off', 'class' => 'form-inline needs-validation my-4']) ?>

<div class="d-none">
    <input name="post_id" value="<?= $post_id ?>">
</div>

            
                
                
            

            <input type="text" id="fieldFile" name="file" class="col-md-8 mr-2 form-control readonly" onclick="uploadFiles(this)" id="fieldFile" placeholder="Chọn file tải lên 選擇上傳文件" required>
            <button type="submit" class="col-md btn btn-primary">Gửi tập tin mới 發送新文件</button>


    



    
        
    


</form>



    



    



    
        
    








<div class="table-responsive">
    <table class="table table-bordered table-hover table-sm text-center">
        <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Tập tin 文件名</th>
            <th>Người gửi 用戶已上傳</th>
            <th>Xóa 刪除</th>
        </tr>
        </thead>
        <tbody>

            <?php foreach ($portal_files as $portal_file) { ?>
                <tr>
                    <td><?= $portal_file->id ?></td>
                    <td class="text-left"><a href="<?= $portal_file->file ?>" download="<?= $portal_file->filename ?>"><?= $portal_file->filename ?> <i class="fa fa-download" aria-hidden="true"></i></a></td>
                    <td class="small"><?= $portal_file->user_fullname ?> (<?= $portal_file->created ?>)</td>
                    <td><?= $this->tag->linkTo(['portal_post/delfile/' . $post_id . '/' . $portal_file->id, '<i class="fa fa-trash" aria-hidden="true"></i>', 'title' => 'Xóa 刪除', 'class' => 'del-file btn btn-outline-danger btn-sm']) ?></td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</div>