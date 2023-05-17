var Encore = require('@symfony/webpack-encore');

Encore
// the project directory where compiled assets will be stored
    .setOutputPath('public/build/')
    // the public path used by the web server to access the previous directory
    .setPublicPath('/build')
    .cleanupOutputBeforeBuild()

    // enable source maps during development
    .enableSourceMaps(!Encore.isProduction())
    // uncomment to create hashed filenames (e.g. app.abc123.css)
    // .enableVersioning(Encore.isProduction())

    // Show OS Notifications
    .enableBuildNotifications()

    // uncomment to define the assets of the project
    .addEntry('app', './assets/js/app.js')
    .addStyleEntry('global', './assets/css/global.scss')
    .addEntry('js/homepage', './assets/js/homepage.js')

    // uncomment if you use Sass/SCSS files
    // .enableSassLoader()
    .enableSassLoader(function(sassOptions) {}, {
        resolveUrlLoader: true
    })

    // uncomment for legacy applications that require $/jQuery as a global variable
    .autoProvidejQuery()

;

module.exports = Encore.getWebpackConfig();
