

    <div class="boxed">

        <!--CONTENT CONTAINER-->
        <!--===================================================-->
        <div id="content-container">

            <!--Page Title-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div class="pageheader">
                <h3><i class="fa fa-home"></i> Forms Wizard </h3>
                <div class="breadcrumb-wrapper"> <span class="label">You are here:</span>
                    <ol class="breadcrumb">
                        <li> <a href="#"> Home </a> </li>
                        <li class="active"> forms wizard </li>
                    </ol>
                </div>
            </div>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End page title-->

            <!--Page content-->
            <!--===================================================-->
            <div id="page-content">

<div class="row">                    <div class="col-md-8">
        <div class="panel">
            <div class="panel-body np">

                <div class="col-md-12 col-sm-12 pad-no">
                    <h3 class="mar-hor">Товарні категоріі</h3>
                    <p class="mar-hor">Є можливість додавати та видалити категорію чи підкатегорію</p>
                    <!--================================-->
                    <div class="nano-content">

                        <ul id="mainnav-menu" class="list-group" style="background:#000">
                            <li>
                                <a href="#">
                                    <i class="fa fa-plus-square"></i>
                                    <span class="menu-title">Категоріі</span>
                                    <i class="arrow"></i>
                                </a>
                                <?
                                class Recursion_
                                {
                                    public $level;
                                    public $lang = 'en';

                                    public function get_cat($menu)
                                    {

                                        if (!$menu) {
                                            return NULL;
                                        }
                                        $arr_cat = array();
                                        if (count($menu) != 0) {

                                            //В цикле формируем массив

                                            foreach ($menu as $key => $row) {

                                                //Формируем массив где ключами являются адишники на родительские категории
                                                if (empty($arr_cat[$row['original']['parent_id']])) {
                                                    $arr_cat[$row['original']['parent_id']] = array();
                                                }
                                                $arr_cat[$row['original']['parent_id']][] = $row;
                                            }


                                            //возвращаем массив
                                            return $arr_cat;
                                        }
                                    }


                                    //вывод каталогa с помощью рекурсии
                                    public function view_cat($arr, $parent_id = 0, $level ) {

                                        //Условия выхода из рекурсии
                                        if (empty($arr[$parent_id])) {
                                            return;
                                        }

                                        echo '<ul style="font-size:15px" class="collapse par parent' . $parent_id . ' level'.$level.'" >';
                                        //перебираем в цикле массив и выводим на экран
                                        for ($i = 0; $i < count($arr[$parent_id]); $i++) {

                                            echo '<li>
                                                    <label style="color:#fff;top:0px;left:15px" class="">
                                                    </label>
                                          
                                                    <a style="margin-top:-28px;cursor:pointer;display:inline-block">' . $arr[$parent_id][$i]->name . '</a>';
                                                    //рекурсия - проверяем нет ли дочерних категорий
                                            ?>
                                            <input type="hidden" class="id_cat" value="<?php echo $arr[$parent_id][$i]->id?>">
                                            <input type="hidden" class="par_" value="<?php echo $parent_id?>">
                                            <?php
                                            echo '<a  style="margin-left:50px;position:relative;display:inline-block;height:15px;width:87px" class="del_cat btn btn-danger"><span style="font-size:12px;font-weight:normal;position:absolute;left:10px;top:2px;">Видалити ' . $arr[$parent_id][$i]->name . '&nbsp;';
                                            if($parent_id==0){
                                                echo ' та всі підкатегоріі';
                                                echo "&nbsp";
                                            }
                                            echo 'та всі товари</span></a>';

                                            $this->view_cat($arr, $arr[$parent_id][$i]->id, 1);

                                            if($i == count($arr[$parent_id])-1){

                                                if($i==1){

                                                    echo '<ul style="font-size:15px" class="collapse par parent' . $parent_id . ' level'.$level.'" >';
                                                    echo '<li><div style="width:100%;height:10px;background:#fff"></div><h5 style="color:#fff;">Додати ще одну категорію</h5></li>';
                                                    ?>
                                                    <form method="post" action="<?php echo route('add_category');?>">
                                                    <input type="hidden" name="parent" value="<?php echo $parent_id;?>">
                                                    <?php
                                                    echo '<li><input style="width:350px" name="name" type="text">
                                        
                                                    <button type="submit" style="display:inline-block" class="btn btn-primary">Додати</button>
                                                    </li>';

                                                        ?>
                                                    </form>

                                                    <?php
                                                    echo '</ul>';
                                                }

                                            }
                                            echo '</li> ';



                                        }
                                        echo '<li><div style="width:100%;height:10px;background:#fff"></div><h5 style="color:#fff;">Додати ще одну категорію</h5></li>';
                                        ?>
                                        <form method="post" action="<?php echo route('add_category');?>">

                                        <input type="hidden" name="parent" value="<?php echo $parent_id;?>">
                                        
                                        <?php
                                        echo '<li><input style="width:350px" name="name" type="text">
                                        
                                        <button type="submit" style="display:inline-block" class="btn btn-primary">Додати</button>
                                        </li>';

                                        ?>
                                        </form>

                                        <?php


                                        echo '</ul>';

                                    }
                                }
                                $rec= new Recursion_;
                                $result = $rec->get_cat($categories);
                                //Выводи каталог на экран с помощью рекурсивной функции

                                $rec->view_cat($result,0,0);

                                ?>
                                <style>
                                    .parent0{
                                        margin-left:-10px;
                                        margin-top:15px;
                                    }
                                    .level1{
                                        margin-left:15px;

                                    }
                                    .par{
                                        margin-left:30px;
                                    }
                                </style>


                            </li>
                        </ul>

                    </div>


                </div>

            </div>
        </div>
    </div></div>




            </div>
            <!--===================================================-->
            <!--End page content-->

        </div>
        <!--===================================================-->
        <!--END CONTENT CONTAINER-->




    </div>

    <script>

$('.del_cat').click(function(){
 var category=$(this).parent('li').find('.id_cat').val()
    var par_=$(this).parent('li').find('.par_').val()
    if (confirm("Удаление повлечет удаление всех подкатегорий и товаров")) {
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: '/delete_category',
            data: {category:category, par_:par_},
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
