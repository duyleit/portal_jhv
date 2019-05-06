<div id="banner">
    <div class="text-center">
        <p class="lead">Trung Thực, Kỷ Luật, Trách Nhiệm, Dũng Khí</p>
        <h1 class="display-4">誠信、紀律、當責、勇敢</h1>
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
                    {#<h5 class="red underline">Tin Mới 最新消息{% if session.get('user') != null %} <a href="{{ url('portal_news') }}" title="Chỉnh sửa 編輯"><i class="fa fa-edit" aria-hidden="true"></i></a>{% endif %}</h5>#}

         <h5 style="color:#a90707;">Tin mới {% if session.get('user') !=null%}  <a href="#" title="chỉnh sửa"><i class="fa fa-edit">  </i></a>  {% endif  %}   </h5>

                    {#{% for news0 in news %}#}
                       {#<img alt="32x32"  src="{{ news0.picture }}"  >#}
                     {#{{ news0.title }}#}
                        {#</br>#}
                     {#{{ news0.description }}#}
                        {#</br>#}
                    {#{% endfor %}#}

                    {% for news0 in news %}
                        <a href="{{ url('news/detail/'~news0.id) }}">
                            <div class="media text-muted pt-3">
                                {#<img alt="32x32" class="mr-2 rounded" src="{{ url('img/awards.jpg') }}" data-holder-rendered="true">#}
                                <img alt="32x32" class="mr-2 rounded" src="{{ news0.picture }}" data-holder-rendered="true">
                                    <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                    {#<div class="d-flex justify-content-between align-items-center w-100">#}
                                    <strong class="text-gray-dark">{{ news0.title }}</strong>

                                    {#</div>#}
                                    <span class="d-block">{{ news0.description }}</span>
                                </div>
                            </div>
                        </a>
                    {% endfor %}

                    {#{% if page.items is defined %}#}
                        {#{% for portal_new in page.items %}#}
                            {#<a href="{{ url('news/detail/'~portal_new.id) }}">#}
                                {#<div class="media text-muted pt-3">#}
                                    {#<img alt="32x32" class="mr-2 rounded" src="{{ url('img/awards.jpg') }}" data-holder-rendered="true">#}
                                    {#<div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">#}
                                        {#<div class="d-flex justify-content-between align-items-center w-100">#}
                                            {#<strong class="text-gray-dark">{{ portal_new.title }}</strong>#}
                                        {#</div>#}
                                        {#<span class="d-block">{{ portal_new.description }}</span>#}
                                    {#</div>#}
                                {#</div>#}
                            {#</a>#}
                        {#{% endfor %}#}
                    {#{% endif %}#}

                    <p class="text-right"><small><a href="{{ url('news') }}">Khác 其他 &blacktriangleright;</a></small></p>

                </div>

                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md activities">
                            <h5 class="green underline">Sự Kiện 活動訊息{% if session.get('user') != null %} <a href="{{ url('portal_news') }}" title="Chỉnh sửa 編輯"><i class="fa fa-edit" aria-hidden="true"></i></a>{% endif %}</h5>

                            {% for activity in activities %}
                                <a href="{{ url('news/detail/'~activity.id) }}">
                                    <div class="media text-muted pt-3">
                                        <img alt="32x32" class="mr-2 rounded" src="{{ activity.picture }}" data-holder-rendered="true">
                                        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                            <div class="d-flex justify-content-between align-items-center w-100">
                                                <strong class="text-gray-dark">{{ activity.title }}</strong>
                                            </div>
                                            <span class="d-block">{{ activity.description }}</span>
                                        </div>
                                    </div>
                                </a>
                            {% endfor %}

                            <p class="text-right"><small><a href="{{ url('activities') }}">Khác 其他 &blacktriangleright;</a></small></p>


                            <h5 class="orange underline">Chuyên Mục EHS 專欄 {% if session.get('user') != null %} <a href="{{ url('portal_file') }}" title="Chỉnh sửa 編輯"><i class="fa fa-edit" aria-hidden="true"></i></a>{% endif %}</h5>
                            <ul class="list-unstyled">

                                {% for ehs in ehss %}

                                    <li><a href="{{ ehs.file }}" title="{{ ehs.description }}" download="{{ ehs.filename }}">{{ ehs.title }}</a></li>

                                {% endfor %}

                            </ul>
                            <p class="text-right"><small><a href="{{ url('hr#ehs-hr') }}">Khác 其他 &blacktriangleright;</a></small></p>

                        </div>
                        <div class="col-md-5">
                            <h5 class="blue underline">Tiện Ích 公用事业</h5>



                            <div class="list-group">
                                <a href="http://192.168.0.27:888/meeting1/carassign/assignment/assignment.php" target="_blank" class="list-group-item list-group-item-action">
                                    <img class="img-fluid" src="{{ url('img/meeting-room.png') }}" alt="Card image cap">
                                    <h5 class="card-text text-center"><small>Đặt Phòng Họp</small><br />會議室預約申請</h5>
                                </a>
                                <hr>
                                <a href="{{ url('meal')}}" target="_blank" class="list-group-item list-group-item-action">
                                    <img class="img-fluid" src="{{ url('img/MealOrder.jpg') }}" alt="Card image cap">
                                    <h5 class="card-text text-center"><small>Đặt Cơm</small><br />Meal Order</h5>
                                </a>
                                <hr>
                                <div class="lightBox">
                                    <a href="{{ url('img/bs2.jpg') }}"><img src="{{ url('img/bs2.jpg') }}" class="img-fluid img-thumbnail"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>


<div id="row">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ url('img/b1.jpg') }}" class="d-block w-100" alt="...">
                {#<div class="carousel-caption d-none d-md-block">#}

                {#</div>#}
            </div>
            <div class="carousel-item">
                <img src="{{ url('img/b2.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>

</div>


