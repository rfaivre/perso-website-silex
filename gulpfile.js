                                                                                                    // Requis
var gulp = require('gulp');

// Include plugins
var plugins = require('gulp-load-plugins')(); // tous les plugins de package.json

var src = './ressources';
var dist = './web/ressources'

// Tâche "build" = LESS + autoprefixer + CSScomb + beautify (source -> destination)
gulp.task('css', function () {
  return gulp.src(src + '/css/main.scss')
    .pipe(plugins.sass())
    .pipe(plugins.csscomb())
    .pipe(plugins.cssbeautify({indent: '  '}))
    .pipe(plugins.autoprefixer())
    .pipe(gulp.dest(dist + '/css/'));
});

gulp.task('js', function() {
  return gulp.src(src + '/js/main.js')
    .pipe(plugins.concat('main.js'))
    .pipe(gulp.dest(dist + '/js/'));
});


// Tâche "minify" = minification CSS (dist -> dist)
gulp.task('minify', function () {
  return gulp.src(dist + '/css/main.css')
    .pipe(plugins.csso())
    .pipe(plugins.rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest(dist + '/css/'));
});

// Tâche "build"
gulp.task('build', ['css']);

// Tâche "prod" = Build + minify
gulp.task('prod', ['build',  'minify']);

// Tâche "watch" = je surveille *less
gulp.task('watch', function () {
  gulp.watch(src + '/css/*.scss', ['build']);
  gulp.watch(src + '/js/*.js', ['js']);

});

// Tâche par défaut
gulp.task('default', ['build']);