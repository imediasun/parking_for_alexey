<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms Wizard | Jasmine - Responsive admin template.</title>


    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Roboto Slab Font [ OPTIONAL ] -->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,700italic,300,700,500italic,400" rel="stylesheet">


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="/jasmine/css/bootstrap.min.css" rel="stylesheet">


    <!--Jasmine Stylesheet [ REQUIRED ]-->
    <link href="/jasmine/css/style.css" rel="stylesheet">


    <!--Font Awesome [ OPTIONAL ]-->
    <link href="/jasmine/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">


    <!--Switchery [ OPTIONAL ]-->
    <link href="/jasmine/plugins/switchery/switchery.min.css" rel="stylesheet">


    <!--Bootstrap Select [ OPTIONAL ]-->
    <link href="/jasmine/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">

    <!--Bootstrap Validator [ OPTIONAL ]-->
    <link href="/jasmine/plugins/bootstrap-validator/bootstrapValidator.min.css" rel="stylesheet">

    <!--Demo [ DEMONSTRATION ]-->
    <link href="/jasmine/css/demo/jquery-steps.min.css" rel="stylesheet">

    <!--Demo [ DEMONSTRATION ]-->
    <link href="/jasmine/css/demo/jasmine.css" rel="stylesheet">


    <!--SCRIPT-->
    <!--=================================================-->

    <!--Page Load Progress Bar [ OPTIONAL ]-->
    <link href="/jasmine/plugins/pace/pace.min.css" rel="stylesheet">
    <script src="/jasmine/plugins/pace/pace.min.js"></script>


