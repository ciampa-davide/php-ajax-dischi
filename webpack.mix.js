let mix = require('laravel-mix');

mix
.js('src/app.js', 'dist').vue({ version: 2 })
.sass('src/app.scss', 'css');
