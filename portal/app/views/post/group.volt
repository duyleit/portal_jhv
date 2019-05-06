
{{ partial("partial/headerBanner", ['title': portal_post_group.name]) }}

<div id="content">
    <div class="card">
        <div class="card-body">
            {#<div class="row">#}
                {#<div class="col-md-9">#}
            <h5 class="green underline">{{ portal_post_group.name }}{% if session.get('user') != null %} <a href="{{ url('portal_post') }}" title="Chỉnh sửa 編輯"><i class="fa fa-edit" aria-hidden="true"></i></a>{% endif %}</h5>

{% if page.items is defined %}
            {% for item in page.items %}
                <div class="small post-item">
                    <a href="{{ url('post/detail/'~item.id) }}">
                        <div class="media text-muted ">
                            <div class="media-body">
                                <div class="row d-flex">
                                    <div class="col-md-10 col-sm-9 text-justify">
                                        <strong class="text-gray-dark">{{ item.title }}</strong>
                                    </div>
                                    <div class="col-md-2 col-sm-3 text-right">
                                        <span class="font-italic w-25 text-right" style="color: #bbb;">({{ item.modified }})</span>
                                    </div>
                                    {#<strong class="text-gray-dark text-justify">{{ item.title }}</strong>#}
                                    {#<span class="font-italic w-25 text-right" style="color: #bbb;">({{ item.modified }})</span>#}
                                    {#<span class="font-italic" style="color: #bbb;">({{ item.modified }} - {{ item.edited_user_fullname }})</span>#}
                                </div>
                                <span class="d-block">{{ item.description }}</span>
                            </div>
                        </div>
                    </a>
                    {% if files[item.id] is defined and files[item.id] != '' %}
                        <p class="file-download">
                            <span class="font-italic">Tập tin 文件: </span>
                            {{ files[item.id] }}
                        </p>
                    {% endif %}
                </div>
            {% endfor %}

            <div class="row">
                <div class="col-sm-1">
                    <p class="pagination" style="line-height: 1.42857;padding: 6px 12px;">
                        {{ page.current~"/"~page.total_pages }}
                    </p>
                </div>
                <div class="col-sm-11">
                    <nav aria-label="...">
                        <ul class="pagination pagination-sm">
                            <li class="page-item"><a class="page-link" href="{{ url('post/group/'~portal_post_group.id) }}" title="Trang đầu 回頁首">&nbsp;<i class="fa fa-angle-double-left" aria-hidden="true"></i>&nbsp;</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('post/group/'~portal_post_group.id~'?page='~page.before) }}" title="Trang sau 下一頁">&nbsp;<i class="fa fa-angle-left" aria-hidden="true"></i>&nbsp;</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('post/group/'~portal_post_group.id~'?page='~page.next) }}" title="Trang tiếp 上一頁">&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('post/group/'~portal_post_group.id~'?page='~page.last) }}" title="Trang cuối 回頁尾">&nbsp;<i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

{% else %}
            <p>Không tìm thấy dữ liệu 找不到數據!</p>
{% endif %}

                {#</div>#}
                {#<div class="col-md">#}
                    {#<img src="{{ url('img/bs1.jpg') }}" class="img-fluid">#}
                {#</div>#}
            {#</div>#}
        </div>
    </div>
</div>