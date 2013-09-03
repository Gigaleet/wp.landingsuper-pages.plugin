<?php
global $post;
$thePostID = $post->ID;
$temp_file = 'templates'. DIRECTORY_SEPARATOR . get_post_meta($thePostID, '_lp_template', true);

include($temp_file); ?>