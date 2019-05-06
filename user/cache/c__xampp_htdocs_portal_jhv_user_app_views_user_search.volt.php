<div class="row">
    <nav>
        <ul class="pager">
            <li class="previous"><?= $this->tag->linkTo(['user/index', 'Go Back']) ?></li>
            <li class="next"><?= $this->tag->linkTo(['user/new', 'Create ']) ?></li>
        </ul>
    </nav>
</div>

<div class="page-header">
    <h1>Search result</h1>
</div>

<?= $this->getContent() ?>

<div class="row">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
            <th>User</th>
            <th>Fullname</th>
            <th>Com Of Code</th>
            <th>Role Of Code</th>
            <th>Dept Of Code</th>
            <th>Posi Of Code</th>
            <th>Email</th>
            <th>Phone Of Extend</th>
            <th>About</th>
            <th>Common Of Disease</th>
            <th>Occupational Of Disease</th>
            <th>Labor Of Accident</th>
            <th>Poison Of Area</th>
            <th>Health Of Class Of Code</th>
            <th>Expiry Of Health Of Check</th>
            <th>Status</th>

                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php if (isset($page->items)) { ?>
        <?php foreach ($page->items as $user) { ?>
            <tr>
                <td><?= $user->id ?></td>
            <td><?= $user->user ?></td>
            <td><?= $user->fullname ?></td>
            <td><?= $user->com_code ?></td>
            <td><?= $user->role_code ?></td>
            <td><?= $user->dept_code ?></td>
            <td><?= $user->posi_code ?></td>
            <td><?= $user->email ?></td>
            <td><?= $user->phone_extend ?></td>
            <td><?= $user->about ?></td>
            <td><?= $user->common_disease ?></td>
            <td><?= $user->occupational_disease ?></td>
            <td><?= $user->labor_accident ?></td>
            <td><?= $user->poison_area ?></td>
            <td><?= $user->health_class_code ?></td>
            <td><?= $user->expiry_health_check ?></td>
            <td><?= $user->status ?></td>

                <td><?= $this->tag->linkTo(['user/edit/' . $user->id, 'Edit']) ?></td>
                <td><?= $this->tag->linkTo(['user/delete/' . $user->id, 'Delete']) ?></td>
            </tr>
        <?php } ?>
        <?php } ?>
        </tbody>
    </table>
</div>

<div class="row">
    <div class="col-sm-1">
        <p class="pagination" style="line-height: 1.42857;padding: 6px 12px;">
            <?= $page->current . '/' . $page->total_pages ?>
        </p>
    </div>
    <div class="col-sm-11">
        <nav>
            <ul class="pagination">
                <li><?= $this->tag->linkTo(['user/search', 'First']) ?></li>
                <li><?= $this->tag->linkTo(['user/search?page=' . $page->before, 'Previous']) ?></li>
                <li><?= $this->tag->linkTo(['user/search?page=' . $page->next, 'Next']) ?></li>
                <li><?= $this->tag->linkTo(['user/search?page=' . $page->last, 'Last']) ?></li>
            </ul>
        </nav>
    </div>
</div>
