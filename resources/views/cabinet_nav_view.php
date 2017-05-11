
<div class="boxed">
    
    <!--CONTENT CONTAINER-->
    <!--===================================================-->
    <section id="content-container">
        <header class="pageheader">
            <h3><i class="fa fa-home"></i> Личный кабинет <?php echo $user_information[0]['original']['name']?></h3>
           <!-- <div style="width:600px;top:-30px;margin:0 auto;" class="input-group mar-btm">
                <input placeholder="Пошук" class="form-control" type="text">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary btn-labeled fa fa-search" type="button">Пошук</button>
                                            </span>
            </div>-->
            <div class="breadcrumb-wrapper"> <span class="label">Вы здесь:</span>
                <ol class="breadcrumb">
                    <li> <a href="#"> Home </a> </li>
                    <li class="active"> Личный кабинет </li>
                </ol>
            </div>
        </header>
    </section>

    <!--Page content-->
    <!--===================================================-->
    <div id="page-content" style="height:auto">

        <div class="row" style="height:auto">
            <div class="col-md-12" style="height:auto">

                <!--Network Line Chart-->
                <!--===================================================-->


                <!--Chart information-->


                <div style="height:100px" class="panel">

                    <!--Nav tabs-->

                    <div style="padding:10px;" class="pull-left">
                        <?

                       
                        switch ($cab_btn){
                            case 'index':
                                ?>
                                <div class="btn-group btn-group-lg">

                                    <a href="#"><button class="btn btn-pink dropdown-toggle"  type="button">
                                        Данні покупця <i class="fa fa-info-circle" aria-hidden="true"></i>
                                    </button></a>
                                </div>
                               <!-- <div style= "margin-left:20px" class="btn-group btn-group-lg">
                                    <a href="/cabinet/orders/<?/*=$id*/?>"><button  class="btn btn-primary dropdown-toggle"  type="button">
                                        Мої замовлення <i class="fa fa-pencil" aria-hidden="true"></i>

                                    </button></a>
                                </div>-->
                                <div style= "margin-left:20px" class="btn-group btn-group-lg">
                                    <a href="/cabinet/likes/<?=$id?>"><button style= "" class="btn btn-primary dropdown-toggle"  type="button">
                                        Мої симпатіі <i class="fa fa-gratipay" aria-hidden="true"></i>

                                    </button></a>
                                </div>
                                <!--<div style= "margin-left:20px" class="btn-group btn-group-lg">
                                    <a href="/cabinet/messages/<?/*=$id*/?>"><button  class="btn btn-primary dropdown-toggle"  type="button">
                                        Мої повідомлення <i class="fa fa-paper-plane" aria-hidden="true"></i>


                                    </button></a>
                                </div>-->
 
                                <?
                                break;
                            case 'orders':
                                ?>
                                <div class="btn-group btn-group-lg">

                                    <a href="/cabinet/<?=$id?>"><button class="btn btn-primary dropdown-toggle"  type="button">
                                        Данні покупця <i class="fa fa-info-circle" aria-hidden="true"></i>
                                    </button></a>
                                </div>
                                <div style= "margin-left:20px" class="btn-group btn-group-lg">
                                    <a href="/cabinet/orders/<?=$id?>"><button  class="btn btn-pink  dropdown-toggle"  type="button">
                                        Мої замовлення <i class="fa fa-pencil" aria-hidden="true"></i>

                                    </button></a>
                                </div>
                                <div style= "margin-left:20px" class="btn-group btn-group-lg">
                                    <a href="/cabinet/likes/<?=$id?>"><button style= "" class="btn btn-primary dropdown-toggle"  type="button">
                                        Мої симпатіі <i class="fa fa-gratipay" aria-hidden="true"></i>

                                    </button></a>
                                </div>
                                <div style= "margin-left:20px" class="btn-group btn-group-lg">
                                    <a href="/cabinet/messages/<?=$id?>"><button  class="btn btn-primary dropdown-toggle"  type="button">
                                        Мої повідомлення <i class="fa fa-paper-plane" aria-hidden="true"></i>


                                    </button></a>
                                </div>

                                <?
                                break;

                            case 'likes':
                                ?>
                                <div class="btn-group btn-group-lg">

                                    <a href="/cabinet/<?=$id?>"><button class="btn btn-primary dropdown-toggle"  type="button">
                                        Данні покупця <i class="fa fa-info-circle" aria-hidden="true"></i>
                                    </button></a>
                                </div>
                                <div style= "margin-left:20px" class="btn-group btn-group-lg">
                                    <a href="/cabinet/orders/<?=$id?>"> <button  class="btn btn-primary dropdown-toggle"  type="button">
                                        Мої замовлення <i class="fa fa-pencil" aria-hidden="true"></i>

                                    </button></a>
                                </div>
                                <div style= "margin-left:20px" class="btn-group btn-group-lg">
                                    <a href="/cabinet/likes/<?=$id?>"><button style= "" class="btn btn-pink dropdown-toggle"  type="button">
                                        Мої симпатіі <i class="fa fa-gratipay" aria-hidden="true"></i>

                                    </button></a>
                                </div>
                                <div style= "margin-left:20px" class="btn-group btn-group-lg">
                                    <a href="/cabinet/messages/<?=$id?>"><button  class="btn btn-primary dropdown-toggle"  type="button">
                                        Мої повідомлення <i class="fa fa-paper-plane" aria-hidden="true"></i>


                                    </button></a>
                                </div>

                                <?
                                break;
                            case 'messages':
                                ?>
                                <div class="btn-group btn-group-lg">

                                    <a href="/cabinet/<?=$id?>"><button class="btn btn-primary dropdown-toggle"  type="button">
                                        Данні покупця <i class="fa fa-info-circle" aria-hidden="true"></i>
                                    </button></a>
                                </div>
                                <div style= "margin-left:20px" class="btn-group btn-group-lg">
                                    <a href="/cabinet/orders/<?=$id?>"><button  class="btn btn-primary dropdown-toggle"  type="button">
                                        Мої замовлення <i class="fa fa-pencil" aria-hidden="true"></i>

                                    </button></a>
                                </div>
                                <div style= "margin-left:20px" class="btn-group btn-group-lg">
                                    <a href="/cabinet/likes/<?=$id?>"><button style= "" class="btn  btn-primary  dropdown-toggle"  type="button">
                                        Мої симпатіі <i class="fa fa-gratipay" aria-hidden="true"></i>

                                    </button></a>
                                </div>
                                <div style= "margin-left:20px" class="btn-group btn-group-lg">
                                    <a href="/cabinet/messages/<?=$id?>"><button  class="btn btn-pink dropdown-toggle"  type="button">
                                        Мої повідомлення <i class="fa fa-paper-plane" aria-hidden="true"></i>


                                    </button></a>
                                </div>

                                <?
                                break;

                        }


                        ?>


                    </div>
                </div>