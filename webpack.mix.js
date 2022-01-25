const mix = require('laravel-mix');
mix.disableNotifications();

const folder = {
    src: "resources/", // source files
    dist: "public/", // build files
    dist_assets: "public/assets/" //build assets files
};

// mix.js('resources/vue/app.js', 'public/js')
//     .vue();

// copy all CSS
    var out = folder.dist_assets + "css";
    mix.copyDirectory(folder.src + "css", out);

// copy all images 
    var out = folder.dist_assets + "img";
    mix.copyDirectory(folder.src + "img", out);

// copy all Js
    var out = folder.dist_assets + "js";
    mix.copyDirectory(folder.src + "js", out);

// copy all Sass 
    var out = folder.dist_assets + "sass";
    mix.copyDirectory(folder.src + "sass", out);

// copy all WebFonts 
    var out = folder.dist_assets + "webfonts";
    mix.copyDirectory(folder.src + "webfonts", out);