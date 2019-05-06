
<div id="banner">

    {% if session.get('user') != null %}<p class="text-center"><a href="{{ url('portal_post/edit/'~portal_urgent.id) }}" title="Chỉnh sửa 編輯"><i class="fa fa-edit" aria-hidden="true"></i></a></p>{% endif %}
    {% if portal_urgent.status==1 %}
        <a style="color: white" href="{{ url('post/detail/'~portal_urgent.id) }}">
            <marquee style="background: orangered;color: white;padding-top: 5px ;">
                <h3>{{ portal_urgent.title }}</h3>
            </marquee>
        </a>
    {% endif %}
    

    <div id="slogan">
        <h3 >Trung Thực, Kỷ Luật, Trách Nhiệm, Dũng Khí</h3>
        <h3>誠信、紀律、當責、勇氣</h3>
    </div>

    <div id="carousel">
        <img src="{{ url('img/5.jpg') }}" alt="Image 5" />
        <img src="{{ url('img/1.jpg') }}" alt="Image 1" />
        <img src="{{ url('img/2.jpg') }}" alt="Image 2" />
        <img src="{{ url('img/3.jpg') }}" alt="Image 3" />
        <img src="{{ url('img/4.jpg') }}" alt="Image 4" />
    </div>

</div>


<div id="content">

    <div class="card">
        <div class="card-body">

            <div class="row">
                <div class="col-md-5 news">
                    <h5 class="red underline">Tin Mới 最新消息{% if session.get('user') != null %} <a href="{{ url('portal_post') }}" title="Chỉnh sửa 編輯"><i class="fa fa-edit" aria-hidden="true"></i></a>{% endif %}</h5>

                    {% for news0 in news %}
                        <a href="{{ url('post/detail/'~news0.id) }}">
                            <div class="media text-muted">
                                {#<img alt="32x32" class="mr-2 rounded" src="{{ url('img/awards.jpg') }}" data-holder-rendered="true">#}
                                {#<img alt="32x32" class="mr-2 rounded" src="{{ news0.picture }}" data-holder-rendered="true">#}
                                <div class="date mr-2 rounded text-center">
                                    <h4 class="font-weight-lighter">{{ date('d', strtotime(news0.modified)) }}</h4>
                                    <p>{{ date('m/Y', strtotime(news0.modified)) }}</p>
                                </div>
                                <div class="media-body mb-0 small lh-125 text-justify">
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        <strong class="text-gray-dark">{{ news0.title }}</strong>
                                    </div>
                                    <span class="d-block">{{ news0.description }}</span>
                                </div>
                            </div>
                        </a>
                        <hr style="padding: 0; margin: 10px 0;">
                    {% endfor %}

                    <p class="text-right"><small><a href="{{ url('post') }}">Khác 其他 &blacktriangleright;</a></small></p>

                </div>

                <div class="col-md">
                    <div class="row">
                        <div class="col-md activities">
                            <h5 class="green underline">Sự Kiện 活動訊息{% if session.get('user') != null %} <a href="{{ url('portal_post') }}" title="Chỉnh sửa 編輯"><i class="fa fa-edit" aria-hidden="true"></i></a>{% endif %}</h5>

                            {% for activity in activities %}
                                <a href="{{ url('post/detail/'~activity.id) }}">
                                    <div class="media text-muted">
                                        <img alt="32x32" class="mr-2 rounded" src="{{ activity.picture }}" data-holder-rendered="true">
                                        <div class="media-body mb-0 small lh-125 text-justify">
                                            <div class="d-flex justify-content-between align-items-center w-100">
                                                <strong class="text-gray-dark">{{ activity.title }}</strong>
                                            </div>
                                            <span class="d-block">{{ activity.description }}</span>
                                        </div>
                                    </div>
                                </a>
                                <hr style="padding: 0; margin: 10px 0;">
                            {% endfor %}

                            <p class="text-right"><small><a href="{{ url('post/activities') }}">Khác 其他 &blacktriangleright;</a></small></p>


                            <h5 class="orange underline">Chuyên Mục HSE 專欄 {% if session.get('user') != null %} <a href="{{ url('portal_post') }}" title="Chỉnh sửa 編輯"><i class="fa fa-edit" aria-hidden="true"></i></a>{% endif %}</h5>
                            <ul class="list-unstyled">

                                {#{% for ehs in ehss %}#}
                                    {#<li><a href="{{ ehs.file }}" title="{{ ehs.description }}" download="{{ ehs.filename }}">{{ ehs.title }}</a></li>#}
                                    {#<li><a href="{{ url('post/detail/'~ehs.id) }}">{{ ehs.title }}</a></li>#}
                                {#{% endfor %}#}

                                {% for ehs in ehss %}
                                    <a href="{{ url('post/detail/'~ehs.id) }}">
                                        <div class="media text-muted">
                                            <img alt="32x32" class="mr-2 rounded" src="{{ ehs.picture }}" data-holder-rendered="true">
                                            <div class="media-body mb-0 small lh-125 text-justify">
                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                    <strong class="text-gray-dark">{{ ehs.title }}</strong>
                                                </div>
                                                <span class="d-block">{{ ehs.description }}</span>
                                            </div>
                                        </div>
                                    </a>
                                    <hr style="padding: 0; margin: 10px 0;">
                                {% endfor %}

                            </ul>
                            <p class="text-right"><small><a href="{{ url('post/hse') }}">Khác 其他 &blacktriangleright;</a></small></p>

                        </div>
                        <div class="col-md-5">
                            <h5 class="blue underline">Liên kết thường dùng<br />常用連結</h5>



                            <div class="list-group">
                                <a href="http://192.168.0.27:888/meeting1/carassign/assignment/assignment.php" target="_blank" class="list-group-item list-group-item-action">
                                    <img class="img-fluid" src="{{ url('img/meeting-room.png') }}" alt="Card image cap">
                                    <p class="card-text text-center">Đặt Phòng Họp<br />會議室預約</p>
                                </a>
                                <hr>
                                <a href="http://cloud.jiahsin.com.vn/" target="_blank" class="list-group-item list-group-item-action">
                                    <img class="img-fluid" src="{{ url('img/cloud.jpg') }}" alt="Card image cap">
                                    <p class="card-text text-center">Dữ Liệu Đám Mây<br />雲端空間</p>
                                </a>
                                {#<hr>#}
                                {#<div class="lightBox">#}
                                    {#<a href="{{ url('img/bs2.jpg') }}"><img src="{{ url('img/bs2.jpg') }}" class="img-fluid img-thumbnail"></a>#}
                                {#</div>#}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>


<div id="slider">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ url('img/b1.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ url('img/b2.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>

</div>