const
gulp = require('gulp'),
post= require('gulp-postcss'),
responsiveFont = require('postcss-responsive-font'),
simpleVars = require('postcss-simple-vars'),
nested = require ('postcss-nested'),
grid = require ('postcss-grid');

let postCssPlugins = [
responsiveFont,
simpleVars,
nested,
grid
];


gulp.task ('styles', () =>
gulp.src('./src/*.css').pipe(post(postCssPlugins))
.pipe(gulp.dest('./site/css'))
);

gulp.task('default', () =>
gulp.watch('./src/*.css',['styles'])
);