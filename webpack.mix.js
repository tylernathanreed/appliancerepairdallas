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

mix.sass('resources/assets/sass/skins/san_marino.scss', 'public/media/css/skins');
mix.sass('resources/assets/sass/skins/royal_blue.scss', 'public/media/css/skins');
mix.sass('resources/assets/sass/skins/piction_blue.scss', 'public/media/css/skins');
mix.sass('resources/assets/sass/skins/curious_blue.scss', 'public/media/css/skins');
mix.sass('resources/assets/sass/skins/chambray.scss', 'public/media/css/skins');
mix.sass('resources/assets/sass/skins/jacksons_purple.scss', 'public/media/css/skins');
mix.sass('resources/assets/sass/skins/true_blue.scss', 'public/media/css/skins');
