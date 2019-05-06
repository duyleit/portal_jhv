
<?= $this->partial('partial/headerBanner', ['title' => $portal_new->title]) ?>

<div id="content">

    <div class="card">
        <div class="card-body">
            <div class="row">

                <div class="col-md-9 news-detail">
                    <h5 class="green underline"><?= $portal_new->title ?><?php if ($this->session->get('user') != null) { ?> <a href="<?= $this->url->get('portal_news/edit/' . $portal_new->id) ?>" title="Chỉnh sửa 編輯"><i class="fa fa-edit" aria-hidden="true"></i></a><?php } ?></h5>

                    <p class="font-weight-bold"><?= $portal_new->description ?></p>

                    <img src="<?= $portal_new->picture ?>" class="img-fluid d-block">

                    <?= $portal_new->content ?>

                    <p class="text-right">Admin</p>

                    
                    
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    

                </div>

                <div class="col-md">

                    <img src="<?= $this->url->get('img/bs1.jpg') ?>" class="img-fluid">

                </div>
            </div>

        </div>
    </div>


</div>