<?php 

require_once('inc/styles-and-scripts.php'); // CSS und Javascript
require_once('inc/theme-support.php');
require_once('inc/post-meta.php');      // Meta-Angaben Post-Header
require_once('inc/the-menus.php');      // The Menus
require_once('inc/the-sidebars.php');   // The Sidebars

if ( ! isset( $content_width ) ) $content_width = 1200;