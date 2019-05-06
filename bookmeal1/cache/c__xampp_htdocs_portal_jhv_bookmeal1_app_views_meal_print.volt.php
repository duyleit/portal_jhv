<div id="banner">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <span class="breadcrumb-item"><a href="<?= $this->url->get('') ?>"><small><i class="fa fa-home" aria-hidden="true"></i> Bookmeal </small></a></span>
            <li class="breadcrumb-item active" aria-current="page"><small>Search</small></li>
        </ol>
    </nav>
</div>
<div id="content">
    <div class="card">
        <div class="page-header text-center">
            <h1><small> In Kết Quả </small> </h1>
        </div>
        <div class="card-body">
            <?= $this->getContent() ?>
            <form method="POST" action="exportexcel" autocomplete="off" class="form-horizontal">
            <div  class="row">
            <div class="col-md-4 text-right mt-1">
            <div class="form-group">
            <label for="fieldDate" class="control-label">Ngày In:</label>
            </div>
            </div>

            <div class="col-md-4">
            <div class="form-group">
            <div class="input-group date" id="fieldDate" data-target-input="nearest">
            <input type="text" id="fieldDate" name="date_print" class="form-control datetimepicker-input" size="15"  data-target="#fieldDate" />
            <div class="input-group-append" data-target="#fieldDate" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
            </div>
            </div>
            </div>

            <div class="col-md-4">
            <div class="form-group">

            
                <button type="submit" class="btn btn-primary">Print(Excel)</button>
            </div>
            </div>
            </div>
            </form>
            </div>
        </div>
    </div>
</div>
