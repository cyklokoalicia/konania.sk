var gulp = require('gulp');
var shell = require("gulp-shell");
var elixir = require('laravel-elixir');
var gutil = require('gulp-util');
var ftp = require( 'vinyl-ftp' );
var concat = require('gulp-concat');
var Task = elixir.Task;

var cesty = [
    './public/assets/js/test.js',
    './public/assets/css/test.css'
];
var cestyRemote = [
    'web/public/assets/js',
    'web/public/assets/css'
];

/** Configuration **/
var user = 'ftp.konania.sk';
var password ='RBRXwXhfJq';
var host = 'konania.sk';
var port = 21;
//var localFiilesGlob = ['./public/assets/css/**'];
var localFilesGlob = [
    './*',
    './**/*'
];
var remoteFolder = '/web'

// helper function to build an FTP connection based on our configuration
function getFtpConnection() {
    return ftp.create({
        host: host,
        port: port,
        user: user,
        password: password,
        parallel: 5,
        log: gutil.log
    });
}


elixir.extend('upload', function()
{

    /*new Task('upload',function(message){
        return gulp.src(cesty)
            .pipe(ftp({
                host: 'konania.sk',
                user: 'ftp.konania.sk',
                pass: 'RBRXwXhfJq',
                remotePath: cestyRemote
            }))
            .pipe(gutil.noop());

    }).watch('./public/!**');*/
});
elixir.extend('upload', function()
{

    gutil.log("AAA");
    new Task('upload',function(message)
    {
        gulp.task('upload', function() {

            var conn = getFtpConnection();

            return gulp.src(localFilesGlob, { base: '.', buffer: false })
                .pipe( conn.newer( remoteFolder ) ) // only upload newer files
                .pipe( conn.dest( remoteFolder ) );
        });
    }).watch(localFilesGlob);

});
elixir(function(mix)
{
   /* elixir.config.sourcemaps = false;*/
    /*mix.styles([
        //'bootstrap-css/css/bootstrap.min.css',
        'leaflet/dist/leaflet.css',
        'Slidebars/dist/slidebars.min.css',
        'css/styles-dev.css',
        'css/styles-global.css',
        'css/styles-leaflet.css',
        'css/styles-nav.css',
        'css/styles-media-queries.css',
        'Materialize/dist/css/materialize.min.css',
        'autocomplete.js/dist/production/autocomplete.css',
        'leaflet.markercluster/dist/MarkerCluster.Default.css',
        'leaflet.markercluster/dist/MarkerCluster.css',
        'leaflet-draw/dist/leaflet.draw.css'
    ], 'public/assets/css/styles.css','resources/assets');
    mix.scripts([
        'jquery/dist/jquery.min.js',
       // 'bootstrap-css/js/bootstrap.min.js',
        'leaflet/dist/leaflet.js',
        'Slidebars/dist/slidebars.min.js',
        'Materialize/dist/js/materialize.min.js',
        'leaflet.markercluster/dist/leaflet.markercluster.js',
        'leaflet-draw/dist/leaflet.draw.js',
        'js/main-dev.js'
    ],'public/assets/js/main.js','resources/assets');*/
    mix.upload();

});
