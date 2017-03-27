module.exports = function(grunt) {
  grunt.initConfig({
    concat: {
      scripts: {
        src: ['assets/scripts/main.js', 'assets/scripts/*.js'],
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
        tasks: ['sass:development']
      }
    },
    sass: {
      development: {
        files: {
          "css/main.css": "assets/styles/main.scss"
        }
      }
    },
  });

  // These plugins provide necessary tasks.
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');

  // Default task.
  grunt.registerTask('default', ['sass','concat']);
  grunt.registerTask('build', ['sass','concat', 'uglify', 'cssmin']);

};
