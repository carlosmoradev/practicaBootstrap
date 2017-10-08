// dependencias
const   gulp    = require('gulp'),
        concat  = require('gulp-concat'),
        // uglify  = require('gulp-uglify'),
        minifycss = require('gulp-minify-css'),
        minifyhtml = require('gulp-minify-html');

        // se realiza el llamado de todas las dependencias en una misma funcion
gulp.task('default',
    ['fusioncss',
    // 'uglify',
    'minifyhtml'
    // 'minifycss'
    ]
);
gulp.task('fusioncss', function(){
    
    return gulp.src(['source/css/desktop.css', 'source/css/mobile.css'])
        .pipe(concat('style.css'))
        .pipe(minifycss())
        .pipe(gulp.dest('css/'))
});

gulp.task('minifyhtml', function(){
    return gulp.src('source/index.html')
        .pipe(minifyhtml(''))
        .pipe(gulp.dest('site/'))
});