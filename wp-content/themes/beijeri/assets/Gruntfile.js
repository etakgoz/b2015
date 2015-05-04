module.exports = function(grunt) {

  grunt.initConfig({

    distFolder: 'dist',

    pkg: grunt.file.readJSON('package.json'),

    clean: ["dist"],


    concat: {
      options: {
        separator: ';'
      },

      dist: {

        src: [
          'plugins/jquery/jquery-2.1.0.min.js',
          'plugins/bootstrap/js/bootstrap.min.js',
          'plugins/rs-plugin/js/jquery.themepunch.tools.min.js',
          'plugins/rs-plugin/js/jquery.themepunch.revolution.min.js',
          'plugins/jquery.appear.js',
          //'plugins/retina.min.js',
          'plugins/stellar.min.js',
          'plugins/sticky.min.js',
          'plugins/owl-carousel/owl.carousel.min.js',
          'plugins/isotope/isotope.pkgd.min.js',
          'plugins/isotope/imagesloaded.pkgd.min.js',
          'js/script.js'
        ],

        dest: '<%= distFolder %>/js/script.js'

      }
    },


    less: {
        main: {
          options: {
            compress: true,
            yuicompress: true
          },
          files: {
            '<%= distFolder %>/css/main.css': 'css/main.less'
          }
      }
    },


    cssmin: {
      minify: {
        expand: true,
        cwd: '<%= distFolder %>/css/',
        src: ['*.css', '!*.min.css'],
        dest: '<%= distFolder %>/css/',
        ext: '.min.css'
      },

    },

    uglify: {
      my_target: {
        files: {
          '<%= distFolder %>/js/script.min.js': ['<%= distFolder %>/js/script.js']
        }
      }
    },

    watch: {
      scripts: {
        files: ['css/*.css', 'css/*.less'],
        tasks: ['less:main'],
        options: {
          interrupt: true,
          spawn: false,
        },
      },
    }

  });



  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');


  grunt.registerTask('build', ['clean', 'concat', 'less', 'cssmin', 'uglify']);
};