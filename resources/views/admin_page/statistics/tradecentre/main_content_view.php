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

                        <h4 class="header-title m-t-0 m-b-30">Tradecentre Parkings - <?= $tradecentre->name ?> </h4>

                        <table id="demo-dt-basic" class="table table-striped" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Client Name</th>
                                <th>Check in time</th>
                                <th>Check out time</th>
                                <th>Cost</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php
                            foreach ($parkings as $parking) {
                                ?>
                                <tr>
                                    <td><?= $parking->client->first_name . ' ' . $parking->client->last_name ?></td>
                                    <td><?= $parking->check_in_time ?></td>
                                    <td><?= $parking->check_out_time ?></td>
                                    <td><?= $parking->cost ?></td>
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
