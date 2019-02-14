
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>iRestora | Restaurant POS with Smart Inventory</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- jQuery 3 -->
    <script src="http://multidimensionsystems.com/demo/iRestora/assets/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Select2 -->
    <script src="http://multidimensionsystems.com/demo/iRestora/assets/bower_components/select2/dist/js/select2.full.min.js"></script>
    <!-- Select2 -->
    <link rel="stylesheet" href="http://multidimensionsystems.com/demo/iRestora/assets/bower_components/select2/dist/css/select2.min.css">
    <!-- InputMask -->
    <script src="http://multidimensionsystems.com/demo/iRestora/assets/plugins/input-mask/jquery.inputmask.js"></script>
    <script src="http://multidimensionsystems.com/demo/iRestora/assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="http://multidimensionsystems.com/demo/iRestora/assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- iCheck -->
    <script src="http://multidimensionsystems.com/demo/iRestora/assets/plugins/iCheck/icheck.min.js"></script>
    <link rel="stylesheet" href="http://multidimensionsystems.com/demo/iRestora/assets/plugins/iCheck/all.css">
    <!-- Sweet alert -->
    <script src="http://multidimensionsystems.com/demo/iRestora/assets/bower_components/sweetalert2/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="http://multidimensionsystems.com/demo/iRestora/assets/bower_components/sweetalert2/dist/sweetalert.min.css">
    <!-- Include a polyfill for ES6 Promises (optional) for IE11 and Android browser -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

    <!-- Numpad -->
    <script src="http://multidimensionsystems.com/demo/iRestora/assets/bower_components/numpad/jquery.numpad.js"></script>
    <link rel="stylesheet" href="http://multidimensionsystems.com/demo/iRestora/assets/bower_components/numpad/jquery.numpad.css">
    <link rel="stylesheet" href="http://multidimensionsystems.com/demo/iRestora/assets/bower_components/numpad/theme.css">
    <!--datepicker-->
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="http://multidimensionsystems.com/demo/iRestora/assets/bower_components/datepicker/datepicker.css">

    <!-- bootstrap datepicker -->
    <script src="http://multidimensionsystems.com/demo/iRestora/assets/bower_components/datepicker/bootstrap-datepicker.js"></script>

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="http://multidimensionsystems.com/demo/iRestora/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://multidimensionsystems.com/demo/iRestora/assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="http://multidimensionsystems.com/demo/iRestora/assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://multidimensionsystems.com/demo/iRestora/assets/dist/css/AdminLTE.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="http://multidimensionsystems.com/demo/iRestora/assets/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link href="http://multidimensionsystems.com/demo/iRestora/asset/plugins/iCheck/minimal/color-scheme.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" href="http://multidimensionsystems.com/demo/iRestora/assets/images/favicon.ico" type="image/x-icon">
    <!-- Favicon -->
    <link rel="icon" href="http://multidimensionsystems.com/demo/iRestora/assets/images/favicon.ico" type="image/x-icon">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Theme style -->
    <link rel="stylesheet" href="http://multidimensionsystems.com/demo/iRestora/assets/dist/css/AdminLTE.min.css">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style type="text/css">
        .company_info{
            min-height: 41px;
            color: white !important;
            text-align: center;
            font-weight: bold;
        }
        .breadcrumb{
            padding: 0px 5px !important;
        }
        .btn-primary{
            background-color: #0c5889;
        }
        .form_question{
            font-size: 24px;
            color: #0c5889;
            padding-top: 7px;
        }
        .main-footer{
            padding: 10px !important;
        }
        .main-footer p{
            padding-top: 10px;
        }
        .left-sdide{
            float: left !important;
        }
        .navbar-nav > .user-menu > .dropdown-menu dropdown-menu-right{
            width: 50px;
        }
        .dropdown-menu{
            border: 1px solid #0c5889 !important;
        }
        .loader{
            display: none;
        }
    </style>
    <script>
        jQuery(document).ready(function($) {
            $('[data-mask]').inputmask()
            $('.select2').select2()
            /*                $(".delete").click(function(e){
             swal({
             title: "Are you sure?",
             //text: "You will not be able to recover this imaginary file!",
             //type: "warning",
             showCancelButton: true,
             confirmButtonColor: "#0C5889",
             confirmButtonText: "Yes",
             cancelButtonText: "No",
             closeOnConfirm: false,
             closeOnCancel: false
             },
             function(isConfirm) {
             if (isConfirm) {
             return true;
             } else {
             return false;
             }
             });

             swal({
             title: "Are you sure?",
             text: "Your will not be able to recover this imaginary file!",
             type: "warning",
             showCancelButton: true,
             confirmButtonClass: "delete",
             confirmButtonText: "Yes, delete it!",
             closeOnConfirm: false
             },
             function(){
             swal("Deleted!", "Your imaginary file has been deleted.", "success");
             });
             var job=confirm("Are you sure you want to delete?");
             if(job==true){
             return true;
             }else{
             return false;
             }

             }); */
            /*$(".delete").click(function(e){

             var job=confirm("Are you sure you want to delete?");
             if(job==true){
             return true;
             }else{
             return false;
             }

             /!*   swal({
             title: "Are you sure?",
             text: "Once deleted, you will not be able to recover this imaginary file!",
             icon: "warning",
             buttons: true,
             dangerMode: true,
             })
             .then((willDelete) => {
             if (willDelete) {
             return true;
             /!*swal("Poof! Your imaginary file has been deleted!", {
             icon: "success",
             });
             } else {
             return false;
             //swal("Your imaginary file is safe!");
             }
             });*!/
             });*/
            $(".delete").click(function(e){
                e.preventDefault();
                alert('Not allowed in demo mode');
                //var linkURL = this.href;
                //warnBeforeRedirect(linkURL);
            });
            function warnBeforeRedirect(linkURL) {
                swal({
                    title: "Alert!",
                    text: "Are you sure!",
                    confirmButtonColor: '#0C5889',
                    showCancelButton: true
                }, function() {
                    window.location.href = linkURL;
                });
            }
            //iCheck for checkbox and radio inputs
            $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass   : 'iradio_minimal-blue'
            })


            $(document).on('keydown', '.integerchk', function(e){
                /*$('.integerchk').keydown(function(e) {*/
                /*  var keys = e.charCode || e.keyCode || 0;
                 var input = $(this).val();*/
                /* var regex=/^[0-9]+([.][0-9]{1})?$/;
                 if (input.match(regex))
                 {
                 return true;
                 }else{

                 }*/

                /* var regex=/^\+?(88)?01([0-9]{9})$/;
                 if (mobileNo.match(regex))
                 {
                 return true;
                 }*/
                // allow backspace, tab, delete, enter, arrows, numbers and keypad numbers ONLY
                // home, end, period, and numpad decimal
                return (
                keys == 8 ||
                keys == 9 ||
                keys == 13 ||
                keys == 46 ||
                keys == 110 ||
                keys == 86 ||
                keys == 190 ||
                (keys >= 35 && keys <= 40) ||
                (keys >= 48 && keys <= 57) ||
                (keys >= 96 && keys <= 105));
            });

            $(document).on('keyup', '.integerchk', function(e){
                var input = $(this).val();
                var ponto = input.split('.').length;
                var slash = input.split('-').length;
                if (ponto > 2)
                    $(this).val(input.substr(0,(input.length)-1));
                $(this).val(input.replace(/[^0-9]/,''));
                if(slash > 2)
                    $(this).val(input.substr(0,(input.length)-1));
                if (ponto ==2)
                    $(this).val(input.substr(0,(input.indexOf('.')+3)));
                if(input == '.')
                    $(this).val("");

            });

        });
    </script>
    <script>
        $(function () {

            //Date picker
            $('#date').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true
            });
            $('#dates2').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true
            });
            $('.customDatepicker').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true
            });
            $(".datepicker_months").datepicker({
                format: 'yyyy-M',
                autoclose: true,
                viewMode: "months",
                minViewMode: "months"
            });
        })
    </script>
</head>

