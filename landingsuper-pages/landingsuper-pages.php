<?php
/*
Plugin Name: Landing/Super Pages
Description: Allows you to create Landing or Super Pages from native WP pages.
Version:  1.1
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
    $is_hidden          = 'is_hidden';
    //Check to see if the link box text have a value; if not set display none
    function is_hidden($is_val) {
        if(!$is_val || $is_val == '') {
            return ' hidden_lp ';
        }
    }
    //Check to see if the section text have a value; if not set display none
    $section_hidden          = 'section_hidden';
    function section_hidden($sec_val) {
        if(!$sec_val || $sec_val == '') {
            return ' hidden_section ';
        }
    }
    //Check to see if the sub section title have a value; if not set display none
    $section1_hidden_subtitle          = 'section1_hidden_subtitle';
    function section1_hidden_subtitle($sec_val_tit) {
        if(!$sec_val_tit || $sec_val_tit == '') {
            return 'hidden_section1_subtitle';
        }
    }
    //Check to see if the sub section text have a value; if not set display none
    $section1_hidden_subtext          = 'section1_hidden_subtext';
    function section1_hidden_subtext($sec_val_txt) {
        if(!$sec_val_txt || $sec_val_txt == '') {
            return 'hidden_section1_subtext';
        }
    }
    //Check to see if the sub section image have a value; if not set display none
    $section1_hidden_subimage          = 'section1_hidden_subimage';
    function section1_hidden_subimage($sec_val_img) {
        if(!$sec_val_img || $sec_val_img == '') {
            return 'hidden_section1_subimage';
        }
    }
    //Check to see if the sub section link have a value; if not set display none
    $section1_hidden_sublink          = 'section1_hidden_sublink';
    function section1_hidden_sublink($sec_val_lnk) {
        if(!$sec_val_lnk || $sec_val_lnk == '') {
            return 'hidden_section1_sublink';
        }
    }
    //
    //Check to see if the sub section title have a value; if not set display none
    $section2_hidden_subtitle          = 'section2_hidden_subtitle';
    function section2_hidden_subtitle($sec2_val_tit) {
        if(!$sec2_val_tit || $sec2_val_tit == '') {
            return 'hidden_section2_subtitle';
        }
    }
    //Check to see if the sub section text have a value; if not set display none
    $section2_hidden_subtext          = 'section2_hidden_subtext';
    function section2_hidden_subtext($sec2_val_txt) {
        if(!$sec2_val_txt || $sec2_val_txt == '') {
            return 'hidden_section2_subtext';
        }
    }
    //Check to see if the sub section image have a value; if not set display none
    $section2_hidden_subimage          = 'section2_hidden_subimage';
    function section2_hidden_subimage($sec2_val_img) {
        if(!$sec2_val_img || $sec2_val_img == '') {
            return 'hidden_section2_subimage';
        }
    }
    //Check to see if the sub section link have a value; if not set display none
    $section2_hidden_sublink          = 'section2_hidden_sublink';
    function section2_hidden_sublink($sec2_val_lnk) {
        if(!$sec2_val_lnk || $sec2_val_lnk == '') {
            return 'hidden_section2_sublink';
        }
    }
    //
    //Check to see if the sub section title have a value; if not set display none
    $section3_hidden_subtitle          = 'section3_hidden_subtitle';
    function section3_hidden_subtitle($sec3_val_tit) {
        if(!$sec3_val_tit || $sec3_val_tit == '') {
            return 'hidden_section3_subtitle';
        }
    }
    //Check to see if the sub section text have a value; if not set display none
    $section3_hidden_subtext          = 'section3_hidden_subtext';
    function section3_hidden_subtext($sec3_val_txt) {
        if(!$sec3_val_txt || $sec3_val_txt == '') {
            return 'hidden_section3_subtext';
        }
    }
    //Check to see if the sub section image have a value; if not set display none
    $section3_hidden_subimage          = 'section3_hidden_subimage';
    function section3_hidden_subimage($sec3_val_img) {
        if(!$sec3_val_img || $sec3_val_img == '') {
            return 'hidden_section3_subimage';
        }
    }
    //Check to see if the sub section link have a value; if not set display none
    $section3_hidden_sublink          = 'section3_hidden_sublink';
    function section3_hidden_sublink($sec3_val_lnk) {
        if(!$sec3_val_lnk || $sec3_val_lnk == '') {
            return 'hidden_section3_sublink';
        }
    }
    //
    //Check to see if the sub section title have a value; if not set display none
    $section4_hidden_subtitle          = 'section4_hidden_subtitle';
    function section4_hidden_subtitle($sec4_val_tit) {
        if(!$sec4_val_tit || $sec4_val_tit == '') {
            return 'hidden_section4_subtitle';
        }
    }
    //Check to see if the sub section text have a value; if not set display none
    $section4_hidden_subtext          = 'section4_hidden_subtext';
    function section4_hidden_subtext($sec4_val_txt) {
        if(!$sec4_val_txt || $sec4_val_txt == '') {
            return 'hidden_section4_subtext';
        }
    }
    //Check to see if the sub section image have a value; if not set display none
    $section4_hidden_subimage          = 'section4_hidden_subimage';
    function section4_hidden_subimage($sec4_val_img) {
        if(!$sec4_val_img || $sec4_val_img == '') {
            return 'hidden_section4_subimage';
        }
    }
    //Check to see if the sub section link have a value; if not set display none
    $section4_hidden_sublink          = 'section4_hidden_sublink';
    function section4_hidden_sublink($sec4_val_lnk) {
        if(!$sec4_val_lnk || $sec4_val_lnk == '') {
            return 'hidden_section4_sublink';
        }
    }
    //
    //Check to see if the sub section title have a value; if not set display none
    $section5_hidden_subtitle          = 'section5_hidden_subtitle';
    function section5_hidden_subtitle($sec5_val_tit) {
        if(!$sec5_val_tit || $sec5_val_tit == '') {
            return 'hidden_section5_subtitle';
        }
    }
    //Check to see if the sub section text have a value; if not set display none
    $section5_hidden_subtext          = 'section5_hidden_subtext';
    function section5_hidden_subtext($sec5_val_txt) {
        if(!$sec5_val_txt || $sec5_val_txt == '') {
            return 'hidden_section5_subtext';
        }
    }
    //Check to see if the sub section image have a value; if not set display none
    $section5_hidden_subimage          = 'section5_hidden_subimage';
    function section5_hidden_subimage($sec5_val_img) {
        if(!$sec5_val_img || $sec5_val_img == '') {
            return 'hidden_section5_subimage';
        }
    }
    //Check to see if the sub section link have a value; if not set display none
    $section5_hidden_sublink          = 'section5_hidden_sublink';
    function section5_hidden_sublink($sec5_val_lnk) {
        if(!$sec5_val_lnk || $sec5_val_lnk == '') {
            return 'hidden_section5_sublink';
        }
    }
    //
    //Check to see if the sub section title have a value; if not set display none
    $section6_hidden_subtitle          = 'section6_hidden_subtitle';
    function section6_hidden_subtitle($sec6_val_tit) {
        if(!$sec6_val_tit || $sec6_val_tit == '') {
            return 'hidden_section6_subtitle';
        }
    }
    //Check to see if the sub section text have a value; if not set display none
    $section6_hidden_subtext          = 'section6_hidden_subtext';
    function section6_hidden_subtext($sec6_val_txt) {
        if(!$sec6_val_txt || $sec6_val_txt == '') {
            return 'hidden_section6_subtext';
        }
    }
    //Check to see if the sub section image have a value; if not set display none
    $section6_hidden_subimage          = 'section6_hidden_subimage';
    function section6_hidden_subimage($sec6_val_img) {
        if(!$sec6_val_img || $sec6_val_img == '') {
            return 'hidden_section6_subimage';
        }
    }
    //Check to see if the sub section link have a value; if not set display none
    $section6_hidden_sublink          = 'section6_hidden_sublink';
    function section6_hidden_sublink($sec6_val_lnk) {
        if(!$sec6_val_lnk || $sec6_val_lnk == '') {
            return 'hidden_section6_sublink';
        }
    }
    //
    //Check to see if the sub section title have a value; if not set display none
    $section7_hidden_subtitle          = 'section7_hidden_subtitle';
    function section7_hidden_subtitle($sec7_val_tit) {
        if(!$sec7_val_tit || $sec7_val_tit == '') {
            return 'hidden_section7_subtitle';
        }
    }
    //Check to see if the sub section text have a value; if not set display none
    $section7_hidden_subtext          = 'section7_hidden_subtext';
    function section7_hidden_subtext($sec7_val_txt) {
        if(!$sec7_val_txt || $sec7_val_txt == '') {
            return 'hidden_section7_subtext';
        }
    }
    //Check to see if the sub section image have a value; if not set display none
    $section7_hidden_subimage          = 'section7_hidden_subimage';
    function section7_hidden_subimage($sec7_val_img) {
        if(!$sec7_val_img || $sec7_val_img == '') {
            return 'hidden_section7_subimage';
        }
    }
    //Check to see if the sub section link have a value; if not set display none
    $section7_hidden_sublink          = 'section7_hidden_sublink';
    function section7_hidden_sublink($sec7_val_lnk) {
        if(!$sec7_val_lnk || $sec7_val_lnk == '') {
            return 'hidden_section7_sublink';
        }
    }
    //
    //Check to see if the sub section title have a value; if not set display none
    $section8_hidden_subtitle          = 'section8_hidden_subtitle';
    function section8_hidden_subtitle($sec8_val_tit) {
        if(!$sec8_val_tit || $sec8_val_tit == '') {
            return 'hidden_section8_subtitle';
        }
    }
    //Check to see if the sub section text have a value; if not set display none
    $section8_hidden_subtext          = 'section8_hidden_subtext';
    function section8_hidden_subtext($sec8_val_txt) {
        if(!$sec8_val_txt || $sec8_val_txt == '') {
            return 'hidden_section8_subtext';
        }
    }
    //Check to see if the sub section image have a value; if not set display none
    $section8_hidden_subimage          = 'section8_hidden_subimage';
    function section8_hidden_subimage($sec8_val_img) {
        if(!$sec8_val_img || $sec8_val_img == '') {
            return 'hidden_section8_subimage';
        }
    }
    //Check to see if the sub section link have a value; if not set display none
    $section8_hidden_sublink          = 'section8_hidden_sublink';
    function section8_hidden_sublink($sec8_val_lnk) {
        if(!$sec8_val_lnk || $sec8_val_lnk == '') {
            return 'hidden_section8_sublink';
        }
    }
    //
    //Check to see if the sub section title have a value; if not set display none
    $section9_hidden_subtitle          = 'section9_hidden_subtitle';
    function section9_hidden_subtitle($sec9_val_tit) {
        if(!$sec9_val_tit || $sec9_val_tit == '') {
            return 'hidden_section9_subtitle';
        }
    }
    //Check to see if the sub section text have a value; if not set display none
    $section9_hidden_subtext          = 'section9_hidden_subtext';
    function section9_hidden_subtext($sec9_val_txt) {
        if(!$sec9_val_txt || $sec9_val_txt == '') {
            return 'hidden_section9_subtext';
        }
    }
    //Check to see if the sub section image have a value; if not set display none
    $section9_hidden_subimage          = 'section9_hidden_subimage';
    function section9_hidden_subimage($sec9_val_img) {
        if(!$sec9_val_img || $sec9_val_img == '') {
            return 'hidden_section9_subimage';
        }
    }
    //Check to see if the sub section link have a value; if not set display none
    $section9_hidden_sublink          = 'section9_hidden_sublink';
    function section9_hidden_sublink($sec9_val_lnk) {
        if(!$sec9_val_lnk || $sec9_val_lnk == '') {
            return 'hidden_section9_sublink';
        }
    }
    //
    //Check to see if the sub section title have a value; if not set display none
    $section10_hidden_subtitle          = 'section10_hidden_subtitle';
    function section10_hidden_subtitle($sec10_val_tit) {
        if(!$sec10_val_tit || $sec10_val_tit == '') {
            return 'hidden_section10_subtitle';
        }
    }
    //Check to see if the sub section text have a value; if not set display none
    $section10_hidden_subtext          = 'section10_hidden_subtext';
    function section10_hidden_subtext($sec10_val_txt) {
        if(!$sec10_val_txt || $sec10_val_txt == '') {
            return 'hidden_section10_subtext';
        }
    }
    //Check to see if the sub section image have a value; if not set display none
    $section10_hidden_subimage          = 'section10_hidden_subimage';
    function section10_hidden_subimage($sec10_val_img) {
        if(!$sec10_val_img || $sec10_val_img == '') {
            return 'hidden_section10_subimage';
        }
    }
    //Check to see if the sub section link have a value; if not set display none
    $section10_hidden_sublink          = 'section10_hidden_sublink';
    function section10_hidden_sublink($sec10_val_lnk) {
        if(!$sec10_val_lnk || $sec10_val_lnk == '') {
            return 'hidden_section10_sublink';
        }
    }
    //Check to see if the sub ini has a value; if not set display none
    $subform_hidden_ini          = 'subform_hidden_ini';
    function subform_hidden_ini($ini_val) {
        if(!$ini_val || $ini_val == '') {
            return 'hidden_ini';
        }
    }
    //Check to see if the sub dual ini has a value; if not set display none
    $subform_hidden_dualini          = 'subform_hidden_dualini';
    function subform_hidden_dualini($dualini_val) {
        if(!$dualini_val || $dualini_val == '') {
            return 'hidden_ini';
        } else {
            return 'lock_dualini';
        }
    }
    //Check to see if the sub xml has a value; if not set display none
    $subform_hidden_xml          = 'subform_hidden_xml';
    function subform_hidden_xml($xml_val) {
        if(!$xml_val || $xml_val == '') {
            return 'hidden_xml';
        }
    }
    //Check to see if the sub dual xml has a value; if not set display none
    $subform_hidden_dualxml          = 'subform_hidden_dualxml';
    function subform_hidden_dualxml($dualxml_val) {
        if(!$dualxml_val || $dualxml_val == '') {
            return 'hidden_xml';
        } else {
            return 'lock_dualxml';
        }
    }
    $lp_template   = get_post_meta($post_id, '_lp_template', true);
    $lp_template_options    = '';
    $temp_dir            = realpath(dirname(__FILE__)) . DIRECTORY_SEPARATOR .'templates';
    $temp_files          = array_diff( scandir($temp_dir), array(".", "..") );
    $directory          = WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));
    foreach($temp_files as $temp_file) {
        if(strpos($temp_file, '.')) {
            $lp_template_options .= '<option value="'.$temp_file.'">'.$temp_file.'</option>';
        }
    }
    $lp_logo        = get_post_meta($post_id, '_lp_logo', true);
    $lp_program   = get_post_meta($post_id, '_lp_program', true);
    $lp_slogan_text    = get_post_meta($post_id, '_lp_slogan_text', true);
    $lp_hero_img      = get_post_meta($post_id, '_lp_hero_img', true);
    $section1_title     = get_post_meta($post_id, '_section1-title', true);
    $section1_text      = get_post_meta($post_id, '_section1-text', true);
    $section1_link      = get_post_meta($post_id, '_section1-link', true);
    $section1_image     = get_post_meta($post_id, '_section1-image', true);
    $section1_title2     = get_post_meta($post_id, '_section1-title2', true);
    $section1_text2      = get_post_meta($post_id, '_section1-text2', true);
    $section1_link2      = get_post_meta($post_id, '_section1-link2', true);
    $section1_image2     = get_post_meta($post_id, '_section1-image2', true);
    $section1_title3     = get_post_meta($post_id, '_section1-title3', true);
    $section1_text3      = get_post_meta($post_id, '_section1-text3', true);
    $section1_link3      = get_post_meta($post_id, '_section1-link3', true);
    $section1_image3     = get_post_meta($post_id, '_section1-image3', true);
    $section1_title4     = get_post_meta($post_id, '_section1-title4', true);
    $section1_text4      = get_post_meta($post_id, '_section1-text4', true);
    $section1_link4      = get_post_meta($post_id, '_section1-link4', true);
    $section1_image4     = get_post_meta($post_id, '_section1-image4', true);
    $section2_title     = get_post_meta($post_id, '_section2-title', true);
    $section2_text      = get_post_meta($post_id, '_section2-text', true);
    $section2_link      = get_post_meta($post_id, '_section2-link', true);
    $section2_image     = get_post_meta($post_id, '_section2-image', true);
    $section2_title2     = get_post_meta($post_id, '_section2-title2', true);
    $section2_text2      = get_post_meta($post_id, '_section2-text2', true);
    $section2_link2      = get_post_meta($post_id, '_section2-link2', true);
    $section2_image2     = get_post_meta($post_id, '_section2-image2', true);
    $section2_title3     = get_post_meta($post_id, '_section2-title3', true);
    $section2_text3      = get_post_meta($post_id, '_section2-text3', true);
    $section2_link3      = get_post_meta($post_id, '_section2-link3', true);
    $section2_image3     = get_post_meta($post_id, '_section2-image3', true);
    $section2_title4     = get_post_meta($post_id, '_section2-title4', true);
    $section2_text4      = get_post_meta($post_id, '_section2-text4', true);
    $section2_link4      = get_post_meta($post_id, '_section2-link4', true);
    $section2_image4     = get_post_meta($post_id, '_section2-image4', true);
    $section3_title     = get_post_meta($post_id, '_section3-title', true);
    $section3_text      = get_post_meta($post_id, '_section3-text', true);
    $section3_link      = get_post_meta($post_id, '_section3-link', true);
    $section3_image     = get_post_meta($post_id, '_section3-image', true);
    $section3_title2     = get_post_meta($post_id, '_section3-title2', true);
    $section3_text2      = get_post_meta($post_id, '_section3-text2', true);
    $section3_link2      = get_post_meta($post_id, '_section3-link2', true);
    $section3_image2     = get_post_meta($post_id, '_section3-image2', true);
    $section3_title3     = get_post_meta($post_id, '_section3-title3', true);
    $section3_text3      = get_post_meta($post_id, '_section3-text3', true);
    $section3_link3      = get_post_meta($post_id, '_section3-link3', true);
    $section3_image3     = get_post_meta($post_id, '_section3-image3', true);
    $section3_title4     = get_post_meta($post_id, '_section3-title4', true);
    $section3_text4      = get_post_meta($post_id, '_section3-text4', true);
    $section3_link4      = get_post_meta($post_id, '_section3-link4', true);
    $section3_image4     = get_post_meta($post_id, '_section3-image4', true);
    $section4_title     = get_post_meta($post_id, '_section4-title', true);
    $section4_text      = get_post_meta($post_id, '_section4-text', true);
    $section4_link      = get_post_meta($post_id, '_section4-link', true);
    $section4_image     = get_post_meta($post_id, '_section4-image', true);
    $section4_title2     = get_post_meta($post_id, '_section4-title2', true);
    $section4_text2      = get_post_meta($post_id, '_section4-text2', true);
    $section4_link2      = get_post_meta($post_id, '_section4-link2', true);
    $section4_image2     = get_post_meta($post_id, '_section4-image2', true);
    $section4_title3     = get_post_meta($post_id, '_section4-title3', true);
    $section4_text3      = get_post_meta($post_id, '_section4-text3', true);
    $section4_link3      = get_post_meta($post_id, '_section4-link3', true);
    $section4_image3     = get_post_meta($post_id, '_section4-image3', true);
    $section4_title4     = get_post_meta($post_id, '_section4-title4', true);
    $section4_text4      = get_post_meta($post_id, '_section4-text4', true);
    $section4_link4      = get_post_meta($post_id, '_section4-link4', true);
    $section4_image4     = get_post_meta($post_id, '_section4-image4', true);
    $section5_title     = get_post_meta($post_id, '_section5-title', true);
    $section5_text      = get_post_meta($post_id, '_section5-text', true);
    $section5_link      = get_post_meta($post_id, '_section5-link', true);
    $section5_image     = get_post_meta($post_id, '_section5-image', true);
    $section5_title2     = get_post_meta($post_id, '_section5-title2', true);
    $section5_text2      = get_post_meta($post_id, '_section5-text2', true);
    $section5_link2      = get_post_meta($post_id, '_section5-link2', true);
    $section5_image2     = get_post_meta($post_id, '_section5-image2', true);
    $section5_title3     = get_post_meta($post_id, '_section5-title3', true);
    $section5_text3      = get_post_meta($post_id, '_section5-text3', true);
    $section5_link3      = get_post_meta($post_id, '_section5-link3', true);
    $section5_image3     = get_post_meta($post_id, '_section5-image3', true);
    $section5_title4     = get_post_meta($post_id, '_section5-title4', true);
    $section5_text4      = get_post_meta($post_id, '_section5-text4', true);
    $section5_link4      = get_post_meta($post_id, '_section5-link4', true);
    $section5_image4     = get_post_meta($post_id, '_section5-image4', true);
    $section6_title     = get_post_meta($post_id, '_section6-title', true);
    $section6_text      = get_post_meta($post_id, '_section6-text', true);
    $section6_link      = get_post_meta($post_id, '_section6-link', true);
    $section6_image     = get_post_meta($post_id, '_section6-image', true);
    $section6_title2     = get_post_meta($post_id, '_section6-title2', true);
    $section6_text2      = get_post_meta($post_id, '_section6-text2', true);
    $section6_link2      = get_post_meta($post_id, '_section6-link2', true);
    $section6_image2     = get_post_meta($post_id, '_section6-image2', true);
    $section6_title3     = get_post_meta($post_id, '_section6-title3', true);
    $section6_text3      = get_post_meta($post_id, '_section6-text3', true);
    $section6_link3      = get_post_meta($post_id, '_section6-link3', true);
    $section6_image3     = get_post_meta($post_id, '_section6-image3', true);
    $section6_title4     = get_post_meta($post_id, '_section6-title4', true);
    $section6_text4      = get_post_meta($post_id, '_section6-text4', true);
    $section6_link4      = get_post_meta($post_id, '_section6-link4', true);
    $section6_image4     = get_post_meta($post_id, '_section6-image4', true);
    $section7_title     = get_post_meta($post_id, '_section7-title', true);
    $section7_text      = get_post_meta($post_id, '_section7-text', true);
    $section7_link      = get_post_meta($post_id, '_section7-link', true);
    $section7_image     = get_post_meta($post_id, '_section7-image', true);
    $section7_title2     = get_post_meta($post_id, '_section7-title2', true);
    $section7_text2      = get_post_meta($post_id, '_section7-text2', true);
    $section7_link2      = get_post_meta($post_id, '_section7-link2', true);
    $section7_image2     = get_post_meta($post_id, '_section7-image2', true);
    $section7_title3     = get_post_meta($post_id, '_section7-title3', true);
    $section7_text3      = get_post_meta($post_id, '_section7-text3', true);
    $section7_link3      = get_post_meta($post_id, '_section7-link3', true);
    $section7_image3     = get_post_meta($post_id, '_section7-image3', true);
    $section7_title4     = get_post_meta($post_id, '_section7-title4', true);
    $section7_text4      = get_post_meta($post_id, '_section7-text4', true);
    $section7_link4      = get_post_meta($post_id, '_section7-link4', true);
    $section7_image4     = get_post_meta($post_id, '_section7-image4', true);
    $section8_title     = get_post_meta($post_id, '_section8-title', true);
    $section8_text      = get_post_meta($post_id, '_section8-text', true);
    $section8_link      = get_post_meta($post_id, '_section8-link', true);
    $section8_image     = get_post_meta($post_id, '_section8-image', true);
    $section8_title2     = get_post_meta($post_id, '_section8-title2', true);
    $section8_text2      = get_post_meta($post_id, '_section8-text2', true);
    $section8_link2      = get_post_meta($post_id, '_section8-link2', true);
    $section8_image2     = get_post_meta($post_id, '_section8-image2', true);
    $section8_title3     = get_post_meta($post_id, '_section8-title3', true);
    $section8_text3      = get_post_meta($post_id, '_section8-text3', true);
    $section8_link3      = get_post_meta($post_id, '_section8-link3', true);
    $section8_image3     = get_post_meta($post_id, '_section8-image3', true);
    $section8_title4     = get_post_meta($post_id, '_section8-title4', true);
    $section8_text4      = get_post_meta($post_id, '_section8-text4', true);
    $section8_link4      = get_post_meta($post_id, '_section8-link4', true);
    $section8_image4     = get_post_meta($post_id, '_section8-image4', true);
    $section9_title     = get_post_meta($post_id, '_section9-title', true);
    $section9_text      = get_post_meta($post_id, '_section9-text', true);
    $section9_link      = get_post_meta($post_id, '_section9-link', true);
    $section9_image     = get_post_meta($post_id, '_section9-image', true);
    $section9_title2     = get_post_meta($post_id, '_section9-title2', true);
    $section9_text2      = get_post_meta($post_id, '_section9-text2', true);
    $section9_link2      = get_post_meta($post_id, '_section9-link2', true);
    $section9_image2     = get_post_meta($post_id, '_section9-image2', true);
    $section9_title3     = get_post_meta($post_id, '_section9-title3', true);
    $section9_text3      = get_post_meta($post_id, '_section9-text3', true);
    $section9_link3      = get_post_meta($post_id, '_section9-link3', true);
    $section9_image3     = get_post_meta($post_id, '_section9-image3', true);
    $section9_title4     = get_post_meta($post_id, '_section9-title4', true);
    $section9_text4      = get_post_meta($post_id, '_section9-text4', true);
    $section9_link4      = get_post_meta($post_id, '_section9-link4', true);
    $section9_image4     = get_post_meta($post_id, '_section9-image4', true);
    $section10_title     = get_post_meta($post_id, '_section10-title', true);
    $section10_text      = get_post_meta($post_id, '_section10-text', true);
    $section10_link      = get_post_meta($post_id, '_section10-link', true);
    $section10_image     = get_post_meta($post_id, '_section10-image', true);
    $section10_title2     = get_post_meta($post_id, '_section10-title2', true);
    $section10_text2      = get_post_meta($post_id, '_section10-text2', true);
    $section10_link2      = get_post_meta($post_id, '_section10-link2', true);
    $section10_image2     = get_post_meta($post_id, '_section10-image2', true);
    $section10_title3     = get_post_meta($post_id, '_section10-title3', true);
    $section10_text3      = get_post_meta($post_id, '_section10-text3', true);
    $section10_link3      = get_post_meta($post_id, '_section10-link3', true);
    $section10_image3     = get_post_meta($post_id, '_section10-image3', true);
    $section10_title4     = get_post_meta($post_id, '_section10-title4', true);
    $section10_text4      = get_post_meta($post_id, '_section10-text4', true);
    $section10_link4      = get_post_meta($post_id, '_section10-link4', true);
    $section10_image4     = get_post_meta($post_id, '_section10-image4', true);
    $link_box1_title     = get_post_meta($post_id, '_link_box1-title', true);
    $link_box1_text      = get_post_meta($post_id, '_link_box1-text', true);
    $link_box1_link      = get_post_meta($post_id, '_link_box1-link', true);
    $link_box1_image     = get_post_meta($post_id, '_link_box1-image', true);
    $link_box2_title     = get_post_meta($post_id, '_link_box2-title', true);
    $link_box2_text      = get_post_meta($post_id, '_link_box2-text', true);
    $link_box2_link      = get_post_meta($post_id, '_link_box2-link', true);
    $link_box2_image     = get_post_meta($post_id, '_link_box2-image', true);
    $link_box3_title     = get_post_meta($post_id, '_link_box3-title', true);
    $link_box3_text      = get_post_meta($post_id, '_link_box3-text', true);
    $link_box3_link      = get_post_meta($post_id, '_link_box3-link', true);
    $link_box3_image     = get_post_meta($post_id, '_link_box3-image', true);
    $link_box4_title     = get_post_meta($post_id, '_link_box4-title', true);
    $link_box4_text      = get_post_meta($post_id, '_link_box4-text', true);
    $link_box4_link      = get_post_meta($post_id, '_link_box4-link', true);
    $link_box4_image     = get_post_meta($post_id, '_link_box4-image', true);
    $link_box5_title     = get_post_meta($post_id, '_link_box5-title', true);
    $link_box5_text      = get_post_meta($post_id, '_link_box5-text', true);
    $link_box5_link      = get_post_meta($post_id, '_link_box5-link', true);
    $link_box5_image     = get_post_meta($post_id, '_link_box5-image', true);
    $link_box6_title     = get_post_meta($post_id, '_link_box6-title', true);
    $link_box6_text      = get_post_meta($post_id, '_link_box6-text', true);
    $link_box6_link      = get_post_meta($post_id, '_link_box6-link', true);
    $link_box6_image     = get_post_meta($post_id, '_link_box6-image', true);
    $link_box7_title     = get_post_meta($post_id, '_link_box7-title', true);
    $link_box7_text      = get_post_meta($post_id, '_link_box7-text', true);
    $link_box7_link      = get_post_meta($post_id, '_link_box7-link', true);
    $link_box7_image     = get_post_meta($post_id, '_link_box7-image', true);
    $link_box8_title     = get_post_meta($post_id, '_link_box8-title', true);
    $link_box8_text      = get_post_meta($post_id, '_link_box8-text', true);
    $link_box8_link      = get_post_meta($post_id, '_link_box8-link', true);
    $link_box8_image     = get_post_meta($post_id, '_link_box8-image', true);
    $lp_quote_text           = get_post_meta($post_id, '_lp_quote_text', true);
    $lp_footer     = get_post_meta($post_id, '_lp_footer', true);
    $lp_form_header      = get_post_meta($post_id, '_lp_form_header', true);
    $lp_form_copy       = get_post_meta($post_id, '_lp_form_copy', true);
    $lp_form_head_scripts       = get_post_meta($post_id, '_lp_form_head_scripts', true);
    $lp_form_thankyou  = get_post_meta($post_id, '_lp_form_ty', true);
    $lp_ini_form        = get_post_meta($post_id, '_lp_ini_form', true);
    $lp_form_js    = get_post_meta($post_id, '_lp_form_js', true);
    $lp_ini_form2        = get_post_meta($post_id, '_lp_ini_form2', true);
    $lp_xml_form       = get_post_meta($post_id, '_lp_xml_form', true);
    $lp_form_js_step    = get_post_meta($post_id, '_lp_form_js_step', true);
    $lp_form_js_success    = get_post_meta($post_id, '_lp_form_js_success', true);
    $lp_xml_form2       = get_post_meta($post_id, '_lp_xml_form2', true);
    $lp_form_js_step2    = get_post_meta($post_id, '_lp_form_js_step2', true);
    $lp_form_js_success2    = get_post_meta($post_id, '_lp_form_js_success2', true);

    $plugin_dir = WP_PLUGIN_URL.'/landingsuper-pages/';
?>

    <link rel="stylesheet" href="<?php echo $plugin_dir ?>css/styles.css" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php echo $plugin_dir ?>js/scripts.js"></script>

<?php

    include( 'blocks/header.php' ); 
    //include( 'blocks/navigation.php' );   
    include( 'blocks/section.php' );
    include( 'blocks/linkbox.php' );
    include( 'blocks/leadform.php' );
    include( 'blocks/quote.php' );
    include( 'blocks/footer.php' );

} //end meta box fields display  --------------------------------------------------------------------------------------------

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


function add_clone_landing_page_box() {
    if ( function_exists('add_meta_box')) {
        add_meta_box( 'Clone-LP', 'Clone Landing Page', 'clone_landing_page_box', 'page', 'side', 'low' );
    }
}


function clone_landing_page_box() {
    global $wpdb;
?>
<script type="text/javascript">
    jQuery(document).ready(function($){

        jQuery('#submit_clone').click(function(){
            var action_url = '<?php bloginfo('url'); ?>/wp-content/plugins/landingsuper-pages/ajax_clone.php';
            form_data = {};
            form_data['cloned_id'] = $('#cloned_id').val();
            form_data['cloned_author'] = $('#cloned_author').val();
            form_data['clone_title'] = $('#clone_title').val();
            jQuery.ajax({
                type: "POST",
                url: action_url,
                data: form_data,
                success: function(){
                    jQuery('#clone_message').text("Page Cloned: "+form_data['clone_title']);
                }
            });

            return false;
        });
    });
</script>
<?php
    $post_id        = $_GET['post'];
    global $current_user;
    get_currentuserinfo();
    $clone_author   = $current_user->ID;
    $clone_box      = <<<HEREDOC
            <input type="hidden" name="cloned_id"  id="cloned_id" value="$post_id" />
            <input type="hidden" name="cloned_author"  id="cloned_author" value="$clone_author" />
            <label>Page Title</label><input type="text" name="clone_title" size="15" id="clone_title"  />
            <input type="submit" class="button-secondary" name="submit_clone" id="submit_clone" value="Clone" />
            <div style="clear: both"></div>
            <p id="clone_message" style="color: red"></p>
HEREDOC;
    echo $clone_box;
}

add_action('admin_menu', 'add_clone_landing_page_box');


function e_landing_page_head() {
    global $post;
    print get_post_meta($post->ID, '_lp_form_head_scripts', true);
    print get_post_meta($post->ID, '_lp_form_js', true);
}


function show_lp() {
    global $post;
    $template_check = get_post_meta($post->ID, '_lp_logo', true);
    $published_check = $post->post_status;
    if($template_check && !is_search()) {
        add_action('wp_head', 'e_landing_page_head');
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
function e_lp_deactivation() {
    //do something
}
?>