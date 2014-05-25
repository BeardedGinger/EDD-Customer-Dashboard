'use strict';
module.exports = function(grunt) {

    require('load-grunt-tasks')(grunt);

    grunt.initConfig({

        // watch our project for changes
        watch: {
            compass: {
				files: ['public/assets/**/*.{scss,sass}'],
                tasks: ['compass']
            },
            livereload: {
                options: { livereload: true },
                files: ['public/scss/**/*.{scss,sass}','public/style.css', '**/*.html', '**/*.php', 'images/**/*.{png,jpg,jpeg,gif,webp,svg}']
            }
        },

        compass: {
     		dist: {
                options: {
                    config: 'config.rb',
                    force: true
                }
            }
        }

	});

    // register task
    grunt.registerTask('default', ['watch']);

};