
<div class="boxed">

    <!--CONTENT CONTAINER-->
    <!--===================================================-->
    <section id="content-container">
            <header class="pageheader">
                
                <div  style="" class="search_ input-group mar-btm" >
                                            <input  placeholder="Пошук" class="form-control" type="text">
                                            <span  class="input-group-btn">
                                                <button class="btn btn-primary btn-labeled fa fa-search" type="button">Пошук</button>
                                            </span>
                </div>
                <div class="breadcrumb-wrapper"> <span class="label">You are here:</span>
                    <ol class="breadcrumb">
                        <li> <a href="#"> Головна </a> </li>
                        <li class="active"> Головна сторінка </li>
                    </ol>
                </div>
            </header>
    </section>        

            <!--Page content-->
            <!--===================================================-->
            <div style="position:relative;top:-40px" id="page-content">

            <div class="row">
                <div class="col-md-1" style="height:auto;margin-left:-40px"><h3 class="vertical_text mar-hor">Акційний товар</h3></div>


                    <?

                    $i=0;
                    foreach($goods['akcionniy'] as $key=>$val){




                        ?>
                        <div  class="col-md-2">
                            <div class="good_cont panel">
                                <div class="panel-body np">

                                    <a href="/good/<?php echo $val['original']['id'];?>">
                                    <div class="good_container col-md-12 col-sm-12 pad-no">
                                    <?
                                    /*
                                    $stroka = iconv('UTF-8','windows-1251',$val['original']['name']); //Меняем кодировку на windows-1251
                                    $stroka = substr($stroka ,0,27); //Обрезаем строку
                                    $stroka = iconv('windows-1251','UTF-8',$stroka ); //Возвращаем кодировку в utf-8*/
                                //Get first image from DB

                                     /*   $images=DB::table('photos')
                                            ->where('id_good', $val['original']['id'])
                                            ->take(1)
                                            ->get();

                                        foreach ($images as $image_)
                                        {
                                            $image=$image_->photo;


                                        }*/

                                        ?>
                                        <h5 class="name_good"><? echo $val['original']['name'];?></h5>

                                        <?php
                                        $size = getimagesize('photos/'.$val['original']['image_small']);
                                        if($size[1]>$size[0]){
                                        ?>
                                        <img style="width:95%;height:125px;margin:0 auto;" src="/photos/<?php echo $val['original']['image_small'];?>">
                                        <?

                                        }
                                        else{
                                        ?>
                                        <img style="width:95%;height:125px;margin:0 auto;" src="/photos/<?php echo $val['original']['image_small'];?>">
                                        <?

                                        }
                                        ?>


                                        <p style="position:relative;top:10px;" class="articul mar-hor"><?='Артикул '.$val['original']['articul']?></p>
                                        
                                        <h5 style="display:block" class=""><?

                                        $cetegory=DB::table('categories')
                                            ->where('id', $val['original']['category'])
                                            ->get();
                                            if(isset($cetegory[0])){
                                         echo $cetegory[0]->name;   }?></h5>
                                        <p style="display:inline-block" class="mar-hor">ОПТ</p> <h5 style="display:inline-block" class="price mar-hor">42млн грн.</h5> <i style="" class="fa_star_ fa fa-star fa-2x" aria-hidden="true"></i>

                                        <!--================================-->



                                    </div></a>

                                </div>
                            </div>
                        </div>



                    <?

                    }
                    ?>
                    


                  
                    </div>

                <div class="row">
                    <div class="col-md-1" style="height:auto;margin-left:-40px"><h3 class="vertical_text mar-hor">Оптовий товар</h3></div>


                    <?

                    $i=0;
                    foreach($goods['optoviy'] as $key=>$val){




                        ?>
                        <div  class="col-md-2">
                            <div class="good_cont panel">
                                <div class="panel-body np">

                                    <a href="/good/<?php echo $val['original']['id'];?>">
                                        <div class="good_container col-md-12 col-sm-12 pad-no">
                                            <?
                                            /*
                                            $stroka = iconv('UTF-8','windows-1251',$val['original']['name']); //Меняем кодировку на windows-1251
                                            $stroka = substr($stroka ,0,27); //Обрезаем строку
                                            $stroka = iconv('windows-1251','UTF-8',$stroka ); //Возвращаем кодировку в utf-8*/
                                            //Get first image from DB

                                            /*   $images=DB::table('photos')
                                                   ->where('id_good', $val['original']['id'])
                                                   ->take(1)
                                                   ->get();

                                               foreach ($images as $image_)
                                               {
                                                   $image=$image_->photo;


                                               }*/

                                            ?>
                                            <h5 class="name_good"><? echo $val['original']['name'];?></h5>

                                            <?php
                                            $size = getimagesize('photos/'.$val['original']['image_small']);
                                            if($size[1]>$size[0]){
                                                ?>
                                                <img style="height:125px;margin:0 auto;" src="/photos/<?php echo $val['original']['image_small'];?>">
                                                <?

                                            }
                                            else{
                                                ?>
                                                <img style="width:95%;height:175px;margin:0 auto;" src="/photos/<?php echo $val['original']['image_small'];?>">
                                                <?

                                            }
                                            ?>


                                            <p style="position:relative;top:10px;" class="articul mar-hor"><?='Артикул '.$val['original']['articul']?></p>

                                            <h5 style="display:block" class=""><?

                                                $cetegory=DB::table('categories')
                                                    ->where('id', $val['original']['category'])
                                                    ->get();
                                                if(isset($cetegory[0])){
                                                    echo $cetegory[0]->name;   }?></h5>
                                            <p style="display:inline-block" class="mar-hor">ОПТ</p> <h5 style="display:inline-block" class="price mar-hor">42млн грн.</h5> <i style="" class="fa_star_ fa fa-star fa-2x" aria-hidden="true"></i>

                                            <!--================================-->



                                        </div></a>

                                </div>
                            </div>
                        </div>



                        <?

                    }
                    ?>




                </div>

                <div class="row">
                    <div class="col-md-1" style="height:auto;margin-left:-40px"><h3 class="vertical_text mar-hor">Роздрібний товар</h3></div>


                    <?

                    $i=0;
                    foreach($goods['rozdribniy'] as $key=>$val){




                        ?>
                        <div  class="col-md-2">
                            <div class="good_cont panel">
                                <div class="panel-body np">

                                    <a href="/good/<?php echo $val['original']['id'];?>">
                                        <div class="good_container col-md-12 col-sm-12 pad-no">
                                            <?
                                            /*
                                            $stroka = iconv('UTF-8','windows-1251',$val['original']['name']); //Меняем кодировку на windows-1251
                                            $stroka = substr($stroka ,0,27); //Обрезаем строку
                                            $stroka = iconv('windows-1251','UTF-8',$stroka ); //Возвращаем кодировку в utf-8*/
                                            //Get first image from DB

                                            /*   $images=DB::table('photos')
                                                   ->where('id_good', $val['original']['id'])
                                                   ->take(1)
                                                   ->get();

                                               foreach ($images as $image_)
                                               {
                                                   $image=$image_->photo;


                                               }*/

                                            ?>
                                            <h5 class="name_good"><? echo $val['original']['name'];?></h5>

                                            <?php
                                            $size = getimagesize('photos/'.$val['original']['image_small']);
                                            if($size[1]>$size[0]){
                                                ?>
                                                <img style="height:125px;margin:0 auto;" src="/photos/<?php echo $val['original']['image_small'];?>">
                                                <?

                                            }
                                            else{
                                                ?>
                                                <img style="width:95%;height:175px;margin:0 auto;" src="/photos/<?php echo $val['original']['image_small'];?>">
                                                <?

                                            }
                                            ?>


                                            <p style="position:relative;top:10px;" class="articul mar-hor"><?='Артикул '.$val['original']['articul']?></p>

                                            <h5 style="display:block" class=""><?

                                                $cetegory=DB::table('categories')
                                                    ->where('id', $val['original']['category'])
                                                    ->get();
                                                if(isset($cetegory[0])){
                                                    echo $cetegory[0]->name;   }?></h5>
                                            <p style="display:inline-block" class="mar-hor">ОПТ</p> <h5 style="display:inline-block" class="price mar-hor">42млн грн.</h5> <i style="" class="fa_star_ fa fa-star fa-2x" aria-hidden="true"></i>

                                            <!--================================-->



                                        </div></a>

                                </div>
                            </div>
                        </div>



                        <?

                    }
                    ?>




                </div>

    </div> 
 

</div>







<script>
    $(document).ready(function() {
    if ($(window).width() < '1280') {
    $('.name_good').each(function() {
    var text = $( this ).text();
    $( this ).text(text.substr(-132,17))
    });

    }
    if ($(window).width() < '1366') {
    $('.name_good').each(function() {
    var text = $( this ).text();
    $( this ).text(text.substr(-132,18))
    });

    }
    if ($(window).width() < '1440') {
    $('.name_good').each(function() {
    var text = $( this ).text();
    $( this ).text(text.substr(-132,21))
    });

    }
    if ($(window).width() < '1600') {
    $('.name_good').each(function() {
    var text = $( this ).text();
    $( this ).text(text.substr(-132,21))
    });

        }
    if ($(window).width() <= '1920') {
    $('.name_good').each(function() {
    var text = $( this ).text();
    $( this ).text(text.substr(-132,28))
    });

        }
    });




</script>