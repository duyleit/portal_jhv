
{{ partial("partial/headerBanner", ['title': 'Tin Mới 最新消息']) }}

<div id="content">

    <div class="card">
        <div class="card-body">
            <div class="row">

                <div class="col-md-9 news">
                    <h5 class="green underline">Tin Mới 最新消息{% if session.get('user') != null %} <a href="{{ url('portal_post/search') }}" title="Chỉnh sửa 編輯"><i class="fa fa-edit" aria-hidden="true"></i></a>{% endif %}</h5>

                    {% if page.items is defined %}
                        {% for portal_post in page.items %}
                            <a href="{{ url('post/detail/'~portal_post.id) }}">
                                <div class="media text-muted">
                                    {#<img alt="32x32" class="mr-2 rounded" src="{{ url('img/awards.jpg') }}" data-holder-rendered="true">#}
                                    <div class="date mr-2 rounded text-center">
                                        <h4 class="font-weight-lighter">{{ date('d', strtotime(portal_post.modified)) }}</h4>
                                        <p>{{ date('m/Y', strtotime(portal_post.modified)) }}</p>
                                    </div>
                                    <div class="media-body mb-0 small lh-125 text-justify">
                                        <div class="d-flex justify-content-between align-items-center w-100">
                                            <strong class="text-gray-dark">{{ portal_post.title }}</strong>
                                        </div>
                                        <span class="d-block">{{ portal_post.description }}</span>
                                    </div>
                                </div>
                            </a>
                            <hr style="padding: 0; margin: 10px 0;">
                        {% endfor %}
                    {% endif %}


                    <div class="row">
                        <div class="col-sm-1">
                            <p class="pagination" style="line-height: 1.42857;padding: 6px 12px;">
                                {{ page.current~"/"~page.total_pages }}
                            </p>
                        </div>
                        <div class="col-sm-11">
                            <nav aria-label="...">
                                <ul class="pagination pagination-sm">
                                    <li class="page-item"><a class="page-link" href="{{ url('post') }}" title="Trang đầu 回頁首">&nbsp;<i class="fa fa-angle-double-left" aria-hidden="true"></i>&nbsp;</a></li>
                                    <li class="page-item"><a class="page-link" href="{{ url('post?page='~page.before) }}" title="Trang sau 下一頁">&nbsp;<i class="fa fa-angle-left" aria-hidden="true"></i>&nbsp;</a></li>
                                    <li class="page-item"><a class="page-link" href="{{ url('post?page='~page.next) }}" title="Trang tiếp 上一頁">&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;</a></li>
                                    <li class="page-item"><a class="page-link" href="{{ url('post?page='~page.last) }}" title="Trang cuối 回頁尾">&nbsp;<i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>


                    {#<div class="row">#}
                        {#<div class="col-sm-1">#}
                            {#<p class="pagination" style="line-height: 1.42857;padding: 6px 12px;">#}
                                {#{{ page.current~"/"~page.total_pages }}#}
                            {#</p>#}
                        {#</div>#}
                        {#<div class="col-sm-11">#}
                            {#<nav aria-label="...">#}
                                {#<ul class="pagination pagination-sm">#}
                                    {#<li class="page-item"><a class="page-link" href="{{ url('post') }}" title="Đầu tiên">&nbsp;<i class="fa fa-angle-double-left" aria-hidden="true"></i>&nbsp;</a></li>#}
                                    {#<li class="page-item"><a class="page-link" href="{{ url('post?page='~page.before) }}" title="Lùi">&nbsp;<i class="fa fa-angle-left" aria-hidden="true"></i>&nbsp;</a></li>#}
                                    {#<li class="page-item"><a class="page-link" href="{{ url('post?page='~page.next) }}" title="Tới">&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;</a></li>#}
                                    {#<li class="page-item"><a class="page-link" href="{{ url('post?page='~page.last) }}" title="Cuối cùng">&nbsp;<i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;</a></li>#}
                                {#</ul>#}
                            {#</nav>#}
                        {#</div>#}
                    {#</div>#}



                </div>

                <div class="col-md">

                    <img src="{{ url('img/bs1.jpg') }}" class="img-fluid">

                </div>
            </div>

        </div>
    </div>


</div>
