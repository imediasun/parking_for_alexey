<div class="boxed">

    <!--CONTENT CONTAINER-->
    <!--===================================================-->
    <div id="content-container">

        <div class="pageheader">
            <h3><i class="fa fa-home"></i> Choose advert to edit</h3>
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
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Choose advert</label>
                        <div class="col-sm-10">
                            <select class="form-control">
                                <option value="0">No selected</option>
                                <?php
                                foreach ($advs as $adv) {
                                    ?>
                                    <option value="<?php echo $adv->id ?>"><?php echo $adv->title ?></option>
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
                </div><!-- end col -->
            </div>

        </div>
        <!--===================================================-->
        <!--End page content-->

    </div>
    <!--===================================================-->
    <!--END CONTENT CONTAINER-->
