<div class="boxed">

    <!--CONTENT CONTAINER-->
    <!--===================================================-->
    <div id="content-container">

        <div class="pageheader">
            <h3><i class="fa fa-home"></i> Choose trade Center to edit</h3>
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
                        <label class="col-sm-2 control-label">Choose trade center2</label>
                        <div class="col-sm-10">
                            <select class="form-control">
                                <option value="0">No selected</option>
                                <?php
                                foreach ($tradecentres as $tradecentre) {
                                    ?>
                                    <option value="<?= $tradecentre->id ?>" <?php if ($tradecentre->id == $id) echo ' selected' ?>>
                                        <?= $tradecentre->name ?>
                                    </option>
                                    <?php
                                } ?>
                            </select>

                            <script>
                                $(".form-control").change(function () {
                                    var currVal = $(this).val();
                                    if (Number(currVal) > 0) {
                                        location.href = '/admin/parking_prices/' + currVal;
                                    } else {
                                        location.href = '/admin/edit_trade_center/parking_prices';
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </div><!-- end col -->
            </div>
            <br>
            <div class="row">
                <div class="col-sm-5">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Basic example</h4>
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">DAY</label>
                                <div class="col-sm-9">
                                    <select class="form-control">
                                        <?php foreach ($numOfWeek as $num => $day): ?>
                                            <option name="day" value="<?= $num ?>"><?= $day ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">HOUR</label>
                                <div class="col-md-9">
                                    <input name="time" type="text" class="form-control" value="2">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">USD</label>
                                <div class="col-md-9">
                                    <input name="price" type="text" class="form-control" value="2">
                                </div>
                            </div>
                            <div class="form-group m-b-0">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-purple waves-effect waves-light">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-sm-7">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Basic example</h4>

                        <table class="table table-bordered m-0">
                            <thead>
                            <tr>
                                <th>Day</th>
                                <th>Time</th>
                                <th>USD</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Sunday</td>
                                <td>unlimit</td>
                                <td>R8</td>
                                <td><a href="">del</a></td>
                            </tr>
                            <tr>
                                <td>Monday</td>
                                <td>2 hour</td>
                                <td>R10</td>
                                <td><a href="">del</a></td>
                            </tr>
                            <tr>
                                <td>Monday</td>
                                <td>4 hour</td>
                                <td>R10</td>
                                <td><a href="">del</a></td>
                            </tr>
                            </tbody>
                        </table>

                        <?php foreach ($parking_prices as $parking_price): ?>
                            <?//= $parking_price->day ?>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>

        </div>
        <!--===================================================-->
        <!--End page content-->

    </div>
    <!--===================================================-->
    <!--END CONTENT CONTAINER-->





