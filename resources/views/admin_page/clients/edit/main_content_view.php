<div class="content-page">
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">

                    <?php if (count($errors) > 0): ?>
                        <div class="alert alert-danger">
                            <p><strong><i class="fa fa-exclamation-circle fa-fw"></i> Errors!</strong></p>
                            <?php foreach ($errors->all() as $error): ?>
                                <p><i class="fa fa-caret-right fa-fw"></i> <?= $error ?></p>
                            <?php endforeach ?>
                        </div>
                    <?php endif ?>

                    <div class="card-box">

                        <h4 class="header-title m-t-0 m-b-30">Edit Client</h4>

                        <form method="POST" class="form-horizontal" action="<?= route('admin.clients.update', ['id' => $client->id]) ?>">
                            <input name="_method" type="hidden" value="PATCH">
                            <input name="_token" type="hidden" value="<?= csrf_token() ?>">
                            <div class="form-group">
                                <label class="col-md-2 control-label">Company Name</label>
                                <div class="col-md-10">
                                    <input name="company_name" type="text" class="form-control" value="<?= $client->company_name ?>">
                                </div>
                            </div>
                            <div class="form-group<?= $errors->has('first_name') ? ' has-error' : '' ?>">
                                <label class="col-md-2 control-label">First Name</label>
                                <div class="col-md-10">
                                    <input name="first_name" type="text" class="form-control" value="<?= $client->first_name ?>">
                                </div>
                            </div>
                            <div class="form-group<?= $errors->has('last_name') ? ' has-error' : '' ?>">
                                <label class="col-md-2 control-label">Last Name</label>
                                <div class="col-md-10">
                                    <input name="last_name" type="text" class="form-control" value="<?= $client->last_name ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">City</label>
                                <div class="col-md-10">
                                    <input name="city" type="text" class="form-control" value="<?= $client->city ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Address</label>
                                <div class="col-md-10">
                                    <input name="street_house_number" type="text" class="form-control" value="<?= $client->street_house_number ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Zip Code</label>
                                <div class="col-md-10">
                                    <input name="zip_code" type="text" class="form-control" value="<?= $client->zip_code ?>">
                                </div>
                            </div>
                            <div class="form-group m-b-0">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                                </div>
                            </div>
                        </form>

                    </div><!-- end card-box -->
                </div><!-- end col-sm-12 -->
            </div><!-- end row -->

        </div><!-- end container -->
    </div><!-- end content -->
</div><!-- end content-page -->
