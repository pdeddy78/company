<?php

namespace app\assets;
use yii\web\AssetBundle;

/**
 * @author Deddy Pratama <pdeddy78@gmail.com>
 */
class VendorAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'themes/plugins/font-awesome/css/font-awesome.min.css',
        'themes/plugins/simple-line-icons/css/simple-line-icons.css',
        'themes/plugins/owl.carousel/assets/owl.carousel.min.css',
        'themes/plugins/owl.carousel/assets/owl.theme.default.min.css',
        'themes/plugins/magnific-popup/magnific-popup.css'
    ];
    public $js = [
        'themes/plugins/jquery.appear/jquery.appear.js',
        'themes/plugins/jquery.easing/jquery.easing.js',
        'themes/plugins/jquery-cookie/jquery-cookie.js',
        'themes/plugins/common/common.js',
        'themes/plugins/jquery.validation/jquery.validation.js',
        'themes/plugins/jquery.stellar/jquery.stellar.js',
        'themes/plugins/jquery.easy-pie-chart/jquery.easy-pie-chart.js',
        'themes/plugins/jquery.gmap/jquery.gmap.js',
        'themes/plugins/jquery.lazyload/jquery.lazyload.js',
        'themes/plugins/isotope/jquery.isotope.js',
        'themes/plugins/owl.carousel/owl.carousel.js',
        'themes/plugins/magnific-popup/jquery.magnific-popup.js',
        'themes/plugins/vide/vide.js'
    ];
    public $depends = [        
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'yii\web\JqueryAsset',
    ];
}
