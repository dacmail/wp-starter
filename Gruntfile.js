module.exports = function(grunt) {
  grunt.initConfig({
    concat: {
      scripts: {
        src: ['assets/scripts/main.js', 'assets/scripts/bootstrap.js'],
        dest: 'js/main.js'
      }
    },
    uglify: {
      scripts: {
        src: 'js/main.js',
        dest: 'js/main.js'
      }
    },
    cssmin: {
      target: {
        files: {
          'css/main.css': ['css/main.css']
        }
      }
    },
    watch: {
      scripts: {
        files: 'assets/scripts/*',
        tasks: ['concat:scripts']
      },
      styles: {
        files: 'assets/styles/*',
        tasks: ['less:development']
      }
    },
    less: {
      development: {
        files: {
          "css/main.css": "assets/styles/main.less"
        }
      },
      production: {
        options: {
          plugins: [
            new (require('less-plugin-autoprefix'))({browsers: ["last 2 versions"]})
          ]
        },
        files: {
          "css/main.css": "assets/styles/main.less"
        }
      }
    },
    copy: {
      fonts: {
        files: [
            {expand: true, cwd: 'bower_components/font-awesome/fonts/', src: ['**'], dest: 'assets/fonts/'},
            {expand: true, cwd: 'bower_components/bootstrap/dist/fonts/', src: ['*'], dest: 'assets/fonts/'},
            {expand: true, cwd: 'bower_components/font-awesome/fonts/', src: ['**'], dest: 'fonts/'},
            {expand: true, cwd: 'bower_components/bootstrap/dist/fonts/', src: ['*'], dest: 'fonts/'},
          ],
      },
      css: {
        files: [
            {expand: true, cwd: 'bower_components/font-awesome/css/', filter: 'isFile', src: ['font-awesome.css'], dest: 'assets/styles/'},
            {expand: true, cwd: 'bower_components/bootstrap/dist/css/', filter: 'isFile', src: ['bootstrap.css'], dest: 'assets/styles/'},
          ],
      },
      js: {
        files: [
            {expand: true, cwd: 'bower_components/bootstrap/dist/js/', filter: 'isFile', src: ['bootstrap.js'], dest: 'assets/scripts/'},
          ],
      },
    },
  });

  // These plugins provide necessary tasks.
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-less');

  // Default task.
  grunt.registerTask('prepare', ['copy']);
  grunt.registerTask('default', ['less:development','concat']);
  grunt.registerTask('build', ['less:production','concat', 'uglify', 'cssmin']);

};
