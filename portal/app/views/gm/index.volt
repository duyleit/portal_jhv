
{{ partial("partial/headerBanner", ['title': 'Ban Tổng Giám Đốc 總經理部']) }}


<div id="content">

    <div class="card">
        <div class="card-body">
            <div class="row">

                <div class="col-md news">
                    <h5 class="green underline">Chính Sách Công Ty 公司政策{% if session.get('user') != null %} <a href="{{ url('portal_post') }}" title="Chỉnh sửa 編輯"><i class="fa fa-edit" aria-hidden="true"></i></a>{% endif %}</h5>

                    {% for policy in policies %}
                        <a href="{{ url('post/detail/'~policy.id) }}">
                            <div class="media text-muted pt-3">
                                {#<img alt="32x32" class="mr-2 rounded" src="{{ url('img/awards.jpg') }}" data-holder-rendered="true">#}
                                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        <strong class="text-gray-dark">{{ policy.title }}</strong>
                                    </div>
                                    <span class="d-block">{{ policy.description }}</span>
                                </div>
                            </div>
                        </a>
                    {% endfor %}

                    <p class="text-right"><small><a href="{{ url('post/group/2') }}">Khác 其他 &blacktriangleright;</a></small></p>
                </div>


                <div class="col-md">
                    <h5 class="blue underline">Sơ Đồ Tổ Chức 組織</h5>
                    <div class="lightBox">
                        <a href="{{ url('upload/images/2_BTGĐ_總經理部/2.2_Sơ_đồ_tổ_chức_組織/2019/ORG_VN.jpg') }}">
                            <img class="img-fluid img-thumbnail" src="{{ url('upload/images/2_BTGĐ_總經理部/2.2_Sơ_đồ_tổ_chức_組織/2019/ORG_VN.jpg') }}">
                        </a>
                        <a href="{{ url('upload/images/2_BTGĐ_總經理部/2.2_Sơ_đồ_tổ_chức_組織/2019/ORG_CH.jpg') }}">
                            <img class="img-fluid img-thumbnail" src="{{ url('upload/images/2_BTGĐ_總經理部/2.2_Sơ_đồ_tổ_chức_組織/2019/ORG_CH.jpg') }}">
                        </a>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md">
                    <h5 class="orange underline">Lịch Công Tác 公司行事曆{% if session.get('user') != null %} <a href="{{ url('portal_post') }}" title="Chỉnh sửa 編輯"><i class="fa fa-edit" aria-hidden="true"></i></a>{% endif %}</h5>
                    {#<img class="img-fluid" src="{{ url('img/c.jpg') }}">#}
                    {#<div id='script-warning'>#}
                        {#<code>php/get-events.php</code> must be running.#}
                    {#</div>#}

                    <div id='loading'>loading...</div>

                    <div id='calendar'></div>
                </div>
            </div>

        </div>
    </div>


</div>