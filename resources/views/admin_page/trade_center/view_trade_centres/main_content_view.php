<div class="boxed">

    <!--CONTENT CONTAINER-->
    <!--===================================================-->
    <div id="content-container">

        <div class="pageheader">
            <h3><i class="fa fa-home"></i> Choose trade Center to edit</h3>
            <div class="breadcrumb-wrapper"><span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li><a href="#"> Home </a></li>
                    <li class="active"> Choose trade Center to edit</li>
                </ol>
            </div>
        </div>

        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">

            <div class="row">
                <div class="col-sm-12">
                    <form class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Choose Trade Center</label>
                        <div class="col-sm-10">
                            <select class="form-control">
                                <option value="0">No selected</option>
                                <?php
                                foreach ($tradecentres as $tradecentre) {
                                    ?>
                                    <option value="<?php echo $tradecentre->id ?>"><?php echo $tradecentre->name ?></option>
                                    <?php
                                } ?>
                            </select>

                            <script>
                                $(".form-control").change(function() {
                                    var currVal = $(this).val();
                                    if (Number(currVal) > 0) {
                                        location.href = '/admin/' + '<?php echo $operation?>' + '/' + currVal;
                                    }
                                });
                            </script>
                        </div>
                    </div>
                    </form>
                </div><!-- end col -->
            </div>

        </div>
        <!--===================================================-->
        <!--End page content-->

    </div>
    <!--===================================================-->
    <!--END CONTENT CONTAINER-->





