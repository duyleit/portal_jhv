
<?= $this->partial('partial/headerBanner', ['title' => 'Tìm Tập Tin 搜索文件']) ?>

<div id="content">

    <div class="card">
        <div class="card-body">

            <ul class="nav nav-tabs ">
                <li class="nav-item">
                    <a class="nav-link" href="<?= $this->url->get('post/search/item') ?>">Tìm Bài Viết 搜索文章</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?= $this->url->get('file/search/item') ?>">Tìm Tập Tin 搜索文件</a>
                </li>
            </ul>

            <?= $this->tag->form(['file/search', 'method' => 'post', 'autocomplete' => 'off', 'class' => 'form-inline']) ?>

                <label class="col-md-2 my-1 mr-2" for="fieldFilename"></label>

                <?= $this->tag->textField(['filename', 'size' => 30, 'class' => 'col-md-5 form-control my-4 mx-sm-3', 'id' => 'fieldFilename', 'placeholder' => 'Tên tập tin 文件名']) ?>

                <button type="submit" class="col-md-2 btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i> Tìm 搜索</button>

            </form>

            <?= $this->getContent() ?>
        </div>
    </div>

<?php if (isset($page->items)) { ?>
    <div class="card">
        <div class="card-body">
                <h5 class="green underline">Kết Quả Tìm Kiếm 搜索結果</h5>
                <?php foreach ($page->items as $item) { ?>
                    <div class="small post-item">

                        <p class="file-download">
                        <a href="<?= $item->file ?>" class="btn btn-outline-secondary btn-sm" download="<?= $item->filename ?>"><?= $item->filename ?> <i class="fa fa-download" aria-hidden="true"></i></a>
                        </p>
                        
                        
                            
                                
                                    
                                        
                                        
                                        
                                    
                                    
                                
                            
                        
                        
                            
                                
                                
                            
                        
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
                                <li class="page-item"><a class="page-link" href="<?= $this->url->get('file/search') ?>" title="Đầu tiên">&nbsp;<i class="fa fa-angle-double-left" aria-hidden="true"></i>&nbsp;</a></li>
                                <li class="page-item"><a class="page-link" href="<?= $this->url->get('file/search?page=' . $page->before) ?>" title="Lùi">&nbsp;<i class="fa fa-angle-left" aria-hidden="true"></i>&nbsp;</a></li>
                                <li class="page-item"><a class="page-link" href="<?= $this->url->get('file/search?page=' . $page->next) ?>" title="Tới">&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;</a></li>
                                <li class="page-item"><a class="page-link" href="<?= $this->url->get('file/search?page=' . $page->last) ?>" title="Cuối cùng">&nbsp;<i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

        </div>
    </div>
<?php } ?>

</div>