
{{ partial("partial/headerBanner", ['title': 'Tin Mới 最新消息']) }}

<div id="content">

    <div class="card">
        <div class="card-body">
            <div class="row">

                <div class="col-md-9 news">
                    <h5 class="green underline">Tin Mới 最新消息{% if session.get('user') != null %} <a href="{{ url('portal_news/search') }}" title="Chỉnh sửa 編輯"><i class="fa fa-edit" aria-hidden="true"></i></a>{% endif %}</h5>

                    {% if page.items is defined %}
                        {% for portal_new in page.items %}
                            <a href="{{ url('news/detail') }}">
                                <div class="media text-muted pt-3">
                                    <img alt="32x32" class="mr-2 rounded" src="img/awards.jpg" data-holder-rendered="true">
                                    <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                        <div class="d-flex justify-content-between align-items-center w-100">
                                            <strong class="text-gray-dark">{{ portal_new.title }}</strong>
                                        </div>
                                        <span class="d-block">{{ portal_new.description }}</span>
                                    </div>
                                </div>
                            </a>
                        {% endfor %}
                    {% endif %}

                    <hr>

                    <div class="row">
                        <div class="col-sm-1">
                            <p class="pagination" style="line-height: 1.42857;padding: 6px 12px;">
                                {{ page.current~"/"~page.total_pages }}
                            </p>
                        </div>
                        <div class="col-sm-11">
                            <nav aria-label="...">
                                <ul class="pagination pagination-sm">
                                    <li class="page-item"><a class="page-link" href="{{ url('news') }}" title="Đầu tiên">&nbsp;<i class="fa fa-angle-double-left" aria-hidden="true"></i>&nbsp;</a></li>
                                    <li class="page-item"><a class="page-link" href="{{ url('news?page='~page.before) }}" title="Lùi">&nbsp;<i class="fa fa-angle-left" aria-hidden="true"></i>&nbsp;</a></li>
                                    <li class="page-item"><a class="page-link" href="{{ url('news?page='~page.next) }}" title="Tới">&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;</a></li>
                                    <li class="page-item"><a class="page-link" href="{{ url('news?page='~page.last) }}" title="Cuối cùng">&nbsp;<i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>



                </div>

                <div class="col-md">

                    <img src="img/bs1.jpg" class="img-fluid">

                </div>
            </div>

        </div>
    </div>


</div>
