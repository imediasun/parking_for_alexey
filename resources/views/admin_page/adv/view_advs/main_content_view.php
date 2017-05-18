



    <div class="boxed">

        <!--CONTENT CONTAINER-->
        <!--===================================================-->
        <div id="content-container">

            <div class="pageheader">
                <h3><i class="fa fa-home"></i> Choose Adv to edit</h3>
                <div class="breadcrumb-wrapper"> <span class="label">You are here:</span>
                    <ol class="breadcrumb">
                        <li> <a href="#"> Home </a> </li>
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
                            <label class="col-sm-2 control-label">Choose trade center2</label>
                            <div class="col-sm-10">
                                <select class="form-control">

                                    <?php
                                    foreach ($tradecentres as $tradecenter){

                                    ?>
                                    <option value="<?php echo $tradecenter->id?>"><?php echo $tradecenter->name ?></option>
                                     <?php
                                    }?>


                                </select>
<script>

    $(".form-control option").click(function(){



        location.href='/admin/'+'<?php echo $operation?>'+'/'+$(this).val();
    })

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





