let mix = require('laravel-mix');
mix.setPublicPath('../');
mix.setResourceRoot('../');
mix.webpackConfig({
    node: {
        fs: "empty"
    },
});
mix.styles([
    //JS DÙNG CHUNG CHO FRONEND VÀ BACKEND
    'bower_components/jquery/dist/jquery.min.js',
    'bower_components/bootstrap/dist/js/bootstrap.min.js',
    // 'bower_components/fancybox/dist/jquery.fancybox.min.js',
], '../js/core.common.js')
    .styles([
        'bower_components/bootstrap/dist/css/bootstrap.min.css',
        'bower_components/font-awesome/css/font-awesome.min.css',
        // 'bower_components/Ionicons/css/ionicons.min.css',
        // 'bower_components/fancybox/dist/jquery.fancybox.min.css',
    ], '../css/core.common.css')
    .copy([
        'bower_components/bootstrap/fonts/**',
        'bower_components/font-awesome/fonts/**'
    ], '../fonts')

    .sass('resources/assets/sass/frontend.scss', '../css/frontend.css').options({processCssUrls: false});