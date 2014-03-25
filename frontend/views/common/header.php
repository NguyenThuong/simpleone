<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo isset($title) ? $title : 'Shop Simple One' ?></title>
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
                  <li><a class="home active" href="./">Home</a>
                  </li>
                  <li><a class="myaccount" href="#">My Account</a>
                  </li>
                  <li><a class="shoppingcart" href="#">Shopping Cart</a>
                  </li>
                  <li><a class="checkout" href="#">CheckOut</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Top Nav End -->
          <div class="pull-right">
            <form class="form-search top-search">
              <input type="text" class="input-medium search-query" placeholder="Search Here…">
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
            <a href="#" class="dropdown-toggle" > Shopping Cart <span class="label label-orange font14">1 item(s)</span> - $589.50 <b class="caret"></b></a>
            <ul class="dropdown-menu topcartopen ">
              <li>
                <table>
                  <tbody>
                    <tr>
                      <td class="image"><a href="product.html"><img width="50" height="50" src="public/img/prodcut-40x40.jpg" alt="product" title="product"></a></td>
                      <td class="name"><a href="product.html">MacBook</a></td>
                      <td class="quantity">x&nbsp;1</td>
                      <td class="total">$589.50</td>
                      <td class="remove"><i class="icon-remove"></i></td>
                    </tr>
                    <tr>
                      <td class="image"><a href="product.html"><img width="50" height="50" src="public/img/prodcut-40x40.jpg" alt="product" title="product"></a></td>
                      <td class="name"><a href="product.html">MacBook</a></td>
                      <td class="quantity">x&nbsp;1</td>
                      <td class="total">$589.50</td>
                      <td class="remove"><i class="icon-remove "></i></td>
                    </tr>
                  </tbody>
                </table>
                <table>
                  <tbody>
                    <tr>
                      <td class="textright"><b>Sub-Total:</b></td>
                      <td class="textright">$500.00</td>
                    </tr>
                    <tr>
                      <td class="textright"><b>Eco Tax (-2.00):</b></td>
                      <td class="textright">$2.00</td>
                    </tr>
                    <tr>
                      <td class="textright"><b>VAT (17.5%):</b></td>
                      <td class="textright">$87.50</td>
                    </tr>
                    <tr>
                      <td class="textright"><b>Total:</b></td>
                      <td class="textright">$589.50</td>
                    </tr>
                  </tbody>
                </table>
                <div class="well pull-right buttonwrap">
                  <a class="btn btn-orange" href="#">View Cart</a>
                  <a class="btn btn-orange" href="#">Checkout</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</header>
<!-- Header End -->