<div class="loader"></div>
<!-- ADD THE CLASS sidebar-collapse TO HIDE THE SIDEBAR PRIOR TO LOADING THE SITE -->
<body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
<!--<body class="hold-transition skin-blue sidebar-collapse sidebar-mini">-->
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">iR</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><img src="http://multidimensionsystems.com/demo/iRestora/assets/images/iRestora_logo_white.png"></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu left-sdide">
                <ul class="nav navbar-nav">

                    <!-- User Account: style can be found in dropdown.less -->

                    <li class="dropdown user user-menu">
                        <a href="http://multidimensionsystems.com/demo/iRestora/Sale/POS">
                            <i class="fa fa-cutlery"></i>
                            <span class="hidden-xs">POS</span>
                        </a>
                    </li>

                    <li class="dropdown user user-menu">
                        <a href="http://multidimensionsystems.com/demo/iRestora/Purchase/addEditPurchase">
                            <i class="fa fa-truck"></i>
                            <span class="hidden-xs">Add Purchase</span>
                        </a>
                    </li>

                    <li class="dropdown user user-menu">
                        <a href="#" onclick="todaysSummary();" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-list"></i><span class="hidden-xs">Today's Summary</span>
                        </a>
                    </li>
                    <li class="dropdown user user-menu">
                        <a href="http://multidimensionsystems.com/demo/iRestora/Inventory/getInventoryAlertList">
                            <i class="fa fa-hdd-o"></i>
                            <span style="color: #d73925;">186</span> <span class="hidden-xs">in Alert</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="http://multidimensionsystems.com/demo/iRestora/Authentication/logOut">Logout

                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="http://multidimensionsystems.com/demo/iRestora/assets/images/chef.png" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>yutyutyu</p>
                    <p>Md. Nazmul Hosan</p>
                    <p>
                        Admin
                    </p>
                </div>
            </div>

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>

                <li>
                    <a href="http://multidimensionsystems.com/demo/iRestora/Authentication/userProfile"><i class="fa fa-home"></i> <span>Home</span></a>
                </li>
                <li>
                    <a href="http://multidimensionsystems.com/demo/iRestora/Outlet/outlets"><i class="fa fa-list-ol"></i> <span>Outlet List</span></a>
                </li>



                <li>
                    <a href="http://multidimensionsystems.com/demo/iRestora/Dashboard/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                </li>

                <li>
                    <a href="http://multidimensionsystems.com/demo/iRestora/Purchase/purchases"><i class="fa fa-truck"></i> <span>Purchase</span></a>
                </li>

                <li>
                    <a href="http://multidimensionsystems.com/demo/iRestora/Sale/sales"><i class="fa fa-cutlery"></i> <span>Sale</span></a>
                </li>

                <li>
                    <a href="http://multidimensionsystems.com/demo/iRestora/Inventory/index"><i class="fa fa-hdd-o"></i> <span>Inventory</span></a>
                </li>

                <li>
                    <a href="http://multidimensionsystems.com/demo/iRestora/Waste/wastes"><i class="fa fa-trash"></i> <span>Waste</span></a>
                </li>

                <li>
                    <a href="http://multidimensionsystems.com/demo/iRestora/Expense/expenses"><i class="fa fa-money"></i> <span>Expense</span></a>
                </li>

                <li>
                    <a href="http://multidimensionsystems.com/demo/iRestora/SupplierPayment/supplierPayments"><i class="fa fa-users"></i> <span>Supplier Due Payment</span></a>
                </li>


                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-file-text"></i> <span>Report</span>
                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="http://multidimensionsystems.com/demo/iRestora/Report/dailySummaryReport"><i class="fa fa-circle-o"></i>Daily Summary Report</a></li>
                        <li><a href="http://multidimensionsystems.com/demo/iRestora/Report/inventoryReport"><i class="fa fa-circle-o"></i>Inventory Report</a></li>
                        <li><a href="http://multidimensionsystems.com/demo/iRestora/Report/vatReport"><i class="fa fa-circle-o"></i>VAT Report</a></li>
                        <li><a href="http://multidimensionsystems.com/demo/iRestora/Report/supplierReport"><i class="fa fa-circle-o"></i>Supplier Report</a></li>
                        <li><a href="http://multidimensionsystems.com/demo/iRestora/Report/supplierDueReport"><i class="fa fa-circle-o"></i>Supplier Due Report</a></li>
                        <li><a href="http://multidimensionsystems.com/demo/iRestora/Report/profitLossReport"><i class="fa fa-circle-o"></i>Profit Loss Report</a></li>
                        <li><a href="http://multidimensionsystems.com/demo/iRestora/Report/saleReportByMonth"><i class="fa fa-circle-o"></i>Sale Report by Month</a></li>
                        <li><a href="http://multidimensionsystems.com/demo/iRestora/Report/saleReportByDate"><i class="fa fa-circle-o"></i>Sale Report by Date</a></li>
                        <li><a href="http://multidimensionsystems.com/demo/iRestora/Report/foodMenuSales"><i class="fa fa-circle-o"></i>Food Menu Sales</a></li>
                        <li><a href="http://multidimensionsystems.com/demo/iRestora/Report/detailedSaleReport"><i class="fa fa-circle-o"></i>Detailed Sale Report</a></li>
                        <li><a href="http://multidimensionsystems.com/demo/iRestora/Report/purchaseReportByMonth"><i class="fa fa-circle-o"></i>Pur. Report by Month</a></li>
                        <li><a href="http://multidimensionsystems.com/demo/iRestora/Report/purchaseReportByDate"><i class="fa fa-circle-o"></i>Pur. Report by Date</a></li>
                        <li><a href="http://multidimensionsystems.com/demo/iRestora/Report/purchaseReportByIngredient"><i class="fa fa-circle-o"></i>Pur. Report by Ingredient</a></li>
                        <li><a href="http://multidimensionsystems.com/demo/iRestora/Report/detailedPurchaseReport"><i class="fa fa-circle-o"></i>Detailed Pur. Report</a></li>
                        <li><a href="http://multidimensionsystems.com/demo/iRestora/Report/expenseReport"><i class="fa fa-circle-o"></i>Expense Report</a></li>
                        <li><a href="http://multidimensionsystems.com/demo/iRestora/Report/wasteReport"><i class="fa fa-circle-o"></i>Waste Report</a></li>
                    </ul>
                </li>



                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-database"></i> <span>Master</span>
                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="http://multidimensionsystems.com/demo/iRestora/Master/ingredientCategories"><i class="fa fa-circle-o"></i>Ingredient Categories</a></li>
                        <li><a href="http://multidimensionsystems.com/demo/iRestora/Master/Units"><i class="fa fa-circle-o"></i>Ingredient Units</a></li>
                        <li><a href="http://multidimensionsystems.com/demo/iRestora/Master/ingredients"><i class="fa fa-circle-o"></i>Ingredients</a></li>
                        <li><a href="http://multidimensionsystems.com/demo/iRestora/Master/VATs"><i class="fa fa-circle-o"></i>VATs</a></li>
                        <li><a href="http://multidimensionsystems.com/demo/iRestora/Master/foodMenuCategories"><i class="fa fa-circle-o"></i>Food Menu Categories</a></li>
                        <li><a href="http://multidimensionsystems.com/demo/iRestora/Master/foodMenus"><i class="fa fa-circle-o"></i>Food Menus</a></li>
                        <li><a href="http://multidimensionsystems.com/demo/iRestora/Master/suppliers"><i class="fa fa-circle-o"></i>Suppliers</a></li>
                        <li><a href="http://multidimensionsystems.com/demo/iRestora/Master/customers"><i class="fa fa-circle-o"></i>Customers</a></li>
                        <li><a href="http://multidimensionsystems.com/demo/iRestora/Master/expenseItems"><i class="fa fa-circle-o"></i>Expense Items</a></li>
                        <li><a href="http://multidimensionsystems.com/demo/iRestora/Master/employees"><i class="fa fa-circle-o"></i>Employees</a></li>
                        <li><a href="http://multidimensionsystems.com/demo/iRestora/Master/paymentMethods"><i class="fa fa-circle-o"></i>Payment Methods</a></li>
                        <li><a href="http://multidimensionsystems.com/demo/iRestora/Master/tables"><i class="fa fa-circle-o"></i>Tables</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user"></i> <span>Account</span>
                        <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="http://multidimensionsystems.com/demo/iRestora/Authentication/setting"><i class="fa fa-circle-o"></i>General Settings</a></li>

                        <li><a href="http://multidimensionsystems.com/demo/iRestora/User/users"><i class="fa fa-circle-o"></i>Manage Users</a></li>
                        <li><a href=""><i class="fa fa-circle-o"></i>Change profile</a></li>
                        <li><a href=""><i class="fa fa-circle-o"></i>Change Password</a></li>
                        <li><a href="http://multidimensionsystems.com/demo/iRestora/Authentication/logOut"><i class="fa fa-circle-o"></i>Logout</a></li>
                    </ul>
                </li>


            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->

        <link rel="stylesheet" href="http://multidimensionsystems.com/demo/iRestora/assets/ashik_custom/style.css">
        <link rel="stylesheet" href="http://multidimensionsystems.com/demo/iRestora/assets/ashik_custom/responsive.css">
        <!-- Main content -->
        <style type="text/css">
            @import url(https://fonts.googleapis.com/css?family=Droid+Sans);
            .loader {
                position: fixed;
                left: 0px;
                top: 0px;
                width: 100%;
                height: 100%;
                z-index: 9999;
                background: url('http://multidimensionsystems.com/demo/iRestora/assets/newloading.gif') 50% 50% no-repeat rgba(102, 107, 107, 1);
            }
            .category-search span {
                width: 100%;
            }
            .confirm {
                background-color: red;
            }
            .confirm:hover{
                background-color: red;
            }
        </style>
        <style type="text/css">
            .required_star{
                color: #dd4b39;
            }

            .radio_button_problem{
                margin-bottom: 19px;
            }
            .itemMenuCartInfo{
                border: 2px solid #0C5889;
                padding: 15px;
                border-radius: 5px;
                color: #0C5889;
                font-size: 14px;
            }
            .cart_container{
                /* border: 1px solid black;*/
            }
            .cart_header{
                background-color: #ecf0f5;
                padding: 5px 0px;
                margin-bottom: 5px;
            }
            .ch_content{
                font-weight: bold;
            }
            .custom_form_control{
                border-radius: 0;
                box-shadow: none;
                border-color: #d2d6de;
                width: 80%;
                height: 26px;
                padding: 6px 12px;
                font-size: 14px;
                line-height: 1.42857143;
                color: #555;
                background-color: #fff;
                background-image: none;
                border: 1px solid #ccc;
                margin: 0px 3px 7px 0px;
            }
            .center_positition{
                text-align: center !important;
            }
            .error-msg{
                display:none;
            }
            .aligning{
                width: 80%; float:left;
            }
            .aligning_x{
                width: 80%;
            }
            .label_aligning{
                float: left; padding: 5px 0px 0px 3px;
            }
            .label-aligning_x{
                float: left; padding: 5px 0px 0px 3px;
            }
        </style>

        <link href="http://multidimensionsystems.com/demo/iRestora/assets/bower_components/nump/theme.css" rel="stylesheet">
        <link rel="stylesheet" href="http://multidimensionsystems.com/demo/iRestora/assets/bower_components/nump/jquery.css">
        <script>
            $(function() {
                /* $.fn.numpad.defaults.gridTpl = '<table class="table modal-content"></table>';
                 $.fn.numpad.defaults.backgroundTpl = '<div class="modal-backdrop in"></div>';
                 $.fn.numpad.defaults.displayTpl = '<input type="text" class="form-control  input-lg" />';
                 $.fn.numpad.defaults.buttonNumberTpl =  '<button type="button" class="btn btn-default btn-lg"></button>';
                 $.fn.numpad.defaults.buttonFunctionTpl = '<button type="button" class="btn btn-lg" style="width: 100%;"></button>';
                 $.fn.numpad.defaults.onKeypadCreate = function(){$(this).find('.done').addClass('btn-primary');};
                 $(document).ready(function(){
                 $('#total_payable1').numpad();
                 });*/
                $(document).on('keydown', '.discount', function(e){
                    /*$('.integerchk').keydown(function(e) {*/
                    var keys = e.charCode || e.keyCode || 0;
                    // allow backspace, tab, delete, enter, arrows, numbers and keypad numbers ONLY
                    // home, end, period, and numpad decimal
                    return (
                    keys == 8 ||
                    keys == 9 ||
                    keys == 13 ||
                    keys == 46 ||
                    keys == 110 ||
                    keys == 86 ||
                    keys == 190 ||
                    (keys >= 35 && keys <= 40) ||
                    (keys >= 48 && keys <= 57) ||
                    (keys >= 96 && keys <= 105));
                });

                $(document).on('keyup', '.discount', function(e){
                    var input = $(this).val();
                    var ponto = input.split('.').length;
                    var slash = input.split('-').length;
                    if (ponto > 2)
                        $(this).val(input.substr(0,(input.length)-1));
                    $(this).val(input.replace(/[^0-9.%]/,''));
                    if(slash > 2)
                        $(this).val(input.substr(0,(input.length)-1));
                    if (ponto ==2)
                        $(this).val(input.substr(0,(input.indexOf('.')+4)));
                    if(input == '.')
                        $(this).val("");

                });
            });
            $(".item_menu_dd").select2({
                formatNoMatches: function(term) {
                    //return a search choice
                }
            });
        </script>
        <section class="content custom-bg">
            <form class="form-horizontal"  id="form_id">
                <div class="row">
                    <!-- ./col -->
                    <div class="col-md-12 col-md-12 hide-md-device">
                        <div class="category-area">
                            <div class="category-header">
                                <br>
                                <div class="col-md-12" style="margin-top: 24px;">
                                    <div class="category-search">
                                        <select id="table_id" class="form-control select2 table_id" name="table_id">
                                            <option value="">Table</option>
                                            <option value="11">1</option>
                                            <option value="10">11</option>
                                            <option value="12">2</option>
                                            <option value="14">demo</option>
                                            <option value="28">helloworld</option>
                                            <option value="27">Lava1</option>
                                            <option value="15">masa 1</option>
                                            <option value="16">masa 2</option>
                                            <option value="17">MASA 33</option>
                                            <option value="7">Mesa 03</option>
                                            <option value="8">Mesa 04</option>
                                            <option value="9">Mesa 05</option>
                                            <option value="5">MESA 1</option>
                                            <option value="6">MESA 10</option>
                                            <option value="23">mesa1</option>
                                            <option value="24">Meson</option>
                                            <option value="25">No.1</option>
                                            <option value="26">No.2</option>
                                            <option value="20">T1</option>
                                            <option value="22">tabel</option>
                                            <option value="2">Table 01</option>
                                            <option value="3">Table 02</option>
                                            <option value="21">table 2</option>
                                            <option value="29">table 99</option>
                                            <option value="19">test</option>
                                            <option value="13">Testtable123</option>
                                            <option value="18">texas test</option>
                                            <option value="4">Tiago Francisco Vicente</option>
                                        </select>
                                    </div>

                                    <div class="scrollmenu">
                                        <a class="fm_category allBg" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">All</a>
                                        <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">American</a>
                                        <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Ayam Crispy</a>
                                        <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Bebidas</a>
                                        <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Bengali</a>
                                        <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Beverage</a>
                                        <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Birra</a>
                                        <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Cervezas</a>
                                        <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Chicken</a>
                                        <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Chienese</a>
                                        <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Coffee</a>
                                        <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Coffee</a>
                                        <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Comída Rápida</a>
                                        <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Deserts</a>
                                        <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">DRINKS</a>
                                        <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Fast Food </a>
                                        <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Freskuese</a>
                                        <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Fruits</a>
                                        <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">ikkk</a>
                                        <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Indian</a>
                                        <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">indian biryani</a>
                                        <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Italian</a>
                                        <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">ITALIAN NORTHERN</a>
                                        <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Japanese</a>
                                        <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">lavado</a>
                                        <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Main Dishes</a>
                                        <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Maxiacan</a>
                                        <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Mexican</a>
                                        <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Paki Foods</a>
                                        <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Pakistani</a>
                                        <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">South Indian</a>
                                        <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Substation Food Item 1</a>
                                        <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Sweets</a>
                                        <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Thai Food</a>
                                        <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Ugali</a>
                                        <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Yakhni pola</a>
                                        <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">مشویات</a>

                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="hidden-lg"><br></div>
                            <div class="category-body">
                                <div class="category-items">
                                    <a href=""   class="category-single-item South_Indian" data-params="74||Abc||100.00||20.00">
                                        Abc <span>(FM-056)</span></a>
                                    <a href=""   class="category-single-item indian_biryani" data-params="99||Abc D||100.00||20.00">
                                        Abc D <span>(FM-081)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/9d08cf5c739aa3e39eaf58045964f538.jpg) repeat-x'  class="category-single-item Coffee" data-params="75||Abcd||200.00||20.00">
                                        Abcd <span>(FM-057)</span></a>
                                    <a href=""   class="category-single-item South_Indian" data-params="78||Ahi Bread||1000.00||">
                                        Ahi Bread <span>(FM-060)</span></a>
                                    <a href=""   class="category-single-item ITALIAN_NORTHERN" data-params="71||Aloo||10000.00||">
                                        Aloo <span>(FM-054)</span></a>
                                    <a href=""   class="category-single-item Coffee" data-params="69||Arabian Cofee||18.00||18.00">
                                        Arabian Cofee <span>(FM-051)</span></a>
                                    <a href=""   class="category-single-item Fruits" data-params="119||Arun||200.00||18.00">
                                        Arun <span>(FM-101)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/d28a76f8772ae701ebe200840c9dcc49.jpg) repeat-x'  class="category-single-item Maxiacan" data-params="45||Asdzzz||5.00||18.00">
                                        Asdzzz <span>(FM-027)</span></a>
                                    <a href=""   class="category-single-item American" data-params="90||Bacon Burger||150.00||20.00">
                                        Bacon Burger <span>(FM-072)</span></a>
                                    <a href=""   class="category-single-item American" data-params="89||Bacon Sw||15.00||">
                                        Bacon Sw <span>(FM-071)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/f91431634bba96e654e8d540d8f4f8bf.jpg) repeat-x'  class="category-single-item indian_biryani" data-params="109||Beef Biriyani||1.00||">
                                        Beef Biriyani <span>(FM-091)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/1fde4ce874a3172c6ec7b3cfa6acfecf.jpg) repeat-x'  class="category-single-item Indian" data-params="34||Beet And Onion Pic||150.00||18.00">
                                        Beet And Onion Pic <span>(FM-027)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/4a946ea884a205a07f2a7765c71bd148.jpg) repeat-x'  class="category-single-item American" data-params="44||Best Eggs Benedict||200.00||18.00">
                                        Best Eggs Benedict <span>(FM-037)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/c9a3eb982a267e83017ada06b7dd51f5.jpg) repeat-x'  class="category-single-item Deserts" data-params="27||Better Chocolate C||200.00||18.00">
                                        Better Chocolate C <span>(FM-020)</span></a>
                                    <a href=""   class="category-single-item Indian" data-params="59||Biryani||500.00||18.00">
                                        Biryani <span>(FM-041)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/cec59b09d4bffa9d602d017c5e364952.jpg) repeat-x'  class="category-single-item Chienese" data-params="21||Black Pepper Beef||300.00||18.00">
                                        Black Pepper Beef <span>(FM-014)</span></a>
                                    <a href=""   class="category-single-item Indian" data-params="51||Bpizza||12.00||18.00">
                                        Bpizza <span>(FM-033)</span></a>
                                    <a href=""   class="category-single-item Sweets" data-params="114||Burfi||450.00||18.00">
                                        Burfi <span>(BR-096)</span></a>
                                    <a href=""   class="category-single-item Chicken" data-params="86||Burger||100.00||">
                                        Burger <span>(FM-068)</span></a>
                                    <a href=""   class="category-single-item Chicken" data-params="108||Burger Menu||150.00||24.00">
                                        Burger Menu <span>(FM-090)</span></a>
                                    <a href=""   class="category-single-item Indian" data-params="67||Butter Chicken||100.00||18.00">
                                        Butter Chicken <span>(FM-049)</span></a>
                                    <a href=""   class="category-single-item Fruits" data-params="123||Cà Phê Sữa||120.00||18.00">
                                        Cà Phê Sữa <span>(FM-105)</span></a>
                                    <a href=""   class="category-single-item Indian" data-params="56||Ch Biryani||100.00||18.00">
                                        Ch Biryani <span>(FM-038)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/3c6dc05ff2d7a941f5928b4871db65ae.jpg) repeat-x'  class="category-single-item Substation_Food_Item_1" data-params="84||Cha||10.00||7.00">
                                        Cha <span>(FM-066)</span></a>
                                    <a href=""   class="category-single-item Indian" data-params="82||Chana Masala||150.00||20.00">
                                        Chana Masala <span>(FM-064)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/6ac448a1bf4efa684d1d13a9cdc4cfb0.jpg) repeat-x'  class="category-single-item Indian" data-params="83||Chana Masala Fry||50.00||20.00">
                                        Chana Masala Fry <span>(FM-065)</span></a>
                                    <a href=""   class="category-single-item South_Indian" data-params="87||Chapathi Roll||30.00||20.00">
                                        Chapathi Roll <span>(FM-068)</span></a>
                                    <a href=""   class="category-single-item South_Indian" data-params="85||Chef||132.00||">
                                        Chef <span>(FM-067)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/0cf2c76023a486f8fe0f4578d67b9f0f.jpg) repeat-x'  class="category-single-item Deserts" data-params="32||Chewy Hot Fudge||250.00||18.00">
                                        Chewy Hot Fudge <span>(FM-025)</span></a>
                                    <a href=""   class="category-single-item Pakistani" data-params="93||Chicken Biryani Pa||250.00||">
                                        Chicken Biryani Pa <span>(FM-075)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/7b77ae1f2d604ec9924c323915c9be72.jpg) repeat-x'  class="category-single-item Chienese" data-params="19||Chicken Chow Mein||350.00||18.00">
                                        Chicken Chow Mein <span>(FM-012)</span></a>
                                    <a href=""   class="category-single-item American" data-params="55||Chicken Fillet||150.00||">
                                        Chicken Fillet <span>(FM-037)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/f16bd9af2942a7282c6cf3dc93dd9f06.jpg) repeat-x'  class="category-single-item Italian" data-params="35||Chicken Piccata||300.00||18.00">
                                        Chicken Piccata <span>(FM-028)</span></a>
                                    <a href=""   class="category-single-item Chicken" data-params="94||Chicken Roll 41||250.00||18.00">
                                        Chicken Roll 41 <span>(FM-076)</span></a>
                                    <a href=""   class="category-single-item Pakistani" data-params="100||Chicken Shawarma||100.00||18.00">
                                        Chicken Shawarma <span>(FM-082)</span></a>
                                    <a href=""   class="category-single-item Chicken" data-params="105||Chicken365||600.00||24.00">
                                        Chicken365 <span>(FM-087)</span></a>
                                    <a href=""   class="category-single-item Japanese" data-params="57||Chifa||30.00||18.00">
                                        Chifa <span>(FM-039)</span></a>
                                    <a href=""   class="category-single-item Beverage" data-params="68||Cod Red||15.00||18.00">
                                        Cod Red <span>(FM-050)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/edb9630b00398a610952c53c13b82fe5.jpg) repeat-x'  class="category-single-item DRINKS" data-params="92||Coke||200.00||">
                                        Coke <span>(FM-074)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/389f95e6df0205d3c2c4b1e5dc50f8bf.jpg) repeat-x'  class="category-single-item Japanese" data-params="42||Crispy Taco Rice||400.00||18.00">
                                        Crispy Taco Rice <span>(FM-035)</span></a>
                                    <a href=""   class="category-single-item Ayam_Crispy" data-params="73||Dada Crispy||12000.00||">
                                        Dada Crispy <span>(FM-055)</span></a>
                                    <a href=""   class="category-single-item Paki_Foods" data-params="64||Ddd||5.00||18.00">
                                        Ddd <span>(FM-046)</span></a>
                                    <a href=""   class="category-single-item Indian" data-params="61||Desi Pizza||2.99||">
                                        Desi Pizza <span>(FM-043)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/5d78e2beaa50e3de42c8d531f13c24c7.png) repeat-x'  class="category-single-item Birra" data-params="117||Drinks||50.00||24.00">
                                        Drinks <span>(FM-099)</span></a>
                                    <a href=""   class="category-single-item South_Indian" data-params="77||Dsg||10.00||">
                                        Dsg <span>(FM-059)</span></a>
                                    <a href=""   class="category-single-item American" data-params="48||Enak Enak||10.00||">
                                        Enak Enak <span>(FM-030)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/b774eeefdb0421e6fb4fb66d49905955.png) repeat-x'  class="category-single-item Coffee" data-params="79||Espresso||2.00||24.00">
                                        Espresso <span>(FM-061)</span></a>
                                    <a href=""   class="category-single-item Main_Dishes" data-params="113||F1||100.00||">
                                        F1 <span>(FM-095)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/ad96db40ec07d6f526bcf7de7798de7f.jpg) repeat-x'  class="category-single-item Fast_Food_" data-params="39||Fish And Chips||300.00||18.00">
                                        Fish And Chips <span>(FM-032)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/95590c6af994a15279d6e2ebd1b125ca.jpg) repeat-x'  class="category-single-item Mexican" data-params="20||Fish Tacos||300.00||18.00">
                                        Fish Tacos <span>(FM-013)</span></a>
                                    <a href=""   class="category-single-item American" data-params="54||Fried Chicken||300.00||18.00">
                                        Fried Chicken <span>(FM-036)</span></a>
                                    <a href=""   class="category-single-item Japanese" data-params="53||Fried Tuna||300.00||">
                                        Fried Tuna <span>(FM-035)</span></a>
                                    <a href=""   class="category-single-item Pakistani" data-params="98||Garden Town||100.00||20.00">
                                        Garden Town <span>(FM-080)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/46c3e044d8d348113be77b62c9feb7f4.jpg) repeat-x'  class="category-single-item Chienese" data-params="41||Garlic Chive Shrim||400.00||18.00">
                                        Garlic Chive Shrim <span>(FM-034)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/d3f51d24b6dceffb8682d0ded5efb371.png) repeat-x'  class="category-single-item Bebidas" data-params="47||Gaseosa Gordita||3.00||">
                                        Gaseosa Gordita <span>(FM-029)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/9fe1e69dcc04a4a41768414fa29fe3cb.jpg) repeat-x'  class="category-single-item Beverage" data-params="26||Grape Escape||150.00||18.00">
                                        Grape Escape <span>(FM-019)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/2b97685dac650fd5992421ac278cf910.jpg) repeat-x'  class="category-single-item Paki_Foods" data-params="102||Grill||55.00||7.00">
                                        Grill <span>(FM-084)</span></a>
                                    <a href=""   class="category-single-item lavado" data-params="121||Gyros Uber Backen||12.50||9.00">
                                        Gyros Uber Backen <span>(50)</span></a>
                                    <a href=""   class="category-single-item Deserts" data-params="60||Halwa||100.00||18.00">
                                        Halwa <span>(FM-042)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/3b74c6fef3e0bc80845be0e20a9b965c.jpg) repeat-x'  class="category-single-item American" data-params="28||Hamburger||250.00||18.00">
                                        Hamburger <span>(FM-021)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/ca1b0e5dfcb2181d7831780cc2febfe2.jpeg) repeat-x'  class="category-single-item Comída_Rápida" data-params="116||Hamburguesa Sencil||13000.00||24.00">
                                        Hamburguesa Sencil <span>(FM-098)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/7b4f4b3400adf53c7445e16b9f801335.jpg) repeat-x'  class="category-single-item Chienese" data-params="25||Hot And Sour Soup||330.00||18.00">
                                        Hot And Sour Soup <span>(FM-018)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/f46708a989bc6ecb3ec368660defe59f.jpg) repeat-x'  class="category-single-item Italian" data-params="23||Kimchi Pasta||300.00||18.00">
                                        Kimchi Pasta <span>(FM-016)</span></a>
                                    <a href=""   class="category-single-item Fruits" data-params="124||Kola||10.00||24.00">
                                        Kola <span>(FM-106)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/a83e7a5f7f6dbb975b205da797c0d8b4.jpg) repeat-x'  class="category-single-item Indian" data-params="33||Lamb With Green Ch||500.00||18.00">
                                        Lamb With Green Ch <span>(FM-026)</span></a>
                                    <a href=""   class="category-single-item lavado" data-params="120||Lavado||6000.00||16.00">
                                        Lavado <span>(FM-102)</span></a>
                                    <a href=""   class="category-single-item Main_Dishes" data-params="110||Makaronia Me Garid||23.00||">
                                        Makaronia Me Garid <span>(FM-092)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/f53424fa8732772ce0974a2d0afa9003.jpg) repeat-x'  class="category-single-item Indian" data-params="66||Malai Chicken Laba||100.00||18.00">
                                        Malai Chicken Laba <span>(FM-048)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/3d228f0be9d7868dff2343565dc1bf56.jpeg) repeat-x'  class="category-single-item Thai_Food" data-params="24||Massaman Beef Curr||15000.00||18.00">
                                        Massaman Beef Curr <span>(FM-017)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/0c44f016ddf2f3e70dba89e8d4230128.jpg) repeat-x'  class="category-single-item Chienese" data-params="31||Mongolian Beef||300.00||18.00">
                                        Mongolian Beef <span>(FM-024)</span></a>
                                    <a href=""   class="category-single-item Fruits" data-params="122||Moris||100.00||">
                                        Moris <span>(FM-104)</span></a>
                                    <a href=""   class="category-single-item مشویات" data-params="62||My Burger||500.00||">
                                        My Burger <span>(FM-044)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/8b6eb9be91c4d51f5ab442536c708e94.jpg) repeat-x'  class="category-single-item Beverage" data-params="46||Orange||20.00||18.00">
                                        Orange <span>(FM-028)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/63a40af29fd387e6e43f171ea91b28fd.jpg) repeat-x'  class="category-single-item Chienese" data-params="22||Orange Chicken||300.00||18.00">
                                        Orange Chicken <span>(FM-015)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/cc4ca461e3d823d19f5292c6156520da.jpg) repeat-x'  class="category-single-item Italian" data-params="29||Parsley Pasta||200.00||18.00">
                                        Parsley Pasta <span>(FM-022)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/a1dc26308a9030dc1c263001370ff774.jpg) repeat-x'  class="category-single-item ikkk" data-params="72||Pesto||50.00||18.00">
                                        Pesto <span>(FM-054)</span></a>
                                    <a href=""   class="category-single-item Indian" data-params="50||Pixxo||50.00||18.00">
                                        Pixxo <span>(FM-032)</span></a>
                                    <a href=""   class="category-single-item Indian" data-params="49||Pizza||350.00||18.00">
                                        Pizza <span>(FM-031)</span></a>
                                    <a href=""   class="category-single-item indian_biryani" data-params="107||Pizza||1.00||20.00">
                                        Pizza <span>(FM-089)</span></a>
                                    <a href=""   class="category-single-item Indian" data-params="58||Pizza20||200.00||18.00">
                                        Pizza20 <span>(FM-040)</span></a>
                                    <a href=""   class="category-single-item Chicken" data-params="95||Pollo Asado||12000.00||16.00">
                                        Pollo Asado <span>(PLL01)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/8d9fbb5e6c2922b9b7c2d07dfffe93b0.jpg) repeat-x'  class="category-single-item Indian" data-params="65||Restaurant 1||100.00||18.00">
                                        Restaurant 1 <span>(FM-047)</span></a>
                                    <a href=""   class="category-single-item Indian" data-params="91||Sandwitch||300.00||">
                                        Sandwitch <span>(FM-073)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/909de94686ef90139ad8659113d5b2b4.jpg) repeat-x'  class="category-single-item American" data-params="36||Shaved Fennel Sala||450.00||18.00">
                                        Shaved Fennel Sala <span>(FM-029)</span></a>
                                    <a href=""   class="category-single-item Paki_Foods" data-params="63||Shawarma||70.00||18.00">
                                        Shawarma <span>(FM-045)</span></a>
                                    <a href=""   class="category-single-item Pakistani" data-params="106||Shayan||100.00||24.00">
                                        Shayan <span>(FM-101)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/15e5f29f5999a66d940b11e21e079095.jpg) repeat-x'  class="category-single-item Beverage" data-params="30||Shochu Mojito||200.00||18.00">
                                        Shochu Mojito <span>(FM-023)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/b4d2fb097a038e15bee6b37ccd8cda6a.jpg) repeat-x'  class="category-single-item Chienese" data-params="43||Shrimp Toast||300.00||18.00">
                                        Shrimp Toast <span>(FM-036)</span></a>
                                    <a href=""   class="category-single-item Sweets" data-params="118||Shubhams||100.00||18.00">
                                        Shubhams <span>(FM-100)</span></a>
                                    <a href=""   class="category-single-item Italian" data-params="115||Spaghetti Pesto||8.00||16.00">
                                        Spaghetti Pesto <span>(FM-097)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/9a664ab4c20f0887c25a516472fdea9d.jpg) repeat-x'  class="category-single-item American" data-params="38||Sweet Potato Bacon||200.00||18.00">
                                        Sweet Potato Bacon <span>(FM-031)</span></a>
                                    <a href=""   class="category-single-item indian_biryani" data-params="101||Tahi Appetizer||5.00||">
                                        Tahi Appetizer <span>(FM-083)</span></a>
                                    <a href=""   class="category-single-item South_Indian" data-params="76||Tamer Talha||100.00||20.00">
                                        Tamer Talha <span>(FM-058)</span></a>
                                    <a href=""   class="category-single-item Chicken" data-params="88||Test||100.00||">
                                        Test <span>(FM-070)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/477888ae311009ab2234162123c446f5.jpg) repeat-x'  class="category-single-item indian_biryani" data-params="96||Test||10.00||20.00">
                                        Test <span>(FM-078)</span></a>
                                    <a href=""   class="category-single-item indian_biryani" data-params="97||Test||100.00||">
                                        Test <span>(FM-079)</span></a>
                                    <a href=""   class="category-single-item Ayam_Crispy" data-params="81||Testing||300.00||">
                                        Testing <span>(FM-063)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/7a73de5bf8eb3a783a8a541e1243b571.jpg) repeat-x'  class="category-single-item ITALIAN_NORTHERN" data-params="70||Tikka Northern||3000.00||">
                                        Tikka Northern <span>(FM-052)</span></a>
                                    <a href=""   class="category-single-item Fast_Food_" data-params="103||Torta Testes Que E||20.00||">
                                        Torta Testes Que E <span>(FM-085)</span></a>
                                    <a href=""   class="category-single-item Chicken" data-params="104||Torta Zoiuda||20.00||">
                                        Torta Zoiuda <span>(FM-086)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/53e4f7d5ee98d5a58ec011194b12c406.jpg) repeat-x'  class="category-single-item Mexican" data-params="37||Tuna Sashimi Pizza||250.00||18.00">
                                        Tuna Sashimi Pizza <span>(FM-030)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/87a50bab8f91e1b876e5345387f6e023.jpeg) repeat-x'  class="category-single-item Chienese" data-params="80||Veg Noodles||40.00||">
                                        Veg Noodles <span>(11)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/f78da5e897169ecb709b3e4eb3f8b42c.jpg) repeat-x'  class="category-single-item Chienese" data-params="40||Wonton Soup||400.00||18.00">
                                        Wonton Soup <span>(FM-033)</span></a>
                                    <a href=""   class="category-single-item Main_Dishes" data-params="112||သစား||22.00||">
                                        သစား <span>(FM-094)</span></a>
                                    <a href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/b6770ec7733bad972dc56613befb1a4f.jpg) repeat-x'  class="category-single-item Freskuese" data-params="111||ျကက္သာ||30.00||18.00">
                                        ျကက္သာ <span>(FM-093)</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="hidden-lg">&nbsp;</div>
                    <div class="col-md-4 col-xs-12 paddless-col">
                        <div class="cell-area">
                            <div class="cell-menu">
                                <ul class="addButton">
                                    <li ><a  style="background-color: rgb(35, 82, 124);color: white;cursor: pointer" class="suspendIDCurrent"  data-suspendID="0" id="sus_0">Current</a></li>
                                </ul>
                            </div>
                            <div class="cell-form">
                                <form action="">
                                    <div class="option-area">
                                        <select id="customer_id" name="customer_id" class="form-control select2 custom-selected">
                                            <option value="1">Walk-in Customer</option>
                                            <option value="35">abc (035)</option>
                                            <option value="36">abc (035)</option>
                                            <option value="13">Adeel Irshad (3327201519)</option>
                                            <option value="88">Adriana Meireles (00000000000)</option>
                                            <option value="95">ajob (0175574)</option>
                                            <option value="5">Al McZeal (01713827749)</option>
                                            <option value="23">Albert (066715254)</option>
                                            <option value="93">aloo (4654897564)</option>
                                            <option value="24">Amro Qanadilo (599216649)</option>
                                            <option value="86">asad (32323232323)</option>
                                            <option value="39">Ash (1111)</option>
                                            <option value="28">Bala (999999999)</option>
                                            <option value="91">banty (9997879446)</option>
                                            <option value="70">Bivash (01865746382)</option>
                                            <option value="6">Cliente Satisfecho (6641234567)</option>
                                            <option value="34">cvdmk (56657665)</option>
                                            <option value="83">dadada (326323)</option>
                                            <option value="53">ddd (017568343344)</option>
                                            <option value="44">de (055)</option>
                                            <option value="15">DEEPAK patil (9404430339)</option>
                                            <option value="92">Dharmi (1234567890)</option>
                                            <option value="16">Dhawal kumar Pandey (9919442191)</option>
                                            <option value="74">ds (424242)</option>
                                            <option value="11">dvdv (24343455)</option>
                                            <option value="76">fddcdxdf (76576687)</option>
                                            <option value="43">fdg (3234324234)</option>
                                            <option value="25">feilong (000000099999)</option>
                                            <option value="85">Hamid Butt (3214033626)</option>
                                            <option value="26">Imran Ali (3464649497)</option>
                                            <option value="78">Isaac Muchkines (0710100100)</option>
                                            <option value="31">jai (9923231883)</option>
                                            <option value="33">jkjkjk (67666767755)</option>
                                            <option value="40">jkljkl (1234567891)</option>
                                            <option value="2">John Doe (000333999444)</option>
                                            <option value="77">juan david franco (3186519077)</option>
                                            <option value="64">Jyoti (9867929267)</option>
                                            <option value="66">kahdashdjh (13232323)</option>
                                            <option value="79">Ketan (903546662010)</option>
                                            <option value="3">Mark Winnan (000333999444)</option>
                                            <option value="41">Masa1 (1)</option>
                                            <option value="42">Masa2 (0)</option>
                                            <option value="96">MASUM (01918768947)</option>
                                            <option value="22">Maxence Gabet (667105215)</option>
                                            <option value="50">meja1 (1)</option>
                                            <option value="51">meja2 (2)</option>
                                            <option value="61">Moamen Hassan (30011683)</option>
                                            <option value="18">mohamed (7501542345)</option>
                                            <option value="63">mohammad (01090285253)</option>
                                            <option value="65">Mohammed hamdan (9647702910499)</option>
                                            <option value="21">Narayan Adhikary (1764954227)</option>
                                            <option value="49">Nazeer  (9964963994)</option>
                                            <option value="47">Neeraj Verma (07709400767)</option>
                                            <option value="52">nellai (954258741)</option>
                                            <option value="9">New (9999999999)</option>
                                            <option value="10">New (9999999999)</option>
                                            <option value="38">ok (8556093704)</option>
                                            <option value="7">Pratik Dabhi (123456)</option>
                                            <option value="20">puneet parakh (9632968050)</option>
                                            <option value="71">qweqwe (888)</option>
                                            <option value="72">qweqwe (888)</option>
                                            <option value="8">Rahul (7738180655)</option>
                                            <option value="89">resfsd (34545)</option>
                                            <option value="80">saad (0363232)</option>
                                            <option value="81">saad (0363232)</option>
                                            <option value="82">saad (0363232)</option>
                                            <option value="67">saurabh (9990986628)</option>
                                            <option value="94">shajahan (01745258414)</option>
                                            <option value="59">shivam (971728213)</option>
                                            <option value="45">Sindhuj (9999999999)</option>
                                            <option value="90">sunil kumar (956985969)</option>
                                            <option value="54">Table 01 (999)</option>
                                            <option value="55">Table 01 (999)</option>
                                            <option value="56">Table 02 (999)</option>
                                            <option value="57">Table 03 (999)</option>
                                            <option value="62">Table 2 (020)</option>
                                            <option value="58">Table Behind Toilet (999)</option>
                                            <option value="37">TADILA MESQUITA VIEIRA DOS SANTOS (5183015441)</option>
                                            <option value="69">talha (1235342344)</option>
                                            <option value="29">teest (298347)</option>
                                            <option value="30">TEST (312321332)</option>
                                            <option value="32">test  (0502969115)</option>
                                            <option value="48">test (328328329)</option>
                                            <option value="73">test (23423)</option>
                                            <option value="87">test (9878979879)</option>
                                            <option value="4">test 1 (1)</option>
                                            <option value="60">test customer (11)</option>
                                            <option value="46">test lead test (9999999999)</option>
                                            <option value="27">Test Vendor (01865654654)</option>
                                            <option value="68">Teste (12121)</option>
                                            <option value="14">tt (9665444404)</option>
                                            <option value="84">TTT (33333333)</option>
                                            <option value="17">UNREGAL MINI MARKET  (0139210000)</option>
                                            <option value="12">Vivek Singh (9999896006)</option>
                                            <option value="75">Vvvg (9998532276)</option>
                                            <option value="19">Zihad (01918247414)</option>
                                        </select>
                                        <span class="plus-custom" data-toggle="modal" data-target="#CustomerModal" style="cursor: pointer;">
                                <i class="fa fa-plus"></i></span>
                                    </div>
                            </div>
                            <div class="cell-body">
                                <div class="table-scroll">
                                    <table class="table-striped sale_cart" style="width: 100%;">
                                        <thead>
                                        <tr>
                                            <th style="width: 28%;">Menu</th>
                                            <th style="width: 18%;">Price</th>
                                            <th style="width: 13%;">Qty</th>
                                            <th style="width: 22%;">Dis Amt/%</th>
                                            <th style="width: 25%;">Total</th>
                                            <th style="text-align: center; width: 10%;"><i class="fa fa-trash"></i></th>
                                        </tr>
                                        </thead>
                                        <tbody id="o">

                                        </tbody>
                                    </table>
                                    <input type="hidden" name="currentStatus" id="currentStatus">
                                </div>
                                <div class="calculation-area">
                                    <p>
                                        <span class="fl-width">Total Items: </span>
                                        <span class="sl-width" id="total_item">0
                            </span>
                                        <input type="hidden" name="total_items" id="total_item_hidden">
                                        <span class="tl-width">Sub Total:</span>
                                        <span class="fil-width">
                                <input type="text" value="0.00" readonly name="sub_total" id="sub_total"></span>
                                    </p>
                                    <p>
                                        <span class="fl-width">Disc Amt/%:</span>
                                        <span class="sl-width">
                                <input type="text" maxlength="6" value=""  name="disc" id="disc" class="discount" autocomplete="off" onkeyup="return checkDiscount();"">
                                <input type="hidden" name="disc_actual" id="disc_actual">
                            </span>
                                        <span class="tl-width">Total Disc:</span>
                                        <span class="fil-width">
                                <input type="text" value="0.00" readonly name="gTotalDisc" id="gTotalDisc">
                            </span>
                                    </p>
                                    <p>
                                        <span class="fl-width"></span>
                                        <span class="sl-width">

                            </span>
                                        <span class="tl-width">VAT:</span>
                                        <span class="fil-width">
                                <input type="text" value="0.00" readonly name="vat" id="vat">
                            </span>
                                    </p>
                                    <hr class="border-top-pay">
                                    <p>
                                        <span class="fl-width">Total Payable:</span>
                                        <span class="sl-width">
                                  </span>
                                        <span class="tl-width"></span>
                                        <span class="fil-width">
                                <input type="text" value="0.00"  name="total_payable" readonly id="total_payable">
                            <input type="hidden" value="0.00"  name="total_payableHidden" id="total_payableHidden">
                            </span>
                                    </p>
                                </div>
                                <div class="btn-area hidden-lg hidden-sm" style="margin-bottom: 9px">
                                    <div class="btn-group-custom">
                                        <button class="btn btn-danger btn-lg custom-btn-one" style="width: 33%">Cancel</button>
                                        <button class="btn btn-danger btn-lg custom-btn-two" style="width: 32%">Hold</button>
                                        <button class="btn btn-s btn-lg custom-btn-three" style="width: 32.6%">Payment</button>
                                    </div>
                                </div>
                                <div class="btn-area hidden-xs" style="margin-bottom: 9px">
                                    <div class="btn-group-custom">
                                        <button class="btn btn-danger btn-lg custom-btn-one" style="width: 33%">Cancel</button>
                                        <button class="btn btn-danger btn-lg custom-btn-two" style="width: 32%">Hold</button>
                                        <button class="btn btn-s btn-lg custom-btn-three" style="width: 32.6%;color:white">Payment</button>
                                    </div>
                                </div>
                                <input type="hidden" value="0" name="hiddenRowCounter" id="hiddenRowCounter">
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-md-8 col-xs-12 hide-xs-device">

                        <div class="category-area">
                            <div class="category-header">
                                <div class="col-md-12">
                                    <div class="category-search">
                                        <select id="table_id" class="form-control select2 table_id" name="table_id">
                                            <option value="">Table</option>
                                            <option value="11">1</option>
                                            <option value="10">11</option>
                                            <option value="12">2</option>
                                            <option value="14">demo</option>
                                            <option value="28">helloworld</option>
                                            <option value="27">Lava1</option>
                                            <option value="15">masa 1</option>
                                            <option value="16">masa 2</option>
                                            <option value="17">MASA 33</option>
                                            <option value="7">Mesa 03</option>
                                            <option value="8">Mesa 04</option>
                                            <option value="9">Mesa 05</option>
                                            <option value="5">MESA 1</option>
                                            <option value="6">MESA 10</option>
                                            <option value="23">mesa1</option>
                                            <option value="24">Meson</option>
                                            <option value="25">No.1</option>
                                            <option value="26">No.2</option>
                                            <option value="20">T1</option>
                                            <option value="22">tabel</option>
                                            <option value="2">Table 01</option>
                                            <option value="3">Table 02</option>
                                            <option value="21">table 2</option>
                                            <option value="29">table 99</option>
                                            <option value="19">test</option>
                                            <option value="13">Testtable123</option>
                                            <option value="18">texas test</option>
                                            <option value="4">Tiago Francisco Vicente</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="clearfix"></div>

                                <div class="scrollmenu">
                                    <a class="fm_category allBg" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;"  href="">All</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">American</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Ayam Crispy</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Bebidas</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Bengali</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Beverage</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Birra</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Cervezas</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Chicken</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Chienese</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Coffee</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Coffee</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Comída Rápida</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Deserts</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">DRINKS</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Fast Food </a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Freskuese</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Fruits</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">ikkk</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Indian</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">indian biryani</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Italian</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">ITALIAN NORTHERN</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Japanese</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">lavado</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Main Dishes</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Maxiacan</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Mexican</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Paki Foods</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Pakistani</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">South Indian</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Substation Food Item 1</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Sweets</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Thai Food</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Ugali</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Yakhni pola</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">مشویات</a>
                                </div>
                            </div>
                            <div class="category-body">
                                <div class="category-items">
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item South_Indian " data-params="74||Abc||100.00||20.00">
                                        Abc <span>(FM-056)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item indian_biryani " data-params="99||Abc D||100.00||20.00">
                                        Abc D <span>(FM-081)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/c138e5198531b74423a67d56a9082c27.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Coffee " data-params="75||Abcd||200.00||20.00">
                                        Abcd <span>(FM-057)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item South_Indian " data-params="78||Ahi Bread||1000.00||">
                                        Ahi Bread <span>(FM-060)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item ITALIAN_NORTHERN " data-params="71||Aloo||10000.00||">
                                        Aloo <span>(FM-054)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Coffee " data-params="69||Arabian Cofee||18.00||18.00">
                                        Arabian Cofee <span>(FM-051)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Fruits " data-params="119||Arun||200.00||18.00">
                                        Arun <span>(FM-101)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/9aded0d751f7af3c4356d39f7211875b.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Maxiacan " data-params="45||Asdzzz||5.00||18.00">
                                        Asdzzz <span>(FM-027)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item American " data-params="90||Bacon Burger||150.00||20.00">
                                        Bacon Burger <span>(FM-072)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item American " data-params="89||Bacon Sw||15.00||">
                                        Bacon Sw <span>(FM-071)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/a7d0115b4b868c489c41480799946219.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item indian_biryani " data-params="109||Beef Biriyani||1.00||">
                                        Beef Biriyani <span>(FM-091)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/ae48b678a42cc270b4a624d413a22994.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Indian " data-params="34||Beet And Onion Pickle Recipe||150.00||18.00">
                                        Beet And Onion Pic <span>(FM-027)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/609d0d297833e0c8bbfb3827e2fca3ef.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item American " data-params="44||Best Eggs Benedict||200.00||18.00">
                                        Best Eggs Benedict <span>(FM-037)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/e4b67d309bfc217978fa85f1d5e4892b.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Deserts " data-params="27||Better Chocolate Chip Cookies||200.00||18.00">
                                        Better Chocolate C <span>(FM-020)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Indian " data-params="59||Biryani||500.00||18.00">
                                        Biryani <span>(FM-041)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/fbf75721f2a21f067b726fdf27cff301.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Chienese " data-params="21||Black Pepper Beef||300.00||18.00">
                                        Black Pepper Beef <span>(FM-014)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Indian " data-params="51||Bpizza||12.00||18.00">
                                        Bpizza <span>(FM-033)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Sweets " data-params="114||Burfi||450.00||18.00">
                                        Burfi <span>(BR-096)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Chicken " data-params="86||Burger||100.00||">
                                        Burger <span>(FM-068)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Chicken " data-params="108||Burger Menu||150.00||24.00">
                                        Burger Menu <span>(FM-090)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Indian " data-params="67||Butter Chicken||100.00||18.00">
                                        Butter Chicken <span>(FM-049)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Fruits " data-params="123||Cà Phê Sữa||120.00||18.00">
                                        Cà Phê Sữa <span>(FM-105)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Indian " data-params="56||Ch Biryani||100.00||18.00">
                                        Ch Biryani <span>(FM-038)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/f4148d129180f2733953d8c1807e15e2.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Substation_Food_Item_1 " data-params="84||Cha||10.00||7.00">
                                        Cha <span>(FM-066)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Indian " data-params="82||Chana Masala||150.00||20.00">
                                        Chana Masala <span>(FM-064)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/e46c7e80841271db19c5f491974990f7.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Indian " data-params="83||Chana Masala Fry||50.00||20.00">
                                        Chana Masala Fry <span>(FM-065)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item South_Indian " data-params="87||Chapathi Roll||30.00||20.00">
                                        Chapathi Roll <span>(FM-068)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item South_Indian " data-params="85||Chef||132.00||">
                                        Chef <span>(FM-067)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/14903e16c5a868b0cb7ebeb7542829bc.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Deserts " data-params="32||Chewy Hot Fudge||250.00||18.00">
                                        Chewy Hot Fudge <span>(FM-025)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Pakistani " data-params="93||Chicken Biryani Pakistan||250.00||">
                                        Chicken Biryani Pa <span>(FM-075)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/21ca6515daf0ef69295d38bee64f9a41.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Chienese " data-params="19||Chicken Chow Mein||350.00||18.00">
                                        Chicken Chow Mein <span>(FM-012)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item American " data-params="55||Chicken Fillet||150.00||">
                                        Chicken Fillet <span>(FM-037)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/f2cb789714ec76287bf5ccd90245f537.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Italian " data-params="35||Chicken Piccata||300.00||18.00">
                                        Chicken Piccata <span>(FM-028)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Chicken " data-params="94||Chicken Roll 41||250.00||18.00">
                                        Chicken Roll 41 <span>(FM-076)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Pakistani " data-params="100||Chicken Shawarma||100.00||18.00">
                                        Chicken Shawarma <span>(FM-082)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Chicken " data-params="105||Chicken365||600.00||24.00">
                                        Chicken365 <span>(FM-087)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Japanese " data-params="57||Chifa||30.00||18.00">
                                        Chifa <span>(FM-039)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Beverage " data-params="68||Cod Red||15.00||18.00">
                                        Cod Red <span>(FM-050)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/13ac276507073ebbb289d46dde2cfac3.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item DRINKS " data-params="92||Coke||200.00||">
                                        Coke <span>(FM-074)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/2c138e7839050f6cf03ecd674023ac1b.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Japanese " data-params="42||Crispy Taco Rice||400.00||18.00">
                                        Crispy Taco Rice <span>(FM-035)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Ayam_Crispy " data-params="73||Dada Crispy||12000.00||">
                                        Dada Crispy <span>(FM-055)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Paki_Foods " data-params="64||Ddd||5.00||18.00">
                                        Ddd <span>(FM-046)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Indian " data-params="61||Desi Pizza||2.99||">
                                        Desi Pizza <span>(FM-043)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/ebb5711d46b71375502d2dda4c722a4a.png) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Birra " data-params="117||Drinks||50.00||24.00">
                                        Drinks <span>(FM-099)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item South_Indian " data-params="77||Dsg||10.00||">
                                        Dsg <span>(FM-059)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item American " data-params="48||Enak Enak||10.00||">
                                        Enak Enak <span>(FM-030)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/1987d481153dbcf23f05d695371164df.png) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Coffee " data-params="79||Espresso||2.00||24.00">
                                        Espresso <span>(FM-061)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Main_Dishes " data-params="113||F1||100.00||">
                                        F1 <span>(FM-095)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/8685de2b2fc6e2cf72e93dd3fd41a045.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Fast_Food_ " data-params="39||Fish And Chips||300.00||18.00">
                                        Fish And Chips <span>(FM-032)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/3e6bf89fba47816b9322f09505cd5ea0.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Mexican " data-params="20||Fish Tacos||300.00||18.00">
                                        Fish Tacos <span>(FM-013)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item American " data-params="54||Fried Chicken||300.00||18.00">
                                        Fried Chicken <span>(FM-036)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Japanese " data-params="53||Fried Tuna||300.00||">
                                        Fried Tuna <span>(FM-035)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Pakistani " data-params="98||Garden Town||100.00||20.00">
                                        Garden Town <span>(FM-080)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/5422f81510a74fb7190ba3fd2057a1b8.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Chienese " data-params="41||Garlic Chive Shrimp Fried Rice With Garlic Chips||400.00||18.00">
                                        Garlic Chive Shrim <span>(FM-034)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/de8d56e37ae0a4fdfa92a3853410e72d.png) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Bebidas " data-params="47||Gaseosa Gordita||3.00||">
                                        Gaseosa Gordita <span>(FM-029)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/fb8cbe345c54d556989c7ce1b9c69718.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Beverage " data-params="26||Grape Escape||150.00||18.00">
                                        Grape Escape <span>(FM-019)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/c450b9fa541dcf4bceec423194db860b.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Paki_Foods " data-params="102||Grill||55.00||7.00">
                                        Grill <span>(FM-084)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item lavado " data-params="121||Gyros Uber Backen||12.50||9.00">
                                        Gyros Uber Backen <span>(50)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Deserts " data-params="60||Halwa||100.00||18.00">
                                        Halwa <span>(FM-042)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/a5577c8ec47ba0b3e94c9591ab06120d.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item American " data-params="28||Hamburger||250.00||18.00">
                                        Hamburger <span>(FM-021)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/5d9cc0226ca03e5488f9fe60685758d0.jpeg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Comída_Rápida " data-params="116||Hamburguesa Sencilla||13000.00||24.00">
                                        Hamburguesa Sencil <span>(FM-098)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/1beaaeb782ae60573972f042cb747042.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Chienese " data-params="25||Hot And Sour Soup||330.00||18.00">
                                        Hot And Sour Soup <span>(FM-018)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/f9ffc5073486a0ead0b00601fcaf4764.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Italian " data-params="23||Kimchi Pasta||300.00||18.00">
                                        Kimchi Pasta <span>(FM-016)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Fruits " data-params="124||Kola||10.00||24.00">
                                        Kola <span>(FM-106)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/e6a2dab1c90cf0f4aee079430074d891.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Indian " data-params="33||Lamb With Green Chili Masala||500.00||18.00">
                                        Lamb With Green Ch <span>(FM-026)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item lavado " data-params="120||Lavado||6000.00||16.00">
                                        Lavado <span>(FM-102)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Main_Dishes " data-params="110||Makaronia Me Garides||23.00||">
                                        Makaronia Me Garid <span>(FM-092)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/126ed376fa2550e956bdb00e15d7dbbe.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Indian " data-params="66||Malai Chicken Lababdar||100.00||18.00">
                                        Malai Chicken Laba <span>(FM-048)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/a7fb90c737a83c4c42e3f1daec01524a.jpeg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Thai_Food " data-params="24||Massaman Beef Curry||15000.00||18.00">
                                        Massaman Beef Curr <span>(FM-017)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/74e16ec4270fa642326cc90ef724cf2f.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Chienese " data-params="31||Mongolian Beef||300.00||18.00">
                                        Mongolian Beef <span>(FM-024)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Fruits " data-params="122||Moris||100.00||">
                                        Moris <span>(FM-104)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item مشویات " data-params="62||My Burger||500.00||">
                                        My Burger <span>(FM-044)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/96ab525eff31174409250e5e5d8e05e0.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Beverage " data-params="46||Orange||20.00||18.00">
                                        Orange <span>(FM-028)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/00098654d397220435f458692a1c485f.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Chienese " data-params="22||Orange Chicken||300.00||18.00">
                                        Orange Chicken <span>(FM-015)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/b2084ba48cf319751fb2532eff13151c.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Italian " data-params="29||Parsley Pasta||200.00||18.00">
                                        Parsley Pasta <span>(FM-022)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/96b357e877cc73ae6df0c49e4dd9caf2.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item ikkk " data-params="72||Pesto||50.00||18.00">
                                        Pesto <span>(FM-054)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Indian " data-params="50||Pixxo||50.00||18.00">
                                        Pixxo <span>(FM-032)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Indian " data-params="49||Pizza||350.00||18.00">
                                        Pizza <span>(FM-031)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item indian_biryani " data-params="107||Pizza||1.00||20.00">
                                        Pizza <span>(FM-089)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Indian " data-params="58||Pizza20||200.00||18.00">
                                        Pizza20 <span>(FM-040)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Chicken " data-params="95||Pollo Asado||12000.00||16.00">
                                        Pollo Asado <span>(PLL01)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/bca5a2bde5079aece02db3b2209316e2.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Indian " data-params="65||Restaurant 1||100.00||18.00">
                                        Restaurant 1 <span>(FM-047)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Indian " data-params="91||Sandwitch||300.00||">
                                        Sandwitch <span>(FM-073)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/6a22e0141fcf0f7848352a051af09a47.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item American " data-params="36||Shaved Fennel Salad With Steak||450.00||18.00">
                                        Shaved Fennel Sala <span>(FM-029)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Paki_Foods " data-params="63||Shawarma||70.00||18.00">
                                        Shawarma <span>(FM-045)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Pakistani " data-params="106||Shayan||100.00||24.00">
                                        Shayan <span>(FM-101)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/2f1ec6bf38dd8b3561ba9ae141cd014d.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Beverage " data-params="30||Shochu Mojito||200.00||18.00">
                                        Shochu Mojito <span>(FM-023)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/1f72f4d739618ee961f9f942d4f7c52a.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Chienese " data-params="43||Shrimp Toast||300.00||18.00">
                                        Shrimp Toast <span>(FM-036)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Sweets " data-params="118||Shubhams||100.00||18.00">
                                        Shubhams <span>(FM-100)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Italian " data-params="115||Spaghetti Pesto||8.00||16.00">
                                        Spaghetti Pesto <span>(FM-097)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/db6a21b04bba5270847376b12d34655d.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item American " data-params="38||Sweet Potato Bacon Salad||200.00||18.00">
                                        Sweet Potato Bacon <span>(FM-031)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item indian_biryani " data-params="101||Tahi Appetizer||5.00||">
                                        Tahi Appetizer <span>(FM-083)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item South_Indian " data-params="76||Tamer Talha||100.00||20.00">
                                        Tamer Talha <span>(FM-058)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Chicken " data-params="88||Test||100.00||">
                                        Test <span>(FM-070)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/b92d1a41c61bcdc0f68d17c7c16dcabd.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item indian_biryani " data-params="96||Test||10.00||20.00">
                                        Test <span>(FM-078)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item indian_biryani " data-params="97||Test||100.00||">
                                        Test <span>(FM-079)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Ayam_Crispy " data-params="81||Testing||300.00||">
                                        Testing <span>(FM-063)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/380d4caa2f578a954484e4017421168b.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item ITALIAN_NORTHERN " data-params="70||Tikka Northern||3000.00||">
                                        Tikka Northern <span>(FM-052)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Fast_Food_ " data-params="103||Torta Testes Que Encherga||20.00||">
                                        Torta Testes Que E <span>(FM-085)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Chicken " data-params="104||Torta Zoiuda||20.00||">
                                        Torta Zoiuda <span>(FM-086)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/f64075e7c6c7d267a7e0e15f9cc14db0.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Mexican " data-params="37||Tuna Sashimi Pizza||250.00||18.00">
                                        Tuna Sashimi Pizza <span>(FM-030)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/a0bb21d1e6b70d3a60f108d882049ec4.jpeg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Chienese " data-params="80||Veg Noodles||40.00||">
                                        Veg Noodles <span>(11)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/75b1c455761a715d01ef53c63098b82f.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Chienese " data-params="40||Wonton Soup||400.00||18.00">
                                        Wonton Soup <span>(FM-033)</span></a>
                                    <a  href=""  onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Main_Dishes " data-params="112||သစား||22.00||">
                                        သစား <span>(FM-094)</span></a>
                                    <a  href="" style='background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/fafd4a87a69fc822ce8e2f79cfa2d4f9.jpg) repeat-x ;' onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Freskuese " data-params="111||ျကက္သား||30.00||18.00">
                                        ျကက္သာ <span>(FM-093)</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <!-- show tablet -->
                </div>
                <!-- /.row -->

                <!-- Main row -->
                <!-- /.row (main row) -->
        </section>

        <div class="modal fade" id="PaymentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content" style="width: 100%;">
                    <div class="modal-header" style="padding-top: 1px;padding-bottom: 1px">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-2x">×</i></span></button>
                        <h4 class="modal-title" id="myModalLabel"> Finalize Sale</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group" style="margin-bottom: 0px;">
                                    <label class="control-label">Sale Date</label>
                                    <input type="text" class="form-control" readonly="" id="date" name="sale_date" placeholder="Date" value="2019-02-14">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group" style="margin-bottom: 0px;">
                                    <label class="control-label">Token No</label>
                                    <input type="text" class="form-control" id="token_no" name="token_no" placeholder="Token No" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group" style="margin-bottom: 0px;">
                                    <label class="control-label">Total Payable </label>
                                    <label class="control-label" style="padding: 2px 10px;margin-left: 20px;font-weight: 700;font-size: 16px">
                                        $  <span id="totalamount">  </span></label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group" style="margin-bottom: 2px;">
                                    <label class="control-label">Payment Method</label>
                                    <select id="payment_method_id" name="payment_method_id" class="form-control custom-selected" style="width: 100%">
                                        <option value="6">Account</option>
                                        <option value="18">BCA</option>
                                        <option value="4">Card</option>
                                        <option value="14">Carge to Room</option>
                                        <option value="3">Cash</option>
                                        <option value="8">CHEQUE</option>
                                        <option value="16">cpp</option>
                                        <option value="12">Gift Card</option>
                                        <option value="17">helloworld</option>
                                        <option value="11">metrita</option>
                                        <option value="15">Mpesa</option>
                                        <option value="5">Paypal</option>
                                        <option value="7">PayTM</option>
                                        <option value="9">Phonepe</option>
                                        <option value="13">test</option>
                                        <option value="10">Wordpress</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group" style="margin-bottom: 5px;">
                                    <label class="control-label">Given Amount
                                        <a class="top" data-original-title="Excluding VAT, you can change this price in sale form" href="#" data-toggle="tooltip" data-placement="top" title="">
                                        </a></label>
                                    <input type="text" class="form-control integerchk" id="total_payable1" name="total_payable1" placeholder="Given Amount" onkeyup="return checkChangeAmount();"  onblur="return checkChangeAmount();" onchange="return checkChangeAmount();">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group" style="margin-bottom: 5px;">
                                    <label class="control-label">Change Amount <span><a class="top" data-original-title="Excluding VAT, you can change this price in sale form" href="#" data-toggle="tooltip" data-placement="top" title="">
                    </a>  </span></label>
                                    <input type="text" class="form-control" readonly="" id="change_amount" name="change_amount" placeholder="Change Amount" value="0">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                             <div class="col-sm-6">
                                 <div class="form-group" style="margin-bottom: 5px;">
                                     <label class="control-label">Paid Amount
                                         <a class="top" data-original-title="Excluding VAT, you can change this price in sale form" href="#" data-toggle="tooltip" data-placement="top" title="">
                                         </a></label>
                                     <input type="text" class="form-control integerchk" id="paid_amount" name="paid_amount" placeholder="Paid Amount" onkeyup="return checkChangeAmount();"  onblur="return checkChangeAmount();" onchange="return checkChangeAmount();">
                                 </div>
                             </div>
                             <div class="col-sm-6">
                                 <div class="form-group" style="margin-bottom: 5px;">
                                     <label class="control-label">Due Amount <span><a class="top" data-original-title="Excluding VAT, you can change this price in sale form" href="#" data-toggle="tooltip" data-placement="top" title="">
                             </a>  </span></label>
                                     <input type="text" class="form-control" readonly="" id="due_amount" name="due_amount" placeholder="Due Amount" value="">
                                 </div>
                             </div>
                         </div>-->
                        <!--<div class="row" id="duePaymentDate" style="display: none">
                            <div class="col-sm-12">
                                <div class="form-group" style="margin-bottom: 5px;">
                                    <label class="control-label">Due Payment Date <span style="color:red">*</span>
                                      </label>
                                    <input tabindex="3" readonly="" id="dates2" name="due_payment_date" class="form-control" placeholder="Date" value="" type="text">
                                </div>
                                <div class="alert alert-error error-msg date_err_msg_contnr" style="padding: 5px !important;">
                                    <p id="date_err_msg"></p>
                                </div>
                            </div>
                        </div>-->
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group" style="margin-bottom: 2px;">
                                    <button type="button" class="btn btn-danger"  data-dismiss="modal" aria-label="Close" style="width: 100%">
                                        <i class="fa fa-times"></i> Cancel</button>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group" style="margin-bottom: 2px;">
                                    <button type="button" class="btn btn-primary" id="finalpayment" onclick="return formsubmit();"  style="width: 100%">
                                        <i class="fa fa-save"></i> Save Sale</button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        </form>
        <div class="modal fade" id="ShortCut" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="ShortCut">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-2x">×</i></span></button>
                        <h4 class="modal-title" id="myModalLabel"><i style="color:#0c5889" class="fa fa-keyboard-o"></i> Shortcut Keys</h4>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <tr>
                                <th>Shortcut Name</th>
                                <th>Shortcut Key</th>
                            </tr>
                            <tr>
                                <td>Item Menu Search</td>
                                <td>Ctrl+Shift+S</td>
                            </tr>
                            <tr>
                                <td>Customer Search</td>
                                <td>Ctrl+Shift+C</td>
                            </tr>
                            <tr>
                                <td>Customer Add</td>
                                <td>Ctrl+Shift+A</td>
                            </tr>
                            <tr>
                                <td>Discount</td>
                                <td>Ctrl+Shift+D</td>
                            </tr>
                            <tr>
                                <td>Cancel</td>
                                <td>Ctrl+Shift+E</td>
                            </tr>
                            <tr>
                                <td>Suspend</td>
                                <td>Ctrl+Shift+V</td>
                            </tr> <tr>
                                <td>Payment</td>
                                <td>Ctrl+Shift+X</td>
                            </tr>

                        </table>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal fade" id="CustomerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-2x">×</i></span></button>
                        <h4 class="modal-title" id="myModalLabel"><i style="color:#0c5889" class="fa fa-plus-square-o"></i> Add Customer</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Customer Name<span style="color:red;">  *</span></label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="customer_name" id="customer_name" placeholder="Customer Name" value="">
                                    <div class="alert alert-error error-msg customer_err_msg_contnr" style="padding: 5px !important;">
                                        <p class="customer_err_msg"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Mobile No <span style="color:red;">  *</span></label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control integerchk" id="mobile_no" name="mobile_no" placeholder="Mobile No" value="">
                                    <div class="alert alert-error error-msg customer_mobile_err_msg_contnr" style="padding: 5px !important;">
                                        <p class="customer_mobile_err_msg"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Email</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="customerEmail" name="customerEmail" placeholder="Email" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label">Address</label>
                                <div class="col-sm-7">
                                    <textarea class="form-control" id="customerAddress" name="customerAddress" placeholder="Address"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="addNewGuest">
                            <i class="fa fa-save"></i> Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" id="suspendTotal" value="0">
        <input type="hidden" id="activeSuspend" value="0">


        <script type="text/javascript">

            var baseURL='http://multidimensionsystems.com/demo/iRestora/';
            var strURL='http://multidimensionsystems.com/demo/iRestora/Sale/Save';
            var loader='<img src="http://multidimensionsystems.com/demo/iRestora/assets/iconss.gif" />';
            //////////////////
            function GetSuspend(suspendID){
                $("#activeSuspend").val(suspendID);
                $.ajax({
                    url     : 'http://multidimensionsystems.com/demo/iRestora/Sale/getSuspend',
                    method  : 'get',
                    dataType: 'json',
                    data    : {'suspendID':suspendID},
                    success:function(data){
                        if(data.status==true){
                            var text = "#sus_"+data.sus_id;
                            if($('#suspendTotal').val()==3){
                                if(data.sus_id==1){
                                    $(text).css({"backgroundColor": "rgb(35, 82, 124)", "color": "white"});
                                    $("#sus_2").css({"backgroundColor": "#ddd", "color": "#000"});
                                    $("#sus_3").css({"backgroundColor": "#ddd", "color": "#000"});
                                }else if(data.sus_id==2){
                                    $("#sus_1").css({"backgroundColor": "#ddd", "color": "#000"});
                                    $(text).css({"backgroundColor": "rgb(35, 82, 124)", "color": "white"});
                                    $("#sus_3").css({"backgroundColor": "#ddd", "color": "#000"});
                                }else if(data.sus_id==3){
                                    $("#sus_1").css({"backgroundColor": "#ddd", "color": "#000"});
                                    $(text).css({"backgroundColor": "rgb(35, 82, 124)", "color": "white"});
                                    $("#sus_2").css({"backgroundColor": "#ddd", "color": "#000"});
                                }
                            }else{
                                if(data.sus_id==1){
                                    $(text).css({"backgroundColor": "rgb(35, 82, 124)", "color": "white"});
                                    $("#sus_2").css({"backgroundColor": "#ddd", "color": "#000"});
                                    $("#sus_3").css({"backgroundColor": "#ddd", "color": "#000"});
                                }else if(data.sus_id==2){
                                    $("#sus_1").css({"backgroundColor": "#ddd", "color": "#000"});
                                    $(text).css({"backgroundColor": "rgb(35, 82, 124)", "color": "white"});
                                    $("#sus_3").css({"backgroundColor": "#ddd", "color": "#000"});
                                }else if(data.sus_id==3){
                                    $("#sus_3").css({"backgroundColor": "#ddd", "color": "#000"});
                                    $(text).css({"backgroundColor": "rgb(35, 82, 124)", "color": "white"});
                                    $("#sus_2").css({"backgroundColor": "#ddd", "color": "#000"});
                                }
                            }
                            $("#sus_0").css({"backgroundColor": "#ddd", "color": "#000"});
                            $('.sale_cart tbody').html(data.tables);
                            $('#total_payable').val(data.total_payable);
                            $('#total_payableHidden').val(data.total_payable);
                            $('#total_item_hidden').val(data.total_item_hidden);
                            $('#total_item').html(data.total_item_hidden);
                            $('#sub_total').val(data.sub_total);
                            $('#disc').val(data.disc);
                            $('#disc_actual').val(data.disc_actual);
                            $('#vat').val(data.vat);
                            $('#hiddenRowCounter').val(data.total_item_hidden);
                            var customer_ids=data.customer_id;
                            $.ajax({
                                url:baseURL+'Sale/getCustomerList',
                                method:"GET",
                                data: { },
                                success:function(data){
                                    $("#customer_id").empty();
                                    $("#customer_id").append(data);
                                    $('#customer_id').val(customer_ids).change();
                                }
                            });
                        }else{
                            $("#sus_0").css({"backgroundColor": "rgb(35, 82, 124)", "color": "white"});
                            $("#sus_1").css({"backgroundColor": "#ddd", "color": "#000"});
                            $("#sus_2").css({"backgroundColor": "#ddd", "color": "#000"});
                            $("#sus_3").css({"backgroundColor": "#ddd", "color": "#000"});

                            suffix = 0;
                            total_item = 0;
                            fm_id_container = [];
                            deletedRow=[];
                            $(".sale_cart tbody").empty();
                            $('#total_payableHidden').val(0.00);
                            $('#total_item_hidden').val(0.00);
                            $('#total_item').html(0);
                            $('#sub_total').val(0.00);
                            $('#disc').val('');
                            $('#disc_actual').val(0.00);
                            $('#vat').val(0.00);
                            $('#hiddenRowCounter').val(0);
                            totalSum();
                            var customer_ids=1;
                            $.ajax({
                                url:baseURL+'Sale/getCustomerList',
                                method:"GET",
                                data: { },
                                success:function(data){
                                    $("#customer_id").empty();
                                    $("#customer_id").append(data);
                                    $('#customer_id').val(customer_ids).change();
                                }
                            });
                        }
                    }
                });
            }

            function deleteSuspend2(minusSuspendID){
                swal({
                    title: "Alert",
                    text: "Are you sure?",
                    confirmButtonColor: '#0C5889',
                    showCancelButton: true
                }, function() {
                    var tmp = "#btRow_"+minusSuspendID;
                    $(tmp).remove();
                    var totalSuspendList = $('.addButton li').length;
                    $("#suspendTotal").val(totalSuspendList-1);
                    $.ajax({
                        url:baseURL+'Sale/deleteSuspend',
                        method:"GET",
                        data: {minusSuspendID:minusSuspendID},
                        success:function(data){

                        }
                    });
                });
            }
            function formsubmit(){

                var error_status=false;
                var customer_id= $("#customer_id").val();
                var date = $("#dates2").val();

                var total_payable=$("#total_payable").val();
                var paid_amount=$("#paid_amount").val();


                if(customer_id==''){
                    swal("Alert!", "Please Select Customer!");
                    error_status=true;
                }

                if(error_status==true){
                    return false;
                }else{
                    $('.loader').fadeIn();
                    var data = $("form#form_id").serialize();
                    // use jQuery ajax
                    $.ajax({
                        url:baseURL+'Sale/Save',
                        method:"GET",
                        data: data,
                        success:function(data){
                            data=JSON.parse(data);
                            var sales_id=data.sales_id;
                            if(sales_id!=''){
                                //////////////////
                                suffix = 0;
                                total_item = 0;
                                fm_id_container = [];
                                deletedRow=[];
                                $(".sale_cart tbody").empty();
                                $("#total_item").text(0);
                                $("#total_item_hidden").val(0);
                                $("#disc").val('');
                                $("#vat").val(0);
                                $("#sub_total").val(0);
                                $("#total_payable").val(0);
                                $("#customer_id").val();
                                /////////////////////
                                $('.close').click();
                                $('.loader').fadeOut();
                                var printStatus='Yes';
                                var print_select='POS';
                                if(printStatus!="No"){
                                    if(print_select=="POS"){
                                        $.ajax({
                                            url:baseURL+'Sale/getEncriptValue',
                                            method:"GET",
                                            dataType : 'JSON',
                                            data: {sales_id:sales_id},
                                            success:function(data){
                                                var viewUrl='http://multidimensionsystems.com/demo/iRestora/Sale/view/'+data.encriptID;
                                                window.open(viewUrl, "popupWindow", "width=650,height=600,scrollbars=yes");
                                            }
                                        });
                                    }else{
                                        $.ajax({
                                            url:baseURL+'Sale/getEncriptValue',
                                            method:"GET",
                                            dataType : 'JSON',
                                            data: {sales_id:sales_id},
                                            success:function(data){
                                                var viewUrl='http://multidimensionsystems.com/demo/iRestora/Sale/view_A4/'+data.encriptID;
                                                window.open(viewUrl, "popupWindow", "width=793,height=1122,scrollbars=yes");
                                            }
                                        });
                                    }


                                }
                                //totalSum();
                                ///delete suspend payment
                                var activeValue = $("#activeSuspend").val();
                                if(activeValue!=0){
                                    $.ajax({
                                        url:baseURL+'Sale/deleteSuspend',
                                        method:"GET",
                                        data: {minusSuspendID:activeValue},
                                        success:function(data){
                                            var tmp = "#btRow_"+activeValue;
                                            $(tmp).remove();
                                            var totalSuspendList = $('.addButton li').length;
                                            $("#suspendTotal").val(totalSuspendList-1);
                                            $("#sus_0").css({"backgroundColor": "rgb(35, 82, 124)", "color": "white"});
                                            $("#sus_1").css({"backgroundColor": "#ddd", "color": "#000"});
                                            $("#sus_2").css({"backgroundColor": "#ddd", "color": "#000"});
                                            $("#sus_3").css({"backgroundColor": "#ddd", "color": "#000"});

                                            suffix = 0;
                                            total_item = 0;
                                            fm_id_container = [];
                                            deletedRow=[];
                                            $(".sale_cart tbody").empty();
                                            $('#total_payableHidden').val(0.00);
                                            $('#total_item_hidden').val(0.00);
                                            $('#total_item').html(0);
                                            $('#sub_total').val(0.00);
                                            $('#disc').val('');
                                            $('#disc_actual').val(0.00);
                                            $('#vat').val(0.00);
                                            $('#hiddenRowCounter').val(0);
                                            totalSum();
                                            var customer_ids=1;
                                            $.ajax({
                                                url:baseURL+'Sale/getCustomerList',
                                                method:"GET",
                                                data: { },
                                                success:function(data){
                                                    $("#customer_id").empty();
                                                    $("#customer_id").append(data);
                                                    $('#customer_id').val(customer_ids).change();
                                                }
                                            });
                                        }
                                    });
                                }else{
                                    var totalSuspendList = $('.addButton li').length;
                                    $("#suspendTotal").val(totalSuspendList-1);
                                    $("#sus_0").css({"backgroundColor": "rgb(35, 82, 124)", "color": "white"});
                                    $("#sus_1").css({"backgroundColor": "#ddd", "color": "#000"});
                                    $("#sus_2").css({"backgroundColor": "#ddd", "color": "#000"});
                                    $("#sus_3").css({"backgroundColor": "#ddd", "color": "#000"});

                                    suffix = 0;
                                    total_item = 0;
                                    fm_id_container = [];
                                    deletedRow=[];
                                    $(".sale_cart tbody").empty();
                                    $('#total_payableHidden').val(0.00);
                                    $('#total_item_hidden').val(0.00);
                                    $('#total_item').html(0);
                                    $('#sub_total').val(0.00);
                                    $('#disc').val('');
                                    $('#disc_actual').val(0.00);
                                    $('#vat').val(0.00);
                                    $('#hiddenRowCounter').val(0);
                                    totalSum();
                                    var customer_ids=1;
                                    $.ajax({
                                        url:baseURL+'Sale/getCustomerList',
                                        method:"GET",
                                        data: { },
                                        success:function(data){
                                            $("#customer_id").empty();
                                            $("#customer_id").append(data);
                                            $('#customer_id').val(customer_ids).change();
                                        }
                                    });
                                }
                            }else{
                                swal("Alert!", "Some errors occurs!!!");
                            }
                        }
                    });
                }
            }

            ////////////////////////////
            var rowId = $("#form_id tr").last().attr("data-id");
            if(!rowId){
                rowId = $("#hiddenRowCounter").val();
            }else{
                rowId++;
            }
            var suffix = rowId;
            var fm_id_container = [];
            var deletedRow=[];
            function checkChangeAmount(){
                var total_payable1=$("#total_payable1").val();
                var total_payable=$("#total_payable").val();
                var paid_amount=$("#paid_amount").val();
                $("#change_amount").val(total_payable1-total_payable);
                $("#due_amount").val((total_payable-paid_amount).toFixed(2));
                var duePayment = total_payable-paid_amount;
                if(duePayment>0){
                    $("#duePaymentDate").show();
                }else{
                    $("#duePaymentDate").hide();
                }
                if(total_payable1<0 || total_payable1==''){
                    $("#change_amount").val('0');
                }

            }
            $(document).ready(function() {
                $('.allBg').css({"backgroundColor": "#00253e"});
                $('.allBg').click();
                $("input:text").focus(function() { $(this).select(); } );
                var totalSuspendList = $('.addButton li').length;
                $("#currentStatus").val('1');
                $("#suspendTotal").val(totalSuspendList-1);
                ////////////////////// CALLING AJAX FOR DELETE PRODUCT/////////
                $(".custom-btn-three").click(function(e){
                    e.preventDefault();
                    var vat=$("#vat").val();
                    if(vat<0){
                        swal({
                            title: "Alert!",
                            text: "VAT or Total Payable can not be negative reduce Discount!",
                            confirmButtonColor: '#0C5889'
                        });
                        return false;
                    }
                    var total_payable=$("#total_payable").val();
                    var serviceNum=$(".sale_cart tbody tr").length;
                    if(total_payable!=''&&serviceNum>0){
                        $("#totalamount").text(total_payable);
                        $("#total_payable1").val(0);
                        $("#change_amount").val();
                        $("#PaymentModal").modal("show");
                    }else{
                        swal({
                            title: "Alert!",
                            text: "Please add product before payment. Thank you!",
                            confirmButtonColor: '#0C5889'
                        });
                        return false;
                    }

                });
/////////// Cancel Sale/////////////
                $('.custom-btn-one').click(function(e){
                    e.preventDefault();
                    swal({
                        title: "Alert!",
                        text: "Are you sure?",
                        confirmButtonColor: '#0C5889',
                        showCancelButton: true
                    }, function() {
                        suffix = 0;
                        total_item = 0;
                        fm_id_container = [];
                        deletedRow=[];
                        $(".sale_cart tbody").empty();
                        $("#total_item_hidden").val(0);
                        $("#total_item").text(0);
                        $("#disc").val('');
                        totalSum();
                        var minusSuspendID = 'current';
                        $.ajax({
                            url:baseURL+'Sale/deleteSuspend',
                            method:"GET",
                            data: {minusSuspendID:minusSuspendID},
                            success:function(data){
                                $("#sus_0").css({"backgroundColor": "rgb(35, 82, 124)", "color": "white"});
                                $("#sus_1").css({"backgroundColor": "#ddd", "color": "#000"});
                                $("#sus_2").css({"backgroundColor": "#ddd", "color": "#000"});
                                $("#sus_3").css({"backgroundColor": "#ddd", "color": "#000"});

                                suffix = 0;
                                total_item = 0;
                                fm_id_container = [];
                                deletedRow=[];
                                $(".sale_cart tbody").empty();
                                $('#total_payableHidden').val(0.00);
                                $('#total_item_hidden').val(0.00);
                                $('#total_item').html(0);
                                $('#sub_total').val(0.00);
                                $('#disc').val('');
                                $('#disc_actual').val(0.00);
                                $('#vat').val(0.00);
                                $('#hiddenRowCounter').val(0);
                                totalSum();
                                var customer_ids=1;
                                $.ajax({
                                    url:baseURL+'Sale/getCustomerList',
                                    method:"GET",
                                    data: { },
                                    success:function(data){
                                        $("#customer_id").empty();
                                        $("#customer_id").append(data);
                                        $('#customer_id').val(customer_ids).change();
                                    }
                                });
                            }
                        });

                    });

                });
                $('.custom-btn-two').click(function(e){
                    e.preventDefault();
                    var checkValueInCert = $(".sale_cart tbody tr").length;
                    if(!checkValueInCert){
                        swal({
                            title: "Alert!",
                            text: "Please add product before suspend. Thank you!",
                            confirmButtonColor: '#0C5889'
                        });
                        return false;
                    }
                    if($('#suspendTotal').val()==3){
                        swal({
                            title: "Alert!",
                            text: "You can not add more then 3 suspends. Thank you!",
                            confirmButtonColor: '#0C5889'
                        });
                        exit;
                    }
                    swal({
                        title: "Alert",
                        text: "Are you sure?",
                        confirmButtonColor: '#0C5889',
                        showCancelButton: true
                    }, function() {
                        var data = $("form#form_id").serialize();
                        $.ajax({
                            url     : 'http://multidimensionsystems.com/demo/iRestora/Sale/setSuspend',
                            method  : 'get',
                            dataType: 'json',
                            data    : data,
                            success:function(data){
                                $("#sus_0").css({"backgroundColor": "rgb(35, 82, 124)", "color": "white"});
                                $("#sus_1").css({"backgroundColor": "#ddd", "color": "#000"});
                                $("#sus_2").css({"backgroundColor": "#ddd", "color": "#000"});
                                $("#sus_3").css({"backgroundColor": "#ddd", "color": "#000"});
                                //add button on suspend list
                                var suspendButton = '<li style="margin-left: 5px" id="btRow_'+data.suspend_id+'"><a style="cursor: pointer" onclick="GetSuspend('+data.suspend_id+');" class="suspendID" data-suspendid="'+data.suspend_id+'" id="sus_'+data.suspend_id+'">Hold '+data.suspend_id+'</a><span><i class="fa fa-minus deleteSuspendID" onclick="deleteSuspend2('+data.suspend_id+');" data-minussuspendid="'+data.suspend_id+'"></i></span></li>';
                                eval($('.addButton').append(suspendButton));
                                var totalSuspendList = $('.addButton li').length;
                                $("#suspendTotal").val(totalSuspendList-1);
                                $("#activeSuspend").val(0);
                                suffix = 0;
                                total_item = 0;
                                fm_id_container = [];
                                deletedRow=[];
                                $(".sale_cart tbody").empty();
                                $('#total_payableHidden').val(0.00);
                                $('#total_item_hidden').val(0.00);
                                $('#total_item').html(0);
                                $('#sub_total').val(0.00);
                                $('#disc').val('');
                                $('#disc_actual').val(0.00);
                                $('#vat').val(0.00);
                                $('#hiddenRowCounter').val(0);
                                totalSum();
                                var customer_ids=1;
                                $.ajax({
                                    url:baseURL+'Sale/getCustomerList',
                                    method:"GET",
                                    data: { },
                                    success:function(data){
                                        $("#customer_id").empty();
                                        $("#customer_id").append(data);
                                        $('#customer_id').val(customer_ids).change();
                                    }
                                });
                            }
                        });
                    });

                });
                /* $('.custom-btn-one').click(function(e){
                 e.preventDefault();
                 job=confirm("Are you sure you want to cancel Sale?");
                 if(job!=true){
                 return false;
                 }else{
                 suffix = 0;
                 total_item = 0;
                 fm_id_container = [];
                 deletedRow=[];
                 $(".sale_cart tbody").empty();
                 $("#total_item_hidden").val(0);
                 $("#disc").val('');
                 totalSum();
                 }
                 });*/
                //////////////////////////////////
                ///////// add menus ////////////////////
                $('.fm_category').click(function(e){
                    e.preventDefault();
                    var category = $(this).text().replace(" ", "_");
                    $('.fm_category').css({"backgroundColor": "rgb(177, 178, 179)"});
                    $(this).css({"backgroundColor": "#00253e"});
                    if(category=="All"){
                        $('.category-single-item').show();
                    }else{
                        $('.category-single-item').hide();
                        $('.category-single-item.' + category).show();
                    }
                });
                //setSessionByService
                $(".services").change(function(e){
                    e.preventDefault();
                    var serviceValue = this.value;
                    $.ajax({
                        url: baseURL + 'Sale/setServiceSession',
                        method: "GET",
                        data    : {'serviceValue':serviceValue},
                        success: function (data) {
                            $('.allBg').click();
                        }
                    });
                });
                ///////////////////////////////////
                $(".category-single-item").click(function(e){
                    e.preventDefault();
                    var fm_details = $(this).attr('data-params');
                    addMenuFn(fm_details);
                    totalSum();
                    ///////////////////
                });

                /////////////////////////////////////

                $('.suspendIDCurrent').click(function(e){
                    e.preventDefault();
                    $("#currentStatus").val('1');

                    $.ajax({
                        url     : 'http://multidimensionsystems.com/demo/iRestora/Sale/getSuspendCurrent',
                        method  : 'get',
                        dataType: 'json',
                        data    : {},
                        success:function(data) {
                            if (data.status == true) {
                                $("#sus_1").css({"backgroundColor": "#ddd", "color": "#000"});
                                $("#sus_2").css({"backgroundColor": "#ddd", "color": "#000"});
                                $("#sus_3").css({"backgroundColor": "#ddd", "color": "#000"});
                                $("#sus_0").css({"backgroundColor": "rgb(35, 82, 124)", "color": "white"});

                                $('.sale_cart tbody').html(data.tables);
                                $('#total_payable').val(data.total_payable);
                                $('#total_payableHidden').val(data.total_payable);
                                $('#total_item_hidden').val(data.total_item_hidden);
                                $('#total_item').html(data.total_item_hidden);
                                $('#sub_total').val(data.sub_total);
                                $('#disc').val(data.disc);
                                $('#disc_actual').val(data.disc_actual);
                                $('#vat').val(data.vat);
                                $('#hiddenRowCounter').val(data.total_item_hidden);
                                totalSum();
                                var customer_ids = data.customer_id;
                                $.ajax({
                                    url: baseURL + 'Sale/getCustomerList',
                                    method: "GET",
                                    data: {},
                                    success: function (data) {
                                        $("#customer_id").empty();
                                        $("#customer_id").append(data);
                                        $('#customer_id').val(customer_ids).change();
                                    }
                                });
                            }
                        }
                    });
                });

                $('.suspendID').click(function(e){
                    e.preventDefault();
                    //currentSetInSession
                    var data = $("form#form_id").serialize();
                    $.ajax({
                        url     : 'http://multidimensionsystems.com/demo/iRestora/Sale/setSuspendCurrent',
                        method  : 'get',
                        dataType: 'json',
                        data    : data,
                        success:function(data){

                        }
                    });
                    $("#currentStatus").val('0');
                    //endCurrentSetInSession
                    var suspendID = $(this).attr("data-suspendID");
                    $("#activeSuspend").val(suspendID);
                    $.ajax({
                        url     : 'http://multidimensionsystems.com/demo/iRestora/Sale/getSuspend',
                        method  : 'get',
                        dataType: 'json',
                        data    : {'suspendID':suspendID},
                        success:function(data){
                            if(data.status==true){
                                var text = "#sus_"+data.sus_id;
                                if($('#suspendTotal').val()==3){
                                    if(data.sus_id==1){
                                        $(text).css({"backgroundColor": "rgb(35, 82, 124)", "color": "white"});
                                        $("#sus_2").css({"backgroundColor": "#ddd", "color": "#000"});
                                        $("#sus_3").css({"backgroundColor": "#ddd", "color": "#000"});
                                    }else if(data.sus_id==2){
                                        $("#sus_1").css({"backgroundColor": "#ddd", "color": "#000"});
                                        $(text).css({"backgroundColor": "rgb(35, 82, 124)", "color": "white"});
                                        $("#sus_3").css({"backgroundColor": "#ddd", "color": "#000"});
                                    }else if(data.sus_id==3){
                                        $("#sus_1").css({"backgroundColor": "#ddd", "color": "#000"});
                                        $(text).css({"backgroundColor": "rgb(35, 82, 124)", "color": "white"});
                                        $("#sus_2").css({"backgroundColor": "#ddd", "color": "#000"});
                                    }
                                }else{
                                    if(data.sus_id==1){
                                        $(text).css({"backgroundColor": "rgb(35, 82, 124)", "color": "white"});
                                        $("#sus_2").css({"backgroundColor": "#ddd", "color": "#000"});
                                        $("#sus_3").css({"backgroundColor": "#ddd", "color": "#000"});
                                    }else if(data.sus_id==2){
                                        $("#sus_1").css({"backgroundColor": "#ddd", "color": "#000"});
                                        $(text).css({"backgroundColor": "rgb(35, 82, 124)", "color": "white"});
                                        $("#sus_3").css({"backgroundColor": "#ddd", "color": "#000"});
                                    }else if(data.sus_id==3){
                                        $("#sus_3").css({"backgroundColor": "#ddd", "color": "#000"});
                                        $(text).css({"backgroundColor": "rgb(35, 82, 124)", "color": "white"});
                                        $("#sus_2").css({"backgroundColor": "#ddd", "color": "#000"});
                                    }
                                }
                                $("#sus_0").css({"backgroundColor": "#ddd", "color": "#000"});

                                $('.sale_cart tbody').html(data.tables);
                                $('#total_payable').val(data.total_payable);
                                $('#total_payableHidden').val(data.total_payable);
                                $('#total_item_hidden').val(data.total_item_hidden);
                                $('#total_item').html(data.total_item_hidden);
                                $('#sub_total').val(data.sub_total);
                                $('#disc').val(data.disc);
                                $('#disc_actual').val(data.disc_actual);
                                $('#gTotalDisc').val(data.gTotalDisc);
                                $('#vat').val(data.vat);
                                $('#hiddenRowCounter').val(data.total_item_hidden);
                                var customer_ids=data.customer_id;
                                $.ajax({
                                    url:baseURL+'Sale/getCustomerList',
                                    method:"GET",
                                    data: { },
                                    success:function(data){
                                        $("#customer_id").empty();
                                        $("#customer_id").append(data);
                                        $('#customer_id').val(customer_ids).change();
                                    }
                                });
                            }else{
                                $("#sus_0").css({"backgroundColor": "rgb(35, 82, 124)", "color": "white"});
                                $("#sus_1").css({"backgroundColor": "#ddd", "color": "#000"});
                                $("#sus_2").css({"backgroundColor": "#ddd", "color": "#000"});
                                $("#sus_3").css({"backgroundColor": "#ddd", "color": "#000"});

                                suffix = 0;
                                total_item = 0;
                                fm_id_container = [];
                                deletedRow=[];
                                $(".sale_cart tbody").empty();
                                $('#total_payableHidden').val(0.00);
                                $('#total_item_hidden').val(0.00);
                                $('#total_item').html(0);
                                $('#sub_total').val(0.00);
                                $('#disc').val('');
                                $('#disc_actual').val(0.00);
                                $('#vat').val(0.00);
                                $('#hiddenRowCounter').val(0);
                                totalSum();
                                var customer_ids=1;
                                $.ajax({
                                    url:baseURL+'Sale/getCustomerList',
                                    method:"GET",
                                    data: { },
                                    success:function(data){
                                        $("#customer_id").empty();
                                        $("#customer_id").append(data);
                                        $('#customer_id').val(customer_ids).change();
                                    }
                                });
                            }
                        }
                    });

                });
                //////////////////////
                $('.deleteSuspendID').click(function(e){
                    e.preventDefault();
                    var minusSuspendID = $(this).attr("data-minusSuspendID");
                    swal({
                        title: "Alert",
                        text: "Are you sure?",
                        confirmButtonColor: '#0C5889',
                        showCancelButton: true
                    }, function() {
                        var tmp = "#btRow_"+minusSuspendID;
                        $(tmp).remove();
                        var totalSuspendList = $('.addButton li').length;
                        $("#suspendTotal").val(totalSuspendList-1);
                        $.ajax({
                            url:baseURL+'Sale/deleteSuspend',
                            method:"GET",
                            data: {minusSuspendID:minusSuspendID},
                            success:function(data){
                            }
                        });
                    });

                });
                ////////////////////
                $(".item_menu_dd").change(function(e){
                    e.preventDefault();
                    var fm_details = $(this).val();
                    addMenuFn(fm_details);
                });

                /////////////////////
                //////////////////////
                $(".txtboxToFilter").on("keypress keyup blur",function (event) {
                    //this.value = this.value.replace(/[^0-9\.]/g,'');
                    $(this).val($(this).val().replace(/[^0-9\.]/g,''));
                    if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
                        event.preventDefault();
                    }
                });
            });


            function addMenuFn(fm_details){
                var fm_details_array = fm_details.split('||');
                var index = fm_id_container.indexOf(fm_details_array[0]);
                var chkname=1;
                for(var i=0;i<suffix;i++){
                    var menuid= parseInt($("#food_menu_id_" + i).val());
                    if(menuid==fm_details_array[0]){
                        var qty=parseInt($("#qty_"+i).val());

                        qty=parseInt(qty+1);
                        $("#qty_"+i).val(qty);
                        var tprice=parseFloat(qty*fm_details_array[2]);
                        $("#total_"+i).val(tprice.toFixed(2));
                        chkname=2;
                        return false;
                    }}
                var rowId = $("#form_id tr").last().attr("data-id");
                if(rowId){
                    var newID = rowId;
                    var lastRowitemID = $('#food_menu_id_'+rowId).val();
                }
                if(lastRowitemID==fm_details_array[0]){
                    var qty=parseInt($("#qty_"+newID).val());
                    qty=parseInt(qty+1);
                    $("#qty_"+newID).val(qty);
                    var tprice=parseFloat(qty*fm_details_array[2]);
                    $("#total_"+newID).val(tprice.toFixed(2));
                    return false;
                }

                // if(chkname==2) {
                //     swal("Alert!", "This menu already remains in cart, you can change the Unit Price or Quantity/Amount");

                // }

                var temp = '';
                var cart_row = '<tr class="clRow" data-id="'+suffix+'" id="row_' + suffix + '">'+
                        '<input type="hidden" id="food_menu_id_' + suffix + '" name="food_menu_id[]" value="' + fm_details_array[0] + '"/><input type="hidden" id="menu_name_' + suffix + '" name="menu_name[]" value="' + fm_details_array[1] + '"/>'+
                        '<input type="hidden" id="discountNHidden_' + suffix + '" name="discountNHidden[]" value=""/><input type="hidden" id="discountNHiddenTotal_' + suffix + '" name="discountNHiddenTotal[]" value=""/>'+
                        '<input type="hidden" id="VATHidden_' + suffix + '" name="VATHidden[]" value="' + fm_details_array[3] + '"/><input type="hidden" id="VATHiddenTotal_' + suffix + '" name="VATHiddenTotal[]" value=""/><input type="hidden" id="VATHiddenTotalAll_' + suffix + '" name="VATHiddenTotalAll[]" value=""/><input type="hidden" id="TotalHidden_' + suffix + '" name="TotalHidden[]" value=""/>'+
                        '<td>'+fm_details_array[1]+'</td>'+
                        '<td><input class="pri-size integerchk" onfocus="this.select();"  type="text" id="price_'+ suffix +'" name="price[]" value="'+fm_details_array[2]+'" onBlur="return calculateRow('+suffix+');" onkeyup="return calculateRow(' + suffix + ');" ></td>'+
                        '<td><input class="qty-size txtboxToFilter" onfocus="this.select();" type="number" min="1" id="qty_'+ suffix +'" name="qty[]" value="'+ 1 +'" onclick="return ok();" onmouseup="return helloThere('+suffix+')" onblur="return calculateRow(' + suffix + ');" onkeyup="return calculateRow(' + suffix + ');" onkeydown="return calculateRow(' + suffix + ');"></td>'+
                        '<td><input class="pri-size discount" maxlength="6" onfocus="this.select();"  type="text" id="discountN_'+ suffix +'" name="discountN[]" value="" onBlur="return calculateRow('+suffix+');" onkeyup="return calculateRow(' + suffix + ');" ></td>'+
                        '<td><input class="pri-size"  type="text" style="background-color: #dddddd;border:1px solid #7e7f7f;" readonly id="total_'+ suffix +'" name="total[]" value="'+ fm_details_array[2] +'"></td>'+
                        '<td style="text-align: center"><a class="btn btn-danger btn-xs" onclick="return deleter(' + suffix + ',' + fm_details_array[0] +');"><i style="color:white" class="fa fa-trash"></i></a></td>'+
                        '</tr>';
                $('.sale_cart tbody').append(cart_row);

                fm_id_container.push(fm_details_array[0]);
                var rowCount = ($('.sale_cart tr').length)-1;
                ////////////////// start///////////////
                $('.integerchk').keydown(function(e) {
                    var keys = e.charCode || e.keyCode || 0;
                    // allow backspace, tab, delete, enter, arrows, numbers and keypad numbers ONLY
                    // home, end, period, and numpad decimal
                    return (
                    keys == 8 ||
                    keys == 9 ||
                    keys == 13 ||
                    keys == 46 ||
                    keys == 110 ||
                    keys == 86 ||
                    keys == 190 ||
                    (keys >= 35 && keys <= 40) ||
                    (keys >= 48 && keys <= 57) ||
                    (keys >= 96 && keys <= 105));
                });

                $('.integerchk').keyup(function(e) {
                    var value = $(this).val();
                    var re = /^[0-9.]*$/;

                    var number = ($(this).val().split('.'));
                    if (number[1].length > 2)
                    {
                        var parcent = parseFloat(value);
                        $(this).val( parcent.toFixed(2));
                    }
                    if (! re.test(value)) // OR if (/^[0-9]{1,10}$/.test(+tempVal) && tempVal.length<=10)
                        $(this).val('');

                });
                suffix++;
                totalSum();
            }
            function ok() {
                calculateRow(0);
            }
            /////////////////////////////////
            function checkQuantity(id){
                var qty=$("#qty_"+id).val();
                if($.trim(qty)==""||$.isNumeric(qty)==false||$.trim(qty)<0){
                    $("#qty_"+id).val(1);
                }
                totalSum();
            }
            function checkUnitPrice(id){
                var unitPrice=$("#price_"+id).val();
                if($.trim(unitPrice)==""|| $.isNumeric(unitPrice)==false){
                    $("#price_"+id).val(0);
                }
                totalSum();
            }
            //////////////////////////////////////////////
            /////////////CALCULATE ROW
            //////////////////////////////////////////////
            function calculateRow(id){
                var price=$("#price_"+id).val();
                var discountN=$("#discountN_"+id).val();
                var VATHidden=$("#VATHidden_"+id).val();
                var qty=$("#qty_"+id).val();
                var discountAndDiscountAmt = 0.00;
                var gVatTotal = 0.00;
                if($.trim(qty)==""|| $.isNumeric(qty)==false){
                    qty=1;
                }
                if($.trim(price)==""|| $.isNumeric(price)==false){
                    price=0;
                }
                var qtyAndPrice=parseFloat($.trim(price))*parseFloat($.trim(qty));

                if(discountN.length){
                    if ($.trim(discountN) == '' || $.trim(discountN) == '%' || $.trim(discountN) == '%%' || $.trim(discountN) == '%%%'  || $.trim(discountN) == '%%%%' ){
                    }else{
                        var Disc_fields = discountN.split('%');
                        var discAmount = Disc_fields[0];
                        var discP = Disc_fields[1];
                        if (discP == "") {
                            discountAndDiscountAmt = ((price * (parseFloat($.trim(discAmount))) * (parseFloat($.trim(qty)))) / 100);
                        } else {
                            discountAndDiscountAmt=parseFloat($.trim(discAmount));
                        }
                    }
                }
                if(VATHidden.length){
                    gVatTotal = ((price-discountAndDiscountAmt)*VATHidden)/100;
                }
                ////////////// PUT VALUE ////////
                $("#total_"+id).val(qtyAndPrice.toFixed(2));
                $("#discountNHidden_"+id).val(discountN);
                $("#discountNHiddenTotal_"+id).val(discountAndDiscountAmt);
                $("#VATHiddenTotalAll_"+id).val(gVatTotal);
                $("#TotalHidden_"+id).val(price-discountAndDiscountAmt);
                totalSum();
            }//calculateRow
            ////////////////////////////////////////////
            ////// TOTAL SUM
            ///////////////////////////////////////////
            function    totalSum(){

                var totalDiscount=0;
                var total_payable = $("#sub_total").val();

                /*    if(isNaN(disc)||disc!=''){
                 if(disc.indexOf('%') != -1){
                 chk=1;
                 }
                 if(chk==1){
                 totalDiscount=(totalAmount*(parseFloat($.trim(disc))/100));
                 }else{
                 totalDiscount=parseFloat(disc);
                 }
                 }*/

                var totalAmount=0;
                var totalQuantity=0;
                var gTotalDisc=0;
                /*    if(suffix==0){
                 suffix = $("#hiddenRowCounter").val();
                 }
                 for(var i=0;i<suffix;i++){
                 if(deletedRow.indexOf(i)<0) {
                 totalAmount += parseFloat($.trim($("#total_"+i).val()));
                 totalQuantity += parseFloat($.trim($("#qty_"+i).val()));
                 }
                 }*/
                var vatamount=0;
                var totalVats = 0;
                $(".clRow").each(function () {
                    var n = $(this).attr("data-id");
                    if(deletedRow.indexOf(n)<0) {
                        totalAmount += parseFloat($.trim($("#total_"+n).val()));
                        totalQuantity += parseFloat($.trim($("#qty_"+n).val()));
                        if($.trim($("#discountNHiddenTotal_"+n).val()).length && !isNaN($("#discountNHiddenTotal_"+n).val())){
                            gTotalDisc += parseFloat($.trim($("#discountNHiddenTotal_"+n).val()));
                        }else{
                            gTotalDisc += 0;
                        }
                        if($.trim($("#VATHidden_"+n).val()).length && !isNaN($("#VATHidden_"+n).val())){
                            var VATHidden=$("#VATHidden_"+n).val();
                            var qty=$("#qty_"+n).val();
                            var originalRowTotalAmount=$("#total_"+n).val();
                            var newTotalRowAmount = (parseFloat(originalRowTotalAmount)/parseFloat(qty));

                            var VATHiddenTotal=parseFloat($.trim(VATHidden));
                            $("#VATHiddenTotal_"+n).val(VATHiddenTotal);
                            var calculateVat = (parseFloat(newTotalRowAmount)*parseFloat(VATHidden))/100;
                            totalVats=parseFloat(calculateVat)*parseFloat(qty);
                            vatamount += totalVats;
                        }
                    }
                });

                //foraddDiscount
                disc = $("#disc").val();
                if ($.trim(disc) == '' || $.trim(disc) == '%' || $.trim(disc) == '%%' || $.trim(disc) == '%%%'  || $.trim(disc) == '%%%%' ){
                    totalDiscount = 0;
                }else{
                    var Disc_fields = disc.split('%');
                    var discAmount = Disc_fields[0];
                    var discP = Disc_fields[1];

                    if (discP == "") {
                        totalDiscount = (total_payable * (parseFloat($.trim(discAmount)) / 100));
                    } else {
                        if (!disc) {
                            discAmount = 0;
                        }
                        totalDiscount = parseFloat(discAmount);
                    }

                }

                $("#sub_total").val(totalAmount.toFixed(2));
                $("#gTotalDisc").val((gTotalDisc+totalDiscount).toFixed(2));
                $("#total_item").text(totalQuantity);
                $("#total_item_hidden").val(totalQuantity);

                var vatpercent=0;
                vatpercent=parseFloat(vatamount);
                var totalVat=vatpercent;
                $("#vat").val(totalVat.toFixed(2));
                $("#disc_actual").val((gTotalDisc+totalDiscount).toFixed(2));
                $("#total_payable").val(((totalAmount+totalVat)-gTotalDisc).toFixed(2));
                $("#total_payableHidden").val((totalAmount+totalVat-totalDiscount).toFixed(2));

                //for VAT
                disc = $("#disc").val();
                var FinalGTotal = 0;
                var FinalVATTotal = 0;
                var temp =0;
                var temp1 =0;
                var temp2 =0;
                var originalVAT =0;
                var tempFinalVat = 0;
                var tempFinalGTotal = 0;

                if ($.trim(disc) == '' || $.trim(disc) == '%' || $.trim(disc) == '%%' || $.trim(disc) == '%%%'  || $.trim(disc) == '%%%%' || $.trim(disc) == '%%%%%' ){

                }else{
                    var Disc_fields = disc.split('%');
                    var discAmount = Disc_fields[0];
                    var discP = Disc_fields[1];

                    if (discP == "") {
                        var VATForRow = 0;
                        var NewTotalRow = 0;
                        $(".clRow").each(function () {
                            var n = $(this).attr("data-id");
                            VATForRow = $("#VATHiddenTotalAll_"+n).val();
                            NewTotalRow = $("#TotalHidden_"+n).val();
                            originalVAT = $("#VATHiddenTotal_"+n).val();

                            FinalVATTotal += parseFloat(VATForRow);
                            FinalGTotal += parseFloat(NewTotalRow);

                            temp = ((FinalGTotal + FinalVATTotal) * (parseFloat($.trim(discAmount)))) / 100;
                            temp1 = (FinalGTotal + FinalVATTotal) - temp;
                            if(originalVAT.length){
                                var VATHidden=$("#VATHidden_"+n).val();
                                var qty=$("#qty_"+n).val();
                                var originalRowTotalAmount=$("#total_"+n).val();
                                var newTotalRowAmount = (parseFloat(originalRowTotalAmount)/parseFloat(qty));
                                var calculateVat = (parseFloat(newTotalRowAmount)*parseFloat(VATHidden))/100;
                                totalVats=parseFloat(calculateVat)*parseFloat(qty);
                            }else{
                                totalVats = 0;
                            }

                            tempFinalGTotal+=temp1;
                            tempFinalVat+=totalVats;
                        });
                    } else {
                        VATForRow = 0;
                        NewTotalRow = 0;
                        totalVats = 0;
                        $(".clRow").each(function () {
                            var n = $(this).attr("data-id");
                            VATForRow = $("#VATHiddenTotalAll_"+n).val();
                            NewTotalRow = $("#TotalHidden_"+n).val();
                            originalVAT = $("#VATHiddenTotal_"+n).val();
                            FinalVATTotal += parseFloat(VATForRow);
                            FinalGTotal += parseFloat(NewTotalRow);


                            temp = parseFloat($.trim(discAmount));
                            temp1 = (FinalGTotal + FinalVATTotal) - temp;
                            if(originalVAT.length){
                                var VATHidden=$("#VATHidden_"+n).val();
                                var qty=$("#qty_"+n).val();
                                var originalRowTotalAmount=$("#total_"+n).val();
                                var newTotalRowAmount = (parseFloat(originalRowTotalAmount)/parseFloat(qty));
                                var calculateVat = (parseFloat(newTotalRowAmount)*parseFloat(VATHidden))/100;
                                totalVats=parseFloat(calculateVat)*parseFloat(qty);
                            }else{
                                totalVats = 0;
                            }
                            tempFinalGTotal+=temp1;
                            tempFinalVat+=totalVats;
                        });
                    }
                    $("#vat").val(tempFinalVat.toFixed(2));
                    var totalPayable = parseFloat($.trim($("#vat").val())) + parseFloat($.trim($("#sub_total").val())) - parseFloat($.trim($("#gTotalDisc").val()));
                    $("#total_payable").val(totalPayable.toFixed(2));
                }

            }
            //////////////////////////////////////////////////////
            /////// DELETE FIELD
            ////////////////////////////////////////////////////////
            function deleter(id){
                $("#row_"+id).remove();
                deletedRow.push(id);
                totalSum();
            }
            /////////////// Onkeyup Total Tax check //////////////
            function checkDiscount(){
                var serviceNum=$(".sale_cart tbody tr").length;
                if(!serviceNum){
                    swal({
                        title: "Alert!",
                        text: "Please add product before discount add. Thank you!",
                        confirmButtonColor: '#0C5889'
                    });
                    $('#disc').val('');
                    return false;
                }
                totalSum();
            }

            function helloThere(value){
                calculateRow(value);
            }


            /////////////// shortcut key development//////


            onkeydown = function(e){
                if(e.ctrlKey && e.shiftKey && e.which == 83){
                    e.preventDefault();
                }
                if(e.ctrlKey && e.shiftKey && e.which == 67){
                    e.preventDefault();
                }
                if(e.ctrlKey && e.shiftKey && e.which == 65){
                    e.preventDefault();
                }
                if(e.ctrlKey && e.shiftKey && e.which == 68){
                    e.preventDefault();
                } if(e.ctrlKey && e.shiftKey && e.which == 69){
                    e.preventDefault();
                }if(e.ctrlKey && e.shiftKey && e.which == 86){
                    e.preventDefault();
                }if(e.ctrlKey && e.shiftKey && e.which == 88){
                    e.preventDefault();
                }
            }


            document.onkeyup = function(e) {
                if (e.ctrlKey && e.shiftKey && e.which == 83) {
                    var searchitem = $(".searchitem").data('select2');
                    var customer_id = $("#customer_id").data('select2');
                    searchitem.open();
                    customer_id.close();
                } else if (e.ctrlKey && e.shiftKey && e.which == 67) {
                    var customer_id = $("#customer_id").data('select2');
                    var searchitem = $(".searchitem").data('select2');
                    searchitem.close();
                    customer_id.open();
                } else if (e.ctrlKey && e.shiftKey && e.which == 65) {
                    $('#CustomerModal').modal('show');
                } else if (e.ctrlKey && e.shiftKey && e.which == 68) {
                    $("#disc").focus();
                }else if (e.ctrlKey && e.shiftKey && e.which == 88) {
                    e.preventDefault();
                    var total_payable=$("#total_payable").val();
                    var serviceNum=$(".sale_cart tbody tr").length;
                    if(total_payable!=''&&serviceNum>0){
                        $("#totalamount").text(total_payable);
                        $("#total_payable1").val(0);
                        $("#change_amount").val(0);
                        $("#PaymentModal").modal("show");
                    }else{
                        swal({
                            title: "Alert!",
                            text: "Please add product before payment. Thank you!",
                            confirmButtonColor: '#0C5889'
                        });
                        return false;
                    }
                } else if (e.ctrlKey && e.shiftKey && e.which == 69) {
                    swal({
                        title: "Alert",
                        text: "Are you sure?",
                        confirmButtonColor: '#0C5889',
                        showCancelButton: true
                    }, function() {
                        suffix = 0;
                        total_item = 0;
                        fm_id_container = [];
                        deletedRow=[];
                        $(".sale_cart tbody").empty();
                        $("#total_item_hidden").val(0);
                        $("#total_item").text(0);
                        $("#disc").val('');
                        totalSum();
                    });

                } else if (e.ctrlKey && e.shiftKey && e.which == 86) {
                    if($('#suspendTotal').val()==3){
                        swal({
                            title: "Alert!",
                            text: "You can not add more then 3 suspends. Thank you!",
                            confirmButtonColor: '#0C5889'
                        });
                        exit;
                    }
                    swal({
                        title: "Alert",
                        text: "Are you sure?",
                        confirmButtonColor: '#0C5889',
                        showCancelButton: true
                    }, function() {
                        var data = $("form#form_id").serialize();
                        $.ajax({
                            url     : 'http://multidimensionsystems.com/demo/iRestora/Sale/setSuspend',
                            method  : 'get',
                            dataType: 'json',
                            data    : data,
                            success:function(data){
                                $("#sus_0").css({"backgroundColor": "rgb(35, 82, 124)", "color": "white"});
                                $("#sus_1").css({"backgroundColor": "#ddd", "color": "#000"});
                                $("#sus_2").css({"backgroundColor": "#ddd", "color": "#000"});
                                $("#sus_3").css({"backgroundColor": "#ddd", "color": "#000"});

                                suffix = 0;
                                total_item = 0;
                                fm_id_container = [];
                                deletedRow=[];
                                $(".sale_cart tbody").empty();
                                $('#total_payableHidden').val(0.00);
                                $('#total_item_hidden').val(0.00);
                                $('#total_item').html(0);
                                $('#sub_total').val(0.00);
                                $('#disc').val('');
                                $('#disc_actual').val(0.00);
                                $('#vat').val(0.00);
                                $('#hiddenRowCounter').val(0);
                                totalSum();
                                var customer_ids=1;
                                $.ajax({
                                    url:baseURL+'Sale/getCustomerList',
                                    method:"GET",
                                    data: { },
                                    success:function(data){
                                        $("#customer_id").empty();
                                        $("#customer_id").append(data);
                                        $('#customer_id').val(customer_ids).change();
                                    }
                                });
                            }
                        });
                    });
                }
            };

            function shortcut() {
                $("#ShortCut").modal("show");
            }
            /*    $('#CustomerModal').on('hidden.bs.modal', function () {
             $(this).find('form').trigger('reset');
             $('#area_id').val('').change();
             });*/

            $('#PaymentModal').on('hidden.bs.modal', function () {
                $(this).find('form').trigger('reset');
            });
        </script>
        <script type="text/javascript" src="http://multidimensionsystems.com/demo/iRestora/assets/customer.js"></script>
        <style type="text/css">
            a:hover, a:active, a:focus {
                color: #FFF;
                outline: medium none;
                text-decoration: none;
            }
            .form-horizontal .form-group {
                margin-left: -15px;
                margin-right: -15px;
            }
            .form-group {
                margin-bottom: 15px;
                overflow: hidden;
            }
            .btn-group-custom a {
                font-size: 14px;
                padding: 4px 0;
                width: 32.33%;
            }
            .form_question{
                font-size: 14px;
            }
        </style>
        <script src="http://multidimensionsystems.com/demo/iRestora/assets/bower_components/nump/jquery_002.js"></script>
        <script src="http://multidimensionsystems.com/demo/iRestora/assets/bower_components/nump/jquery_003.js" type="text/javascript"></script>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="row">
            <div class="col-md-12" style="text-align: center;">
                <strong>iRestora</strong>, Restaurant POS with Smart Inventory by Multidimension Systems
                <div class="hidden-lg">

                </div>
            </div>
        </div>
    </footer>
