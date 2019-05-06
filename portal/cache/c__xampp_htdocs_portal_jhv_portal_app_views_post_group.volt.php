
<?= $this->partial('partial/headerBanner', ['title' => $portal_post_group->name]) ?>

<div id="content">
    <div class="card">
        <div class="card-body">
            
                
            <h5 class="green underline"><?= $portal_post_group->name ?><?php if ($this->session->get('user') != null) { ?> <a href="<?= $this->url->get('portal_post') ?>" title="Chỉnh sửa 編輯"><i class="fa fa-edit" aria-hidden="true"></i></a><?php } ?></h5>

<?php if (isset($page->items)) { ?>
            <?php foreach ($page->items as $item) { ?>
                <div class="small post-item">
                    <a href="<?= $this->url->get('post/detail/' . $item->id) ?>">
                        <div class="media text-muted ">
                            <div class="media-body">
                                <div class="row d-flex">
                                    <div class="col-md-10 col-sm-9 text-justify">
                                        <strong class="text-gray-dark"><?= $item->title ?></strong>
                                    </div>
                                    <div class="col-md-2 col-sm-3 text-right">
                                        <span class="font-italic w-25 text-right" style="color: #bbb;">(<?= $item->modified ?>)</span>
                                    </div>
                                    
                                    
                                    
                                </div>
                                <span class="d-block"><?= $item->description ?></span>
                            </div>
                        </div>
                    </a>
                    <?php if (isset($files[$item->id]) && $files[$item->id] != '') { ?>
                        <p class="file-download">
                            <span class="font-italic">Tập tin 文件: </span>
                            <?= $files[$item->id] ?>
                        </p>
                    <?php } ?>
                </div>
            <?php } ?>

            <div class="row">
                <div class="col-sm-1">
                    <p class="pagination" style="line-height: 1.42857;padding: 6px 12px;">
                        <?= $page->current . '/' . $page->total_pages ?>
                    </p>
                </div>
                <div class="col-sm-11">
                    <nav aria-label="...">
                        <ul class="pagination pagination-sm">
                            <li class="page-item"><a class="page-link" href="<?= $this->url->get('post/group/' . $portal_post_group->id) ?>" title="Trang đầu 回頁首">&nbsp;<i class="fa fa-angle-double-left" aria-hidden="true"></i>&nbsp;</a></li>
                            <li class="page-item"><a class="page-link" href="<?= $this->url->get('post/group/' . $portal_post_group->id . '?page=' . $page->before) ?>" title="Trang sau 下一頁">&nbsp;<i class="fa fa-angle-left" aria-hidden="true"></i>&nbsp;</a></li>
                            <li class="page-item"><a class="page-link" href="<?= $this->url->get('post/group/' . $portal_post_group->id . '?page=' . $page->next) ?>" title="Trang tiếp 上一頁">&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;</a></li>
                            <li class="page-item"><a class="page-link" href="<?= $this->url->get('post/group/' . $portal_post_group->id . '?page=' . $page->last) ?>" title="Trang cuối 回頁尾">&nbsp;<i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

<?php } else { ?>
            <p>Không tìm thấy dữ liệu 找不到數據!</p>
<?php } ?>

                
                
                    
                
            
        </div>
    </div>
</div>