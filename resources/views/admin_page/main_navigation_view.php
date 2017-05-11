


<!-- ========== Left Sidebar Start ========== -->


<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

        <!-- User -->
        <div class="user-box">
            <div class="user-img">
                <img src="/assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
                <div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div>
            </div>
            <h5><a href="#">Mat Helme</a> </h5>
            <ul class="list-inline">
                <li>
                    <a href="#" >
                        <i class="zmdi zmdi-settings"></i>
                    </a>
                </li>
                
                <li>
                    <a href=""
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                       class="text-custom">
                        <i class="zmdi zmdi-power"></i>
                    </a>
                    <form id="logout-form" action="<?php echo url('/logout') ?>" method="POST" style="display: none;">
                        <?php echo csrf_field() ?>
                    </form>


                </li>
            </ul>
        </div>
        <!-- End User -->

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
            <?php
            class Recursion
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
                            if (empty($arr_cat[$row->parent_id])) {
                                $arr_cat[$row->parent_id] = array();
                            }
                            $arr_cat[$row->parent_id][] = $row;
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
                    if($parent_id !== 0) {
                        echo '
                                <ul class="list-unstyled">';
                    }
                    //перебираем в цикле массив и выводим на экран
                    for ($i = 0; $i < count($arr[$parent_id]); $i++) {

                        if($parent_id == 0){
                            echo '<li >';
                            echo '<a class="waves-effect"> ';


                            echo '<span >' . $arr[$parent_id][$i]->name . '</span>
                </a>';
                        }


                        if($parent_id !== 0) {
                            echo '<li class="has_sub"> 
                <a href="'. $arr[$parent_id][$i]->link .'" class="waves-effect"> <span class="menu-arrow"></span>
                <span >' . $arr[$parent_id][$i]->name . '</span> 
                </a>
                 ';

                        }

                        //рекурсия - проверяем нет ли дочерних категорий
                        $this->view_cat($arr, $arr[$parent_id][$i]->id, 1);
                        echo '</li> ';
                    }
                    if($parent_id !== 0) {
                        echo '</ul>
                            ';
                    }
                }
            }
            $rec= new Recursion;
            $result = $rec->get_cat($menu);
            //Выводи каталог на экран с помощью рекурсивной функции

            $rec->view_cat($result,0,0);

            ?>

        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>

</div>
<!-- Left Sidebar End -->

