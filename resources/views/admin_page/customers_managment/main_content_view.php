



    <div class="boxed">

        <!--CONTENT CONTAINER-->
        <!--===================================================-->
        <div id="content-container">

            <div class="pageheader">
                <h3><i class="fa fa-home"></i> Datatable Table </h3>
                <div class="breadcrumb-wrapper"> <span class="label">You are here:</span>
                    <ol class="breadcrumb">
                        <li> <a href="#"> Home </a> </li>
                        <li class="active"> datatable Table </li>
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
                        <h3 class="panel-title">Основна таблиця управління користувачами</h3>
                    </div>
                    <div class="panel-body">
                        <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Ім'я</th>
                                <th>EmailL</th>
                                <th class="min-tablet">Роль</th>
                                <th class="min-tablet">Дата регестраціі</th>
                                <th class="min-desktop">Видалити</th>
                                <th class="min-desktop">Активацiя</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php

                            foreach($users as $user){

                              ?>
                                <tr>
                                    <td><?php echo $user['original']['name'];?></td>
                                    <td><?php echo $user['original']['email'];?></td>
                                    <td width="250px">
                                    <input type="hidden" class="user_id" name="user_id" value="<?php echo $user['original']['id'];?>">
                                  <select style="width:250px;height:30px" class="stl" >

                                        <?php foreach($roles as $role){
                                    $st = isset($user->roles['0']) ? $user->roles['0'] : false;
                                            
                                    if($st) {
                                         if ($user->roles['0']['original']['id'] == $role['original']['id']) {
                                          
                                         ?>
                                         <option selected
                                         value=" <?php echo $role['original']['id'] ?>"><?php echo $role['original']['name'] ?></option>
                                            <?
                                         } else {
                                          ?>
                                          <option
                                          value="<?php echo $role['original']['id'] ?>"> <? echo $role['original']['name'] ?></option>
                                            <?
                                            }
                                            }
                                            }
                                        ?>
                                    </select>


                                    </td>
                                    <td><?php echo $user['original']['created_at'];?></td>
                                    <td>
                                        <input type="hidden" class="user_id" name="user_id" value="<?php echo $user['original']['id'];?>">
                                        <button class="delete_btn btn btn-danger btn-icon icon-lg fa fa-times"></button></td>
                                    <td>
                                    <?php
                                    if($user['original']['activated']==1){
                                        echo 'Активован';

                                    }
                                    else{
                                        echo 'Не активован';

                                    }
                                    ?>
                                    </td>

                                </tr>



                              <?

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
                headers:{
                    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                }
            })
            $('.stl option').click(function(){

                var role = $(this).val()
                var user = $(this).parent('.stl').parent('td').find('.user_id').val();
                
                $.ajax({
                    type: "POST",
                    dataType:'json',
                    url: '/admin/func_update_role',
                    data: { role:role, user:user }, // serializes the form's elements.
                    success: function(data)
                    {
                        alert(data); // show response from the php script.
                    }
                });
            });

            $('.delete_btn').click(function(){

                var txt;
                var r = confirm("Видалити користувача ?");
                if (r == true) {
                    var user = $(this).parent('td').find('.user_id').val();

                    $.ajax({
                        type: "POST",
                        dataType: 'json',
                        url: '/admin/func_delete_user',
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

        </script>





