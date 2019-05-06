<div class="row">
    <nav>
        <ul class="pager">
            <li class="previous">{{ link_to("portal_news/index", "Tìm Kiếm 搜索") }}</li>
            <li class="next">{{ link_to("portal_news/new", "Tạo mới 創建 ") }}</li>
        </ul>
    </nav>
</div>

<div class="page-header">
    <h1>Kết quả tìm kiếm 搜索結果</h1>
</div>

{{ content() }}

<div class="row">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id 索引號</th>
            <th>Tiêu đề 標題</th>
            <th>Nhóm 組</th>
            <th>Ngày sửa 改性</th>
                <th>Tác giả 作者</th>

                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% if page.items is defined %}
        {% for portal_new in page.items %}
            <tr>
                <td>{{ portal_new.id }}</td>
            <td>{{ portal_new.title }}</td>
            <td>{{ portal_new.type }}</td>
            <td>{{ portal_new.modified }}</td>
                <td>{{ portal_new.user_fullname }}</td>

                <td>{{ link_to("portal_news/edit/"~portal_new.id, "Sửa 編輯") }}</td>
                <td>{{ link_to("portal_news/delete/"~portal_new.id, "Xóa 刪除") }}</td>
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
        <nav>
            <ul class="pagination">
                <li class="page-item">{{ link_to("portal_news/search", "Đầu tiên 第一") }}</li>
                <li class="page-item">{{ link_to("portal_news/search?page="~page.before, "Lùi 以前") }}</li>
                <li class="page-item">{{ link_to("portal_news/search?page="~page.next, "Tới 下一個") }}</li>
                <li class="page-item">{{ link_to("portal_news/search?page="~page.last, "Cuối 持續") }}</li>
            </ul>
        </nav>
    </div>
</div>
