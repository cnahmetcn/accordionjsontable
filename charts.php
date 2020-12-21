<?php

$dosya = file_get_contents("http://localhost/datafark/orders.json");
$json = json_decode($dosya,true);
$toplam = $json['totalElements'];
$icerik = $json['content'];
$totalRecords = $json['totalElements'];
$page = !isset($_GET['page']) ? 1 : $_GET['page'];
$limit = 10; 
$offset = ($page - 1) * $limit;
$final = array_splice($icerik, $offset); 



$toplamdel=0;
$toplamcan=0;
$toplamret=0;
$geneltoplam=0;

for($i=0;$i<$toplam;$i++){
    if(($final[$i]['shipmentPackageStatus'])=='Delivered'){
        $toplamdel += $final[$i]['grossAmount'];
    }

    elseif(($final[$i]['shipmentPackageStatus'])=='Return'){
        $toplamret += $final[$i]['grossAmount'];
    }

    elseif(($final[$i]['shipmentPackageStatus'])=='Cancelled'){
        $toplamcan += $final[$i]['grossAmount'];
    }
    $geneltoplam += $final[$i]['grossAmount'];    
}


$dataPoints = array( 
	array("label"=>"Delivered", "y"=>$toplamdel),
	array("label"=>"Return", "y"=>$toplamret),
	array("label"=>"Cancelled", "y"=>$toplamcan),
)
 
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
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
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>




    <script>
window.onload = function() {
 
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "Ürün Fiyatının Gönderi Durumuna Göre Gruplandırılması"
	},
    subtitles: [{
		text: "Toplam Sipariş Tutarı: <?= $geneltoplam?>",
		fontSize: 16
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\" ₺\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>

<body class="body-bg">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- main wrapper start -->
    <div class="horizontal-main-wrapper">
        <!-- main header area start -->
        <div class="mainheader-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="./"><h3>Datafark</h3></a>
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
                                        <a href="./"><i class="ti-dashboard"></i><span>Sipariş Listesi</span></a>
                                        
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
        <!-- header area end -->
        <!-- page title area end -->
        <div class="main-content-inner">
            <div class="container">
                <div class="row">
                <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <!-- start amcharts -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="https://www.amcharts.com/lib/3/ammap.js"></script>
    <script src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>
    <script src="https://www.amcharts.com/lib/3/serial.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- all bar chart -->
    <script src="assets/js/bar-chart.js"></script>
    <!-- all map chart -->
    <script src="assets/js/maps.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>

</html>
