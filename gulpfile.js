// dependencias
const   gulp    = require('gulp'),
        concat  = require('gulp-concat'),
        // uglify  = require('gulp-uglify'),
        minifycss = require('gulp-minify-css'),
        minifyhtml = require('gulp-minify-html');

        // se realiza el llamado de todas las dependencias en una misma funcion
gulp.task('default',
    ['concat',
    // 'uglify',
    'minifycss',
    'minifyhtml'
    ]
);
gulp.task('concat', function(){
    return gulp.src(source)
});
