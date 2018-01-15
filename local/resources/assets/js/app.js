
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

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

// (function (factory) {
//     /* global define */
//     if (typeof define === 'function' && define.amd) {
//         // AMD. Register as an anonymous module.
//         define(['jquery'], factory);
//     } else {
//         // Browser globals: jQuery
//         factory(window.jQuery);
//     }
// }(function ($){
//     // template, editor
//     var tmpl = $.summernote.renderer.getTemplate();
//     // add plugin
//     $.summernote.addPlugin({
//         name: 'genixcms', // name of plugin
//         buttons: { // buttons
//             readmore: function () {
//                 return tmpl.iconButton('fa fa-long-arrow-right', {
//                     event: 'readmore',
//                     title: 'Read more',
//                     hide: false
//                 });
//             },
//             elfinder: function () {
//                 return tmpl.iconButton('fa fa-list-alt', {
//                     event: 'elfinder',
//                     title: 'File Manager',
//                     hide: false
//                 });
//             },
//         },
//
//         events: { // events
//             readmore: function (event, editor, layoutInfo) {
//                 layoutInfo.holder().summernote("insertText", "[[--readmore--]]");
//             },
//             elfinder: function (event, editor, layoutInfo) {
//                 elfinderDialog();
//             },
//
//         }
//     });
// }));



$(document).ready(function() {
    $('.summernote').summernote({
        height:150,
        codemirror:{
            theme:'monokai',
            lineWrapping:true
        },
        // toolbar: [
        //     ['style', ['style']],
        //     ['style', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
        //     ['fontname', ['fontname']],
        //     ['fontsize', ['fontsize']],
        //     ['color', ['color']],
        //     ['para', ['ul', 'ol', 'paragraph']],
        //     ['height', ['height']],
        //     ['table', ['table']],
        //     ['insert', ['link', 'picture', 'video', 'hr', 'readmore']],
        //     ['genixcms', ['elfinder']],
        //     ['view', ['fullscreen', 'codeview']],
        //     ['help', ['help']]
        // ],
        // onImageUpload: function(files, editor, welEditable) {
        //     sendFile(files[0],editor,welEditable);
        // }
    });
});
