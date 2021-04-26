# Log

## Initial commit -- maybe 26 April 2021

* Started from a clone of b4st and renamed all as b5st.
* Switched to Bootstrap 5 (`bootstrap.css` and `bootatrap.bundle.js`), and Bootstrap Icons.
* Set up `node-sass`. That’s all we will need to get this project started (may add more node packages and a bundler later).
  * Install by doing a `npm install` -- this will get whatever is in the `package.json`.
  * Then all you need to so is run `npm scss` and it will watch the `.scss` files in `theme/scss` and output them to `theme.css`.
  * `theme/css/b5st.css` is enqueued in `functions.enqueues.php`. When you have your own CSS, you can enqueue them in the same way.
  * _Your local WordPress server won’t know when your CSS file(s) are updated._ So, you will need to reflesh your browser (COMMAND+R or CTRL+R).
* In the navbar walker, changed `data-toggle` to `data-bs-toggle` so that the dropdowns work OK.
* `editor.css` is based on BS4 Reboot. Update that.
* Abstracted the mainbody-widget-area-1 to its own PHP file, or to a hook.
* Added some more hooks
    b5st_mainbody_start
    b5st_mainbody_end
