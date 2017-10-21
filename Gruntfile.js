module.exports = function(grunt) {


    require('load-grunt-tasks')(grunt);

    grunt.initConfig({

        watch: {

            sass: {
                files: ['css/sass/**/*.{scss,sass}'],
                tasks: ['sass:dist', 'rsync'],
            },

            // js : {
            //     files: ['js/**/*.js'],
            //     tasks: ['jshint'],
            //     options: {
            //         livereload: true,
            //         livereloadOnError: false,
            //         spawn: false
            //     }
            // },

            // other: {
            //     files: ['**/*.php', 'css/*.css'],
            //     options: {
            //         livereload: true,
            //         livereloadOnError: false,
            //         spawn: false
            //     }
            // }
        },

        uglify: {
            options: {
                compress: {
                   drop_console: true
                }
            },
            my_target: {
                files: {
                    'js/scripts.min.js': [
                        'js/lib/jquery-3.2.1.min.js', 
                        'js/lib/conditionizr.min.js', 
                        'js/lib/modernizr-custom.js', 
                        'js/lib/slidr.js', 
                        'js/lib/headroom.js', 
                        'js/scripts.js']
                }
            }
        },

        jshint: {
            all: ['js/**/*.js', '!js/foundation/**/*.js', '!js/vendor/**/*.js']
        },

        sass: {
            dist: {
                files: {
                    'css/style.css': 'css/sass/style.scss'
                }
            },
            options: {
                compass: true,
                //quiet: true,
                style: 'nested',
                require: [ 'susy']
            }
        },

        rsync: {
            options: {
                // args: ["-q"],
                //exclude: [".git*","assets/less","node_modules"],
                recursive: true
            },
            dist: {
                options: {
                    src: ["./css/"],
                    //src: "./css",
                    dest: "/var/www/html/client/eddhostel/wp-content/themes/eddhostel/css/",
                    host: "laventurier@onlinet",
                }
            }
        },

    });

    grunt.registerTask('default', ['watch']);
};