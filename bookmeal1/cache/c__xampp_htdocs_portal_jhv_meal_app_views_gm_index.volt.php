
<?= $this->partial('partial/headerBanner', ['title' => 'Ban Tổng Giám Đốc 總經理部']) ?>

<div id="content">

    <div class="card">
        <div class="card-body">
            <div class="row">

                <div class="col-md news">
                    <h5 class="green underline">Chính Sách Công Ty 公司政策<?php if ($this->session->get('user') != null) { ?> <a href="<?= $this->url->get('portal_news') ?>" title="Chỉnh sửa 編輯"><i class="fa fa-edit" aria-hidden="true"></i></a><?php } ?></h5>

                    <?php foreach ($policies as $policy) { ?>
                        <a href="<?= $this->url->get('news/detail/' . $policy->id) ?>">
                            <div class="media text-muted pt-3">
                                <img alt="32x32" class="mr-2 rounded" src="<?= $this->url->get('img/awards.jpg') ?>" data-holder-rendered="true">
                                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        <strong class="text-gray-dark"><?= $policy->title ?></strong>
                                    </div>
                                    <span class="d-block"><?= $policy->description ?></span>
                                </div>
                            </div>
                        </a>
                    <?php } ?>

                </div>


                <div class="col-md">
                    <h5 class="blue underline">Lịch Công Tác 公司行事曆</h5>
                    <div class="lightBox">
                        <a href="img/c.jpg">
                            <img class="img-fluid img-thumbnail" src="img/c.jpg">
                        </a>
                    </div>
                    <h7>&nbsp;</h7>

                    <h5 class="orange underline">Sơ Đồ Tổ Chức 組織</h5>
                    <div class="lightBox">
                        <a href="img/oc.jpg">
                            <img class="img-fluid img-thumbnail" src="img/oc.jpg">
                        </a>
                    </div>

                </div>

            </div>

        </div>
    </div>


</div>