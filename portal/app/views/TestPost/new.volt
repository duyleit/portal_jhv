
<div id="content">
    <div class="card">
        <div class="card-body">
            <h5 class="underline">Tạo mới 創建</h5>

            <form action="TestPost/create" method="post" class="form-horizontal">
                <div class="form-group">
                    <label for="">Hình ảnh 圖片</label>
                    {{ text_field('picture','size':30,'class':'form-control','id':'fieldPicture','readonly':'readonly','placeholder':'Chọn hình','onclick':'openKCFinder(this)') }}
                </div>

                <div class="form-group">
                    <label for="">Nội dung</label>
                    {{ text_area('content','row':5,'col':15,'class':'form-control','id':'fieldContent') }}
                </div>
           <div class="row">
               <div class="col-md">
                   <div class="form-group">
                       <label for="">Ngày bắt đầu</label>
                     <div class="input-group date" >
                       {{ text_field('startday','class':'form-control datetimepicker-input','id':'fieldDateStart','size':30) }}
                       <div class="input-group-append" data-target="#fieldDateStart" data-toggle="datetimepicker">
                           <div class="input-group-text"> <i class="fa fa-calendar"></i></div>
                       </div>
                     </div>
                   </div>
               </div>

               <div class="col-md">
                   <div class="form-group">
                       <label for="">Ngày kết thúc</label>
                       {{ text_field('endday','class':'form-control','id':'fieldEndDay','size':15) }}
                   </div>
               </div>
           </div>

                <div class="row">
                    <div class="col-md">
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="fieldNews" value="1" name="news">
                            <label class="form-check-label">Tin mới 最新消息</label>

                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="fieldStatus" value="1" name="status" checked>
                            <label for="">Hiển thị 顯示</label>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Lưu </button>
                </div>

              </form>
        </div>
    </div>

</div>