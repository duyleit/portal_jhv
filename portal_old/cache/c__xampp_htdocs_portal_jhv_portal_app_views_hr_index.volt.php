
<?= $this->partial('partial/headerBanner', ['title' => 'Bộ Phận Nhân Sự 人力資源']) ?>


<div id="content">

    <div class="card">
        <div class="card-body">
            <h5 class="green underline">Tài Liệu Lưu Trình, Quy Trình <small class="font-italic">(áp dụng cho người Việt)</small> VN HR程序文件<?php if ($this->session->get('user') != null) { ?> <a href="<?= $this->url->get('portal_file') ?>" title="Chỉnh sửa 編輯"><i class="fa fa-edit" aria-hidden="true"></i></a><?php } ?></h5>
            <p class="file-download">

                <?php foreach ($vnhrs as $vnhr) { ?>

                    <a href="<?= $vnhr->file ?>"  title="<?= $vnhr->description ?>" download="<?= $vnhr->filename ?>"><?= $vnhr->title ?></a>

                <?php } ?>

                
                
                
                
                
                
                
                
                
                
            </p>

        </div>
    </div>

    <div id="int-hr" class="card">
        <div class="card-body">
            <h5 class="red underline">Tài Liệu Lưu Trình, Quy Trình <small class="font-italic">(áp dụng cho người nước ngoài)</small> Int.HR程序文件<?php if ($this->session->get('user') != null) { ?> <a href="<?= $this->url->get('portal_file') ?>" title="Chỉnh sửa 編輯"><i class="fa fa-edit" aria-hidden="true"></i></a><?php } ?></h5>
            <p class="file-download">

                <?php foreach ($inhrs as $inhr) { ?>

                    <a href="<?= $inhr->file ?>" class="btn btn-outline-secondary btn-sm" title="<?= $inhr->description ?>" download="<?= $inhr->filename ?>"><?= $inhr->title ?></a>

                <?php } ?>

            </p>

        </div>
    </div>

    <div id="ehs-hr" class="card">
        <div class="card-body">
            <h5 class="blue underline">Tài Liệu Quy Trình ESH 程序文件<?php if ($this->session->get('user') != null) { ?> <a href="<?= $this->url->get('portal_file') ?>" title="Chỉnh sửa 編輯"><i class="fa fa-edit" aria-hidden="true"></i></a><?php } ?></h5>
            <p class="file-download">

                <?php foreach ($ehss as $ehs) { ?>

                    <a href="<?= $ehs->file ?>" class="btn btn-outline-secondary btn-sm" title="<?= $ehs->description ?>" download="<?= $ehs->filename ?>"><?= $ehs->title ?></a>

                <?php } ?>

            </p>

        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="orange underline">Biểu Mẫu Thường Dùng 常用表單<?php if ($this->session->get('user') != null) { ?> <a href="<?= $this->url->get('portal_file') ?>" title="Chỉnh sửa 編輯"><i class="fa fa-edit" aria-hidden="true"></i></a><?php } ?></h5>
            <p class="file-download">

                <?php foreach ($forms as $form) { ?>

                    <a href="<?= $form->file ?>" class="btn btn-outline-secondary btn-sm" title="<?= $form->description ?>" download="<?= $form->filename ?>"><?= $form->title ?></a>

                <?php } ?>

            </p>

        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="underline">Tạp Chí Công Ty 公司月刊<?php if ($this->session->get('user') != null) { ?> <a href="<?= $this->url->get('portal_file') ?>" title="Chỉnh sửa 編輯"><i class="fa fa-edit" aria-hidden="true"></i></a><?php } ?></h5>
            <p class="file-download">

                <?php foreach ($magazines as $magazine) { ?>

                    <a href="<?= $magazine->file ?>" class="btn btn-outline-secondary btn-sm" title="<?= $magazine->description ?>" download="<?= $magazine->filename ?>"><?= $magazine->title ?></a>

                <?php } ?>

            </p>

        </div>
    </div>


</div>