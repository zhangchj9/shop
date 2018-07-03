
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

require('./components/SelectDistrict');
require('./components/UserAddressesCreateAndEdit');

require('./home/index');
require('./home/comment');

require('prismjs/prism')
require('prismjs/components/prism-markup-templating')
require('prismjs/components/prism-markup')
require('prismjs/components/prism-css')
require('prismjs/components/prism-clike')
require('prismjs/components/prism-javascript')
require('prismjs/components/prism-docker')
require('prismjs/components/prism-git')
require('prismjs/components/prism-json')
require('prismjs/components/prism-less')
require('prismjs/components/prism-markdown')
require('prismjs/components/prism-nginx')
require('prismjs/components/prism-php')
require('prismjs/components/prism-php-extras')
require('prismjs/components/prism-scss')
require('prismjs/components/prism-sql')
require('prismjs/components/prism-typescript')
require('prismjs/components/prism-yaml')
require('prismjs/components/prism-bash')

require('prismjs/plugins/line-numbers/prism-line-numbers')
require('prismjs/plugins/toolbar/prism-toolbar')
require('prismjs/plugins/previewers/prism-previewers')
require('prismjs/plugins/autoloader/prism-autoloader')
require('prismjs/plugins/command-line/prism-command-line')
require('prismjs/plugins/normalize-whitespace/prism-normalize-whitespace')
require('prismjs/plugins/keep-markup/prism-keep-markup')
require('prismjs/plugins/show-language/prism-show-language')
require('prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard')

require('pace/pace');

const app = new Vue({
    el: '#app'
});
