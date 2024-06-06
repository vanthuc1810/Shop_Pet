const mix = require('laravel-mix');

mix.sass('resources/scss/app.scss', 'public/css').postCss('resources/css/app.css', 'public/css', []);
