<div id="banner">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <span class="breadcrumb-item"><a href="<?= $this->url->get('') ?>"><small><i class="fa fa-home" aria-hidden="true"></i> Bookmeal </small></a></span>
            <li class="breadcrumb-item active" aria-current="page"><small>Search</small></li>
        </ol>
    </nav>
</div>
<div id="content">
<div class="card">
    <div class="page-header text-center">
        <h1><small> Kết quả tìm kiếm 搜索結果  </small> </h1>
    </div>
    <div class="card-body">
                   <span class="previous"><?= $this->tag->linkTo(['meal/index', 'Tìm Kiếm 搜索', 'class' => 'btn btn-outline-primary btn-sm my-4 mx-1']) ?>
                   <span class="next"><?= $this->tag->linkTo(['meal/new', 'Tạo mới 創建 ', 'class' => 'btn btn-outline-primary btn-sm my-4']) ?>
                   <div class="text-right"> <a href="<?= $this->url->get('meal/print') ?>" ><i class="fa fa-file-excel-o"></i> Print(Excel)</a></div>

            
                
                    
                        
                    
                

                
                    
                        
                             
                            
                                
                             
                        
                    
                

                 
                     
                         
                            
                         
                     
                
            
            <hr />
                          
                
           
                
                
                 
                
                
            
              
            
        

        



        <?= $this->getContent() ?>

        <div class="table-responsive">
            
                <table class="table table-bordered table-sm table-hover">
                    <thead class="text-center thead-light">
                    <tr>
                        <th>STT</th>
                        <th>Ngày Đặt</th>
                        <th>Người Đặt</th>
                        <th>Bộ Phận</th>
                        <th>Cơm Mặn Trưa</th>
                        <th>Phụ Mặn Trưa</th>
                        <th>Cơm Chay Trưa</th>
                        <th>Cháo Trưa</th>
                        <th>Phụ Chay Trưa</th>
                        <th>Cơm Mặn Chiều</th>
                        <th>Phụ Mặn Chiều</th>
                        <th>Phụ Chay Chiều</th>
                        <th>Mặn Suất Đêm</th>
                        <th>Chay Suất Đêm</th>
                        <th>Dọn Bàn Riêng</th>
                        <th>Ăn Buffet</th>
                        <th>Ghi Chú</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if (isset($page->items)) { ?>
                        <?php foreach ($page->items as $bookmeal) { ?>
                            <tr class="text-center">
                                <td class="text-left"><?= $bookmeal->bm_id ?></td>
                                <td><?= $bookmeal->date ?></td>
                                <td class="text-left"><?= $bookmeal->user_code ?></td>
                                <td class="text-left"><?= $bookmeal->name ?></td>
                                <td class="align-middle"><?= $bookmeal->lunch ?></td>
                                <td class="align-middle"><?= $bookmeal->lunch_add ?></td>
                                <td class="align-middle"><?= $bookmeal->lunch_veg ?></td>
                                <td class="align-middle"><?= $bookmeal->lunch_soup ?></td>
                                <td class="align-middle"><?= $bookmeal->lunch_veg_add ?></td>
                                <td class="align-middle"><?= $bookmeal->dinner ?></td>
                                <td class="align-middle"><?= $bookmeal->dinner_add ?></td>
                                <td class="align-middle"><?= $bookmeal->dinner_veg_add ?></td>
                                <td class="align-middle"><?= $bookmeal->supper ?></td>
                                <td class="align-middle"><?= $bookmeal->supper_veg ?></td>
                                <td class="align-middle"><?= $bookmeal->separate_table ?></td>
                                <td class="align-middle"><?= $bookmeal->buffet ?></td>
                                <td><?= $bookmeal->note ?></td>

                                
                                <td class="align-middle">  <a class="btn btn-outline-primary btn-sm <?php if ($bookmeal->user_code != $this->session->get('user') || $bookmeal->date < $xdate) { ?> disabled <?php } ?>" href="<?= $this->url->get('meal/edit/' . $bookmeal->bm_id) ?>" title="Sửa"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>  </a></td>
                                <td class="align-middle">  <a onclick="return confirm('Are you sure to DELETE?')" class="btn btn-outline-danger btn-sm <?php if ($bookmeal->user_code != $this->session->get('user') || $bookmeal->date < $xdate) { ?> disabled <?php } ?>" href="<?= $this->url->get('meal/delete/' . $bookmeal->bm_id) ?>" title="xoa"><i class="fa fa-trash-o"></i></a></td>

                                
                                
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
                <nav aria-label="...">
                    <ul class="pagination pagination-sm">
                        <li class="page-item"><a class="page-link" href="<?= $this->url->get('meal/search') ?>" title="Đầu tiên">&nbsp;<i class="fa fa-angle-double-left" aria-hidden="true"></i>&nbsp;</a></li>
                        <li class="page-item"><a class="page-link" href="<?= $this->url->get('meal/search?page=' . $page->before) ?>" title="Lùi">&nbsp;<i class="fa fa-angle-left" aria-hidden="true"></i>&nbsp;</a></li>
                        <li class="page-item"><a class="page-link" href="<?= $this->url->get('meal/search?page=' . $page->next) ?>" title="Tới">&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;</a></li>
                        <li class="page-item"><a class="page-link" href="<?= $this->url->get('meal/search?page=' . $page->last) ?>" title="Cuối cùng">&nbsp;<i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;</a></li>
                    </ul>
                </nav>
            </div>
        </div>
     </div>
</div>
</div>
