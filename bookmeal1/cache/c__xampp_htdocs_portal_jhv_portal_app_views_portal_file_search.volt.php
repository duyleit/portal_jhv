<div class="row">
    <nav>
        <ul class="pager">
            <li class="previous"><?= $this->tag->linkTo(['portal_file/index', 'Tìm kiếm tập tin 搜索文件']) ?></li>
            <li class="next"><?= $this->tag->linkTo(['portal_file/new', 'Tạo tập tin 創建文件']) ?></li>
        </ul>
    </nav>
</div>

<div class="page-header">
    <h1>Kết quả tìm kiếm 搜索結果</h1>
</div>

<?= $this->getContent() ?>

<div class="row">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
            <th>Nhóm 組</th>
            <th>Tiêu đề 標題</th>
            <th>Mô tả 描述</th>
                <th>Tập tin 文件</th>
            <th>Ngày up 改性</th>
                <th>Người up 作者</th>

                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php if (isset($page->items)) { ?>
        <?php foreach ($page->items as $portal_file) { ?>
            <tr>
                <td><?= $portal_file->id ?></td>
            <td><?= $portal_file->type ?></td>
            <td><?= $portal_file->title ?></td>
            <td><?= $portal_file->description ?></td>
                <td><a href="<?= $portal_file->file ?>" download="<?= $portal_file->title ?>">Tải 下載</a></td>
            <td><?= $portal_file->modified ?></td>
                <td><?= $portal_file->user_fullname ?></td>

                <td><?= $this->tag->linkTo(['portal_file/edit/' . $portal_file->id, 'Sửa 編輯']) ?></td>
                <td><?= $this->tag->linkTo(['portal_file/delete/' . $portal_file->id, 'Xóa 刪除']) ?></td>
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
            <ul class="pagination">
                <li><?= $this->tag->linkTo(['portal_file/search', 'Đầu 第一 ']) ?></li>
                <li><?= $this->tag->linkTo(['portal_file/search?page=' . $page->before, 'Lùi 以前 ']) ?></li>
                <li><?= $this->tag->linkTo(['portal_file/search?page=' . $page->next, 'Kế tiếp 下一個 ']) ?></li>
                <li><?= $this->tag->linkTo(['portal_file/search?page=' . $page->last, 'Cuối 持續']) ?></li>
            </ul>
        </nav>
    </div>
</div>