</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
<div id="container" class="effect mainnav-lg">



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

                <div class="row">
                    <div class="col-md-12">
                        <section class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Form wizard with Validation </h3>
                            </div>
                            <div class="panel-body">
                                <!-- START Form Wizard -->
                                <form class="form-horizontal form-bordered" action="#" id="wizard-validate">
                                    <!-- Wizard Container 1 -->
                                    <div class="wizard-title"> Registration </div>
                                    <div class="wizard-container">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <h5 class="semibold text-primary">
                                                    <i class="fa fa-sign-in"></i> Login Details
                                                </h5>
                                                <p class="text-muted"> Enter Your Login Details </p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"> User ID : </label>
                                            <div class="col-sm-6">
                                                <input class="form-control" name="name" type="text" placeholder="Type your Name" data-parsley-range="[4, 10]" data-parsley-group="order" data-parsley-required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"> Email Address : </label>
                                            <div class="col-sm-6">
                                                <input class="form-control" name="name" type="email" placeholder="Type your Email" data-parsley-group="order" data-parsley-required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"> Password : </label>
                                            <div class="col-sm-6">
                                                <input class="form-control" name="name" type="password" id="passwordinput" placeholder="Type your password" data-parsley-minlength="6" data-parsley-group="order" data-parsley-required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"> Re-Password : </label>
                                            <div class="col-sm-6">
                                                <input class="form-control" name="name" type="password" placeholder="Type your password" data-parsley-equalto="#passwordinput" data-parsley-group="order" data-parsley-required />
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ Wizard Container 1 -->
                                    <!-- Wizard Container 2 -->
                                    <div class="wizard-title"> General information </div>
                                    <div class="wizard-container">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <h5 class="semibold text-primary">
                                                    <i class="fa fa-user"></i> General information
                                                </h5>
                                                <p class="text-muted"> General information about applicant </p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>First Name: <span class="text-danger">*</span> </label>
                                                    <input type="text" name="First name" class="form-control" placeholder="First Name" data-parsley-group="information" data-parsley-required />
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Last Name: <span class="text-danger">*</span> </label>
                                                    <input type="text" name="Last name" class="form-control" placeholder="Last Name" data-parsley-group="information" data-parsley-required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Phone #:</label>
                                                    <input type="text" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999" class="form-control" />
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Date of birth:</label>
                                                    <input type="text" placeholder="99/99/9999" data-mask="99/99/9999" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Select State: </label>
                                                    <select class="form-control" id="source">
                                                        <option value="AK">Alaska</option>
                                                        <option value="HI">Hawaii</option>
                                                        <option value="CA">California</option>
                                                        <option value="NV">Nevada</option>
                                                        <option value="OR">Oregon</option>
                                                        <option value="WA">Washington</option>
                                                        <option value="AZ">Arizona</option>
                                                        <option value="CO">Colorado</option>
                                                        <option value="ID">Idaho</option>
                                                        <option value="MT">Montana</option>
                                                        <option value="NE">Nebraska</option>
                                                        <option value="NM">New Mexico</option>
                                                        <option value="ND">North Dakota</option>
                                                        <option value="UT">Utah</option>
                                                        <option value="WY">Wyoming</option>
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ Wizard Container 2 -->
                                    <!-- Wizard Container 3 -->
                                    <div class="wizard-title"> Education </div>
                                    <div class="wizard-container">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <h5 class="semibold text-primary">
                                                    <i class="fa fa-book"></i> Education
                                                </h5>
                                                <p class="text-muted"> Where and when did you get your degree </p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>University: </label>
                                                    <input type="text" name="University" class="form-control" placeholder="University Name" data-parsley-group="payment" data-parsley-required />
                                                </div>
                                                <div class="col-md-6">
                                                    <label> Country: </label>
                                                    <input type="text" name="University-Country" class="form-control" placeholder="Choose a Country" data-parsley-group="payment" data-parsley-required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label> Degree level: </label>
                                                    <input type="text" name="Bachelor, Master etc.." class="form-control" placeholder="Bachelor, Master etc.." data-parsley-group="payment" data-parsley-required />
                                                </div>
                                                <div class="col-md-3">
                                                    <label> From: </label>
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <select name="month" class="form-control" data-parsley-group="payment" data-parsley-required>
                                                                <option value="">Month</option>
                                                                <option value="1">January</option>
                                                                <option value="2">February</option>
                                                                <option value="3">March</option>
                                                                <option value="4">April</option>
                                                                <option value="5">May</option>
                                                                <option value="6">June</option>
                                                                <option value="7">July</option>
                                                                <option value="8">August</option>
                                                                <option value="9">September</option>
                                                                <option value="10">October</option>
                                                                <option value="11">November</option>
                                                                <option value="12">December</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <input type="text" name="University-Country" class="form-control" placeholder="Year" data-parsley-group="payment" data-parsley-required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label> To: </label>
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <select name="month" class="form-control" data-parsley-group="payment" data-parsley-required>
                                                                <option value="">Month</option>
                                                                <option value="1">January</option>
                                                                <option value="2">February</option>
                                                                <option value="3">March</option>
                                                                <option value="4">April</option>
                                                                <option value="5">May</option>
                                                                <option value="6">June</option>
                                                                <option value="7">July</option>
                                                                <option value="8">August</option>
                                                                <option value="9">September</option>
                                                                <option value="10">October</option>
                                                                <option value="11">November</option>
                                                                <option value="12">December</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <input type="text" name="University-Country" class="form-control" placeholder="Year" data-parsley-group="payment" data-parsley-required />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ Wizard Container 3 -->
                                    <!-- Wizard Container 4 -->
                                    <div class="wizard-title"> Work experience </div>
                                    <div class="wizard-container">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <h5 class="semibold text-primary">
                                                    <i class="fa fa-cog"></i> Work experience
                                                </h5>
                                                <p class="text-muted"> Let us know about your work experience </p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Company: </label>
                                                    <input type="text" name="Work experience" class="form-control" placeholder="Work experience" data-parsley-group="experience" data-parsley-required />
                                                </div>
                                                <div class="col-md-6">
                                                    <label> Country: </label>
                                                    <input type="text" name="Country" class="form-control" placeholder="Choose a Country" data-parsley-group="experience" data-parsley-required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label> Position: </label>
                                                    <input type="text" name="Your Position" class="form-control" placeholder="Your Position" data-parsley-group="experience" data-parsley-required />
                                                </div>
                                                <div class="col-md-3">
                                                    <label> From: </label>
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <select name="month" class="form-control" data-parsley-group="experience" data-parsley-required>
                                                                <option value="">Month</option>
                                                                <option value="1">January</option>
                                                                <option value="2">February</option>
                                                                <option value="3">March</option>
                                                                <option value="4">April</option>
                                                                <option value="5">May</option>
                                                                <option value="6">June</option>
                                                                <option value="7">July</option>
                                                                <option value="8">August</option>
                                                                <option value="9">September</option>
                                                                <option value="10">October</option>
                                                                <option value="11">November</option>
                                                                <option value="12">December</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <input type="text" name="University-Country" class="form-control" placeholder="Year" data-parsley-group="experience" data-parsley-required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label> To: </label>
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <select name="month" class="form-control" data-parsley-group="experience" data-parsley-required>
                                                                <option value="">Month</option>
                                                                <option value="1">January</option>
                                                                <option value="2">February</option>
                                                                <option value="3">March</option>
                                                                <option value="4">April</option>
                                                                <option value="5">May</option>
                                                                <option value="6">June</option>
                                                                <option value="7">July</option>
                                                                <option value="8">August</option>
                                                                <option value="9">September</option>
                                                                <option value="10">October</option>
                                                                <option value="11">November</option>
                                                                <option value="12">December</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <input type="text" name="University-Country" class="form-control" placeholder="Year" data-parsley-group="experience" data-parsley-required />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Wizard Container 4 -->
                                </form>
                                <!--/ END Form Wizard -->
                            </div>
                        </section>
                    </div>
                </div>

         


            </div>
            <!--===================================================-->
            <!--End page content-->

        </div>
        <!--===================================================-->
        <!--END CONTENT CONTAINER-->




    </div>



    <!-- FOOTER -->
    <!--===================================================-->
    <footer id="footer">

        <!-- Visible when footer positions are fixed -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <div class="show-fixed pull-right">
            <ul class="footer-list list-inline">
                <li>
                    <p class="text-sm">SEO Proggres</p>
                    <div class="progress progress-sm progress-light-base">
                        <div style="width: 80%" class="progress-bar progress-bar-danger"></div>
                    </div>
                </li>

                <li>
                    <p class="text-sm">Online Tutorial</p>
                    <div class="progress progress-sm progress-light-base">
                        <div style="width: 80%" class="progress-bar progress-bar-primary"></div>
                    </div>
                </li>
                <li>
                    <button class="btn btn-sm btn-dark btn-active-success">Checkout</button>
                </li>
            </ul>
        </div>



        <!-- Visible when footer positions are static -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <div class="hide-fixed pull-right pad-rgt">Currently v2.2</div>



        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Remove the class name "show-fixed" and "hide-fixed" to make the content always appears. -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

        <p class="pad-lft">&#0169; 2015 Your Company</p>



    </footer>
    <!--===================================================-->
    <!-- END FOOTER -->


    <!-- SCROLL TOP BUTTON -->
    <!--===================================================-->
    <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
    <!--===================================================-->



