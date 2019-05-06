
<div id="banner">

    <?php if ($this->session->get('user') != null) { ?><p class="text-center"><a href="<?= $this->url->get('portal_post/edit/' . $portal_urgent->id) ?>" title="Chỉnh sửa 編輯"><i class="fa fa-edit" aria-hidden="true"></i></a></p><?php } ?>
    <?php if ($portal_urgent->status == 1) { ?>
        <a style="color: white" href="<?= $this->url->get('post/detail/' . $portal_urgent->id) ?>">
            <marquee style="background: orangered;color: white;padding-top: 5px ;">
                <h3><?= $portal_urgent->title ?></h3>
            </marquee>
        </a>
    <?php } ?>
    

    <div id="slogan">
        <h3 >Trung Thực, Kỷ Luật, Trách Nhiệm, Dũng Khí</h3>
        <h3>誠信、紀律、當責、勇氣</h3>
    </div>

    <div id="carousel">
        <img src="<?= $this->url->get('img/5.jpg') ?>" alt="Image 5" />
        <img src="<?= $this->url->get('img/1.jpg') ?>" alt="Image 1" />
        <img src="<?= $this->url->get('img/2.jpg') ?>" alt="Image 2" />
        <img src="<?= $this->url->get('img/3.jpg') ?>" alt="Image 3" />
        <img src="<?= $this->url->get('img/4.jpg') ?>" alt="Image 4" />
    </div>

</div>


<div id="content">

    <div class="card">
        <div class="card-body">

            <div class="row">
                <div class="col-md-5 news">
                    <h5 class="red underline">Tin Mới 最新消息<?php if ($this->session->get('user') != null) { ?> <a href="<?= $this->url->get('portal_post') ?>" title="Chỉnh sửa 編輯"><i class="fa fa-edit" aria-hidden="true"></i></a><?php } ?></h5>

                    <?php foreach ($news as $news0) { ?>
                        <a href="<?= $this->url->get('post/detail/' . $news0->id) ?>">
                            <div class="media text-muted">
                                
                                
                                <div class="date mr-2 rounded text-center">
                                    <h4 class="font-weight-lighter"><?= date('d', strtotime($news0->modified)) ?></h4>
                                    <p><?= date('m/Y', strtotime($news0->modified)) ?></p>
                                </div>
                                <div class="media-body mb-0 small lh-125 text-justify">
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        <strong class="text-gray-dark"><?= $news0->title ?></strong>
                                    </div>
                                    <span class="d-block"><?= $news0->description ?></span>
                                </div>
                            </div>
                        </a>
                        <hr style="padding: 0; margin: 10px 0;">
                    <?php } ?>

                    <p class="text-right"><small><a href="<?= $this->url->get('post') ?>">Khác 其他 &blacktriangleright;</a></small></p>

                </div>

                <div class="col-md">
                    <div class="row">
                        <div class="col-md activities">
                            <h5 class="green underline">Sự Kiện 活動訊息<?php if ($this->session->get('user') != null) { ?> <a href="<?= $this->url->get('portal_post') ?>" title="Chỉnh sửa 編輯"><i class="fa fa-edit" aria-hidden="true"></i></a><?php } ?></h5>

                            <?php foreach ($activities as $activity) { ?>
                                <a href="<?= $this->url->get('post/detail/' . $activity->id) ?>">
                                    <div class="media text-muted">
                                        <img alt="32x32" class="mr-2 rounded" src="<?= $activity->picture ?>" data-holder-rendered="true">
                                        <div class="media-body mb-0 small lh-125 text-justify">
                                            <div class="d-flex justify-content-between align-items-center w-100">
                                                <strong class="text-gray-dark"><?= $activity->title ?></strong>
                                            </div>
                                            <span class="d-block"><?= $activity->description ?></span>
                                        </div>
                                    </div>
                                </a>
                                <hr style="padding: 0; margin: 10px 0;">
                            <?php } ?>

                            <p class="text-right"><small><a href="<?= $this->url->get('post/activities') ?>">Khác 其他 &blacktriangleright;</a></small></p>


                            <h5 class="orange underline">Chuyên Mục HSE 專欄 <?php if ($this->session->get('user') != null) { ?> <a href="<?= $this->url->get('portal_post') ?>" title="Chỉnh sửa 編輯"><i class="fa fa-edit" aria-hidden="true"></i></a><?php } ?></h5>
                            <ul class="list-unstyled">

                                
                                    
                                    
                                

                                <?php foreach ($ehss as $ehs) { ?>
                                    <a href="<?= $this->url->get('post/detail/' . $ehs->id) ?>">
                                        <div class="media text-muted">
                                            <img alt="32x32" class="mr-2 rounded" src="<?= $ehs->picture ?>" data-holder-rendered="true">
                                            <div class="media-body mb-0 small lh-125 text-justify">
                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                    <strong class="text-gray-dark"><?= $ehs->title ?></strong>
                                                </div>
                                                <span class="d-block"><?= $ehs->description ?></span>
                                            </div>
                                        </div>
                                    </a>
                                    <hr style="padding: 0; margin: 10px 0;">
                                <?php } ?>

                            </ul>
                            <p class="text-right"><small><a href="<?= $this->url->get('post/hse') ?>">Khác 其他 &blacktriangleright;</a></small></p>

                        </div>
                        <div class="col-md-5">
                            <h5 class="blue underline">Liên kết thường dùng<br />常用連結</h5>



                            <div class="list-group">
                                <a href="http://192.168.0.27:888/meeting1/carassign/assignment/assignment.php" target="_blank" class="list-group-item list-group-item-action">
                                    <img class="img-fluid" src="<?= $this->url->get('img/meeting-room.png') ?>" alt="Card image cap">
                                    <p class="card-text text-center">Đặt Phòng Họp<br />會議室預約</p>
                                </a>
                                <hr>
                                <a href="http://cloud.jiahsin.com.vn/" target="_blank" class="list-group-item list-group-item-action">
                                    <img class="img-fluid" src="<?= $this->url->get('img/cloud.jpg') ?>" alt="Card image cap">
                                    <p class="card-text text-center">Dữ Liệu Đám Mây<br />雲端空間</p>
                                </a>
                                
                                
                                    
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>


<div id="slider">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= $this->url->get('img/b1.jpg') ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= $this->url->get('img/b2.jpg') ?>" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>

</div>