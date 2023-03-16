const { src, dest, watch } = require('gulp');
const sass = require('gulp-sass')(require('sass'));


function styles(){
return src('src/scss/main.scss')
.pipe(sass({outputStyle: 'expanded'}))
.pipe(dest('src/css'))
}

function watching() {
    watch(['src/scss/**/*.scss'], styles);
} 

exports.styles = styles;
exports.watching = watching;