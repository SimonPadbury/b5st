<?php
/**
 * The Sidebar
 * ===========
 * 
 * Note: The main column has simply Bootstrap flexbox "col-sm" so it will expand
 * to occupy the whole row (if no sidebar) or to occupy whatever part of the row
 * is available (if there is a sidebar, or more than one sidebar, etc.).
 *
 * (So, you don't need to set the main column to col-sm-8 or whatever.)
 */
?>

<?php if( is_active_sidebar('mainbody-widget-area-1') ): ?>
<div id="sidebar" class="sidebar col-sm-4" role="navigation">
  <?php
    b5st_mainbody_widgets_1_before();
    dynamic_sidebar('mainbody-widget-area-1');
    b5st_mainbody_widgets_1_after();
  ?>
</div>
<?php endif; ?>
