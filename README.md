# wp-starter

To install follow the instructions:

1. Download code from github `git clone https://github.com/dacmail/wp-starter.git <your-project-name>`
1. Navigate to your project directory `cd <your-project-name>`
2. Install Grunt and Bower `npm install -g grunt bower`
3. Run `npm install`
4. Run `bower install`

# Grunt commands

* `grunt` — Compile the files in your assets directory and put it in js/ and css/ folders.
* `grunt prepare` — Move vendor assets from bower_components to assets folder (useful after `bower update`).
* `grunt watch` — Compile assets when file changes are made
* `grunt build` — Compile/minimize assets and put it in js/ and css/ folders.

# Development mode

* Change WP_DEVELOPMENT_MODE to true in `inc/actions.php` to use files in assets folder without compiling.
