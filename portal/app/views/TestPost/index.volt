


    <div class="card mb-3">
        <div class="card-body">
            <div class="text-center">
              <div class="btn-group btn-group-sm">
                {{ link_to('TestPost/new','<i class="fa fa-file-o" aria-hidden ="true"> </i> Tạo Mới','class':'btn btn-outline-primary btn-sm') }}

              </div>
            </div>
        </div>
    </div>
<div id="content">
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="underline"> Tìm bài viết 找到文章 </h5>
            {{ content() }}
            <form class="form-horizontal" action="TestPost/search" method="post" autocomplete="off">
                <label for="fieldPostGroup">Nhóm 組</label>
                {#{{ select("post_group", '', "using":["id","name"], "useEmpty":true, "emptyText":"Tất cả 所有", "emptyValue":"", "class" : "form-control", "id" : "fieldPostGroup") }}#}
          <div class="form-group">
               <label for="fieldTitle">Tiêu đề 標題</label>
               {{ text_field("title", "size" : 30, "class" : "form-control", "id" : "fieldTitle") }}
          </div>

            </form>

            <div class="form-group text-center">
                {#{{ link_to('TestPost/search','<i class="fa fa-search"></i> Tìm Search','class':'btn btn-primary btn-sm') }}#}
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Tìm Search</button>
            </div>
        </div>
    </div>
</div>

