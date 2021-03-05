let mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

build_js = [
    {
        from: 'resources/js/pages/index.js',
        to: 'public/js/pages'
    },
    {
        from: 'resources/js/pages/product.js',
        to: 'public/js/pages'
    },
];

build_scss = [
    {
        from: 'resources/sass/pages/index.scss',
        to: 'public/css/pages'
    },
    {
        from: 'resources/sass/pages/product.scss',
        to: 'public/css/pages'
    }
];

build_js.map(function (file) {
    mix.js(file.from, file.to);
});

build_scss.map(function (file) {
    mix.sass(file.from, file.to);
});

mix.options({
        processCssUrls: false
    })
    .autoload({
        jquery: ['$', 'window.jQuery', 'jQuery'],
    });

mix.webpackConfig({
    resolve: {
        alias: {
            'jquery': path.join(__dirname, 'node_modules/jquery/src/jquery')
        }
    }
});