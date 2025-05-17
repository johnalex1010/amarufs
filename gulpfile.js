const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const cleanCSS = require("gulp-clean-css");
const uglify = require("gulp-uglify");
const rename = require("gulp-rename");
const path = require("path");

// Ruta de archivos
const paths = {
	styles: {
		src: "assets/scss/**/*.scss",
		dest: "assets/styles",
	},
	scripts: {
		src: "assets/js/dev/**/*.js",
		dest: "assets/js/dist",
	},
};

// Minificar SCSS -> CSS por archivo
function styles() {
	return gulp
		.src(paths.styles.src, { base: "assets/scss" })
		.pipe(sass().on("error", sass.logError))
		.pipe(cleanCSS())
		.pipe(
			rename(function (path) {
				path.basename += ".min";
				path.extname = ".css";
			}),
		)
		.pipe(gulp.dest(paths.styles.dest));
}

// Minificar cada JS individualmente
function scripts() {
	return gulp
		.src(paths.scripts.src, { base: "assets/js/dev" })
		.pipe(uglify())
		.pipe(
			rename(function (path) {
				path.basename += ".min";
			}),
		)
		.pipe(gulp.dest(paths.scripts.dest));
}

// Observar cambios
function watch() {
	gulp.watch(paths.styles.src, styles);
	gulp.watch(paths.scripts.src, scripts);
}

exports.styles = styles;
exports.scripts = scripts;
exports.watch = watch;
exports.default = gulp.series(styles, scripts, watch);

// const gulp = require("gulp"); // Solo una vez al inicio
const zip = require("gulp-zip");

// Tarea para comprimir el proyecto
gulp.task("zip-project", function () {
	return gulp
		.src(
			[
				"./**/*",
				"!./node_modules/**",
				"!./.git/**",
				"!./scss/**",
				"!./gulpfile.js",
				"!./package-lock.json",
				"!./*.zip",
			],
			{ dot: true },
		)
		.pipe(zip("backup.zip"))
		.pipe(gulp.dest("./dist"));
});
