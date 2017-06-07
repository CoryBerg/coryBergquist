# README #

This README would normally document whatever steps are necessary to get your application up and running.

### What is this repository for? ###

* Geekhive Base WordPress Theme
* 1.0.0

### Frameworks ###
* [Bourbon](http://bourbon.io/) - Sass Mixin Library
* [Neat](http://neat.bourbon.io/) - Sass Grid Framework
* [Bitters](http://bitters.bourbon.io/) - Scaffold styles, variables and structure for Bourbon projects.
* [Refills](http://refills.bourbon.io/) - Sass Pattern Library (Each of these are added to the project on a need basis)

### How do I get set up? ###

* The theme contains a basic gulp script that minifies bundles your js, scss(sass), and compresses your images.
* navigate to `wp-contents/themes/geekhive-wp-theme`
* rename geekhive-wp-theme to current project name
* edit style.css and rename the project name in the project name
* replace screenshot.png with customer image
* `npm install -g gulp-cli` - install gulp globally [Gulp Docs](http://gulpjs.com/)
* `npm install`
* edit gulpfile.js on line 25 and define your local path - `var projectURL = 'geekhive.dev:8888'; // Project URL. Could be something like localhost:8888.`
* `gulp` (default build) - this will fire up a localhost:3000 watcher / browswersync (unless configured differently)

### Important Wordpress Documents / Resources ###

* [WP Codex](https://codex.wordpress.org/)
* [WP Query - Codex](https://codex.wordpress.org/Class_Reference/WP_Query)
* [WP Themes Handbook](https://developer.wordpress.org/themes/)
* [WP Template Heierarchy](https://wphierarchy.com/)
* [Advanced Custom Fields](https://www.advancedcustomfields.com/)
* [Redux Options Framework](https://reduxframework.com/)

### Who do I talk to? ###

Drew Garman