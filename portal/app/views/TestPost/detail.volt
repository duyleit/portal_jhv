{{ partial("partial/headerBanner", ['title': 'Ban Tổng Giám Đốc 總經理部']) }}
{{ content() }}


<div id="content">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-9">
                    <h5 class="green underline">{{ portal_post.title }} </h5>

                    {% if portal_file_number>0 %}
                        <p class="file-download">
                         <small class="font-italic">Tập tin 文件: </small>
                            {% for item in portal_files %}
                                <a href="{{ item.file }}" class="btn btn-outline-secondary btn-sm" download="{{ item.filename }}">{{ item.filename }}<i class="fa fa-download"></i> </a>
                            {% endfor %}
                        </p>
                        <hr>

                    {% endif %}

               <p class="font-weight-bold">  {{ portal_post.description }}  </p>
                    {% if portal_post.picture != "" %}
                        <img src="{{ portal_post.picture }}" alt="">
                    {% endif %}
                    {{ portal_post.content }}
                </div>

                <div class="col-md">
                    <img class="img-fluid" src="{{ url('img/bs1.jpg') }}" alt="">
                </div>

            </div>
        </div>
    </div>
</div>