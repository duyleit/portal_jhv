
<div id="content">
    <div class="card">
        <div class="card-body">
            <div class="page-header">
                <h5 class="underline">Kết quả tìm kiếm 搜索結果</h5>
            </div>
        </div>
    </div>

<?= $this->getContent() ?>

<div class="table-responsive">
    <table class="table table-bordered table-hover table-sm">
        <thead class="text-center thead-light">
        <tr>

            <th>Id</th>
            <th style="width: 48%; max-width: 48%">Tiêu đề</th>
            <th>Tin mới</th>
            <th>Hiện Thị</th>
            <th>Sửa</th>
            <th>Xóa</th>
            <th>Nhóm</th>
            <th>Cán bộ tạo/sửa</th>

        </tr>
        </thead>
        <tbody>
        <?php if (isset($page->items)) { ?>
            <?php foreach ($page->items as $portal_post) { ?>
                <tr class="text-center align-middle">
                    <td class="align-middle"><?= $portal_post->id ?></td>
                    <td class="text-left" title="<?= $portal_post->description ?>"><?= $portal_post->title ?></td>
                    <td class="align-middle"><?php if ($portal_post->news == 1) { ?> <i class="fa fa-check green" aria-hiden="true"></i><?php } else { ?> <i class="fa fa-close red" aria-hiden="true"></i><?php } ?></td>
                    <td class="align-middle"><?php if ($portal_post->news == 1) { ?> <i class="fa fa-check green" aria-hiden="true"></i><?php } ?></td>
                    <td class="align-middle"><?= $this->tag->linkTo(['TestPost/edit/' . $portal_post->id, 'title' => 'sua', '<i class="fa fa-pencil-square-o" arian-hidden="true"> </i>', 'class' => 'btn btn-outline-primary btn-sm']) ?></td>
                    <td class="align-middle"><?= $this->tag->linkTo(['TestPost/delete/' . $portal_post->id, 'title' => 'xoa', '<i class="fa fa-trash-o" arian-hiden="true"> </i', 'class' => 'btn btn-outline-danger btn-sm del-post']) ?></td>
                    
                    
                    
                    
                    
                    
                    
                    <td class="align-middle"><?= $portal_post->post_group ?></td>
                    <td><small><?= $portal_post->user_fullname ?> <?= $portal_post->created ?>/ </br > <?= $portal_post->edited_user_fullname ?> <?= $portal_post->modified ?> </small></td>

                    
                    
                </tr>
            <?php } ?>
        <?php } ?>
        </tbody>
    </table>
</div>

<div class="row">
    <div class="col-sm-1">
        <p class="pagination" style="line-height: 1.42857;padding: 6px 12px;">
            <?= $page->current . '/' . $page->total_pages ?>
        </p>
    </div>
    <div class="col-sm-11">
        <nav>
            
                
                
                
                
            

            <ul class="pagination pagination-sm">
                <li class="page-item"><a class="page-link" href="<?= $this->url->get('TestPost/search') ?>" title="Trang đầu 回頁首">&nbsp;<i class="fa fa-angle-double-left" aria-hidden="true"></i>&nbsp;</a></li>
                <li class="page-item"><a class="page-link" href="<?= $this->url->get('TestPost/search?page=' . $page->before) ?>" title="Trang sau 下一頁">&nbsp;<i class="fa fa-angle-left" aria-hidden="true"></i>&nbsp;</a></li>
                <li class="page-item"><a class="page-link" href="<?= $this->url->get('TestPost/search?page=' . $page->next) ?>" title="Trang tiếp 上一頁">&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;</a></li>
                <li class="page-item"><a class="page-link" href="<?= $this->url->get('TestPost/search?page=' . $page->last) ?>" title="Trang cuối 回頁尾">&nbsp;<i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;</a></li>
            </ul>

        </nav>
    </div>
</div>
</div>