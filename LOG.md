# Log

## Version 1.3.2 -- Feb 2023

* Update Bootstrap to v5.2.3 and Bootstrap Icons to v1.10.2
* Merged pull requests

## Version 1.3 -- 20 Nov 2021

* Fix to `narbar.php`
* Update Bootstrap to v5.1.3 and Bootstrap Icons to v1.7.1

## Version 1.1 -- 7 May 2021

* Now that Bootstrap 5.0.0 is launched, these `bootstrap.css` and `bootatrap.bundle.js` have been enqueued from the CDN instead of the previous beta versions.

## Initial commit -- 26 April 2021

* Started from a clone of b4st and renamed all as b5st.
* Switched to Bootstrap 5 (`bootstrap.css` and `bootatrap.bundle.js`), and Bootstrap Icons.
* Set up `node-sass`. That’s all we will need to get this project started (you may want to add more node packages and a bundler later).
* In the navbar walker, changed `data-toggle` to `data-bs-toggle` so that the dropdowns work OK.
* `editor.css` is based on BS4 Reboot. Update that to BS5 Reboot.
* Abstracted the mainbody-widget-area-1 to insertion via an action hook.
* Abstracted the Dimox breadcrumbs to insertion via an action hook.
* Added some more hooks:
    * b5st_mainbody_start
    * b5st_mainbody_end
* Several other improvements.
