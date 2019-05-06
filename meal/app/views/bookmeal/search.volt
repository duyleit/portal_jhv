<div id="banner">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <span class="breadcrumb-item"><a href="{{ url('') }}"><small><i class="fa fa-home" aria-hidden="true"></i> Bookmeal </small></a></span>
            <li class="breadcrumb-item active" aria-current="page"><small>Search</small></li>
        </ol>
    </nav>
</div>
<div id="content">
<div class="card">
    <div class="page-header text-center">
        <h1><small> Kết quả tìm kiếm 搜索結果  </small> </h1>
    </div>
    <div class="card-body">
                   <span class="previous">{{ link_to("bookmeal/index", "Tìm Kiếm 搜索",'class':'btn btn-outline-primary btn-sm my-4 mx-2') }}
                    <span class="next">{{ link_to("bookmeal/new", "Tạo mới 創建 ",'class':'btn btn-outline-primary btn-sm my-4') }}
            <form style="float:right" method="POST" action="exportexcel">
            <a href="{{ url('bookmeal/exportexcel') }}" class="btn btn-outline-primary btn-sm my-2 "><i class="fa fa-file-excel-o"></i> Print(Excel)</a>
        </form>

        {{ content() }}

        <div class="row">
            <div class="col-sm-12">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Ngày Đặt</th>
                        <th>Người Đặt</th>
                        <th>Bộ Phận</th>
                        <th>Cơm Mặn Trưa</th>
                        <th>Phụ Mặn Trưa</th>
                        <th>Cơm Chay Trưa</th>
                        <th>Cháo Trưa</th>
                        <th>Phụ Chay Trưa</th>
                        <th>Cơm Mặn Chiều</th>
                        <th>Phụ Mặn Chiều</th>
                        <th>Phụ Chay Chiều</th>
                        <th>Mặn Suất Đêm</th>
                        <th>Chay Suất Đêm</th>
                        <th>Dọn Bàn Riêng</th>
                        <th>Ăn Buffet</th>
                        <th>Ghi Chú</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    {% if page.items is defined %}
                        {% for bookmeal in page.items %}
                            <tr>
                                <td>{{ bookmeal.bm_id }}</td>
                                <td>{{ bookmeal.date }}</td>
                                <td>{{ bookmeal.user_code }}</td>
                                <td>{{ bookmeal.name }}</td>
                                <td>{{ bookmeal.lunch }}</td>
                                <td>{{ bookmeal.lunch_add }}</td>
                                <td>{{ bookmeal.lunch_veg }}</td>
                                <td>{{ bookmeal.lunch_soup }}</td>
                                <td>{{ bookmeal.lunch_veg_add }}</td>
                                <td>{{ bookmeal.dinner }}</td>
                                <td>{{ bookmeal.dinner_add }}</td>
                                <td>{{ bookmeal.dinner_veg_add }}</td>
                                <td>{{ bookmeal.supper }}</td>
                                <td>{{ bookmeal.supper_veg }}</td>
                                <td>{{ bookmeal.separate_table }}</td>
                                <td>{{ bookmeal.buffet }}</td>
                                <td>{{ bookmeal.note }}</td>

                                {#<a class="nav-link{% if dispatcher.getControllerName()=='sb' %} active{% endif %}" href="{{ url('sb') }}"><small>Hộp T  hư Góp Ý</small><br />意見箱</a>#}
                                <td>  <a class="btn btn-xs btn-default{% if  bookmeal.user_code != session.get("user") or bookmeal.date < xdate %} disabled {% endif %}" href="{{ url("bookmeal/edit/"~bookmeal.bm_id)}}"><small>Edit</small><br /></a></td>
                                <td>  <a onclick="return confirm('Are you sure to DELETE?')" class="btn btn-sm {% if  bookmeal.user_code != session.get("user") or bookmeal.date < xdate %} disabled {% endif %}" href="{{ url("bookmeal/delete/"~bookmeal.bm_id)}}"><small>Delete</small><br /></a></td>

                                {#<td>{{ link_to("bookmeal/edit/"~bookmeal.bm_id, '<i class="fa fa-edit" aria-hidden="true"></i> Edit', 'class':'btn btn-xs btn-default' ) }}</td>#}
                                {#<td>{{ link_to("onclick":"return confirm('Are you sure to DELETE?')","bookmeal/delete/"~bookmeal.bm_id, '<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', 'class':'btn btn-sm') }}</td>#}
                            </tr>
                        {% endfor %}
                    {% endif %}
                    </tbody>
                </table>
            </div>
          </div>

        <div class="row">
            <div class="col-sm-1">
                <p class="pagination" style="line-height: 1.42857;padding: 6px 12px;">
                    {{ page.current~"/"~page.total_pages }}
                </p>
            </div>
            {#<div class="col-sm-11">#}
                {#<nav>#}
                    {#<ul class="pagination">#}
                        {#<li>{{ link_to("bookmeal/search", "First") }}</li>#}
                        {#<li>{{ link_to("bookmeal/search?page="~page.before, "Previous") }}</li>#}
                        {#<li>{{ link_to("bookmeal/search?page="~page.next, "Next") }}</li>#}
                        {#<li>{{ link_to("bookmeal/search?page="~page.last, "Last") }}</li>#}
                    {#</ul>#}
                {#</nav>#}
            {#</div>#}

            <div class="col-sm-11">
                <nav aria-label="...">
                    <ul class="pagination pagination-sm">
                        <li class="page-item"><a class="page-link" href="{{ url('bookmeal/search') }}" title="Đầu tiên">&nbsp;<i class="fa fa-angle-double-left" aria-hidden="true"></i>&nbsp;</a></li>
                        <li class="page-item"><a class="page-link" href="{{ url('bookmeal/search?page='~page.before) }}" title="Lùi">&nbsp;<i class="fa fa-angle-left" aria-hidden="true"></i>&nbsp;</a></li>
                        <li class="page-item"><a class="page-link" href="{{ url('bookmeal/search?page='~page.next) }}" title="Tới">&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;</a></li>
                        <li class="page-item"><a class="page-link" href="{{ url('bookmeal/search?page='~page.last) }}" title="Cuối cùng">&nbsp;<i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;</a></li>
                    </ul>
                </nav>
            </div>
        </div>
     </div>
</div>
</div>
