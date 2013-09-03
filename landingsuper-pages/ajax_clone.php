<?php
//this will create a new page with the "Clone Page" feature
if(isset($_POST['clone_title'])) {
    require_once('../../../wp-blog-header.php');
    global $wpdb;

    function clone_content($id) {
        global $wpdb;
        $the_content = $wpdb->get_var($wpdb->prepare("SELECT post_content FROM $wpdb->posts WHERE ID = '$id' AND post_status = 'publish';"));
        return $the_content;
    }

    $post_id    = $_POST['cloned_id'];
    $title      = $_POST['clone_title'];
    $author     = $_POST['clone_author'];
    $content    = clone_content($post_id);

    $post                   = array();
    $post['post_title']     = $title;
    $post['post_content']   = $content;
    $post['post_status']    = 'draft';
    $post['post_author']    = $author;
    $post['post_date']      = date('Y-m-d H:i:s');
    $post['post_type']      = 'page';
    $postID                 = wp_insert_post($post);
    $postmetas = $wpdb->get_results("SELECT * FROM $wpdb->postmeta WHERE post_id = $post_id");
    foreach ($postmetas as $postmeta) {
        $key = $postmeta->meta_key;
        $val = $postmeta->meta_value;
        add_post_meta($postID, $key, $val);
    }

}

