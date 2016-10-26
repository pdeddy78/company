<?php
use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;
use yii\widgets\Spaceless;
use yii\web\View;
use app\assets\VendorAsset;
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="pdeddy78" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title><?=Html::encode($this->title); ?> | <?=Yii::$app->name?> </title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=$this->theme->getUrl('img/favicon.ico')?>" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?=$this->theme->getUrl('img/apple-touch-icon.png')?>">
    <?php $this->head();?>
    <?= Html::csrfMetaTags() ?>
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">    
    <?php VendorAsset::register($this); ?>
    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?=$this->theme->getUrl('css/theme.css')?>">
    <link rel="stylesheet" href="<?=$this->theme->getUrl('css/theme-elements.css')?>">
    <link rel="stylesheet" href="<?=$this->theme->getUrl('css/theme-blog.css')?>">
    <link rel="stylesheet" href="<?=$this->theme->getUrl('css/theme-shop.css')?>">
    <link rel="stylesheet" href="<?=$this->theme->getUrl('css/theme-animate.css')?>">
    <!-- Skin CSS -->
    <link rel="stylesheet" href="<?=$this->theme->getUrl('css/skins/default.css')?>">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?=$this->theme->getUrl('css/custom.css')?>">
    <!-- Head Libs -->
    <script src="<?=$this->theme->getUrl('plugins/modernizr/modernizr.js')?>"></script>
</head>
<body>    
    <?php $this->beginBody() ?>
    <?php Spaceless::begin(); ?>
    <div class="body">
        <header id="header" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}'>
            <div class="header-body">
                <div class="header-container container">
                    <div class="header-row">
                        <div class="header-column">
                            <div class="header-logo">
                                <a href="<?=Yii::$app->getUrlManager()->createUrl(['site/index'])?>">
                                    <img alt="Porto" width="111" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="<?=$this->theme->getUrl('img/logo.png')?>">
                                </a>
                            </div>
                        </div>
                        <div class="header-column">
                            <div class="header-row">
                                <div class="header-search hidden-xs">
                                    <form id="searchForm" action="page-search-results.php" method="get">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
                                            <span class="input-group-btn">
                                                    <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                                <nav class="header-nav-top">
                                    <ul class="nav nav-pills">
                                        <li class="hidden-xs">
                                            <a href="<?=Yii::$app->getUrlManager()->createUrl(['site/about'])?>"><i class="fa fa-angle-right"></i> Tentang Kami</a>
                                        </li>
                                        <li class="hidden-xs">
                                            <a href="contact-us.php"><i class="fa fa-angle-right"></i> Hubungi Kami</a>
                                        </li>
                                        <li>
                                            <span class="ws-nowrap"><i class="fa fa-phone"></i> (+62) 896-8888-8913</span>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header-row">
                                <div class="header-nav">
                                    <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                    <ul class="header-social-icons social-icons hidden-xs">
                                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                    <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
                                        <nav>
                                            <ul class="nav nav-pills" id="mainNav">
                                                <li><a href="<?=Yii::$app->getUrlManager()->createUrl(['site/index'])?>">Home</a></li>
                                                <li><a href="page-team.php">Team</a></li>
                                                <li><a href="page-services.php">Services</a></li>
                                                <li class="dropdown">
                                                    <a class="dropdown-toggle" href="#">
                                                            Portfolio
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                            <li><a href="portfolio-single-project.php">Single Project</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact-us.php">Hubungi Kami</a></li>
                                                <li><a href="sitemap.php">Sitemap</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div role="main" class="main">
            <!-- except Landing Page -->
            <?php if(Yii::$app->controller->action->id != 'index' ) { ?>
            <section class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1><?=$this->title?></h1>
                        </div>
                    </div>
                </div>
            </section>
            <?php } ?>
            <?php echo $content; ?>
        </div>
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-ribbon">
                        <span>Get in Touch</span>
                    </div>
                    <div class="col-md-3">
                        <div class="newsletter">
                            <h4>Newsletter</h4>
                            <p>Tetap selalu mengikuti perkembangan fitur produk dan teknologi terbaru. Masukkan e-mail Anda dan berlangganan newsletter kami.</p>

                            <div class="alert alert-success hidden" id="newsletterSuccess">
                                <strong>Success!</strong> You've been added to our email list.
                            </div>

                            <div class="alert alert-danger hidden" id="newsletterError"></div>

                            <form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
                                <div class="input-group">
                                    <input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit">Go!</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h4>Tweet Terakhir</h4>
                        <div id="tweet" class="twitter" data-plugin-tweets data-plugin-options='{"username": "", "count": 2}'>
                            <p>Please wait...</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-details">
                            <h4>Hubungi Kami</h4>
                            <ul class="contact">
                                <li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong> Cisereh bubulak, Kec. Curug, Kab. Tangerang</p></li>
                                <li><p><i class="fa fa-phone"></i> <strong>Phone:</strong> <?=Yii::$app->params['adminPhone']?></p></li>
                                <li><p><i class="fa fa-envelope"></i> <strong>Email: </strong> <?=  Html::mailto(Yii::$app->params['adminEmail'], Yii::$app->params['adminEmail'])?></p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <h4>Ikuti Kami</h4>
                        <ul class="social-icons">
                            <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-1">
                            <a href="index.php" class="logo">
                                <img alt="Porto Website Template" class="img-responsive" src="<?=$this->theme->getUrl('img/logo-footer.png')?>">
                            </a>
                        </div>
                        <div class="col-md-7">
                            <p>© Copyright 2016. All Rights Reserved.</p>
                        </div>
                        <div class="col-md-4">
                            <nav id="sub-menu">
                                <ul>
                                    <li><a href="page-faq.php">FAQ's</a></li>
                                    <li><a href="sitemap.php">Sitemap</a></li>
                                    <li><a href="contact-us.php">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>    
    <!-- Theme Custom -->
    <script src="<?=$this->theme->getUrl('js/custom.js')?>"></script>
    <!-- Theme Base, Components and Settings -->
    <?php
        $this->registerJsFile($this->theme->getUrl('js/theme.js'), [
            'depends' => [VendorAsset::className()]
        ]);
        $this->registerJsFile($this->theme->getUrl('js/theme.init.js'), [
            'depends' => [VendorAsset::className()]
        ]);
    ?>
    <?php $this->registerJs("(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-76850300-1', 'auto');
  ga('send', 'pageview');", View::POS_END, 'dp-analytic'); ?>  
<?php Spaceless::end(); ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage(); ?>