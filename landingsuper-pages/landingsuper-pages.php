<?php
/*
Plugin Name: Landing/Super Pages
Description: Allows you to create Landing or Super Pages from native WP pages.
Version:  2.01
Author:  David Lewis
Author URI: https://github.com/Gigaleet/wp.landingsuper-pages.plugin
*/

register_activation_hook(__FILE__, 'landing_page_activation');

function landing_page_activation() {
// TODO create group or parent for all landing pages
}

function add_landing_page_meta_box() {
    if ( function_exists( 'add_meta_box' )) {
        add_meta_box( 'lp-Meta', 'Landing/Super Page', 'landing_page_meta_box', 'page', 'advanced', 'high' );
    }
}

function landing_page_meta_box() {
    $post_id            = $_GET['post'];
    $wp_dropdown_pages  = 'wp_dropdown_pages';
    // Check if hidden functions
        $is_hidden               = 'is_hidden';
        $section_hidden          = 'section_hidden';
        $gen_is_hidden           = 'gen_is_hidden';
        $subform_hidden_dualxml  = 'subform_hidden_dualxml';
    // /END Check if hidden functions
    $plugin_dir = WP_PLUGIN_URL.'/landingsuper-pages/';
    // Use these var to adjust the number of Sections, Sub Sections, and Link Boxes **Not fully working**
        $total_num_sec      =   10;
        $total_num_sub_sec  =   4;
        $total_num_lb       =   8;
    // END
    $total_num_sub_sec_var  =   $total_num_sub_sec + 1; //Do Not Adjust!!
    // Template
    $lp_template          = get_post_meta($post_id, '_lp_template', true);
    $lp_template_options  = '';
    $temp_dir             = get_stylesheet_directory() . DIRECTORY_SEPARATOR .'/landingsuper-pages';
    $temp_files           = array_diff( scandir($temp_dir), array(".", "..") );
    $directory            = WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));
    foreach($temp_files as $temp_file) {
        if(strpos($temp_file, '.')) {
            $lp_template_options .= '<option value="'.$temp_file.'">'.$temp_file.'</option>';
        }
    }
    // Head
    $lp_logo         = get_post_meta($post_id, '_lp_logo', true);
    $lp_program      = get_post_meta($post_id, '_lp_program', true);
    $lp_slogan_text  = get_post_meta($post_id, '_lp_slogan_text', true);
    $lp_hero_img     = get_post_meta($post_id, '_lp_hero_img', true);
    // Sections
    for($s=1; $s <= $total_num_sec; $s++) {
        ${'section'.$s.'_title'}     = get_post_meta($post_id, '_section'.$s.'-title', true);
        ${'section'.$s.'_text'}      = get_post_meta($post_id, '_section'.$s.'-text', true);
        ${'section'.$s.'_link'}      = get_post_meta($post_id, '_section'.$s.'-link', true);
        ${'section'.$s.'_image'}     = get_post_meta($post_id, '_section'.$s.'-image', true);
        for($ss=2; $ss <= $total_num_sub_sec_var; $ss++) {
            ${'section'.$s.'_title'.$ss}     = get_post_meta($post_id, '_section'.$s.'-title'.$ss, true);
            ${'section'.$s.'_text'.$ss}      = get_post_meta($post_id, '_section'.$s.'-text'.$ss, true);
            ${'section'.$s.'_link'.$ss}      = get_post_meta($post_id, '_section'.$s.'-link'.$ss, true);
            ${'section'.$s.'_image'.$ss}     = get_post_meta($post_id, '_section'.$s.'-image'.$ss, true);
        }
    }
    // Link Boxes
    for($lb=1; $lb <= $total_num_lb; $lb++) {
        ${'link_box'.$lb.'_title'}     = get_post_meta($post_id, '_link_box'.$lb.'-title', true);
        ${'link_box'.$lb.'_text'}      = get_post_meta($post_id, '_link_box'.$lb.'-text', true);
        ${'link_box'.$lb.'_link'}      = get_post_meta($post_id, '_link_box'.$lb.'-link', true);
        ${'link_box'.$lb.'_image'}     = get_post_meta($post_id, '_link_box'.$lb.'-image', true);
    }
    // Quote and Footer
    $lp_quote_text       = get_post_meta($post_id, '_lp_quote_text', true);
    $lp_footer           = get_post_meta($post_id, '_lp_footer', true);
    // Form
    $lp_form_header      = get_post_meta($post_id, '_lp_form_header', true);
    $lp_form_copy        = get_post_meta($post_id, '_lp_form_copy', true);
    $lp_form_thankyou    = get_post_meta($post_id, '_lp_form_ty', true);
    $lp_analytics        = get_post_meta($post_id, '_lp_analytics', true);
    // XML
    $lp_xml_form         = get_post_meta($post_id, '_lp_xml_form', true);
    $lp_form_js_init     = get_post_meta($post_id, '_lp_form_js_init', true);// NEW - JS INIT
    $lp_form_js_step     = get_post_meta($post_id, '_lp_form_js_step', true);
    $lp_form_js_success  = get_post_meta($post_id, '_lp_form_js_success', true);
    // Dual XML
    $lp_form_header2     = get_post_meta($post_id, '_lp_form_header2', true);
    $lp_form_copy2       = get_post_meta($post_id, '_lp_form_copy2', true);
    $lp_form_thankyou2   = get_post_meta($post_id, '_lp_form_ty2', true);
    $lp_xml_form2        = get_post_meta($post_id, '_lp_xml_form2', true);
    $lp_form_js_init2    = get_post_meta($post_id, '_lp_form_js_init2', true);// NEW - JS INIT
    $lp_form_js_step2    = get_post_meta($post_id, '_lp_form_js_step2', true);
    $lp_form_js_success2 = get_post_meta($post_id, '_lp_form_js_success2', true);
    //Pull xml file from dir 
    $lp_form_temp_options    = '';
    $form_temp_dir           = get_stylesheet_directory() . DIRECTORY_SEPARATOR .'/xforms';
    $form_temp_files         = array_diff( scandir($form_temp_dir), array(".", "..") );
    $form_directory          = WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));
    foreach($form_temp_files as $form_temp_file) {
        if(strpos($form_temp_file, '.')) {
            $lp_form_temp_options .= '<option value="'.$form_temp_file.'">'.$form_temp_file.'</option>';
        }
    }
