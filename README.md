# b5st – A Bootstrap 5 Starter Theme, for WordPress

*Version 1.3.2*

[https://github.com/SimonPadbury/b5st](https://github.com/SimonPadbury/b5st)

------------------

> b5st is a simple, Gutenberg-compatible WordPress starter theme loaded with Bootstrap 5 and Bootstrap Icons — using node-sass for preprocessing its SCSS into CSS.

## Basic features

* [UNLICENCE](http://unlicense.org) (open source).

* Simple, intuitive, clean code. Theme CSS and JS, functions and loops are organized into different folders.

* A starter CSS theme – `/theme/css/b5st.css`, enqueued. (Note: do not put your styles in `styles.css`, because that is not enqueued.)

* `b5st.css` is generated from SCSS using `node-sass`. The SCSS files are also included.

* A starter JS script – `theme/css/b5st.js` – unrequired but present as a starter (and with a commented-out enqueue).

* Dimox breadcrumbs ([http://dimox.net/wordpress-breadcrumbs-without-a-plugin/](http://dimox.net/wordpress-breadcrumbs-without-a-plugin/)). Inserted using an action hook.

* Long read prose (paragraphs etc) in single posts has increased font size for wide viewports, using CSS `clamp()`.

## Dependencies

* WordPress. 😎

* Served from a CDN:
  * Bootstrap v5.2.3 CSS
  * Bootstrap v5.2.3 _bundle_ JS
  * Bootstrap Icons v1.10.2

* **Optional** (see “Preprocessing SCSS Files” below):
  * NodeJS
  * node-sass

**Bootstrap Sass is not included.** But you can follow the instructions at [https://getbootstrap.com/docs/5.0/customize/sass/](https://getbootstrap.com/docs/5.0/customize/sass/) to bring Bootstrap Sass into your project.

## Bootstrap Integration

* Bootstrap navbar with WordPress menu and search.
	* Navbar dropdowns (child menus) are handled by a [custom walker nav menu class](https://github.com/SimonPadbury/b5st/blob/master/functions/navbar.php).

* Bootstrap customized comments and feedback response form.

## Gutenberg Compatibility

* Gutenberg editor stylesheet – into which has been copy-pasted the typography styles from Bootstrap 5’s _Reboot_ CSS plus a few extras.

* b5st has a centered narrow single-column layout, so that it can make use of Gutenberg’s extra-wide and full width blocks. In the front-end CSS, these are handled by a variation on Andy Bell’s [full bleed](https://hankchizljaw.com/wrote/creating-a-full-bleed-css-utility/) utility.

## Child-Themes and b5st

_I recommend you do not simply use b5st as-is, and then do all your designing in a child theme._

b5st is only a meant to be a place to start a WordPress/Bootstrap 5 project. It is easier and better to directly rebuild b5st to suit your design needs. Besides, future improvements to b5st may make it not compatible with your child theme -- so, you may not be able to “upgrade” your project to a newer version of b5st simply by swapping it out.

With that said, you can develop child themes _based off your (b5st-based) project_. After you have taken and made b5st your own, modifying its layouts, styles etc. to create your own theme, and then deployed it on a live website, then you can later make child themes _from what will then be your (client’s) website theme_. For example, for special occasions you can make a child themes with alternate colors and backgrounds, seasonal layout changes, etc.

To aid you at that point, b5st has the following child-theme friendly features:

* Many functions are pluggable.

* Theme [hooks](/functions/hooks.php) – paired _before_ and _after_ the navbar, post/page main, (optional sidebar) and footer. Parent theme hooks are able to recieve [actions](https://developer.wordpress.org/plugins/hooks/actions/) from a child theme.

* Also, the navbar brand, navbar search form and sub-footer “bottomline” are inserted using pluggable hooks. So, a child theme can override these.

## Preprocessing SCSS Files

In the `theme/` folder there is a `scss/` folder containing all the SCSS files that have been used to create the file `theme/css/b5st.css`.

You can (beautify and) edit `b5st.css` directly — or you can preprocess the SCSS files using whatever you prefer to use. A simple way is to do the following:

1. Install b5st (this theme) into your WordPress (local) development environment.

2. Download and install [NodeJS](https://nodejs.org/), if you don’t have it already.

3. In your terminal, `cd` into the `b5st` folder. Just do `npm install` so that `node-sass` gets installed as a dev dependancy (see the b5st `package.json`).

4. You can then run `node-sass` in the terminal using `npm run scss`, and stop it using `ctrl+C`. `node-sass` will look for changes in SCSS files inside the `b5st/theme/scss` folder and output the CSS file(s) in the `b5st/theme/css` folder.

5. Initially, only `b5st/theme/css/b5st.css` is enqueued in `functions/enqueues.php` (after the Bootstrap 5 enqueue). You can add more enqueues the same way.

6. Your WordPress (local) development server likely has no live-refresh for when CSS files are modified in this way. So, manually do a browser refresh ↻ whenever you want to see your CSS changes.

---

See the [LOG.md](/LOG.md)
