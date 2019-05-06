
{{ partial("partial/headerBanner", ['title': 'Bộ Phận Nhân Sự 人力資源']) }}


<div id="content">

    <div class="card">
        <div class="card-body">
            <h5 class="green underline">Tài Liệu Lưu Trình, Quy Trình <small class="font-italic">(áp dụng cho người Việt)</small> VN HR程序文件{% if session.get('user') != null %} <a href="{{ url('portal_file') }}" title="Chỉnh sửa 編輯"><i class="fa fa-edit" aria-hidden="true"></i></a>{% endif %}</h5>
            <p class="file-download">

                {% for vnhr in vnhrs %}

                    <a href="{{ vnhr.file }}"  title="{{ vnhr.description }}" download="{{ vnhr.filename }}">{{ vnhr.title }}</a>

                {% endfor %}

                {#<a href="#" class="btn btn-outline-secondary btn-sm"><i class="fa fa-file-pdf-o red" aria-hidden="true"></i> Vivamus risus sem.pdf</a>#}
                {#<a href="#" class="btn btn-outline-secondary btn-sm"><i class="fa fa-file-excel-o green" aria-hidden="true"></i> Aliquam erat volutpat.xls</a>#}
                {#<a href="#" class="btn btn-outline-secondary btn-sm"><i class="fa fa-file-word-o blue" aria-hidden="true"></i> Aenean suscipit.doc</a>#}
                {#<a href="#" class="btn btn-outline-secondary btn-sm"><i class="fa fa-file-powerpoint-o orange" aria-hidden="true"></i> Aenean suscipit.ppt</a>#}
                {#<a href="#" class="btn btn-outline-secondary btn-sm"><i class="fa fa-file-zip-o" aria-hidden="true"></i> Vivamus risus sem.rar</a>#}
                {#<a href="#" class="btn btn-outline-secondary btn-sm"><i class="fa fa-file-image-o" aria-hidden="true"></i> Aliquam erat volutpat.jpg</a>#}
                {#<a href="#" class="btn btn-outline-secondary btn-sm"><i class="fa fa-file-video-o" aria-hidden="true"></i> Vivamus risus sem.avi</a>#}
                {#<a href="#" class="btn btn-outline-secondary btn-sm"><i class="fa fa-file-o" aria-hidden="true"></i> Aliquam erat volutpat.abc</a>#}
                {#<a href="#" class="btn btn-outline-secondary btn-sm"><i class="fa fa-file-word-o blue" aria-hidden="true"></i> Aenean suscipit.doc</a>#}
                {#<a href="#" class="btn btn-outline-secondary btn-sm">Maecenas.xls</a>#}
            </p>

        </div>
    </div>

    <div id="int-hr" class="card">
        <div class="card-body">
            <h5 class="red underline">Tài Liệu Lưu Trình, Quy Trình <small class="font-italic">(áp dụng cho người nước ngoài)</small> Int.HR程序文件{% if session.get('user') != null %} <a href="{{ url('portal_file') }}" title="Chỉnh sửa 編輯"><i class="fa fa-edit" aria-hidden="true"></i></a>{% endif %}</h5>
            <p class="file-download">

                {% for inhr in inhrs %}

                    <a href="{{ inhr.file }}" class="btn btn-outline-secondary btn-sm" title="{{ inhr.description }}" download="{{ inhr.filename }}">{{ inhr.title }}</a>

                {% endfor %}

            </p>

        </div>
    </div>

    <div id="ehs-hr" class="card">
        <div class="card-body">
            <h5 class="blue underline">Tài Liệu Quy Trình ESH 程序文件{% if session.get('user') != null %} <a href="{{ url('portal_file') }}" title="Chỉnh sửa 編輯"><i class="fa fa-edit" aria-hidden="true"></i></a>{% endif %}</h5>
            <p class="file-download">

                {% for ehs in ehss %}

                    <a href="{{ ehs.file }}" class="btn btn-outline-secondary btn-sm" title="{{ ehs.description }}" download="{{ ehs.filename }}">{{ ehs.title }}</a>

                {% endfor %}

            </p>

        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="orange underline">Biểu Mẫu Thường Dùng 常用表單{% if session.get('user') != null %} <a href="{{ url('portal_file') }}" title="Chỉnh sửa 編輯"><i class="fa fa-edit" aria-hidden="true"></i></a>{% endif %}</h5>
            <p class="file-download">

                {% for form in forms %}

                    <a href="{{ form.file }}" class="btn btn-outline-secondary btn-sm" title="{{ form.description }}" download="{{ form.filename }}">{{ form.title }}</a>

                {% endfor %}

            </p>

        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="underline">Tạp Chí Công Ty 公司月刊{% if session.get('user') != null %} <a href="{{ url('portal_file') }}" title="Chỉnh sửa 編輯"><i class="fa fa-edit" aria-hidden="true"></i></a>{% endif %}</h5>
            <p class="file-download">

                {% for magazine in magazines %}

                    <a href="{{ magazine.file }}" class="btn btn-outline-secondary btn-sm" title="{{ magazine.description }}" download="{{ magazine.filename }}">{{ magazine.title }}</a>

                {% endfor %}

            </p>

        </div>
    </div>


</div>