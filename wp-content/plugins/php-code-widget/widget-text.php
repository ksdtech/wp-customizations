/**
 * PFZ: Paste this code into the "text" section of the
 * PHP Code Widget, inserted into the
 * Primary Widget Area of the site.
 * 
 * PHP Code Widget is available here:
 * http://wordpress.org/extend/plugins/php-code-widget
 *
 * The is_subpage() function is placed in the themes/coraline
 * folder.
 */

<?php
$subPage = is_subpage();
$ancestor = $post->ancestors[1];
if ($subPage) : // we're on a sub-page:
if ($ancestor) : // we're a sub-sub nav item...
echo "<ul class=\"page-list\">";
wp_list_pages("title_li=&child_of=$ancestor&sort_column=menu_order"); 
echo "</ul>";
else :
echo "<ul class=\"page-list\">";
wp_list_pages("title_li=&child_of=$subPage&sort_column=menu_order"); 
echo "</ul>";
endif;
endif; 
?>
