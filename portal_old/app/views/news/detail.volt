
{{ partial("partial/headerBanner", ['title': portal_new.title]) }}

<div id="content">

    <div class="card">
        <div class="card-body">
            <div class="row">

                <div class="col-md-9 news-detail">
                    <h5 class="green underline">{{ portal_new.title }}{% if session.get('user') != null %} <a href="{{ url('portal_news/edit/'~portal_new.id) }}" title="Chỉnh sửa 編輯"><i class="fa fa-edit" aria-hidden="true"></i></a>{% endif %}</h5>

                    <p class="font-weight-bold">{{ portal_new.description }}</p>

                    <img src="{{ portal_new.picture }}" class="img-fluid d-block">

                    {{ portal_new.content }}

                    <p class="text-right">Admin</p>

                    {#<h5 class="green underline">More Item 其他 Khác</h5>#}
                    {#<ul class="list-unstyled">#}
                        {#<li><a href="#">Praesent in at leo sed felis</a></li>#}
                        {#<li><a href="#">Maecenas a tempor neque sapien</a></li>#}
                        {#<li><a href="#">In ut lectus dui neque sapien</a></li>#}
                        {#<li><a href="#">Cras cursus ipsum consequat euismod</a></li>#}
                        {#<li><a href="#">Ut sed interdum maurigue ipsum</a></li>#}
                        {#<li><a href="#">Praesent in at leo sed felis</a></li>#}
                        {#<li><a href="#">Maecenas a tempor neque sapien</a></li>#}
                        {#<li><a href="#">In ut lectus dui neque sapien</a></li>#}
                        {#<li><a href="#">Cras cursus ipsum consequat euismod</a></li>#}
                        {#<li><a href="#">Ut sed interdum maurigue ipsum</a></li>#}
                    {#</ul>#}

                </div>

                <div class="col-md">

                    <img src="{{ url('img/bs1.jpg') }}" class="img-fluid">

                </div>
            </div>

        </div>
    </div>


</div>