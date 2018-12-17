<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>IntelliJ Shop</title>
        <link href="/template/css/bootstrap.min.css" rel="stylesheet">
        <link href="/template/css/font-awesome.min.css" rel="stylesheet">
        <link href="/template/css/prettyPhoto.css" rel="stylesheet">
        <link href="/template/css/price-range.css" rel="stylesheet">
        <link href="/template/css/animate.css" rel="stylesheet">-->
        <link href="/template/css/main.css" rel="stylesheet">           <!--important
       <link href="/template/css/responsive.css" rel="stylesheet">
        <link href="/template/css/intelliji.css.min.css" rel="stylesheet">-->
        <link href="/template/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="/template/css/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

     <!--   <link href="/template/css/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">-->

  

        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="/template/images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/template/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/template/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/template/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/template/images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

    <body>
        <div class="page-wrapper">


           <!--header-->
                <nav class="navbar navbar-expand-lg  fixed-top bg-dark text-white" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">IntelliJ Shop</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger"  href="/">Главная</a>
            </li>
            <li class="nav-item">
              <li><a class="nav-link js-scroll-trigger" href="/contacts/">Контакты</a></li>
            </li>
            <li class="nav-item">
              <?php if (User::isGuest()): ?>                                        
                                            <li><a class="nav-link js-scroll-trigger" href="/user/login/"><i class="fa fa-lock  "></i> Вход</a></li>
                                        <?php else: ?>
                                            <li><a class="nav-link js-scroll-trigger" href="/cabinet/"><i class="fa fa-user"></i> Аккаунт</a></li>
                                            <li><a class="nav-link js-scroll-trigger" href="/user/logout/"><i class="fa fa-unlock"></i> Выход</a></li>
                                        <?php endif; ?>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/cart"> Корзина 
               (<span id="cart-count"><?php echo Cart::countItems(); ?></span>)
               </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 
    <header id="header" class="masthead text-center text-white d-flex">
      
    <!--/header_top-->

                <div class="header-middle"><!--header-middle-->
                    <div class="container">
                        <div class="row">
                            
                            <div class="col-sm-8">
                                <div class="shop-menu pull-right">
                                    <ul class="nav navbar-nav">
                                        
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/header-middle-->
                <br>
                <br>
                <br>
                <br>
                <br>
                 <br>
                <br>
                <br>
           
           
            </header><!--/header-->