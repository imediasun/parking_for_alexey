
<div class="boxed">

    <!--CONTENT CONTAINER-->
    <!--===================================================-->

    <section id="content-container">
            <header class="pageheader">

                <h3><i class="fa fa-home"></i> <?php echo $good[0]['original']['name']?> </h3>
                <!--div style="width:600px;top:-30px;margin:0 auto;" class="input-group mar-btm">
                                            <input placeholder="Пошук" class="form-control" type="text">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary btn-labeled fa fa-search" type="button">Пошук</button>
                                            </span>
                </div-->
                <div class="breadcrumb-wrapper"> <span class="label">You are here:</span>
                    <ol class="breadcrumb">
                        <li> <a href="#"> Home </a> </li>
                        <li class="active"> <?php echo $good[0]['original']['name']?> </li>
                    </ol>
                </div>
            </header>
    </section>        

            <!--Page content-->
            <!--===================================================-->
            <div id="page-content" class="complex_block" >

                <div class="row">
                    <div class=" col-md-4 left_panel_">

                        <!--Network Line Chart-->
                        <!--===================================================-->
                        <div class="panel ">

                            <!--Chart information-->
                            <div class="panel-body">

                                <div id="example3" class="slider-pro">
                                    <div style="min-height:400px;" class="sp-slides">
                                        <div class="sp-slide">
                                            <img class="sp-image" src="../src/css/images/blank.gif"


                                                 data-src="/photos/<?php echo $good[0]['original']['image_medium']?>"
                                                 data-small="/photos/<?php echo $good[0]['original']['image_small']?>"
                                                 data-medium="/photos/<?php echo $good[0]['original']['image_medium']?>"
                                                 data-large="/photos/<?php echo $good[0]['original']['image_large']?>"
                                                 data-retina="/photos/<?php echo $good[0]['original']['image_large']?>"/>

                                         <!--   <p class="sp-layer sp-white sp-padding"
                                               data-horizontal="50" data-vertical="50"
                                               data-show-transition="left" data-show-delay="400">
                                                Lorem ipsum
                                            </p>

                                            <p class="sp-layer sp-black sp-padding"
                                               data-horizontal="180" data-vertical="50"
                                               data-show-transition="left" data-show-delay="600">
                                                dolor sit amet
                                            </p>

                                            <p class="sp-layer sp-white sp-padding"
                                               data-horizontal="315" data-vertical="50"
                                               data-show-transition="left" data-show-delay="800">
                                                consectetur adipisicing elit.
                                            </p>-->
                                        </div>



                                            <?php foreach ($photos as $photo){
                                                ?>
                                                <div class="sp-slide">
                                                    <img class="sp-image" src="../src/css/images/blank.gif"
                                                         data-src="/photos/<?php echo $photo['original']['image_medium']?>"
                                                         data-small="/photos/<?php echo $photo['original']['image_small']?>"
                                                         data-medium="/photos/<?php echo $photo['original']['image_medium']?>"
                                                         data-large="/photos/<?php echo $photo['original']['image_large']?>"
                                                         data-retina="/photos/<?php echo $photo['original']['image_large']?>"/>
                                                </div>
                                                <?
                                            }?>


                                           <!-- <h3 class="sp-layer sp-black sp-padding"
                                                data-horizontal="40" data-vertical="40"
                                                data-show-transition="left">
                                                Lorem ipsum dolor sit amet
                                            </h3>

                                            <p class="sp-layer sp-white sp-padding"
                                               data-horizontal="40" data-vertical="100"
                                               data-show-transition="left" data-show-delay="200">
                                                consectetur adipisicing elit
                                            </p>

                                            <p class="sp-layer sp-black sp-padding"
                                               data-horizontal="40" data-vertical="160" data-width="350"
                                               data-show-transition="left" data-show-delay="400">
                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </p>-->



                                    </div>

                                    <div style="margin-top:130px" class="sp-thumbnails">
                                        
                                        <img class="sp-thumbnail" src="/photos/<?php echo $good[0]['original']['thumbnail']?>"/>
                                        <?php foreach ($photos as $photo){
                                            ?>
                                            <img class="sp-thumbnail" src="/photos/<?php echo $photo['original']['thumbnail']?>"/>
                                            <?
                                        }?>

                                        
                                    </div>
                                </div>

                            </div>
                            <div style="margin-top:100px;height:70px" class="panel-body"></div>

                        </div>
                        <!--===================================================-->
                        <!--End network line chart-->
                        <div style="height:150px" class="panel">
                            <a class="btn btn-block btn-social btn-pinterest">

                                    <i class="fa fa-youtube" aria-hidden="true"></i>

 Дивитись товар на Youtube
                            </a>
                            <?php
                            
                            foreach($video as $item){



                            $video ='<iframe width="560" height="315" src='.$item['original']['video'].' frameborder="0" allowfullscreen></iframe>';
                            if (preg_match('/[http|https]+:\/\/(?:www\.|)youtube\.com\/watch\?(?:.*)?v=([a-zA-Z0-9_\-]+)/i', $video, $matches) || preg_match('/(?:www\.|)youtube\.com\/embed\/([a-zA-Z0-9_\-]+)/i', $video, $matches)) {
                            $image = 'http://img.youtube.com/vi/'.$matches[1].'/0.jpg';
                            }else{
                            $image = false;
                            }
                            echo "<div style='display:inline-block';position:relative>";
                            echo "<a href='".$item['original']['video']."' ><img style='width:30px;position:absolute;z-index:999' src='/img/youtube-play.png'></a>";
                            echo "<img style='height:100px' src='$image''>";

                            echo "</div>";

                            }
                            ?>
                        </div>
























                        <div class="panel">
                            <div class="panel-heading ui-sortable-handle">
                                <div class="panel-control">
                                    <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                                    <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                                    <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                                    <button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
                                </div>
                                <h3 class="panel-title">Запитання</h3>
                            </div>
                            <div class="panel-body" style="height:auto;display: block;">
                                <?php
                                if(isset(Illuminate\Support\Facades\Auth::user()->roles)){
                                    $roles=Illuminate\Support\Facades\Auth::user()->roles;

                                    foreach($roles as $role){
                                        if($role['original']['name']=='Admin') {
                                         $admin=true;
                                        }}}
                                ?>
                                <?

                   foreach($questions as $key=>$question){
                   
                        ?>
                        <div style="position:relative;height:auto">
                        <!--вставка кнопки удалить если залогиненый админ-->
                             <?php
                             if(isset($admin)) {
                             ?>
                             <form method="post" action="<?php echo route('delete_question');?>">
                        <!--id_good-->
                             <input type="hidden" name="id_good" value="<?php echo $good[0]['original']['id'] ?>">
                             <input type="hidden" class="question_id" name="question_id" value="<?php echo $question['original']['id']; ?>">
                             <button class="delete_btn btn btn-danger btn-icon icon-lg fa fa-times"></button>
                             </form> 
                             <?
                             }
                             ?>
                        <!--вставка кнопки удалить если залогиненый админ-->
                        <blockquote>
                          <?php echo $question['original']['text']?>
                        </blockquote>
                        </div>
                        <?php
                        if(isset($admin)){//если уже есть ответ на вопрос выводить его для админа в ckeditor
                                        //для этого у вопроса есть связь с таблицей ответы hasMany
                             $answer=$question->answer;
                             if(!$answer){
                             ?>
                        <div class="answer_for_the_question" style="position:relative;height:auto">
                            <h3 class="panel-title">Дати відповідь</h3>
                            <form style="position:relative;" action="<?php echo route('add_question_answer');?>" method="post">
                                <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                                <textarea name="editor_question_answer_<?php echo $good[0]['original']['id'] ?>"></textarea>
                        <!--id_good-->
                                <input type="hidden" name="id_good" value="<?php echo $good[0]['original']['id'] ?>">
                        <!--id_question-->
                                <input type="hidden" name="id_question" value="<?php echo $question['original']['id'] ?>">
                                <button type="submit" class="btn btn-primary">Відповісти на запитання</button>
                                <div style="height:100px;"></div>
                            </form>
                            <script>
                            CKEDITOR.replace('editor_question_answer_<?php echo $good[0]['original']['id'] ?>');
                            </script>
                        </div>
                            <?php
                            }
                            else{

                            $answer=$answer['original']['text'];
                            ?>
                            <div style="position:relative;height:auto">
                                <blockquote class="blockquote-reverse">
                                <?php echo $answer;?>
                                </blockquote>
                            </div>
                            <?php
                            }
                        }
                   }?>

                            </div>
                            <div style="height:100px;"></div>
                            <!--Добавити відгуки-->
                            <div class="panel" style="position:relative;height:auto;">
                                <h3 class="panel-title">Додати запитання</h3>
                                <form action="<?php echo route('add_question');?>" method="post">
                                    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                                    <textarea name="editor_question"></textarea>
                                    <input type="hidden" name="id_good" value="<?php echo $good[0]['original']['id'] ?>">
                                    <button type="submit" class="btn btn-success">Додати запитання</button>
                                    <div style="height:100px;"></div>
                                </form>
                                <script>
                                    CKEDITOR.replace('editor_question');
                                </script>


                            </div>
                   </div>

 </div>











































                    <div class="col-md-4 right_panel_">

                        <!--Network Line Chart-->
                        <!--===================================================-->
                        <div class="panel">

                            <!--Chart information-->
                            <div style="height:auto" class="panel-body">
                                <div class="row">
                                    <div class="col-xs-9 head_of_right_panel">
                                        <h3 class="name_of_good" style ="position:relative;display:inline-block"><?php echo $good[0]['original']['name']?></h3>

                                <?php
                                if(empty($like[0])){
                                ?>
                                <button style ="margin-left:80px;position:absolute;display:inline-block" class="btn btn-success btn-icon icon-lg fa fa-star"></button>
                                <?php
                                }
                                else{
                                ?>
                                <button style ="margin-left:80px;position:absolute;display:inline-block" class="btn btn-warning btn-icon icon-lg fa fa-star"></button>
                                <?php
                                }
                                ?>

                                        <p>марка Hitachi DC 435666</p>

                                    </div>
                                </div>
                                <div style="margin-top:-10px" class="goods_buttons">
                                    <button style="width:35%;height:50px" class="btn btn-primary"><?php echo $good[0]['original']['price']?> грн</button>

                                    <div style="display:inline-block;position:relative;width:20%;height:50px" class="">
                                        <div style="height:50px;position:absolute;top:28px;left:7px">
                                            <form id="cart_btn" method="get" action="<? echo route('add_to_cart',['id'=>$good[0]['original']['id']])?>">
                                            <?echo csrf_field();?>
                                                <input class="inp_count" name="qnt" style="margin-left:-7px;width:80px;" value="1">
                                            </form>
                                            <i style="padding-left:5px;cursor:pointer;position:absolute" class="up_count fa fa-caret-square-o-up" aria-hidden="true"></i>
                                            <i style="padding-left:5px;cursor:pointer;position:absolute;right:-16px" class="bottom_count fa fa-caret-square-o-down" aria-hidden="true"></i>
                                        </div></div>
                                    <button style="position:relative;left:30px;width:35%;height:50px" class="cart_btn btn btn-warning">

                                        придбати <i class="fa  fa-shopping-cart fa-2x"></i></button>


                                </div>

                            </div>

                        </div>
                        <!--===================================================-->
                        <!--End network line chart-->
                        <div style="" class="panel">
                            <div style="height:auto" class="panel-body">
                            <div class="row">
                                <div class="col-xs-10">
                                <h3>Особливі умови придбання</h3>
                                <p><?php echo $good[0]['original']['description']?></p>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div style="" class="panel">
                            <div style="height:auto" class="panel-body">
                                <div class="row">
                                    <div class="col-xs-10">
                                        <h3>Опис/характеристика товару</h3>
                                        <p><?php echo $good[0]['original']['description2']?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

              <!--ВІДГУКИ-->


                        <div class="panel">
                            <div class="panel-heading ui-sortable-handle">
                                <div class="panel-control">
                                    <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                                    <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                                    <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                                    <button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
                                </div>
                                <h3 class="panel-title">Відгуки</h3>
                            </div>
                            <div class="panel-body" style="height:auto;display: block;">
                                <?php
                                if(isset(Illuminate\Support\Facades\Auth::user()->roles)){
                                    $roles=Illuminate\Support\Facades\Auth::user()->roles;

                                    foreach($roles as $role){
                                        if($role['original']['name']=='Admin') {
                                            $admin=true;
                                        }}}
                                ?>
                                <?

                                foreach($comments as $key=>$comment){

                                    ?>
                                    <div style="position:relative;height:auto">
                                        <!--вставка кнопки удалить если залогиненый админ-->
                                        <?php
                                        if($admin) {
                                            ?>
                                            <form method="post" action="<?php echo route('delete_comment');?>">
                                                <!--id_good-->
                                                <input type="hidden" name="id_good" value="<?php echo $good[0]['original']['id'] ?>">
                                                <input type="hidden" class="comment_id" name="comment_id" value="<?php echo $comment['original']['id']; ?>">
                                                <button class="delete_btn btn btn-danger btn-icon icon-lg fa fa-times"></button>
                                            </form>
                                            <?
                                        }
                                        ?>
                                        <!--вставка кнопки удалить если залогиненый админ-->
                                        <blockquote>
                                            <?php echo $comment['original']['text']?>
                                        </blockquote>
                                    </div>
                                    <?php
                              
                                }?>

                            </div>
                            <div style="height:100px;"></div>
                            <!--Добавити відгуки-->
                            <div class="panel" style="position:relative;height:auto;">
                                <h3 class="panel-title">Додати відгук</h3>
                                <form action="<?php echo route('add_comment');?>" method="post">
                                    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                                    <textarea name="editor_comment"></textarea>
                                    <input type="hidden" name="id_good" value="<?php echo $good[0]['original']['id'] ?>">
                                    <button type="submit" class="btn btn-success">Додати відгук</button>
                                    <div style="height:100px;"></div>
                                </form>
                                <script>
                                    CKEDITOR.replace('editor_comment');
                                </script>


                            </div>
                        </div>



              <!--ВІДГУКИ-->
                    </div>
                    <div style="margin-left:100px;" class="col-md-3 adv_panel">

                        <!--List Todo-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Рекламный блок</h3>
                            </div>
                            <img style="width:100%" src="/photos/2.png">
                            <div class="pad-ver">
                                <h3 class="panel-title">Купуйте Bosch</h3>
                            </div>

                        </div>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End todo list-->

                    </div>

                </div>
            </div>



