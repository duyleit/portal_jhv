<div class="row">
    <nav>
        <ul class="pager">
            <li class="previous">{{ link_to("portal_suggestion/index", "Go Back") }}</li>
            <li class="next">{{ link_to("portal_suggestion/new", "Create ") }}</li>
        </ul>
    </nav>
</div>

<div class="page-header">
    <h1>Search result</h1>
</div>

{{ content() }}

<div class="row">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
            <th>User</th>
            <th>Email</th>
            <th>Fullname</th>
            <th>Department</th>
            <th>Title</th>
            <th>Message</th>
            <th>Status</th>
            <th>Created</th>
            <th>Modified</th>

                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% if page.items is defined %}
        {% for portal_suggestion in page.items %}
            <tr>
                <td>{{ portal_suggestion.id }}</td>
            <td>{{ portal_suggestion.user_id }}</td>
            <td>{{ portal_suggestion.email }}</td>
            <td>{{ portal_suggestion.fullname }}</td>
            <td>{{ portal_suggestion.department }}</td>
            <td>{{ portal_suggestion.title }}</td>
            <td>{{ portal_suggestion.message }}</td>
            <td>{{ portal_suggestion.status }}</td>
            <td>{{ portal_suggestion.created }}</td>
            <td>{{ portal_suggestion.modified }}</td>

                <td>{{ link_to("portal_suggestion/edit/"~portal_suggestion.id, "Edit") }}</td>
                <td>{{ link_to("portal_suggestion/delete/"~portal_suggestion.id, "Delete") }}</td>
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
                <li>{{ link_to("portal_suggestion/search", "First") }}</li>
                <li>{{ link_to("portal_suggestion/search?page="~page.before, "Previous") }}</li>
                <li>{{ link_to("portal_suggestion/search?page="~page.next, "Next") }}</li>
                <li>{{ link_to("portal_suggestion/search?page="~page.last, "Last") }}</li>
            </ul>
        </nav>
    </div>
</div>
