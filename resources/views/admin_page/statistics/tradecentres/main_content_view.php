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

                        <h4 class="header-title m-t-0 m-b-30">Tradecentres</h4>

                        <table id="demo-dt-basic" class="table table-striped" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Tradecentre Name</th>
                                <th>User Name</th>
                                <th class="min-tablet">Created</th>
                                <th class="min-desktop">Actions</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php
                            foreach ($tradecentres as $tradecentre) {
                                ?>
                                <tr>
                                    <td><?= $tradecentre->name ?></td>
                                    <td><?= $tradecentre->user->name ?></td>
                                    <td><?= $tradecentre->created_at ?></td>
                                    <td>
                                        <a class="btn btn-primary btn-icon fa fa-bar-chart-o"
                                           href="<?= route('admin.statistics.tradecentre', ['id' => $tradecentre->id]) ?>"
                                           data-toggle="tooltip"
                                           data-original-title="View Parking Statistics"
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
