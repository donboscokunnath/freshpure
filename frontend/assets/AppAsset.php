<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle {

        public $basePath = '@webroot';
        public $baseUrl = '@web';
        public $css = [
            'https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap',
            'https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet',
            'https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap',
            'css/open-iconic-bootstrap.min.css',
            'css/animate.css',
            'css/owl.carousel.min.css',
            'css/owl.theme.default.min.css',
            'css/magnific-popup.css',
            'css/aos.css',
            'css/ionicons.min.css',
            'css/bootstrap-datepicker.css',
            'css/jquery.timepicker.css',
            'css/flaticon.css',
            'css/icomoon.css',
            'css/style.css'
        ];
        public $js = [
            // 'js/jquery.min.js',
            // 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',
            'js/jquery-migrate-3.0.1.min.js',
            'js/popper.min.js',
            'js/bootstrap.min.js',
            'js/jquery.easing.1.3.js',
            'js/jquery.waypoints.min.js',
            'js/jquery.stellar.min.js',
            'js/owl.carousel.min.js',
            'js/jquery.magnific-popup.min.js',
            'js/aos.js',
            'js/jquery.animateNumber.min.js',
            'js/bootstrap-datepicker.js',
            'js/scrollax.min.js',
            'https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false',
            // 'js/google-map.js',
            'js/main.js',


        ];
        public $depends = [
              // 'yii\jui\JuiAsset',
            'yii\web\YiiAsset',
            // 'yii\bootstrap\BootstrapAsset',
        ];

}
