
<div class="text-center">
    <div class="btn-group btn-group-sm" role="group" aria-label="Function">
        {{ link_to("portal_post/index", '<i class="fa fa-search" aria-hidden="true"></i> Tìm Kiếm 搜索', 'class': 'btn btn-outline-primary') }}
        {{ link_to("portal_post/new", '<i class="fa fa-file-o" aria-hidden="true"></i> Tạo Mới 創建', 'class': 'btn btn-outline-primary') }}
    </div>
</div>

</div></div></div>
<div id="content">
    <div class="card">
        <div class="card-body">


<div class="page-header">
    <h5 class="underline">Kết quả tìm kiếm 搜索結果</h5>
</div>

{{ content() }}

{#<div class="row">#}
<div class="table-responsive">
    <table class="table table-bordered table-hover table-sm">
        <thead class="text-center thead-light">
            <tr>
                <th>ID<br />碼</th>
                <th style="width: 48%; max-width: 48%">Tiêu đề<br />標題</th>
                <th>Tin Mới<br />最新消息</th>
                <th>Hiển thị<br />顯示</th>

                <th>Sửa<br />編輯</th>
                <th>Xóa<br />刪除</th>

                <th>Nhóm<br />組</th>
                <th>Cán bộ tạo/sửa<br />創造者/編輯</th>
            </tr>
        </thead>
        <tbody>
        {% if page.items is defined %}
        {% for portal_post in page.items %}
            <tr class="text-center align-middle">
                <td class="align-middle">{{ portal_post.id }}</td>
                <td class="text-left" title="{{ portal_post.description }}">{{ portal_post.title }}</td>
                <td class="align-middle">{% if portal_post.news == 1 %}<i class="fa fa-check green" aria-hidden="true"></i>{% endif %}</td>
                <td class="align-middle">{% if portal_post.status == 1 %}<i class="fa fa-check green" aria-hidden="true"></i>{% else %}<i class="fa fa-close red" aria-hidden="true"></i>{% endif %}</td>

                <td class="align-middle">{{ link_to("portal_post/edit/"~portal_post.id, 'title':'Sửa 編輯', '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', "class":"btn btn-outline-primary btn-sm") }}</td>
                <td class="align-middle">{{ link_to("portal_post/delete/"~portal_post.id, 'title':'Xóa 刪除', '<i class="fa fa-trash-o" aria-hidden="true"></i>', "class":"btn btn-outline-danger btn-sm del-post") }}</td>

                <td class="align-middle">{{ portal_post.post_group }}</td>
                <td><small>{{ portal_post.user_fullname }} ({{ portal_post.created }})/<br />{{ portal_post.edited_user_fullname }} ({{ portal_post.modified }})</small></td>
            </tr>
        {% endfor %}
        {% endif %}
        </tbody>
    </table>
</div>

<div class="row">
    <div class="col-sm-1">
        <p class="pagination" style="line-height: 1.42857;padding: 6px 12px;">
            {{ page.current~"/"~page.total_pages }}
        </p>
    </div>
    <div class="col-sm-11">
        <nav aria-label="...">
            <ul class="pagination pagination-sm">
                <li class="page-item"><a class="page-link" href="{{ url('portal_post/search') }}" title="Trang đầu 回頁首">&nbsp;<i class="fa fa-angle-double-left" aria-hidden="true"></i>&nbsp;</a></li>
                <li class="page-item"><a class="page-link" href="{{ url('portal_post/search?page='~page.before) }}" title="Trang sau 下一頁">&nbsp;<i class="fa fa-angle-left" aria-hidden="true"></i>&nbsp;</a></li>
                <li class="page-item"><a class="page-link" href="{{ url('portal_post/search?page='~page.next) }}" title="Trang tiếp 上一頁">&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;</a></li>
                <li class="page-item"><a class="page-link" href="{{ url('portal_post/search?page='~page.last) }}" title="Trang cuối 回頁尾">&nbsp;<i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;</a></li>
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
        {#<nav>#}
            {#<ul class="pagination">#}
                {#<li>{{ link_to("portal_post/search", "&triangleleft;&triangleleft; Đầu 第一") }}</li>#}
                {#<li>{{ link_to("portal_post/search?page="~page.before, "&triangleleft; Trước 以前") }} - </li>#}
                {#<li>{{ link_to("portal_post/search?page="~page.next, "Tiếp 下一個 &triangleright;") }}</li>#}
                {#<li>{{ link_to("portal_post/search?page="~page.last, "Cuối 持續 &triangleright;&triangleright;") }}</li>#}
            {#</ul>#}
        {#</nav>#}
    {#</div>#}

    {##}
{#</div>#}
