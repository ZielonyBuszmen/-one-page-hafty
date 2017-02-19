/**
 * System configuration for Angular samples
 * Adjust as necessary for your application needs.
 */
(function (global) {
    System.config({

        // map tells the System loader where to look for things
        map: {
            // our app is within the app folder
            app: 'app_angular2',
            // angular bundles
            '@angular/core': 'js/angular2_vendor/@angular/core/bundles/core.umd.js',
            '@angular/common': 'js/angular2_vendor/@angular/common/bundles/common.umd.js',
            '@angular/compiler': 'js/angular2_vendor/@angular/compiler/bundles/compiler.umd.js',
            '@angular/platform-browser': 'js/angular2_vendor/@angular/platform-browser/bundles/platform-browser.umd.js',
            '@angular/platform-browser-dynamic': 'js/angular2_vendor/@angular/platform-browser-dynamic/bundles/platform-browser-dynamic.umd.js',
            '@angular/http': 'js/angular2_vendor/@angular/http/bundles/http.umd.js',
            '@angular/router': '@angular/router/bundles/router.umd.js',
            '@angular/forms': '@angular/forms/bundles/forms.umd.js',
            // other libraries
            'rxjs':                       'js/angular2_vendor/rxjs',
            'angular2-in-memory-web-api': 'js/angular2_vendor/angular2-in-memory-web-api',
        },
        // packages tells the System loader how to load when no filename and/or no extension
        packages: {
            app: {
                main: './main.js',
                defaultExtension: 'js'
            },
            rxjs: {
                defaultExtension: 'js'
            },
            'angular2-in-memory-web-api': {
                main: './index.js',
                defaultExtension: 'js'
            }
        }
    });
})(this);