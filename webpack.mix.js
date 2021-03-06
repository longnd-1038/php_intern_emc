const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js/app.js')
    .js('resources/js/logout.js', 'public/js/logout.js')
    .js('resources/js/scroll.js', 'public/js/scroll.js')
    .js('resources/js/cart.js', 'public/js/cart.js')
    .js('resources/js/orderByProducts.js', 'public/js/orderByProducts.js')
    .js('resources/js/detailOrder.js', 'public/js/detailOrder.js')
    .js('resources/js/subiz_chat.js', 'public/js/subiz_chat.js')
    .js('resources/js/filter_product.js', 'public/js/filter_product.js')
    .js('resources/js/order_charts.js', 'public/js/order_charts.js')
    .sass('resources/sass/app.scss', 'public/css/app.css')
    .sass('resources/sass/home.scss', 'public/css/home.css')
    .sass('resources/sass/products.scss', 'public/css/products.css')
    .sass('resources/sass/cart.scss', 'public/css/cart.css')
    .sass('resources/sass/account.scss', 'public/css/account.css')
    .sass('resources/sass/shop.scss', 'public/css/shop.css')
    .sass('resources/sass/detail_product.scss', 'public/css/detail_product.css')
    .sass('resources/sass/adminUser.scss', 'public/css/adminUser.css');
