
{{ partial("partial/headerBanner", ['title': portal_post.title]) }}

{{ content() }}

<div id="content">

    <div class="card">
        <div class="card-body">
            <div class="row">

                <div class="col-md-9 news-detail">
                    <h5 class="green underline">{{ portal_post.title }}{% if session.get('user') != null and portal_post.id>2 %} <a href="{{ url('portal_post/edit/'~portal_post.id) }}" title="Chỉnh sửa 編輯"><i class="fa fa-edit" aria-hidden="true"></i></a>{% endif %}</h5>

                    {% if portal_file_number > 0 %}
                    {#<h6 class="blue underline font-italic">Tập tin liên quan 文件相關</h6>#}
                    <p class="file-download">
                        <small class="font-italic">Tập tin 文件: </small>
                        {#<a href="#" class="btn btn-outline-secondary btn-sm" ">File tải xuống 1</a>#}
                        {% for item in portal_files %}
                            <a href="{{ item.file }}" class="btn btn-outline-secondary btn-sm" download="{{ item.filename }}">{{ item.filename }} <i class="fa fa-download" aria-hidden="true"></i></a>
                        {% endfor %}
                    </p>
                    <hr>
                    {% endif %}

                    <p class="font-weight-bold">{{ portal_post.description }}</p>

                    {% if portal_post.picture != "" %}
                        <img src="{{ portal_post.picture }}" class="img-fluid d-block">
                    {% endif %}

                    {{ portal_post.content }}

                    {#<hr>#}
                    {% if session.get('user') != null %}
                    <p class="text-right font-weight-bold">
                        <small class="font-italic font-weight-normal">({{ portal_post.created }}) Tạo bởi 作者 </small>{{ portal_post.user_fullname }}
                    {% if portal_post.edited_user_fullname != null %}
                        <br /><small class="font-italic font-weight-normal">({{ portal_post.modified }}) Sửa bởi 編輯 </small>{{ portal_post.edited_user_fullname }}
                    {% endif %}
                    </p>
                    {% else %}
                    <p class="text-right font-weight-bold my-5">
                        <small class="font-italic font-weight-normal">({{ portal_post.modified }}) - </small>{{ department }}
                    </p>
                    {% endif %}

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