?>
    <link rel="stylesheet" href="<?php echo $plugin_dir ?>css/styles.css" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php echo $plugin_dir ?>js/scripts.js"></script>
<?php
    include( 'blocks/header.php' );
    include( 'blocks/linkbox.php' ); 
    include( 'blocks/section.php' );
    include( 'blocks/leadform.php' );
    include( 'blocks/quote.php' );
    include( 'blocks/footer.php' );
} //end meta box fields display 


//Check to see if the link box text have a value; if not set display none
function is_hidden($lb_tit, $lb_txt) {
    if(!$lb_tit && !$lb_txt || $lb_tit == '' && $lb_txt == '') {
        return ' hidden_lp ';
    }
}   
//Check to see if the section text have a value; if not set display none
function section_hidden($sec_tit, $sec_txt) {
    if(!$sec_tit && !$sec_txt || $sec_tit == '' && $sec_txt == '') {
        return ' hidden_section ';
    }
}
//General is hidden
function gen_is_hidden($val) {
    if(!$val || $val == '') {
        return 'hidden';
    }
}
//Check to see if the sub dual xml has a value; if not set display none
function subform_hidden_dualxml($dualxml_val) {
    if(!$dualxml_val || $dualxml_val == '') {
        return 'hidden_xml';
    } else {
        return 'lock_dualxml';
    }
}


function save_landing_page_meta_box($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }
    if (!current_user_can( 'edit_page', $post_id)) {
        return $post_id;
    }
    $lp_datas = $_POST['e_lp'];
    if($lp_datas) {
        foreach($lp_datas as $key=>$value) {
            update_post_meta($post_id,$key,$value);
        }
    }
}
add_action('admin_menu', 'add_landing_page_meta_box');
add_action('save_post', 'save_landing_page_meta_box');


function show_lp() {
    global $post;
    $template_check = get_post_meta($post->ID, '_lp_logo', true);
    $published_check = $post->post_status;
    if($template_check && !is_search()) {
        include('landing_page_temp.php');
        die();
    }
}
add_action('template_redirect', 'show_lp');


function content_by_id($id) {
    global $wpdb;
    $the_content = $wpdb->get_var($wpdb->prepare("SELECT post_content FROM $wpdb->posts WHERE ID = '$id' AND post_status = 'publish';"));
    echo '<p>'.$the_content.'</p>';
}

//exclude LP's from menus
function remove_landing_page_from_nav($pages) {
    global $wpdb;
    $bail_out = ( ( defined( 'WP_ADMIN' ) && WP_ADMIN == true ) || ( strpos( $_SERVER[ 'PHP_SELF' ], 'wp-admin' ) !== false ) );
    $bail_out = apply_filters( 'ep_admin_bail_out', $bail_out );
    if ($bail_out) return $pages;
    $lp_ids = $wpdb->get_results("SELECT post_id FROM wp_postmeta WHERE meta_key = '_lp_hero_img' AND meta_value != '' ", ARRAY_N);
    if($lp_ids) {
        $excluded_ids = array();
        foreach($lp_ids as $lp_id) {
            $excluded_ids[] = $lp_id[0];
        }
        $length = count($pages);
        // Loop though the $pages array and actually unset/delete stuff
        for ( $i=0; $i<$length; $i++ ) {
            $page = & $pages[$i];
            // If one of the ancestor pages is excluded, add it to our exclude array
            if ( in_array( $page->ID, $excluded_ids ) ) {
                //Finally, delete something(s)
                unset( $pages[$i] );
            }
        }
        // Reindex the array, for neatness
        if ( ! is_array( $pages ) ) $pages = (array) $pages;
        $pages = array_values( $pages );
    }
    return $pages;
}
add_filter('get_pages', 'remove_landing_page_from_nav');


register_deactivation_hook(__FILE__, 'e_landing_page_deactivation');


function e_landing_page_deactivation() {
    //do something
}
?>