<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo isset($title) ? $title : 'Thế Giới Di Động' ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="public/favicon.png"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic,600,600italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'><link href="public/css/bootstrap.css" rel="stylesheet">
<link href="public/css/bootstrap-responsive.css" rel="stylesheet">
<link href="public/css/style.css" rel="stylesheet">
<link href="public/css/flexslider.css" type="text/css" media="screen" rel="stylesheet"  />
<link href="public/css/jquery.fancybox.css" rel="stylesheet">
<link href="public/css/cloud-zoom.css" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!-- fav -->
<link rel="shortcut icon" href="public/assets/ico/favicon.html">
</head>
<body>
<!-- Header Start -->
<header>
  <div class="headerstrip">
    <div class="container">
      <div class="row">
        <div class="span12">
          <a href="./" class="logo pull-left"><img src="public/img/logo.png" alt="SimpleOne" title="SimpleOne"></a>
          <!-- Top Nav Start -->
          <div class="pull-left">
            <div class="navbar" id="topnav">
              <div class="navbar-inner">
                <ul class="nav" >
                  <li><a class="home active" href="./">Trang Chủ</a>
                  </li>
                  <li><a class="shoppingcart" href="gio-hang.html">Giỏ Hàng</a>
                  </li>
                  <li><a class="checkout" href="don-hang.html">Thanh Toán</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Top Nav End -->
          <div class="pull-right">
            <form class="form-search top-search">
              <input type="text" class="input-medium search-query" placeholder="Tìm kiếm...">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="headerdetails">

      <div class="pull-right">
        <ul class="nav topcart pull-left">
          <li class="dropdown hover carticon ">
            <a href="gio-hang.html" class="dropdown-toggle" > Giỏ Hàng <span class="label label-orange font14"><?php echo cart_number(); ?></span></a>
            
          </li>
        </ul>
      </div>
    </div>
  </div>
</header>
<!-- Header End -->