</div>

<div class="modal fade" id="todaysSummary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="ShortCut">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-2x">×</i></span></button>
                <h2 style="text-align: center" id="myModalLabel">Today's Summary</h2>
                <!-- <h4 style="text-align: center" >Date: </h4>-->
            </div>
            <div class="modal-body">
                <div class="box-body table-responsive">
                    <table class="table">
                        <tr>
                            <td style="width: width: 68%;">1. Purchase(Only Paid Amount)</td>
                            <td><span id="purchase"></span></td>
                        </tr>
                        <tr>
                            <td>2. Sale (Total)</td>
                            <td><span id="sale"></span></td>
                        </tr>
                        <tr>
                            <td>3. Total VAT</td>
                            <td><span id="totalVat"></span></td>
                        </tr>
                        <tr>
                            <td>4. Expense</td>
                            <td><span id="Expense"></span></td>
                        </tr>
                        <tr>
                            <td>5. Supplier Due Payment</td>
                            <td><span id="supplierDuePayment"></span></td>
                        </tr>
                        <tr>
                            <td>6. Waste</td>
                            <td><span id="waste"></span></td>
                        </tr>
                        <tr>
                            <td>7. Balance (Sale - (Purchase+Supplier Due Payment+Expense))</td>
                            <td><span id="balance"></span></td>
                        </tr>
                    </table>

                    <br>
                    <div id="showCashStatus"></div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./wrapper -->

