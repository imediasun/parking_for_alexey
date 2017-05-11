<div class="boxed">

    <!--CONTENT CONTAINER-->
    <!--===================================================-->
    <div id="content-container">

        <div class="pageheader">
            <h3><i class="fa fa-home"></i> Directory </h3>
            <div class="breadcrumb-wrapper"> <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li> <a href="#"> Home </a> </li>
                    <li class="active"> Directory </li>
                </ol>
            </div>
        </div>

        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">
            <div class="well">
                <div class="row">
                    <div class="col-sm-9">
                        <input placeholder="Who are you looking for?" class="form-control" type="text">
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group nm">
                            <select class="form-control" id="source">
                                <option value="Name">Full Name</option>
                                <option value="position">Position</option>
                                <option value="company">Company</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php
                foreach ($logos as $logo){

                ?>
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-body np">
                                <img style="width:100px;" src="/img/<?php echo $logo['original']['logo']?>" alt="Cover" width="100%">
                                <div class="text-center pad-btm">
                                    <!-- panel body -->
                                    <h3><?php echo $logo['original']['name']?></h3>
                                    <span><?php echo $logo['original']['address']?></span>
                                    <!--/ panel body -->
                                </div>
                                <ul class="menu-items">
                                    <li>
                                        <input class="id_logo" type="hidden" value="<?php echo $logo['original']['id']?>">

                                            <i class="fa fa-bell-o fa-lg"></i> Видалити логотип
                                            <button class="del_logos btn btn-danger pull-right">Видалити</button>
                                       
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                <?php

                }
                ?>


            </div>
        </div>

        <!--===================================================-->
        <!--End page content-->


    </div>
    <!--===================================================-->
   <!--END CONTENT CONTAINER-->

<script>

        $('.del_logos').click(function(){
            
            var id_logo=$(this).parent('li').find('.id_logo').val()

            if (confirm("Удаленить логотип?")) {
                $.ajax({
                    type: 'POST',
                    dataType:'json',
                    url: '/delete_logotype',
                    data: {id_logo:id_logo},
                    success: function(data){
                        alert(data)
                        location.reload();
                    }
                });
            } else {
                alert("Вы нажали кнопку отмена")
            }



        })
</script>