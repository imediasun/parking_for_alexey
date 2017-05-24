<div class="boxed">

        <!--CONTENT CONTAINER-->
        <!--===================================================-->
        <div id="content-container">

            <div class="pageheader">
                <h3><i class="fa fa-home"></i> Datatable Table </h3>
                <div class="breadcrumb-wrapper"><span class="label">You are here:</span>
                    <ol class="breadcrumb">
                        <li><a href="#"> Home </a></li>
                        <li class="active"> datatable Table</li>
                    </ol>
                </div>
            </div>

            <!--Page content-->
            <!--===================================================-->
            <div id="page-content">

                <!-- Basic Data Tables -->
                <!--===================================================-->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Clients management</h3>
                    </div>
                    <div class="panel-body">
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
                    </div>
                </div>
                <!--===================================================-->
                <!-- End Striped Table -->


            </div>
            <!--===================================================-->
            <!--End page content-->


        </div>
        <!--===================================================-->
        <!--END CONTENT CONTAINER-->


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
