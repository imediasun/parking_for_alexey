<div class="content-page">
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">

                    <?php if (session('success')): ?>
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <p><strong><i class="fa fa-check-circle fa-fw"></i> Success.</strong></p>
                            <p><?= session('success') ?></p>
                        </div>
                    <?php endif ?>

                    <div class="card-box">

                        <h4 class="header-title m-t-0 m-b-30">Client Management</h4>

                        <table id="demo-dt-basic" class="table table-striped" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Client Name</th>
                                <th class="min-tablet">Created</th>
                                <th class="min-desktop">Active</th>
                                <th class="min-desktop">Actions</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php
                            foreach ($clients as $client) {
                                ?>
                                <tr>
                                    <td><?= $client->first_name . ' ' . $client->last_name; ?></td>
                                    <td><?= $client->created_at ?></td>
                                    <td><?= $client->active ? 'Active' : 'No Active' ?></td>
                                    <td>
                                        <a class="btn btn-primary btn-icon fa fa-edit"
                                           href="<?= route('admin.clients.edit', ['id' => $client->id]) ?>"
                                           data-toggle="tooltip"
                                           data-original-title="Edit"
                                        ></a>
                                        <a class="delete_btn btn btn-danger btn-icon fa fa-times"
                                           href="<?= route('admin.clients.delete', ['id' => $client->id]) ?>"
                                           data-toggle="tooltip"
                                           data-original-title="Delete"
                                        ></a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>

                        </table>

                    </div><!-- end card-box -->
                </div><!-- end col-sm-12 -->
            </div><!-- end row -->

        </div><!-- end container -->
    </div><!-- end content -->
</div><!-- end content-page -->

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.delete_btn').click(function (e) {
        if (!confirm('Delete this Client?')) {
            return false;
        }
    });
</script>
