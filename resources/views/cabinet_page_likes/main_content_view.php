



                <!-- Row selection (single row) -->
                <!--===================================================-->
                <div class="panel" style="position:relative;height:auto;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Мої симпатіі</h3>
                    </div>
                    <div class="panel-body" style="position:relative;height:auto;">
                        <table id="demo-dt-selection" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>


                            <tr>
                                <th>Найменування товару</th>
                                <th>Видалити</th>
                                <th>Ціна</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            foreach ($likes as $like){
                            
                                ?>
                                <tr>
                                <td><a href="/good/<?php echo $like->goods[0]['original']['id']?>"><?php echo $like->goods[0]['original']['name']?></a></td>
                                <td><a href="/func_like_delete/<?php echo $like->goods[0]['original']['id']?>/<?echo $user?>" class="btn btn-danger">видалити симпатію</a></td>

                                <td><?php echo $like->goods[0]['original']['price']?></td>
                            </tr>
                            <?php 
                            }
                            ?>
                            

                            </tbody>
                        </table>
                    </div>
                </div>
                <!--===================================================-->
                <!-- End Row selection (single row) -->


                <div style="height:100px;" class="panel"></div>





                <!--===================================================-->
                <!--End network line chart-->

                </div>



                </div>
                </div>


                </div>
