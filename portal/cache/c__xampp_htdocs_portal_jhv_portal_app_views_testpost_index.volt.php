


    <div class="card mb-3">
        <div class="card-body">
            <div class="text-center">
              <div class="btn-group btn-group-sm">
                <?= $this->tag->linkTo(['TestPost/new', '<i class="fa fa-file-o" aria-hidden ="true"> </i> Tạo Mới', 'class' => 'btn btn-outline-primary btn-sm']) ?>

              </div>
            </div>
        </div>
    </div>
<div id="content">
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="underline"> Tìm bài viết 找到文章 </h5>
            <?= $this->getContent() ?>
            <form class="form-horizontal" action="TestPost/search" method="post" autocomplete="off">
                <label for="fieldPostGroup">Nhóm 組</label>
                
          <div class="form-group">
               <label for="fieldTitle">Tiêu đề 標題</label>
               <?= $this->tag->textField(['title', 'size' => 30, 'class' => 'form-control', 'id' => 'fieldTitle']) ?>
          </div>

            </form>

            <div class="form-group text-center">
                
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Tìm Search</button>
            </div>
        </div>
    </div>
</div>

