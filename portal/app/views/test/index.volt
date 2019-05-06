{{ partial("partial/headerBanner", ['title': 'Ban Tổng Giám Đốc 總經理部']) }}

<div id="content">
<div class="card">
    <div class="card-body">
      <div class="row">
          <div class="col-md news">
              <h5 class="green underline">Chính Sách Công Ty 公司政策 </h5>

              {% for policy in policies %}

                  <a href="{{url('TestPost/detail/'~policy.id)  }}">
                  <div class="media text-muted pt-3">
                      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                      <div class="d-flex justify-content-between align-items-center w-100">
                         <strong class="text-gray-dark">{{ policy.title }}</strong>
                     </div>
                         <span class="d-block">{{ policy.description }}</span>
                      </div>
                   </div>
                  </a>

              {% endfor %}
                <p class="text-right"><small><a href="#">Khác 其他 &blacktriangleright;</a></small></p>
          </div>

          <div class="col-md">
              <label>Sơ Đồ Tổ Chức 組織</label>
              <hr>
<div class="lightBox">

    <a href="{{ url('upload\images\2_BTGĐ_總經理部\2.2_Sơ_đồ_tổ_chức_組織\2019\ORG_VN.jpg') }}">
        <img class="img-fluid img-thumbnail" src="{{ url('upload\images\2_BTGĐ_總經理部\2.2_Sơ_đồ_tổ_chức_組織\2019\ORG_VN.jpg') }}" alt="...">
    </a>

    <a href="{{ url('upload\images\2_BTGĐ_總經理部\2.2_Sơ_đồ_tổ_chức_組織\2019\ORG_VN.jpg') }}">
        <img class="img-fluid img-thumbnail" src="{{ url('upload\images\2_BTGĐ_總經理部\2.2_Sơ_đồ_tổ_chức_組織\2019\ORG_CH.jpg') }}" alt="...">
    </a>
</div>

              </div>
          </div>
       </div>
        <div class="row">
            <div class="col-md">
                <label for="">Lịch Công Tác 公司行事曆</label>
                <hr>
            </div>
         </div>
    </div>
</div>
</div>