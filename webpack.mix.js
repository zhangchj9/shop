let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Laravel Mix 是一款前端任务自动化管理工具，使用了工作流的模式对制定好的任务依次执行。
 | Mix 提供了简洁流畅的 API，能够为 Laravel 应用定义 Webpack 编译任务。
 | Mix 支持许多常见的 CSS 与 JavaScript 预处理器，通过简单的调用便可轻松地管理前端资源。
 | 其中，".version()"，使 Mix 每次生成的静态文件后面加上一个类似版本号的参数，避免浏览器缓存。 
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .version(); 
