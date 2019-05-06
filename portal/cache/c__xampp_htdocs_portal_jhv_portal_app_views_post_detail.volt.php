
<?= $this->partial('partial/headerBanner', ['title' => $portal_post->title]) ?>

<?= $this->getContent() ?>

<div id="content">

    <div class="card">
        <div class="card-body">
            <div class="row">

                <div class="col-md-9 news-detail">
                    <h5 class="green underline"><?= $portal_post->title ?><?php if ($this->session->get('user') != null && $portal_post->id > 2) { ?> <a href="<?= $this->url->get('portal_post/edit/' . $portal_post->id) ?>" title="Chỉnh sửa 編輯"><i class="fa fa-edit" aria-hidden="true"></i></a><?php } ?></h5>

                    <?php if ($portal_file_number > 0) { ?>
                    
                    <p class="file-download">
                        <small class="font-italic">Tập tin 文件: </small>
                        
                        <?php foreach ($portal_files as $item) { ?>
                            <a href="<?= $item->file ?>" class="btn btn-outline-secondary btn-sm" download="<?= $item->filename ?>"><?= $item->filename ?> <i class="fa fa-download" aria-hidden="true"></i></a>
                        <?php } ?>
                    </p>
                    <hr>
                    <?php } ?>

                    <p class="font-weight-bold"><?= $portal_post->description ?></p>

                    <?php if ($portal_post->picture != '') { ?>
                        <img src="<?= $portal_post->picture ?>" class="img-fluid d-block">
                    <?php } ?>

                    <?= $portal_post->content ?>

                    
                    <?php if ($this->session->get('user') != null) { ?>
                    <p class="text-right font-weight-bold">
                        <small class="font-italic font-weight-normal">(<?= $portal_post->created ?>) Tạo bởi 作者 </small><?= $portal_post->user_fullname ?>
                    <?php if ($portal_post->edited_user_fullname != null) { ?>
                        <br /><small class="font-italic font-weight-normal">(<?= $portal_post->modified ?>) Sửa bởi 編輯 </small><?= $portal_post->edited_user_fullname ?>
                    <?php } ?>
                    </p>
                    <?php } else { ?>
                    <p class="text-right font-weight-bold my-5">
                        <small class="font-italic font-weight-normal">(<?= $portal_post->modified ?>) - </small><?= $department ?>
                    </p>
                    <?php } ?>

                    
                    
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    

                </div>

                <div class="col-md">

                    <img src="<?= $this->url->get('img/bs1.jpg') ?>" class="img-fluid">

                </div>
            </div>

        </div>
    </div>


</div>