<!-- Bootstrap 3.3.7 -->
<script src="http://multidimensionsystems.com/demo/iRestora/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="http://multidimensionsystems.com/demo/iRestora/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="http://multidimensionsystems.com/demo/iRestora/assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="http://multidimensionsystems.com/demo/iRestora/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="http://multidimensionsystems.com/demo/iRestora/assets/dist/js/demo.js"></script>
<script>
    function todaysSummary() {
        $.ajax({
            url     : 'http://multidimensionsystems.com/demo/iRestora/Report/todayReport',
            method  : 'get',
            dataType: 'json',
            data    : {},
            success:function(data){
                $("#purchase").text("$ "+data.total_purchase_amount);
                $("#sale").text("$ "+data.total_sales_amount);
                $("#totalVat").text("$ "+data.total_sales_vat);
                $("#Expense").text("$ "+data.expense_amount);
                $("#supplierDuePayment").text("$ "+data.supplier_payment_amount);
                $("#waste").text("$ "+data.total_loss_amount);
                $("#balance").text("$ "+data.balance);
                $.ajax({
                    url     : 'http://multidimensionsystems.com/demo/iRestora/Report/todayReportCashStatus',
                    method  : 'get',
                    datatype: 'json',
                    data    : {},
                    success:function(data){
                        var json = $.parseJSON(data);
                        var i = 1;
                        var html = '<table class="table">';
                        $.each(json, function (index, value) {
                            html+='<tr><td style="width: 86%">'+i+'. Sale in '+value.name+'</td> <td>$ '+value.total_sales_amount+'</td></tr>';
                            i++;
                        });
                        html+='</table>';
                        $("#showCashStatus").html(html);
                    }
                });
            }
        });
        $("#todaysSummary").modal("show");
    }
</script>
</body>
</html>
