<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reg Transportes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description"
          content="Gradient Able Bootstrap admin template made using Bootstrap 4. The starter version of Gradient Able is completely free for personal project."/>
    <meta name="keywords"
          content="free dashboard template, free admin, free bootstrap template, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive"/>
    <meta name="author" content="codedthemes">
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/caminhao-bau.png" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
</head>
    <style>
        .btn i {
            margin-right: 0px;
        }
    </style>
<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
    <nav class="navbar header-navbar pcoded-header">
        <div class="navbar-wrapper">
            <div class="navbar-logo">
                <a class="mobile-menu" id="mobile-collapse" href="#!">
                    <i class="ti-menu"></i>
                </a>
                <div class="mobile-search">
                    <div class="header-search">
                        <div class="main-search morphsearch-search">
                            <div class="input-group">
                                <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                <input type="text" class="form-control" placeholder="Enter Keyword">
                                <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--                    <a href="index.php">-->
                <!--                        <img class="img-fluid" style="width: 20%" src="assets/images/caminhao-bau.png" alt="Theme-Logo" />-->
                <!--                    </a>-->
                <a class="mobile-options">
                    <i class="ti-more"></i>
                </a>
            </div>

            <div class="navbar-container container-fluid">
                <ul class="nav-left">
                    <li>
                        <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                    </li>
                </ul>
                <ul class="nav-right">
                    <li class="user-profile header-notification">
                        <a href="#!">
                            <i class="ti-angle-down"></i>
                        </a>
                        <ul class="show-notification profile-notification">
                            <li>
                                <a href="sair.php">
                                    <i class="ti-layout-sidebar-left"></i> Sair
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <nav class="pcoded-navbar">
                <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                <div class="pcoded-inner-navbar main-menu">
                    <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Layout</div>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="">
                            <a href="index.php">
                                <span class="pcoded-micon"><i class="ti-home"></i><b></b></span>
                                <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- Main-body start -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- Page-header start -->
                            <div class="page-header card">
                                <div class="card-block">
                                    <ul class="breadcrumb-title b-t-default p-t-10">
                                        <li class="breadcrumb-item">
                                            <a href="assets/index.html"> <i class="fa fa-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a>
                                        </li>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="page-body">
                                <!-- Basic table card start -->
                                <div class="card">
                                    <div class="card-header">
                                        <br>
                                        <h5>Tabela Produtos</h5>
                                        <br>
                                        <br>
                                        <a href="form-insert.php" class="btn btn-info btn-round">+ Novo</a>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="fa fa-chevron-left"></i></li>
                                                <!-- <li><a href="gerar_planilha.php"><i class="fa fa-window-maximize"></i></a></li> -->
                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                <!-- <li><i class="fa fa-refresh reload-card"></i></li>
                                                <li><i class="fa fa-times close-card"></i></li> -->
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="card-block table-border-style">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Descricao</th>
                                                    <th>QTD</th>
                                                    <th>Editar</th>
                                                    <th>Excluir</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <th scope="row">Arroz</th>
                                                    <th scope="row">5KG</th>
                                                    <form method="post" action="form-edit.php">
                                                        <input type="hidden" name="id" value="">
                                                        <th scope="row">
                                                            <button class="btn btn-primary btn-icon"><i class="icofont icofont-user-alt-3"></i></button>
                                                        </th>
                                                    </form>
                                                    <form method="post" action="#">
                                                        <input type="hidden" name="id" value="">
                                                        <th scope="row">
                                                            <button type="submit" class="btn btn-danger btn-icon" onclick="return confirm('Você tem certeza que deseja excluir esse produto ?');">
                                                                <i class="ti-trash"></i></button>
                                                        </th>
                                                    </form>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
        <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
        <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
        <!-- jquery slimscroll js -->
        <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
        <!-- modernizr js -->
        <script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
        <script type="text/javascript" src="assets/js/modernizr/css-scrollbars.js"></script>
        <!-- Custom js -->
        <script type="text/javascript" src="assets/js/script.js"></script>
        <script src="assets/js/pcoded.min.js"></script>
        <script src="assets/js/vartical-demo.js"></script>
        <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
</body>
</html>