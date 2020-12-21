<!doctype html>
<html lang="en">

<head>
    <style>
        .paginationjs {
            
            position: absolute;
            
            left: 45%;
        }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ahmet Can - Datafark</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <link href="https://nightly.datatables.net/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.1/js/dataTables.select.min.js" type="text/javascript"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap.css" rel="stylesheet">
    <link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/table/style.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://pagination.js.org/dist/2.1.5/pagination.css">
    <link rel="stylesheet" href="./style.css">

</head>

<body>

    <div class="horizontal-main-wrapper">
        <!-- main header area start -->
        <div class="mainheader-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="./">
                                <h3>Datafark</h3>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-9 clearfix text-right">

                        <div class="clearfix d-md-inline-block d-block">
                            <div class="user-profile m-0">
                                <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Ahmet Can</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header area end -->
        <!-- header area start -->
        <div class="header-area header-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9  d-none d-lg-block">
                        <div class="horizontal-menu">
                            <nav>
                                <ul id="nav_menu">
                                    <li>
                                        <a href="./"><i class="ti-dashboard"></i><span>Sipariş
                                                Listesi</span></a>

                                    </li>
                                    <li>
                                        <a href="./charts.php"><i class="ti-pie-chart"></i><span>Charts</span></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12 d-block d-lg-none">
                        <div id="mobile_menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <div class="card-body">
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="fold-table" id="datatable">
                                <thead>
                                    <tr>

                                        <th scope="col"></th>
                                        <th scope="col">ID</th>
                                        <th scope="col">Ad</th>
                                        <th scope="col">Soyad</th>
                                        <th scope="col">Gönderi Tarihi</th>
                                        <th scope="col">Gönderi Durumu</th>
                                        <th scope="col">Toplam Tutar</th>
                                        <th scope="col">Adres Detayları</th>

                                    </tr>
                                </thead>
                                <tbody class="crtab" id="crtab">


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>



    <script src='https://code.jquery.com/jquery-3.5.1.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script src="https://pagination.js.org/dist/2.1.5/pagination.min.js"></script>
    <script src="./jquery-ui.min.js"></script>
    <script src="./jsjson.js"></script>

</body>

</html>