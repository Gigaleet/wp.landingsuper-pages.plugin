<?php
global $post;
$thePostID = $post->ID;
$temp_file = get_stylesheet_directory() . DIRECTORY_SEPARATOR . '/landingsuper-pages/' . get_post_meta($thePostID, '_lp_template', true);

include($temp_file); ?>