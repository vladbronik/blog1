var elixir = require('laravel-elixir');

require('laravel-elixir-livereload');

elixir(function(mix) {
    mix.sass("app.scss");
    mix.browserify('app.js');
    mix.version(['css/app.css', 'js/app.js']);

});


elixir(function(mix) {
    mix.livereload();
})

gulp.task('watch', function() {
    gulp.watch('resources/assets/sass/*.scss', ['sass'])
});

elixir(function(mix) {
    mix.browserSync();
});

