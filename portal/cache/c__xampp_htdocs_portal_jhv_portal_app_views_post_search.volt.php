
<?= $this->partial('partial/headerBanner', ['title' => 'Tìm Bài Viết 搜索帖子']) ?>

<div id="content">

    <div class="card">
        <div class="card-body">
            <ul class="nav nav-tabs ">
                <li class="nav-item">
                    <a class="nav-link active" href="<?= $this->url->get('post/search/item') ?>">Tìm Bài Viết 搜索文章</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $this->url->get('file/search/item') ?>">Tìm Tập Tin 搜索文件</a>
                </li>
            </ul>

            

            <?= $this->tag->form(['post/search', 'method' => 'post', 'autocomplete' => 'off', 'class' => 'form-inline']) ?>

                
                
                
                
                
                

                <label class="col-md-1 my-1 mr-sm-4" for="fieldTitle"></label>

                <?= $this->tag->select(['post_group', $post_group, 'using' => ['id', 'name'], 'useEmpty' => true, 'emptyText' => 'Tất cả 所有', 'emptyValue' => '', 'class' => 'col-md-3 custom-select my-4 mr-sm-2', 'id' => 'fieldPostGroup']) ?>

                
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                

                <?= $this->tag->textField(['title', 'size' => 30, 'class' => 'col-md-4 form-control mx-sm-2', 'id' => 'fieldTitle', 'placeholder' => 'Tiêu đề 標題']) ?>

                <button type="submit" class="col-md-2 btn btn-primary my-4 ml-sm-2"><i class="fa fa-search" aria-hidden="true"></i> Tìm 搜索</button>

                
                    
                    
                        
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                        
                    
                

                
                    
                    
                        
                    
                

                
                
                
                
                
                

                
                
                
                
                
                

                
                
                
                
                
                

                
                    
                        
                    
                

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
                            <li class="page-item"><a class="page-link" href="<?= $this->url->get('post/search') ?>" title="Trang đầu 回頁首">&nbsp;<i class="fa fa-angle-double-left" aria-hidden="true"></i>&nbsp;</a></li>
                            <li class="page-item"><a class="page-link" href="<?= $this->url->get('post/search?page=' . $page->before) ?>" title="Trang sau 下一頁">&nbsp;<i class="fa fa-angle-left" aria-hidden="true"></i>&nbsp;</a></li>
                            <li class="page-item"><a class="page-link" href="<?= $this->url->get('post/search?page=' . $page->next) ?>" title="Trang tiếp 上一頁">&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;</a></li>
                            <li class="page-item"><a class="page-link" href="<?= $this->url->get('post/search?page=' . $page->last) ?>" title="Trang cuối 回頁尾">&nbsp;<i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
    </div>
<?php } ?>

</div>