module.exports = function(grunt) {
  grunt.initConfig({
    concat: {
      scripts: {
        src: ['assets/scripts/main.js', 'bower_components/bootstrap/dist/js/bootstrap.js'],
        dest: 'js/main.js'
      }
    },
    uglify: {
      styles: {
        src: 'css/main.css',
        dest: 'css/main.min.css'
      },
      scripts: {
        src: 'js/main.js',
        dest: 'js/main.min.js'
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
    }
  });

  // These plugins provide necessary tasks.
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-less');

  // Default task.
  grunt.registerTask('default', ['less:development','concat']);

};