</div>

<!--script>
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    })
    $('.delete_btn').click(function(){

        var txt;
        var r = confirm("Видалити запитання ?");
        if (r == true) {
            var user = $(this).parent('td').find('.user_id').val();

            $.ajax({
                type: "POST",
                dataType: 'json',
                url: '/func_delete_question',
                data: {user: user}, // serializes the form's elements.
                success: function (data) {

                    if (data == 'deleted') {
                        alert('користувач видален'); // show response from the php script.}
                    } else {
                        alert('помилка !')
                    }
                    location.reload();
                }

            });
        } else {
            txt = "Ви вибрали відмінити видалення";
        }

    });

</script-->

<script>
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    })

    $('.cart_btn').click(function(){
        $('#cart_btn').submit();

    });
    $('.up_count').click(function(){

        $('.inp_count').val(+($('.inp_count').val())+1);
    })

    $('.bottom_count').click(function(){
        if($('.inp_count').val()>0){
            $('.inp_count').val(+($('.inp_count').val())-1);

        }


    })
$('.fa-star').click(function(){
    var status;

    var id_good=<?php echo $good[0]['original']['id']; ?>;
    var user=<?php if(Auth::user()){echo Auth::user()->id;}?>;
    if($(this).hasClass('btn-success')){
    $(this).removeClass('btn-success');
    $(this).addClass('btn-warning');
    status=1;
//добавляем инфу в таблицу likes

 }
    else{
    $(this).removeClass('btn-warning');
    $(this).addClass('btn-success');
    status=0;
//удаляем инфу из таблицы likes

    }
    $.ajax({
        type: "POST",
        dataType:'json',
        url: '/func_like_change',
        data: { status:status, user:user, id_good:id_good }, // serializes the form's elements.
        success: function(data)
        {
            alert(data);
         /*   location.href='/good/'+id_good;*/

        }
    });

})
</script>