</div>
<!--===================================================-->
<!-- END OF CONTAINER -->


<!--JAVASCRIPT-->
<!--=================================================-->

<!--jQuery [ REQUIRED ]-->
<script src="/jasmine/js/jquery-2.1.1.min.js"></script>


<!--BootstrapJS [ RECOMMENDED ]-->
<script src="/jasmine/js/bootstrap.min.js"></script>


<!--Fast Click [ OPTIONAL ]-->
<script src="/jasmine/plugins/fast-click/fastclick.min.js"></script>


<!--Jasmine Admin [ RECOMMENDED ]-->
<script src="/jasmine/js/scripts.js"></script>


<!--Switchery [ OPTIONAL ]-->
<script src="/jasmine/plugins/switchery/switchery.min.js"></script>

<!--Jquery Steps [ OPTIONAL ]-->
<script src="/jasmine/plugins/parsley/parsley.min.js"></script>

<!--Jquery Steps [ OPTIONAL ]-->
<script src="/jasmine/plugins/jquery-steps/jquery-steps.min.js"></script>

<!--Bootstrap Select [ OPTIONAL ]-->
<script src="/jasmine/plugins/bootstrap-select/bootstrap-select.min.js"></script>

<!--Bootstrap Wizard [ OPTIONAL ]-->
<script src="/jasmine/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

<!--Masked Input [ OPTIONAL ]-->
<script src="/jasmine/plugins/masked-input/bootstrap-inputmask.min.js"></script>

<!--Bootstrap Validator [ OPTIONAL ]-->
<script src="/jasmine/plugins/bootstrap-validator/bootstrapValidator.min.js"></script>

<!--Form Wizard [ SAMPLE ]-->
<script src="/jasmine/js/demo/wizard.js"></script>

<!--Demo script [ DEMONSTRATION ]-->
<script src="/jasmine/js/demo/jasmine.js"></script>

<!--Form Wizard [ SAMPLE ]-->
<script src="/jasmine/js/demo/form-wizard.js"></script>


</body>
</html>
