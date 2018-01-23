let mix = require('laravel-mix');
mix.setPublicPath('../');
mix.setResourceRoot('../');
mix.webpackConfig({
    node: {
        fs: "empty"
    },
});

mix.sass('resources/assets/sass/frontend.scss', '../css/frontend.css').options({processCssUrls: false});