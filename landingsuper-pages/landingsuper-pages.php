<?php
/*
Plugin Name: Landing/Super Pages
Description: Allows you to create Landing or Super Pages from native WP pages.
Version:  1.0 Beta
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
    $meta_styles = <<<HEREDOC
    <style type="text/css">
            .clear { clear: both; }
            .lpboxes { padding:0; margin: 0; clear: both; }
            .lpboxes fieldset { padding: 3px; margin: 0 0 5px 0; border: 1px solid #ddd; display: block; clear: both; }
            #poststuff .lpboxes h3 { background: none; margin: 15px 0 0 0; float: left; clear: both; padding: 5px; background: #ddd; }
            .lpboxes label { display: block; float: left; width: 100px; margin: 5px auto; padding: 3px 0 0 0; clear: both; cursor: default; }
            .lpboxes label span { font-size: 9px; }
            .lpboxes input[type="text"]{ display: block; min-width: 75%; margin: 5px 0 0 0; }
            .lpboxes select { display: block; padding: 3px; margin: 5px 0 0 0; }
            .lpboxes textarea { display: block; width: 75%; height: 100px; margin: 5px 0 0 0; }
            .lpboxes #editorcontainer textarea { width: 100%; }
            .lpboxes #quicktags #ed_toolbar { display: none; }
            .section select { width: 75%; }
            .sub-section { width: 250px; float: left; margin: 10px 10px 0 0; border: 1px solid #ddd; padding: 5px; }
            .sub-section h3 { cursor: default; margin: -5px 0 15px -5px !important; width: 100%; }
            .sub-section label { float: none; margin: 0 0 0 3px; cursor: default; }
            .sub-section input[type="text"] { width: 100%; }
            .sub-section select { width: 100%; }
            .sub-section textarea { width: 100%; }
            .sublinks { clear: both; margin-top: 10px; display: block;  }
            .sublinks a { margin-right: 30px; float: left;  }            
            .remove_linkbox, .remove_section { cursor: pointer; color: red; float: right; }
            #form_sub {}
            #form_sub h3 { cursor: pointer; display: inline-block; border-left: 1px solid #ccc; border-right: 1px solid #ccc; border-top: 1px solid #ccc; margin: 25px 0 -1px 0 !important; }
            h3#toggle_ini { float: left;  border-right: none; }
            h3#toggle_xml { float: none !important; }
            #subform_ini, #subform_xml { border: 1px solid #ccc; }
            #dualini_add, #dualxml_add { cursor: pointer; }
            .textvid { height: 40px !important; }
            #linkbox_add, #section_add, 
            #sub-section1_add-title, #sub-section1_add-text, #sub-section1_add-link, #sub-section1_add-img,
            #sub-section2_add-title, #sub-section2_add-text, #sub-section2_add-link, #sub-section2_add-img,
            #sub-section3_add-title, #sub-section3_add-text, #sub-section3_add-link, #sub-section3_add-img,
            #sub-section4_add-title, #sub-section4_add-text, #sub-section4_add-link, #sub-section4_add-img,
            #sub-section5_add-title, #sub-section5_add-text, #sub-section5_add-link, #sub-section5_add-img,
            #sub-section6_add-title, #sub-section6_add-text, #sub-section6_add-link, #sub-section6_add-img,
            #sub-section7_add-title, #sub-section7_add-text, #sub-section7_add-link, #sub-section7_add-img,
            #sub-section8_add-title, #sub-section8_add-text, #sub-section8_add-link, #sub-section8_add-img,
            #sub-section9_add-title, #sub-section9_add-text, #sub-section9_add-link, #sub-section9_add-img,
            #sub-section10_add-title, #sub-section10_add-text, #sub-section10_add-link, #sub-section10_add-img { cursor: pointer; }
            .remove_sub_section1-title, .remove_sub_section1-text, .remove_sub_section1-link, .remove_sub_section1-img,
            .remove_sub_section2-title, .remove_sub_section2-text, .remove_sub_section2-link, .remove_sub_section2-img,
            .remove_sub_section3-title, .remove_sub_section3-text, .remove_sub_section3-link, .remove_sub_section3-img,
            .remove_sub_section4-title, .remove_sub_section4-text, .remove_sub_section4-link, .remove_sub_section4-img,
            .remove_sub_section5-title, .remove_sub_section5-text, .remove_sub_section5-link, .remove_sub_section5-img,
            .remove_sub_section6-title, .remove_sub_section6-text, .remove_sub_section6-link, .remove_sub_section6-img,
            .remove_sub_section7-title, .remove_sub_section7-text, .remove_sub_section7-link, .remove_sub_section7-img,
            .remove_sub_section8-title, .remove_sub_section8-text, .remove_sub_section8-link, .remove_sub_section8-img,
            .remove_sub_section9-title, .remove_sub_section9-text, .remove_sub_section9-link, .remove_sub_section9-img,
            .remove_sub_section10-title, .remove_sub_section10-text, .remove_sub_section10-link, .remove_sub_section10-img { cursor: pointer !important; }
            .hidden_lp, .hidden_section, .hidden_sub_section,
            .hidden_sub1, .hidden_sub2, .hidden_sub3, .hidden_sub4, .hidden_sub5, .hidden_sub6, .hidden_sub7, .hidden_sub8, .hidden_sub9, .hidden_sub10,
            .hidden_section1_subtitle, .hidden_section1_subtext, .hidden_section1_subimage, .hidden_section1_sublink, 
            .hidden_section2_subtitle, .hidden_section2_subtext, .hidden_section2_subimage, .hidden_section2_sublink, 
            .hidden_section3_subtitle, .hidden_section3_subtext, .hidden_section3_subimage, .hidden_section3_sublink, 
            .hidden_section4_subtitle, .hidden_section4_subtext, .hidden_section4_subimage, .hidden_section4_sublink, 
            .hidden_section5_subtitle, .hidden_section5_subtext, .hidden_section5_subimage, .hidden_section5_sublink, 
            .hidden_section6_subtitle, .hidden_section6_subtext, .hidden_section6_subimage, .hidden_section6_sublink, 
            .hidden_section7_subtitle, .hidden_section7_subtext, .hidden_section7_subimage, .hidden_section7_sublink, 
            .hidden_section8_subtitle, .hidden_section8_subtext, .hidden_section8_subimage, .hidden_section8_sublink, 
            .hidden_section9_subtitle, .hidden_section9_subtext, .hidden_section9_subimage, .hidden_section9_sublink, 
            .hidden_section10_subtitle, .hidden_section10_subtext, .hidden_section10_subimage, .hidden_section10_sublink, .hidden_ini, .hidden_xml { display: none; }
         </style>
HEREDOC;
    echo $meta_styles;
    ?>
<script type="text/javascript">
    jQuery(document).ready(function($){
        //Hide and show lpboxes when headline(h3) is clicked
        $(".lpboxes h3").toggle(function(){
            $(this).next("fieldset").hide();
        }, function(){
            $(this).next("fieldset").show();
        });
        //add and remove sections
        $("#section_add").click(function(){
            $('.hidden_section:first').removeClass('hidden_section').show();
        });
        $(".remove_section").click(function(){
            $(this).parent().addClass('hidden_section');
            $(this).parent().children('fieldset').children('input').val('');
            $(this).parent().children('fieldset').children('textarea').val('');
        });
        function subcheck() {
            //Check to see if all inputs and textareas in sub1 are empty; if so display none
            if ($('.sec1_sub1titles').hasClass('hidden_section1_subtitle') && $('.sec1_sub1text').hasClass('hidden_section1_subtext') && $('.sec1_sub1image').hasClass('hidden_section1_subimage') && $('.sec1_sub1link').hasClass('hidden_section1_sublink')){
                $('.sec1_sub1').addClass('hidden_sub1');
            }else{
                $('.sec1_sub1').removeClass('hidden_sub1');
            };
            //Check to see if all inputs and textareas in sub2 are empty; if so display none
            if ($('.sec1_sub2titles').hasClass('hidden_section1_subtitle') && $('.sec1_sub2text').hasClass('hidden_section1_subtext') && $('.sec1_sub2image').hasClass('hidden_section1_subimage') && $('.sec1_sub2link').hasClass('hidden_section1_sublink')){
                $('.sec1_sub2').addClass('hidden_sub1');
            }else{
                $('.sec1_sub2').removeClass('hidden_sub1');
            };
            //Check to see if all inputs and textareas in sub3 are empty; if so display none
            if ($('.sec1_sub3titles').hasClass('hidden_section1_subtitle') && $('.sec1_sub3text').hasClass('hidden_section1_subtext') && $('.sec1_sub3image').hasClass('hidden_section1_subimage') && $('.sec1_sub3link').hasClass('hidden_section1_sublink')){
                $('.sec1_sub3').addClass('hidden_sub1');
            }else{
                $('.sec1_sub3').removeClass('hidden_sub1');
            };
            //
            //Check to see if all inputs and textareas in sub1 are empty; if so display none
            if ($('.sec2_sub1titles').hasClass('hidden_section2_subtitle') && $('.sec2_sub1text').hasClass('hidden_section2_subtext') && $('.sec2_sub1image').hasClass('hidden_section2_subimage') && $('.sec2_sub1link').hasClass('hidden_section2_sublink')){
                $('.sec2_sub1').addClass('hidden_sub2');
            }else{
                $('.sec2_sub1').removeClass('hidden_sub2');
            };
            //Check to see if all inputs and textareas in sub2 are empty; if so display none
            if ($('.sec2_sub2titles').hasClass('hidden_section2_subtitle') && $('.sec2_sub2text').hasClass('hidden_section2_subtext') && $('.sec2_sub2image').hasClass('hidden_section2_subimage') && $('.sec2_sub2link').hasClass('hidden_section2_sublink')){
                $('.sec2_sub2').addClass('hidden_sub2');
            }else{
                $('.sec2_sub2').removeClass('hidden_sub2');
            };
            //Check to see if all inputs and textareas in sub3 are empty; if so display none
            if ($('.sec2_sub3titles').hasClass('hidden_section2_subtitle') && $('.sec2_sub3text').hasClass('hidden_section2_subtext') && $('.sec2_sub3image').hasClass('hidden_section2_subimage') && $('.sec2_sub3link').hasClass('hidden_section2_sublink')){
                $('.sec2_sub3').addClass('hidden_sub2');
            }else{
                $('.sec2_sub3').removeClass('hidden_sub2');
            };
            //
            //Check to see if all inputs and textareas in sub1 are empty; if so display none
            if ($('.sec3_sub1titles').hasClass('hidden_section3_subtitle') && $('.sec3_sub1text').hasClass('hidden_section3_subtext') && $('.sec3_sub1image').hasClass('hidden_section3_subimage') && $('.sec3_sub1link').hasClass('hidden_section3_sublink')){
                $('.sec3_sub1').addClass('hidden_sub3');
            }else{
                $('.sec3_sub1').removeClass('hidden_sub3');
            };
            //Check to see if all inputs and textareas in sub2 are empty; if so display none
            if ($('.sec3_sub2titles').hasClass('hidden_section3_subtitle') && $('.sec3_sub2text').hasClass('hidden_section3_subtext') && $('.sec3_sub2image').hasClass('hidden_section3_subimage') && $('.sec3_sub2link').hasClass('hidden_section3_sublink')){
                $('.sec3_sub2').addClass('hidden_sub3');
            }else{
                $('.sec3_sub2').removeClass('hidden_sub3');
            };
            //Check to see if all inputs and textareas in sub3 are empty; if so display none
            if ($('.sec3_sub3titles').hasClass('hidden_section3_subtitle') && $('.sec3_sub3text').hasClass('hidden_section3_subtext') && $('.sec3_sub3image').hasClass('hidden_section3_subimage') && $('.sec3_sub3link').hasClass('hidden_section3_sublink')){
                $('.sec3_sub3').addClass('hidden_sub3');
            }else{
                $('.sec3_sub3').removeClass('hidden_sub3');
            };
            //
            //Check to see if all inputs and textareas in sub1 are empty; if so display none
            if ($('.sec4_sub1titles').hasClass('hidden_section4_subtitle') && $('.sec4_sub1text').hasClass('hidden_section4_subtext') && $('.sec4_sub1image').hasClass('hidden_section4_subimage') && $('.sec4_sub1link').hasClass('hidden_section4_sublink')){
                $('.sec4_sub1').addClass('hidden_sub4');
            }else{
                $('.sec4_sub1').removeClass('hidden_sub4');
            };
            //Check to see if all inputs and textareas in sub2 are empty; if so display none
            if ($('.sec4_sub2titles').hasClass('hidden_section4_subtitle') && $('.sec4_sub2text').hasClass('hidden_section4_subtext') && $('.sec4_sub2image').hasClass('hidden_section4_subimage') && $('.sec4_sub2link').hasClass('hidden_section4_sublink')){
                $('.sec4_sub2').addClass('hidden_sub4');
            }else{
                $('.sec4_sub2').removeClass('hidden_sub4');
            };
            //Check to see if all inputs and textareas in sub4 are empty; if so display none
            if ($('.sec4_sub3titles').hasClass('hidden_section4_subtitle') && $('.sec4_sub3text').hasClass('hidden_section4_subtext') && $('.sec4_sub3image').hasClass('hidden_section4_subimage') && $('.sec4_sub3link').hasClass('hidden_section4_sublink')){
                $('.sec4_sub3').addClass('hidden_sub4');
            }else{
                $('.sec4_sub3').removeClass('hidden_sub4');
            };
            //
            //Check to see if all inputs and textareas in sub1 are empty; if so display none
            if ($('.sec5_sub1titles').hasClass('hidden_section5_subtitle') && $('.sec5_sub1text').hasClass('hidden_section5_subtext') && $('.sec5_sub1image').hasClass('hidden_section5_subimage') && $('.sec5_sub1link').hasClass('hidden_section5_sublink')){
                $('.sec5_sub1').addClass('hidden_sub5');
            }else{
                $('.sec5_sub1').removeClass('hidden_sub5');
            };
            //Check to see if all inputs and textareas in sub2 are empty; if so display none
            if ($('.sec5_sub2titles').hasClass('hidden_section5_subtitle') && $('.sec5_sub2text').hasClass('hidden_section5_subtext') && $('.sec5_sub2image').hasClass('hidden_section5_subimage') && $('.sec5_sub2link').hasClass('hidden_section5_sublink')){
                $('.sec5_sub2').addClass('hidden_sub5');
            }else{
                $('.sec5_sub2').removeClass('hidden_sub5');
            };
            //Check to see if all inputs and textareas in sub5 are empty; if so display none
            if ($('.sec5_sub3titles').hasClass('hidden_section5_subtitle') && $('.sec5_sub3text').hasClass('hidden_section5_subtext') && $('.sec5_sub3image').hasClass('hidden_section5_subimage') && $('.sec5_sub3link').hasClass('hidden_section5_sublink')){
                $('.sec5_sub3').addClass('hidden_sub5');
            }else{
                $('.sec5_sub3').removeClass('hidden_sub5');
            };
            //
            //Check to see if all inputs and textareas in sub1 are empty; if so display none
            if ($('.sec6_sub1titles').hasClass('hidden_section6_subtitle') && $('.sec6_sub1text').hasClass('hidden_section6_subtext') && $('.sec6_sub1image').hasClass('hidden_section6_subimage') && $('.sec6_sub1link').hasClass('hidden_section6_sublink')){
                $('.sec6_sub1').addClass('hidden_sub6');
            }else{
                $('.sec6_sub1').removeClass('hidden_sub6');
            };
            //Check to see if all inputs and textareas in sub2 are empty; if so display none
            if ($('.sec6_sub2titles').hasClass('hidden_section6_subtitle') && $('.sec6_sub2text').hasClass('hidden_section6_subtext') && $('.sec6_sub2image').hasClass('hidden_section6_subimage') && $('.sec6_sub2link').hasClass('hidden_section6_sublink')){
                $('.sec6_sub2').addClass('hidden_sub6');
            }else{
                $('.sec6_sub2').removeClass('hidden_sub6');
            };
            //Check to see if all inputs and textareas in sub6 are empty; if so display none
            if ($('.sec6_sub3titles').hasClass('hidden_section6_subtitle') && $('.sec6_sub3text').hasClass('hidden_section6_subtext') && $('.sec6_sub3image').hasClass('hidden_section6_subimage') && $('.sec6_sub3link').hasClass('hidden_section6_sublink')){
                $('.sec6_sub3').addClass('hidden_sub6');
            }else{
                $('.sec6_sub3').removeClass('hidden_sub6');
            };
            //
            //Check to see if all inputs and textareas in sub1 are empty; if so display none
            if ($('.sec7_sub1titles').hasClass('hidden_section7_subtitle') && $('.sec7_sub1text').hasClass('hidden_section7_subtext') && $('.sec7_sub1image').hasClass('hidden_section7_subimage') && $('.sec7_sub1link').hasClass('hidden_section7_sublink')){
                $('.sec7_sub1').addClass('hidden_sub7');
            }else{
                $('.sec7_sub1').removeClass('hidden_sub7');
            };
            //Check to see if all inputs and textareas in sub2 are empty; if so display none
            if ($('.sec7_sub2titles').hasClass('hidden_section7_subtitle') && $('.sec7_sub2text').hasClass('hidden_section7_subtext') && $('.sec7_sub2image').hasClass('hidden_section7_subimage') && $('.sec7_sub2link').hasClass('hidden_section7_sublink')){
                $('.sec7_sub2').addClass('hidden_sub7');
            }else{
                $('.sec7_sub2').removeClass('hidden_sub7');
            };
            //Check to see if all inputs and textareas in sub7 are empty; if so display none
            if ($('.sec7_sub3titles').hasClass('hidden_section7_subtitle') && $('.sec7_sub3text').hasClass('hidden_section7_subtext') && $('.sec7_sub3image').hasClass('hidden_section7_subimage') && $('.sec7_sub3link').hasClass('hidden_section7_sublink')){
                $('.sec7_sub3').addClass('hidden_sub7');
            }else{
                $('.sec7_sub3').removeClass('hidden_sub7');
            };
            //
            //Check to see if all inputs and textareas in sub1 are empty; if so display none
            if ($('.sec8_sub1titles').hasClass('hidden_section8_subtitle') && $('.sec8_sub1text').hasClass('hidden_section8_subtext') && $('.sec8_sub1image').hasClass('hidden_section8_subimage') && $('.sec8_sub1link').hasClass('hidden_section8_sublink')){
                $('.sec8_sub1').addClass('hidden_sub8');
            }else{
                $('.sec8_sub1').removeClass('hidden_sub8');
            };
            //Check to see if all inputs and textareas in sub2 are empty; if so display none
            if ($('.sec8_sub2titles').hasClass('hidden_section8_subtitle') && $('.sec8_sub2text').hasClass('hidden_section8_subtext') && $('.sec8_sub2image').hasClass('hidden_section8_subimage') && $('.sec8_sub2link').hasClass('hidden_section8_sublink')){
                $('.sec8_sub2').addClass('hidden_sub8');
            }else{
                $('.sec8_sub2').removeClass('hidden_sub8');
            };
            //Check to see if all inputs and textareas in sub8 are empty; if so display none
            if ($('.sec8_sub3titles').hasClass('hidden_section8_subtitle') && $('.sec8_sub3text').hasClass('hidden_section8_subtext') && $('.sec8_sub3image').hasClass('hidden_section8_subimage') && $('.sec8_sub3link').hasClass('hidden_section8_sublink')){
                $('.sec8_sub3').addClass('hidden_sub8');
            }else{
                $('.sec8_sub3').removeClass('hidden_sub8');
            };
            //
            //Check to see if all inputs and textareas in sub1 are empty; if so display none
            if ($('.sec9_sub1titles').hasClass('hidden_section9_subtitle') && $('.sec9_sub1text').hasClass('hidden_section9_subtext') && $('.sec9_sub1image').hasClass('hidden_section9_subimage') && $('.sec9_sub1link').hasClass('hidden_section9_sublink')){
                $('.sec9_sub1').addClass('hidden_sub9');
            }else{
                $('.sec9_sub1').removeClass('hidden_sub9');
            };
            //Check to see if all inputs and textareas in sub2 are empty; if so display none
            if ($('.sec9_sub2titles').hasClass('hidden_section9_subtitle') && $('.sec9_sub2text').hasClass('hidden_section9_subtext') && $('.sec9_sub2image').hasClass('hidden_section9_subimage') && $('.sec9_sub2link').hasClass('hidden_section9_sublink')){
                $('.sec9_sub2').addClass('hidden_sub9');
            }else{
                $('.sec9_sub2').removeClass('hidden_sub9');
            };
            //Check to see if all inputs and textareas in sub9 are empty; if so display none
            if ($('.sec9_sub3titles').hasClass('hidden_section9_subtitle') && $('.sec9_sub3text').hasClass('hidden_section9_subtext') && $('.sec9_sub3image').hasClass('hidden_section9_subimage') && $('.sec9_sub3link').hasClass('hidden_section9_sublink')){
                $('.sec9_sub3').addClass('hidden_sub9');
            }else{
                $('.sec9_sub3').removeClass('hidden_sub9');
            };
            //
            //Check to see if all inputs and textareas in sub1 are empty; if so display none
            if ($('.sec10_sub1titles').hasClass('hidden_section10_subtitle') && $('.sec10_sub1text').hasClass('hidden_section10_subtext') && $('.sec10_sub1image').hasClass('hidden_section10_subimage') && $('.sec10_sub1link').hasClass('hidden_section10_sublink')){
                $('.sec10_sub1').addClass('hidden_sub10');
            }else{
                $('.sec10_sub1').removeClass('hidden_sub10');
            };
            //Check to see if all inputs and textareas in sub2 are empty; if so display none
            if ($('.sec10_sub2titles').hasClass('hidden_section10_subtitle') && $('.sec10_sub2text').hasClass('hidden_section10_subtext') && $('.sec10_sub2image').hasClass('hidden_section10_subimage') && $('.sec10_sub2link').hasClass('hidden_section10_sublink')){
                $('.sec10_sub2').addClass('hidden_sub10');
            }else{
                $('.sec10_sub2').removeClass('hidden_sub10');
            };
            //Check to see if all inputs and textareas in sub10 are empty; if so display none
            if ($('.sec10_sub3titles').hasClass('hidden_section10_subtitle') && $('.sec10_sub3text').hasClass('hidden_section10_subtext') && $('.sec10_sub3image').hasClass('hidden_section10_subimage') && $('.sec10_sub3link').hasClass('hidden_section10_sublink')){
                $('.sec10_sub3').addClass('hidden_sub10');
            }else{
                $('.sec10_sub3').removeClass('hidden_sub10');
            };
        }
        setInterval(subcheck, 100);
        //Sub Section 1
        //add and remove sub section1 titles
        $("#sub-section1_add-title").click(function(){
            $('.hidden_section1_subtitle:first').removeClass('hidden_section1_subtitle').show();
        });
        $(".remove_sub_section1-title").click(function(){
            $(this).parent().addClass('hidden_section1_subtitle');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section1 text
        $("#sub-section1_add-text").click(function(){
            $('.hidden_section1_subtext:first').removeClass('hidden_section1_subtext').show();
        });
        $(".remove_sub_section1-text").click(function(){
            $(this).parent().addClass('hidden_section1_subtext');
            $(this).parent().children('textarea').val('');
        });
        //add and remove sub section1 link
        $("#sub-section1_add-link").click(function(){
            $('.hidden_section1_sublink:first').removeClass('hidden_section1_sublink').show();
        });
        $(".remove_sub_section1-link").click(function(){
            $(this).parent().addClass('hidden_section1_sublink');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section1 image
        $("#sub-section1_add-img").click(function(){
            $('.hidden_section1_subimage:first').removeClass('hidden_section1_subimage').show();
        });
        $(".remove_sub_section1-img").click(function(){
            $(this).parent().addClass('hidden_section1_subimage');
            $(this).parent().children('input').val('');
        });
        //Sub Section 2
        //add and remove sub section2 titles
        $("#sub-section2_add-title").click(function(){
            $('.hidden_section2_subtitle:first').removeClass('hidden_section2_subtitle').show();
        });
        $(".remove_sub_section2-title").click(function(){
            $(this).parent().addClass('hidden_section2_subtitle');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section2 text
        $("#sub-section2_add-text").click(function(){
            $('.hidden_section2_subtext:first').removeClass('hidden_section2_subtext').show();
        });
        $(".remove_sub_section2-text").click(function(){
            $(this).parent().addClass('hidden_section2_subtext');
            $(this).parent().children('textarea').val('');
        });
        //add and remove sub section2 link
        $("#sub-section2_add-link").click(function(){
            $('.hidden_section2_sublink:first').removeClass('hidden_section2_sublink').show();
        });
        $(".remove_sub_section2-link").click(function(){
            $(this).parent().addClass('hidden_section2_sublink');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section2 image
        $("#sub-section2_add-img").click(function(){
            $('.hidden_section2_subimage:first').removeClass('hidden_section2_subimage').show();
        });
        $(".remove_sub_section2-img").click(function(){
            $(this).parent().addClass('hidden_section2_subimage');
            $(this).parent().children('input').val('');
        });
        //Sub Section 3
        //add and remove sub section3 titles
        $("#sub-section3_add-title").click(function(){
            $('.hidden_section3_subtitle:first').removeClass('hidden_section3_subtitle').show();
        });
        $(".remove_sub_section3-title").click(function(){
            $(this).parent().addClass('hidden_section3_subtitle');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section3 text
        $("#sub-section3_add-text").click(function(){
            $('.hidden_section3_subtext:first').removeClass('hidden_section3_subtext').show();
        });
        $(".remove_sub_section3-text").click(function(){
            $(this).parent().addClass('hidden_section3_subtext');
            $(this).parent().children('textarea').val('');
        });
        //add and remove sub section3 link
        $("#sub-section3_add-link").click(function(){
            $('.hidden_section3_sublink:first').removeClass('hidden_section3_sublink').show();
        });
        $(".remove_sub_section3-link").click(function(){
            $(this).parent().addClass('hidden_section3_sublink');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section3 image
        $("#sub-section3_add-img").click(function(){
            $('.hidden_section3_subimage:first').removeClass('hidden_section3_subimage').show();
        });
        $(".remove_sub_section3-img").click(function(){
            $(this).parent().addClass('hidden_section3_subimage');
            $(this).parent().children('input').val('');
        });
        //Sub Section 4
        //add and remove sub section4 titles
        $("#sub-section4_add-title").click(function(){
            $('.hidden_section4_subtitle:first').removeClass('hidden_section4_subtitle').show();
        });
        $(".remove_sub_section4-title").click(function(){
            $(this).parent().addClass('hidden_section4_subtitle');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section4 text
        $("#sub-section4_add-text").click(function(){
            $('.hidden_section4_subtext:first').removeClass('hidden_section4_subtext').show();
        });
        $(".remove_sub_section4-text").click(function(){
            $(this).parent().addClass('hidden_section4_subtext');
            $(this).parent().children('textarea').val('');
        });
        //add and remove sub section4 link
        $("#sub-section4_add-link").click(function(){
            $('.hidden_section4_sublink:first').removeClass('hidden_section4_sublink').show();
        });
        $(".remove_sub_section4-link").click(function(){
            $(this).parent().addClass('hidden_section4_sublink');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section4 image
        $("#sub-section4_add-img").click(function(){
            $('.hidden_section4_subimage:first').removeClass('hidden_section4_subimage').show();
        });
        $(".remove_sub_section4-img").click(function(){
            $(this).parent().addClass('hidden_section4_subimage');
            $(this).parent().children('input').val('');
        });
        //Sub Section 5
        //add and remove sub section5 titles
        $("#sub-section5_add-title").click(function(){
            $('.hidden_section5_subtitle:first').removeClass('hidden_section5_subtitle').show();
        });
        $(".remove_sub_section5-title").click(function(){
            $(this).parent().addClass('hidden_section5_subtitle');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section5 text
        $("#sub-section5_add-text").click(function(){
            $('.hidden_section5_subtext:first').removeClass('hidden_section5_subtext').show();
        });
        $(".remove_sub_section5-text").click(function(){
            $(this).parent().addClass('hidden_section5_subtext');
            $(this).parent().children('textarea').val('');
        });
        //add and remove sub section5 link
        $("#sub-section5_add-link").click(function(){
            $('.hidden_section5_sublink:first').removeClass('hidden_section5_sublink').show();
        });
        $(".remove_sub_section5-link").click(function(){
            $(this).parent().addClass('hidden_section5_sublink');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section5 image
        $("#sub-section5_add-img").click(function(){
            $('.hidden_section5_subimage:first').removeClass('hidden_section5_subimage').show();
        });
        $(".remove_sub_section5-img").click(function(){
            $(this).parent().addClass('hidden_section5_subimage');
            $(this).parent().children('input').val('');
        });
        //Sub Section 6
        //add and remove sub section6 titles
        $("#sub-section6_add-title").click(function(){
            $('.hidden_section6_subtitle:first').removeClass('hidden_section6_subtitle').show();
        });
        $(".remove_sub_section6-title").click(function(){
            $(this).parent().addClass('hidden_section6_subtitle');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section6 text
        $("#sub-section6_add-text").click(function(){
            $('.hidden_section6_subtext:first').removeClass('hidden_section6_subtext').show();
        });
        $(".remove_sub_section6-text").click(function(){
            $(this).parent().addClass('hidden_section6_subtext');
            $(this).parent().children('textarea').val('');
        });
        //add and remove sub section6 link
        $("#sub-section6_add-link").click(function(){
            $('.hidden_section6_sublink:first').removeClass('hidden_section6_sublink').show();
        });
        $(".remove_sub_section6-link").click(function(){
            $(this).parent().addClass('hidden_section6_sublink');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section6 image
        $("#sub-section6_add-img").click(function(){
            $('.hidden_section6_subimage:first').removeClass('hidden_section6_subimage').show();
        });
        $(".remove_sub_section6-img").click(function(){
            $(this).parent().addClass('hidden_section6_subimage');
            $(this).parent().children('input').val('');
        });
        //Sub Section 7
        //add and remove sub section7 titles
        $("#sub-section7_add-title").click(function(){
            $('.hidden_section7_subtitle:first').removeClass('hidden_section7_subtitle').show();
        });
        $(".remove_sub_section7-title").click(function(){
            $(this).parent().addClass('hidden_section7_subtitle');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section7 text
        $("#sub-section7_add-text").click(function(){
            $('.hidden_section7_subtext:first').removeClass('hidden_section7_subtext').show();
        });
        $(".remove_sub_section7-text").click(function(){
            $(this).parent().addClass('hidden_section7_subtext');
            $(this).parent().children('textarea').val('');
        });
        //add and remove sub section7 link
        $("#sub-section7_add-link").click(function(){
            $('.hidden_section7_sublink:first').removeClass('hidden_section7_sublink').show();
        });
        $(".remove_sub_section7-link").click(function(){
            $(this).parent().addClass('hidden_section7_sublink');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section7 image
        $("#sub-section7_add-img").click(function(){
            $('.hidden_section7_subimage:first').removeClass('hidden_section7_subimage').show();
        });
        $(".remove_sub_section7-img").click(function(){
            $(this).parent().addClass('hidden_section7_subimage');
            $(this).parent().children('input').val('');
        });
        //Sub Section 8
        //add and remove sub section8 titles
        $("#sub-section8_add-title").click(function(){
            $('.hidden_section8_subtitle:first').removeClass('hidden_section8_subtitle').show();
        });
        $(".remove_sub_section8-title").click(function(){
            $(this).parent().addClass('hidden_section8_subtitle');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section8 text
        $("#sub-section8_add-text").click(function(){
            $('.hidden_section8_subtext:first').removeClass('hidden_section8_subtext').show();
        });
        $(".remove_sub_section8-text").click(function(){
            $(this).parent().addClass('hidden_section8_subtext');
            $(this).parent().children('textarea').val('');
        });
        //add and remove sub section8 link
        $("#sub-section8_add-link").click(function(){
            $('.hidden_section8_sublink:first').removeClass('hidden_section8_sublink').show();
        });
        $(".remove_sub_section8-link").click(function(){
            $(this).parent().addClass('hidden_section8_sublink');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section8 image
        $("#sub-section8_add-img").click(function(){
            $('.hidden_section8_subimage:first').removeClass('hidden_section8_subimage').show();
        });
        $(".remove_sub_section8-img").click(function(){
            $(this).parent().addClass('hidden_section8_subimage');
            $(this).parent().children('input').val('');
        });
        //Sub Section 9
        //add and remove sub section9 titles
        $("#sub-section9_add-title").click(function(){
            $('.hidden_section9_subtitle:first').removeClass('hidden_section9_subtitle').show();
        });
        $(".remove_sub_section9-title").click(function(){
            $(this).parent().addClass('hidden_section9_subtitle');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section9 text
        $("#sub-section9_add-text").click(function(){
            $('.hidden_section9_subtext:first').removeClass('hidden_section9_subtext').show();
        });
        $(".remove_sub_section9-text").click(function(){
            $(this).parent().addClass('hidden_section9_subtext');
            $(this).parent().children('textarea').val('');
        });
        //add and remove sub section9 link
        $("#sub-section9_add-link").click(function(){
            $('.hidden_section9_sublink:first').removeClass('hidden_section9_sublink').show();
        });
        $(".remove_sub_section9-link").click(function(){
            $(this).parent().addClass('hidden_section9_sublink');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section9 image
        $("#sub-section9_add-img").click(function(){
            $('.hidden_section9_subimage:first').removeClass('hidden_section9_subimage').show();
        });
        $(".remove_sub_section9-img").click(function(){
            $(this).parent().addClass('hidden_section9_subimage');
            $(this).parent().children('input').val('');
        });
        //Sub Section 10
        //add and remove sub section10 titles
        $("#sub-section10_add-title").click(function(){
            $('.hidden_section10_subtitle:first').removeClass('hidden_section10_subtitle').show();
        });
        $(".remove_sub_section10-title").click(function(){
            $(this).parent().addClass('hidden_section10_subtitle');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section10 text
        $("#sub-section10_add-text").click(function(){
            $('.hidden_section10_subtext:first').removeClass('hidden_section10_subtext').show();
        });
        $(".remove_sub_section10-text").click(function(){
            $(this).parent().addClass('hidden_section10_subtext');
            $(this).parent().children('textarea').val('');
        });
        //add and remove sub section10 link
        $("#sub-section10_add-link").click(function(){
            $('.hidden_section10_sublink:first').removeClass('hidden_section10_sublink').show();
        });
        $(".remove_sub_section10-link").click(function(){
            $(this).parent().addClass('hidden_section10_sublink');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section10 image
        $("#sub-section10_add-img").click(function(){
            $('.hidden_section10_subimage:first').removeClass('hidden_section10_subimage').show();
        });
        $(".remove_sub_section10-img").click(function(){
            $(this).parent().addClass('hidden_section10_subimage');
            $(this).parent().children('input').val('');
        });
        //add and remove link boxes
        $("#linkbox_add").click(function(){
            $('.hidden_lp:first').removeClass('hidden_lp').show();
        });
        $(".remove_linkbox").click(function(){
            $(this).parent().addClass('hidden_lp');
            $(this).parent().children('fieldset').children('input').val('');
            $(this).parent().children('fieldset').children('textarea').val('');
        });
        //Toggle ini
        $('#toggle_ini').click(function(){
            if ($('#subform_ini').hasClass('hidden_ini') && $('#subform_xml').hasClass('show_xml')) {
                $('#subform_ini').removeClass('hidden_ini').addClass('show_ini');
                $('#subform_xml').removeClass('show_xml').addClass('hidden_xml');
            } else if ( $('#subform_ini').hasClass('hidden_ini') && $('#subform_xml').hasClass('hidden_xml') ) {
                $('#subform_ini').removeClass('hidden_ini').addClass('show_ini');
            } else if ($('#subform_ini').hasClass('show_ini') && $('#subform_xml').hasClass('hidden_xml')) {
                return false;
            };
        });
        //add and remove dual ini
        $('#dualini_add').click(function(){
            if ($('#subform_dualini').hasClass('hidden_ini')) {
                $('#subform_dualini').removeClass('hidden_ini');
            } else if (!$('#subform_dualini').hasClass('hidden_ini') && !$('#subform_dualini').hasClass('lock_dualini')) {
                $('#subform_dualini').addClass('hidden_ini');
            };
        });

        //Toggle xforms
        $('#toggle_xml').click(function(){
            if ($('#subform_xml').hasClass('hidden_xml') && $('#subform_ini').hasClass('show_ini')) {
                $('#subform_xml').removeClass('hidden_xml').addClass('show_xml');
                $('#subform_ini').removeClass('show_ini').addClass('hidden_ini');
            } else if ( $('#subform_xml').hasClass('hidden_xml') && $('#subform_ini').hasClass('hidden_ini') ) {
                $('#subform_xml').removeClass('hidden_xml').addClass('show_xml');
            }else if ($('#subform_xml').hasClass('show_xml') && $('#subform_ini').hasClass('hidden_ini')) {
                return false;
            };
        });
        //add and remove dual xml
        $('#dualxml_add').click(function(){
            if ($('#subform_dualxml').hasClass('hidden_xml')) {
                $('#subform_dualxml').removeClass('hidden_xml');
            } else if (!$('#subform_dualxml').hasClass('hidden_xml') && !$('#subform_dualxml').hasClass('lock_dualxml')) {
                $('#subform_dualxml').addClass('hidden_xml');
            };
        });
    });
</script>
    <?php
    $header_meta = <<<HEREDOC
    <div class="lpboxes">
        <h3>Header/Footer</h3>
        <fieldset>
            <label>Template</label>
            <select name="e_lp[_lp_template]">
            <option value="$lp_template">$lp_template</option>
                <optgroup label="options">$lp_template_options</optgroup>
            </select>
            <label>Logo <span>(required)</span></label><input type="text" name="e_lp[_lp_logo]" value="$lp_logo"  />
            <label>Program Title</label><input type="text" name="e_lp[_lp_program]" value="$lp_program"  />
            <label>Slogan</label><textarea name="e_lp[_lp_slogan_text]" >$lp_slogan_text</textarea>
            <label>Header Image</label><input type="text" name="e_lp[_lp_hero_img]" value="$lp_hero_img"  />
        </fieldset>
     </div>
HEREDOC;
    echo $header_meta;
//----------------------------------------------------- Sections --------------------------------------------------------------
    $section1 = <<< HEREDOC
        <div class="lpboxes section {$section_hidden($section1_text)} " style="display: block;">
        <h3>Section 1</h3>
        <fieldset>
            <label>Title</label>
            <input type="text" name="e_lp[_section1-title]" value="$section1_title" />
            <label>HTML Text</label>
            <textarea name="e_lp[_section1-text]">$section1_text</textarea>
            <label>Image</label>
            <input type="text" name="e_lp[_section1-image]" value="$section1_image" />
            <label>Page Link</label>
            {$wp_dropdown_pages('echo=0&name=e_lp[_section1-link]&selected='.$section1_link)}            
            <div class="sublinks">
                <a id="sub-section1_add-title">Add Title</a>
                <a id="sub-section1_add-text">Add Text Box</a>
                <a id="sub-section1_add-img">Add Image</a>
                <a id="sub-section1_add-link">Add Link</a>
                <div class="clear"></div>
            </div>
            <div id="section1_sub1" class="sub-section sec1_sub1">
                <h3>Sub Section 1</h3>
                    <div class="sec1_sub1titles {$section1_hidden_subtitle($section1_title2)} ">
                        <label class="remove_sub_section1-title">Title</label>
                        <input type="text" name="e_lp[_section1-title2]" value="$section1_title2" />
                    </div>
                    <div class="sec1_sub1text {$section1_hidden_subtext($section1_text2)} ">
                        <label class="remove_sub_section1-text">Text</label>
                        <textarea name="e_lp[_section1-text2]">$section1_text2</textarea>
                    </div>
                    <div class="sec1_sub1image {$section1_hidden_subimage($section1_image2)} ">
                        <label class="remove_sub_section1-img">Image/Video</label>
                        <textarea class="textvid" name="e_lp[_section1-image2]">$section1_image2</textarea>
                    </div>
                    <div class="sec1_sub1link {$section1_hidden_sublink($section1_link2)} ">
                        <label class="remove_sub_section1-link">Link</label>
                        <input type="text" name="e_lp[_section1-link2]" value="$section1_link2" />
                    </div>                    
            </div>
            <div id="section1_sub2" class="sub-section  sec1_sub2">
                <h3>Sub Section 2</h3>
                    <div class="sec1_sub2titles {$section1_hidden_subtitle($section1_title3)} ">
                        <label class="remove_sub_section1-title">Title</label>
                        <input type="text" name="e_lp[_section1-title3]" value="$section1_title3" />
                    </div>
                    <div class="sec1_sub2text {$section1_hidden_subtext($section1_text3)} ">
                        <label class="remove_sub_section1-text">Text</label>
                        <textarea name="e_lp[_section1-text3]">$section1_text3</textarea>
                    </div>
                    <div class="sec1_sub2image {$section1_hidden_subimage($section1_image3)} ">
                        <label class="remove_sub_section1-img">Image/Video</label>
                        <textarea class="textvid" name="e_lp[_section1-image3]">$section1_image3</textarea>
                    </div>
                    <div class="sec1_sub2link {$section1_hidden_sublink($section1_link3)} ">
                        <label class="remove_sub_section1-link">Link</label>
                        <input type="text" name="e_lp[_section1-link3]" value="$section1_link3" />
                    </div>                    
            </div>
            <div id="section1_sub3" class="sub-section sec1_sub3">
                <h3>Sub Section 3</h3>
                    <div class="sec1_sub3titles {$section1_hidden_subtitle($section1_title4)} ">
                        <label class="remove_sub_section1-title">Title</label>
                        <input type="text" name="e_lp[_section1-title4]" value="$section1_title4" />
                    </div>
                    <div class="sec1_sub3text {$section1_hidden_subtext($section1_text4)} ">
                        <label  class="remove_sub_section1-text">Text</label>
                        <textarea name="e_lp[_section1-text4]">$section1_text4</textarea>
                    </div>
                    <div class="sec1_sub3image {$section1_hidden_subimage($section1_image4)} ">
                        <label class="remove_sub_section1-img">Image/Video</label>
                        <textarea class="textvid" name="e_lp[_section1-image4]">$section1_image4</textarea>
                    </div>
                    <div class="sec1_sub3link {$section1_hidden_sublink($section1_link4)} ">
                        <label class="remove_sub_section1-link">Link</label>
                        <input type="text" name="e_lp[_section1-link4]" value="$section1_link4" />
                    </div>                    
            </div>
            <div class="clear"></div>
         </fieldset>
    </div>
HEREDOC;
    echo $section1;

    $section2 = <<< HEREDOC
        <div class="lpboxes section {$section_hidden($section2_text)} ">
        <h3>Section 2</h3>
        <fieldset>
            <label>Title</label>
            <input type="text" name="e_lp[_section2-title]" value="$section2_title" />
            <label>HTML Text</label>
            <textarea name="e_lp[_section2-text]">$section2_text</textarea>
            <label>Image</label>
            <input type="text" name="e_lp[_section2-image]" value="$section2_image" />
            <label>Page Link</label>
            {$wp_dropdown_pages('echo=0&name=e_lp[_section2-link]&selected='.$section2_link)}            
            <div class="sublinks">
                <a id="sub-section2_add-title">Add Title</a>
                <a id="sub-section2_add-text">Add Text Box</a>
                <a id="sub-section2_add-img">Add Image</a>
                <a id="sub-section2_add-link">Add Link</a>
                <div class="clear"></div>
            </div>
            <div id="section2_sub1" class="sub-section sec2_sub1">
                <h3>Sub Section 1</h3>
                    <div class="sec2_sub1titles {$section2_hidden_subtitle($section2_title2)} ">
                        <label class="remove_sub_section2-title">Title</label>
                        <input type="text" name="e_lp[_section2-title2]" value="$section2_title2" />
                    </div>
                    <div class="sec2_sub1text {$section2_hidden_subtext($section2_text2)} ">
                        <label class="remove_sub_section2-text">Text</label>
                        <textarea name="e_lp[_section2-text2]">$section2_text2</textarea>
                    </div>
                    <div class="sec2_sub1image {$section2_hidden_subimage($section2_image2)} ">
                        <label class="remove_sub_section2-img">Image/Video</label>
                        <textarea class="textvid" name="e_lp[_section2-image2]">$section2_image2</textarea>
                    </div>
                    <div class="sec2_sub1link {$section2_hidden_sublink($section2_link2)} ">
                        <label class="remove_sub_section2-link">Link</label>
                        <input type="text" name="e_lp[_section2-link2]" value="$section2_link2" />
                    </div>                    
            </div>
            <div id="section2_sub2" class="sub-section  sec2_sub2">
                <h3>Sub Section 2</h3>
                    <div class="sec2_sub2titles {$section2_hidden_subtitle($section2_title3)} ">
                        <label class="remove_sub_section2-title">Title</label>
                        <input type="text" name="e_lp[_section2-title3]" value="$section2_title3" />
                    </div>
                    <div class="sec2_sub2text {$section2_hidden_subtext($section2_text3)} ">
                        <label class="remove_sub_section2-text">Text</label>
                        <textarea name="e_lp[_section2-text3]">$section2_text3</textarea>
                    </div>
                    <div class="sec2_sub2image {$section2_hidden_subimage($section2_image3)} ">
                        <label class="remove_sub_section2-img">Image/Video</label>
                        <textarea class="textvid" name="e_lp[_section2-image3]">$section2_image3</textarea>
                    </div>
                    <div class="sec2_sub2link {$section2_hidden_sublink($section2_link3)} ">
                        <label class="remove_sub_section2-link">Link</label>
                        <input type="text" name="e_lp[_section2-link3]" value="$section2_link3" />
                    </div>                    
            </div>
            <div id="section2_sub3" class="sub-section sec2_sub3">
                <h3>Sub Section 3</h3>
                    <div class="sec2_sub3titles {$section2_hidden_subtitle($section2_title4)} ">
                        <label class="remove_sub_section2-title">Title</label>
                        <input type="text" name="e_lp[_section2-title4]" value="$section2_title4" />
                    </div>
                    <div class="sec2_sub3text {$section2_hidden_subtext($section2_text4)} ">
                        <label  class="remove_sub_section2-text">Text</label>
                        <textarea name="e_lp[_section2-text4]">$section2_text4</textarea>
                    </div>
                    <div class="sec2_sub3image {$section2_hidden_subimage($section2_image4)} ">
                        <label class="remove_sub_section2-img">Image/Video</label>
                        <textarea class="textvid" name="e_lp[_section2-image4]">$section2_image4</textarea>
                    </div>
                    <div class="sec2_sub3link {$section2_hidden_sublink($section2_link4)} ">
                        <label class="remove_sub_section2-link">Link</label>
                        <input type="text" name="e_lp[_section2-link4]" value="$section2_link4" />
                    </div>                    
            </div>
            <div class="clear"></div>
         </fieldset>
         <a class="remove_section">Remove Section</a>
    </div>
HEREDOC;
    echo $section2;

    $section3 = <<< HEREDOC
        <div class="lpboxes section {$section_hidden($section3_text)} ">
        <h3>Section 3</h3>
        <fieldset>
            <label>Title</label>
            <input type="text" name="e_lp[_section3-title]" value="$section3_title" />
            <label>HTML Text</label>
            <textarea name="e_lp[_section3-text]">$section3_text</textarea>
            <label>Image</label>
            <input type="text" name="e_lp[_section3-image]" value="$section3_image" />
            <label>Page Link</label>
            {$wp_dropdown_pages('echo=0&name=e_lp[_section3-link]&selected='.$section3_link)}            
            <div class="sublinks">
                <a id="sub-section3_add-title">Add Title</a>
                <a id="sub-section3_add-text">Add Text Box</a>
                <a id="sub-section3_add-img">Add Image</a>
                <a id="sub-section3_add-link">Add Link</a>
                <div class="clear"></div>
            </div>
            <div id="section3_sub1" class="sub-section sec3_sub1">
                <h3>Sub Section 1</h3>
                    <div class="sec3_sub1titles {$section3_hidden_subtitle($section3_title2)} ">
                        <label class="remove_sub_section3-title">Title</label>
                        <input type="text" name="e_lp[_section3-title2]" value="$section3_title2" />
                    </div>
                    <div class="sec3_sub1text {$section3_hidden_subtext($section3_text2)} ">
                        <label class="remove_sub_section3-text">Text</label>
                        <textarea name="e_lp[_section3-text2]">$section3_text2</textarea>
                    </div>
                    <div class="sec3_sub1image {$section3_hidden_subimage($section3_image2)} ">
                        <label class="remove_sub_section3-img">Image/Video</label>
                        <textarea class="textvid" name="e_lp[_section3-image2]">$section3_image2</textarea>
                    </div>
                    <div class="sec3_sub1link {$section3_hidden_sublink($section3_link2)} ">
                        <label class="remove_sub_section3-link">Link</label>
                        <input type="text" name="e_lp[_section3-link2]" value="$section3_link2" />
                    </div>                    
            </div>
            <div id="section3_sub2" class="sub-section  sec3_sub2">
                <h3>Sub Section 2</h3>
                    <div class="sec3_sub2titles {$section3_hidden_subtitle($section3_title3)} ">
                        <label class="remove_sub_section3-title">Title</label>
                        <input type="text" name="e_lp[_section3-title3]" value="$section3_title3" />
                    </div>
                    <div class="sec3_sub2text {$section3_hidden_subtext($section3_text3)} ">
                        <label class="remove_sub_section3-text">Text</label>
                        <textarea name="e_lp[_section3-text3]">$section3_text3</textarea>
                    </div>
                    <div class="sec3_sub2image {$section3_hidden_subimage($section3_image3)} ">
                        <label class="remove_sub_section3-img">Image/Video</label>
                        <textarea class="textvid" name="e_lp[_section3-image3]">$section3_image3</textarea>
                    </div>
                    <div class="sec3_sub2link {$section3_hidden_sublink($section3_link3)} ">
                        <label class="remove_sub_section3-link">Link</label>
                        <input type="text" name="e_lp[_section3-link3]" value="$section3_link3" />
                    </div>                    
            </div>
            <div id="section3_sub3" class="sub-section sec3_sub3">
                <h3>Sub Section 3</h3>
                    <div class="sec3_sub3titles {$section3_hidden_subtitle($section3_title4)} ">
                        <label class="remove_sub_section3-title">Title</label>
                        <input type="text" name="e_lp[_section3-title4]" value="$section3_title4" />
                    </div>
                    <div class="sec3_sub3text {$section3_hidden_subtext($section3_text4)} ">
                        <label  class="remove_sub_section3-text">Text</label>
                        <textarea name="e_lp[_section3-text4]">$section3_text4</textarea>
                    </div>
                    <div class="sec3_sub3image {$section3_hidden_subimage($section3_image4)} ">
                        <label class="remove_sub_section3-img">Image/Video</label>
                        <textarea class="textvid" name="e_lp[_section3-image4]">$section3_image4</textarea>
                    </div>
                    <div class="sec3_sub3link {$section3_hidden_sublink($section3_link4)} ">
                        <label class="remove_sub_section3-link">Link</label>
                        <input type="text" name="e_lp[_section3-link4]" value="$section3_link4" />
                    </div>                    
            </div>
            <div class="clear"></div>
         </fieldset>
         <a class="remove_section">Remove Section</a>
    </div>
HEREDOC;
    echo $section3;

    $section4 = <<< HEREDOC
        <div class="lpboxes section {$section_hidden($section4_text)} ">
        <h3>Section 4</h3>
        <fieldset>
            <label>Title</label>
            <input type="text" name="e_lp[_section4-title]" value="$section4_title" />
            <label>HTML Text</label>
            <textarea name="e_lp[_section4-text]">$section4_text</textarea>
            <label>Image</label>
            <input type="text" name="e_lp[_section4-image]" value="$section4_image" />
            <label>Page Link</label>
            {$wp_dropdown_pages('echo=0&name=e_lp[_section4-link]&selected='.$section4_link)}            
            <div class="sublinks">
                <a id="sub-section4_add-title">Add Title</a>
                <a id="sub-section4_add-text">Add Text Box</a>
                <a id="sub-section4_add-img">Add Image</a>
                <a id="sub-section4_add-link">Add Link</a>
                <div class="clear"></div>
            </div>
            <div id="section4_sub1" class="sub-section sec4_sub1">
                <h3>Sub Section 1</h3>
                    <div class="sec4_sub1titles {$section4_hidden_subtitle($section4_title2)} ">
                        <label class="remove_sub_section4-title">Title</label>
                        <input type="text" name="e_lp[_section4-title2]" value="$section4_title2" />
                    </div>
                    <div class="sec4_sub1text {$section4_hidden_subtext($section4_text2)} ">
                        <label class="remove_sub_section4-text">Text</label>
                        <textarea name="e_lp[_section4-text2]">$section4_text2</textarea>
                    </div>
                    <div class="sec4_sub1image {$section4_hidden_subimage($section4_image2)} ">
                        <label class="remove_sub_section4-img">Image/Video</label>
                        <textarea class="textvid" name="e_lp[_section4-image2]">$section4_image2</textarea>
                    </div>
                    <div class="sec4_sub1link {$section4_hidden_sublink($section4_link2)} ">
                        <label class="remove_sub_section4-link">Link</label>
                        <input type="text" name="e_lp[_section4-link2]" value="$section4_link2" />
                    </div>                    
            </div>
            <div id="section4_sub2" class="sub-section  sec4_sub2">
                <h3>Sub Section 2</h3>
                    <div class="sec4_sub2titles {$section4_hidden_subtitle($section4_title3)} ">
                        <label class="remove_sub_section4-title">Title</label>
                        <input type="text" name="e_lp[_section4-title3]" value="$section4_title3" />
                    </div>
                    <div class="sec4_sub2text {$section4_hidden_subtext($section4_text3)} ">
                        <label class="remove_sub_section4-text">Text</label>
                        <textarea name="e_lp[_section4-text3]">$section4_text3</textarea>
                    </div>
                    <div class="sec4_sub2image {$section4_hidden_subimage($section4_image3)} ">
                        <label class="remove_sub_section4-img">Image/Video</label>
                        <textarea class="textvid" name="e_lp[_section4-image3]">$section4_image3</textarea>
                    </div>
                    <div class="sec4_sub2link {$section4_hidden_sublink($section4_link3)} ">
                        <label class="remove_sub_section4-link">Link</label>
                        <input type="text" name="e_lp[_section4-link3]" value="$section4_link3" />
                    </div>                    
            </div>
            <div id="section4_sub3" class="sub-section sec4_sub3">
                <h3>Sub Section 3</h3>
                    <div class="sec4_sub3titles {$section4_hidden_subtitle($section4_title4)} ">
                        <label class="remove_sub_section4-title">Title</label>
                        <input type="text" name="e_lp[_section4-title4]" value="$section4_title4" />
                    </div>
                    <div class="sec4_sub3text {$section4_hidden_subtext($section4_text4)} ">
                        <label  class="remove_sub_section4-text">Text</label>
                        <textarea name="e_lp[_section4-text4]">$section4_text4</textarea>
                    </div>
                    <div class="sec4_sub3image {$section4_hidden_subimage($section4_image4)} ">
                        <label class="remove_sub_section4-img">Image/Video</label>
                        <textarea class="textvid" name="e_lp[_section4-image4]">$section4_image4</textarea>
                    </div>
                    <div class="sec4_sub3link {$section4_hidden_sublink($section4_link4)} ">
                        <label class="remove_sub_section4-link">Link</label>
                        <input type="text" name="e_lp[_section4-link4]" value="$section4_link4" />
                    </div>                    
            </div>
            <div class="clear"></div>
         </fieldset>
         <a class="remove_section">Remove Section</a>
    </div>
HEREDOC;
    echo $section4;

    $section5 = <<< HEREDOC
        <div class="lpboxes section {$section_hidden($section5_text)} ">
        <h3>Section 5</h3>
        <fieldset>
            <label>Title</label>
            <input type="text" name="e_lp[_section5-title]" value="$section5_title" />
            <label>HTML Text</label>
            <textarea name="e_lp[_section5-text]">$section5_text</textarea>
            <label>Image</label>
            <input type="text" name="e_lp[_section5-image]" value="$section5_image" />
            <label>Page Link</label>
            {$wp_dropdown_pages('echo=0&name=e_lp[_section5-link]&selected='.$section5_link)}            
            <div class="sublinks">
                <a id="sub-section5_add-title">Add Title</a>
                <a id="sub-section5_add-text">Add Text Box</a>
                <a id="sub-section5_add-img">Add Image</a>
                <a id="sub-section5_add-link">Add Link</a>
                <div class="clear"></div>
            </div>
            <div id="section5_sub1" class="sub-section sec5_sub1">
                <h3>Sub Section 1</h3>
                    <div class="sec5_sub1titles {$section5_hidden_subtitle($section5_title2)} ">
                        <label class="remove_sub_section5-title">Title</label>
                        <input type="text" name="e_lp[_section5-title2]" value="$section5_title2" />
                    </div>
                    <div class="sec5_sub1text {$section5_hidden_subtext($section5_text2)} ">
                        <label class="remove_sub_section5-text">Text</label>
                        <textarea name="e_lp[_section5-text2]">$section5_text2</textarea>
                    </div>
                    <div class="sec5_sub1image {$section5_hidden_subimage($section5_image2)} ">
                        <label class="remove_sub_section5-img">Image/Video</label>
                        <textarea class="textvid" name="e_lp[_section5-image2]">$section5_image2</textarea>
                    </div>
                    <div class="sec5_sub1link {$section5_hidden_sublink($section5_link2)} ">
                        <label class="remove_sub_section5-link">Link</label>
                        <input type="text" name="e_lp[_section5-link2]" value="$section5_link2" />
                    </div>                    
            </div>
            <div id="section5_sub2" class="sub-section  sec5_sub2">
                <h3>Sub Section 2</h3>
                    <div class="sec5_sub2titles {$section5_hidden_subtitle($section5_title3)} ">
                        <label class="remove_sub_section5-title">Title</label>
                        <input type="text" name="e_lp[_section5-title3]" value="$section5_title3" />
                    </div>
                    <div class="sec5_sub2text {$section5_hidden_subtext($section5_text3)} ">
                        <label class="remove_sub_section5-text">Text</label>
                        <textarea name="e_lp[_section5-text3]">$section5_text3</textarea>
                    </div>
                    <div class="sec5_sub2image {$section5_hidden_subimage($section5_image3)} ">
                        <label class="remove_sub_section5-img">Image/Video</label>
                        <textarea class="textvid" name="e_lp[_section5-image3]">$section5_image3</textarea>
                    </div>
                    <div class="sec5_sub2link {$section5_hidden_sublink($section5_link3)} ">
                        <label class="remove_sub_section5-link">Link</label>
                        <input type="text" name="e_lp[_section5-link3]" value="$section5_link3" />
                    </div>                    
            </div>
            <div id="section5_sub3" class="sub-section sec5_sub3">
                <h3>Sub Section 3</h3>
                    <div class="sec5_sub3titles {$section5_hidden_subtitle($section5_title4)} ">
                        <label class="remove_sub_section5-title">Title</label>
                        <input type="text" name="e_lp[_section5-title4]" value="$section5_title4" />
                    </div>
                    <div class="sec5_sub3text {$section5_hidden_subtext($section5_text4)} ">
                        <label  class="remove_sub_section5-text">Text</label>
                        <textarea name="e_lp[_section5-text4]">$section5_text4</textarea>
                    </div>
                    <div class="sec5_sub3image {$section5_hidden_subimage($section5_image4)} ">
                        <label class="remove_sub_section5-img">Image/Video</label>
                        <textarea class="textvid" name="e_lp[_section5-image4]">$section5_image4</textarea>
                    </div>
                    <div class="sec5_sub3link {$section5_hidden_sublink($section5_link4)} ">
                        <label class="remove_sub_section5-link">Link</label>
                        <input type="text" name="e_lp[_section5-link4]" value="$section5_link4" />
                    </div>                    
            </div>
            <div class="clear"></div>
         </fieldset>
         <a class="remove_section">Remove Section</a>
    </div>
HEREDOC;
    echo $section5;

    $section6 = <<< HEREDOC
        <div class="lpboxes section {$section_hidden($section6_text)} ">
        <h3>Section 6</h3>
        <fieldset>
            <label>Title</label>
            <input type="text" name="e_lp[_section6-title]" value="$section6_title" />
            <label>HTML Text</label>
            <textarea name="e_lp[_section6-text]">$section6_text</textarea>
            <label>Image</label>
            <input type="text" name="e_lp[_section6-image]" value="$section6_image" />
            <label>Page Link</label>
            {$wp_dropdown_pages('echo=0&name=e_lp[_section6-link]&selected='.$section6_link)}            
            <div class="sublinks">
                <a id="sub-section6_add-title">Add Title</a>
                <a id="sub-section6_add-text">Add Text Box</a>
                <a id="sub-section6_add-img">Add Image</a>
                <a id="sub-section6_add-link">Add Link</a>
                <div class="clear"></div>
            </div>
            <div id="section6_sub1" class="sub-section sec6_sub1">
                <h3>Sub Section 1</h3>
                    <div class="sec6_sub1titles {$section6_hidden_subtitle($section6_title2)} ">
                        <label class="remove_sub_section6-title">Title</label>
                        <input type="text" name="e_lp[_section6-title2]" value="$section6_title2" />
                    </div>
                    <div class="sec6_sub1text {$section6_hidden_subtext($section6_text2)} ">
                        <label class="remove_sub_section6-text">Text</label>
                        <textarea name="e_lp[_section6-text2]">$section6_text2</textarea>
                    </div>
                    <div class="sec6_sub1image {$section6_hidden_subimage($section6_image2)} ">
                        <label class="remove_sub_section6-img">Image/Video</label>
                        <textarea class="textvid" name="e_lp[_section6-image2]">$section6_image2</textarea>
                    </div>
                    <div class="sec6_sub1link {$section6_hidden_sublink($section6_link2)} ">
                        <label class="remove_sub_section6-link">Link</label>
                        <input type="text" name="e_lp[_section6-link2]" value="$section6_link2" />
                    </div>                    
            </div>
            <div id="section6_sub2" class="sub-section  sec6_sub2">
                <h3>Sub Section 2</h3>
                    <div class="sec6_sub2titles {$section6_hidden_subtitle($section6_title3)} ">
                        <label class="remove_sub_section6-title">Title</label>
                        <input type="text" name="e_lp[_section6-title3]" value="$section6_title3" />
                    </div>
                    <div class="sec6_sub2text {$section6_hidden_subtext($section6_text3)} ">
                        <label class="remove_sub_section6-text">Text</label>
                        <textarea name="e_lp[_section6-text3]">$section6_text3</textarea>
                    </div>
                    <div class="sec6_sub2image {$section6_hidden_subimage($section6_image3)} ">
                        <label class="remove_sub_section6-img">Image/Video</label>
                        <textarea class="textvid" name="e_lp[_section6-image3]">$section6_image3</textarea>
                    </div>
                    <div class="sec6_sub2link {$section6_hidden_sublink($section6_link3)} ">
                        <label class="remove_sub_section6-link">Link</label>
                        <input type="text" name="e_lp[_section6-link3]" value="$section6_link3" />
                    </div>                    
            </div>
            <div id="section6_sub3" class="sub-section sec6_sub3">
                <h3>Sub Section 3</h3>
                    <div class="sec6_sub3titles {$section6_hidden_subtitle($section6_title4)} ">
                        <label class="remove_sub_section6-title">Title</label>
                        <input type="text" name="e_lp[_section6-title4]" value="$section6_title4" />
                    </div>
                    <div class="sec6_sub3text {$section6_hidden_subtext($section6_text4)} ">
                        <label  class="remove_sub_section6-text">Text</label>
                        <textarea name="e_lp[_section6-text4]">$section6_text4</textarea>
                    </div>
                    <div class="sec6_sub3image {$section6_hidden_subimage($section6_image4)} ">
                        <label class="remove_sub_section6-img">Image/Video</label>
                        <textarea class="textvid" name="e_lp[_section6-image4]">$section6_image4</textarea>
                    </div>
                    <div class="sec6_sub3link {$section6_hidden_sublink($section6_link4)} ">
                        <label class="remove_sub_section6-link">Link</label>
                        <input type="text" name="e_lp[_section6-link4]" value="$section6_link4" />
                    </div>                    
            </div>
            <div class="clear"></div>
         </fieldset>
         <a class="remove_section">Remove Section</a>
    </div>
HEREDOC;
    echo $section6;

    $section7 = <<< HEREDOC
        <div class="lpboxes section {$section_hidden($section7_text)} ">
        <h3>Section 7</h3>
        <fieldset>
            <label>Title</label>
            <input type="text" name="e_lp[_section7-title]" value="$section7_title" />
            <label>HTML Text</label>
            <textarea name="e_lp[_section7-text]">$section7_text</textarea>
            <label>Image</label>
            <input type="text" name="e_lp[_section7-image]" value="$section7_image" />
            <label>Page Link</label>
            {$wp_dropdown_pages('echo=0&name=e_lp[_section7-link]&selected='.$section7_link)}            
            <div class="sublinks">
                <a id="sub-section7_add-title">Add Title</a>
                <a id="sub-section7_add-text">Add Text Box</a>
                <a id="sub-section7_add-img">Add Image</a>
                <a id="sub-section7_add-link">Add Link</a>
                <div class="clear"></div>
            </div>
            <div id="section7_sub1" class="sub-section sec7_sub1">
                <h3>Sub Section 1</h3>
                    <div class="sec7_sub1titles {$section7_hidden_subtitle($section7_title2)} ">
                        <label class="remove_sub_section7-title">Title</label>
                        <input type="text" name="e_lp[_section7-title2]" value="$section7_title2" />
                    </div>
                    <div class="sec7_sub1text {$section7_hidden_subtext($section7_text2)} ">
                        <label class="remove_sub_section7-text">Text</label>
                        <textarea name="e_lp[_section7-text2]">$section7_text2</textarea>
                    </div>
                    <div class="sec7_sub1image {$section7_hidden_subimage($section7_image2)} ">
                        <label class="remove_sub_section7-img">Image/Video</label>
                        <textarea class="textvid" name="e_lp[_section7-image2]">$section7_image2</textarea>
                    </div>
                    <div class="sec7_sub1link {$section7_hidden_sublink($section7_link2)} ">
                        <label class="remove_sub_section7-link">Link</label>
                        <input type="text" name="e_lp[_section7-link2]" value="$section7_link2" />
                    </div>                    
            </div>
            <div id="section7_sub2" class="sub-section  sec7_sub2">
                <h3>Sub Section 2</h3>
                    <div class="sec7_sub2titles {$section7_hidden_subtitle($section7_title3)} ">
                        <label class="remove_sub_section7-title">Title</label>
                        <input type="text" name="e_lp[_section7-title3]" value="$section7_title3" />
                    </div>
                    <div class="sec7_sub2text {$section7_hidden_subtext($section7_text3)} ">
                        <label class="remove_sub_section7-text">Text</label>
                        <textarea name="e_lp[_section7-text3]">$section7_text3</textarea>
                    </div>
                    <div class="sec7_sub2image {$section7_hidden_subimage($section7_image3)} ">
                        <label class="remove_sub_section7-img">Image/Video</label>
                        <textarea class="textvid" name="e_lp[_section7-image3]">$section7_image3</textarea>
                    </div>
                    <div class="sec7_sub2link {$section7_hidden_sublink($section7_link3)} ">
                        <label class="remove_sub_section7-link">Link</label>
                        <input type="text" name="e_lp[_section7-link3]" value="$section7_link3" />
                    </div>                    
            </div>
            <div id="section7_sub3" class="sub-section sec7_sub3">
                <h3>Sub Section 3</h3>
                    <div class="sec7_sub3titles {$section7_hidden_subtitle($section7_title4)} ">
                        <label class="remove_sub_section7-title">Title</label>
                        <input type="text" name="e_lp[_section7-title4]" value="$section7_title4" />
                    </div>
                    <div class="sec7_sub3text {$section7_hidden_subtext($section7_text4)} ">
                        <label  class="remove_sub_section7-text">Text</label>
                        <textarea name="e_lp[_section7-text4]">$section7_text4</textarea>
                    </div>
                    <div class="sec7_sub3image {$section7_hidden_subimage($section7_image4)} ">
                        <label class="remove_sub_section7-img">Image/Video</label>
                        <textarea class="textvid" name="e_lp[_section7-image4]">$section7_image4</textarea>
                    </div>
                    <div class="sec7_sub3link {$section7_hidden_sublink($section7_link4)} ">
                        <label class="remove_sub_section7-link">Link</label>
                        <input type="text" name="e_lp[_section7-link4]" value="$section7_link4" />
                    </div>                    
            </div>
            <div class="clear"></div>
         </fieldset>
         <a class="remove_section">Remove Section</a>
    </div>
HEREDOC;
    echo $section7;

    $section8 = <<< HEREDOC
        <div class="lpboxes section {$section_hidden($section8_text)} ">
        <h3>Section 8</h3>
        <fieldset>
            <label>Title</label>
            <input type="text" name="e_lp[_section8-title]" value="$section8_title" />
            <label>HTML Text</label>
            <textarea name="e_lp[_section8-text]">$section8_text</textarea>
            <label>Image</label>
            <input type="text" name="e_lp[_section8-image]" value="$section8_image" />
            <label>Page Link</label>
            {$wp_dropdown_pages('echo=0&name=e_lp[_section8-link]&selected='.$section8_link)}            
            <div class="sublinks">
                <a id="sub-section8_add-title">Add Title</a>
                <a id="sub-section8_add-text">Add Text Box</a>
                <a id="sub-section8_add-img">Add Image</a>
                <a id="sub-section8_add-link">Add Link</a>
                <div class="clear"></div>
            </div>
            <div id="section8_sub1" class="sub-section sec8_sub1">
                <h3>Sub Section 1</h3>
                    <div class="sec8_sub1titles {$section8_hidden_subtitle($section8_title2)} ">
                        <label class="remove_sub_section8-title">Title</label>
                        <input type="text" name="e_lp[_section8-title2]" value="$section8_title2" />
                    </div>
                    <div class="sec8_sub1text {$section8_hidden_subtext($section8_text2)} ">
                        <label class="remove_sub_section8-text">Text</label>
                        <textarea name="e_lp[_section8-text2]">$section8_text2</textarea>
                    </div>
                    <div class="sec8_sub1image {$section8_hidden_subimage($section8_image2)} ">
                        <label class="remove_sub_section8-img">Image/Video</label>
                        <textarea class="textvid" name="e_lp[_section8-image2]">$section8_image2</textarea>
                    </div>
                    <div class="sec8_sub1link {$section8_hidden_sublink($section8_link2)} ">
                        <label class="remove_sub_section8-link">Link</label>
                        <input type="text" name="e_lp[_section8-link2]" value="$section8_link2" />
                    </div>                    
            </div>
            <div id="section8_sub2" class="sub-section  sec8_sub2">
                <h3>Sub Section 2</h3>
                    <div class="sec8_sub2titles {$section8_hidden_subtitle($section8_title3)} ">
                        <label class="remove_sub_section8-title">Title</label>
                        <input type="text" name="e_lp[_section8-title3]" value="$section8_title3" />
                    </div>
                    <div class="sec8_sub2text {$section8_hidden_subtext($section8_text3)} ">
                        <label class="remove_sub_section8-text">Text</label>
                        <textarea name="e_lp[_section8-text3]">$section8_text3</textarea>
                    </div>
                    <div class="sec8_sub2image {$section8_hidden_subimage($section8_image3)} ">
                        <label class="remove_sub_section8-img">Image/Video</label>
                        <textarea class="textvid" name="e_lp[_section8-image3]">$section8_image3</textarea>
                    </div>
                    <div class="sec8_sub2link {$section8_hidden_sublink($section8_link3)} ">
                        <label class="remove_sub_section8-link">Link</label>
                        <input type="text" name="e_lp[_section8-link3]" value="$section8_link3" />
                    </div>                    
            </div>
            <div id="section8_sub3" class="sub-section sec8_sub3">
                <h3>Sub Section 3</h3>
                    <div class="sec8_sub3titles {$section8_hidden_subtitle($section8_title4)} ">
                        <label class="remove_sub_section8-title">Title</label>
                        <input type="text" name="e_lp[_section8-title4]" value="$section8_title4" />
                    </div>
                    <div class="sec8_sub3text {$section8_hidden_subtext($section8_text4)} ">
                        <label  class="remove_sub_section8-text">Text</label>
                        <textarea name="e_lp[_section8-text4]">$section8_text4</textarea>
                    </div>
                    <div class="sec8_sub3image {$section8_hidden_subimage($section8_image4)} ">
                        <label class="remove_sub_section8-img">Image/Video</label>
                        <textarea class="textvid" name="e_lp[_section8-image4]">$section8_image4</textarea>
                    </div>
                    <div class="sec8_sub3link {$section8_hidden_sublink($section8_link4)} ">
                        <label class="remove_sub_section8-link">Link</label>
                        <input type="text" name="e_lp[_section8-link4]" value="$section8_link4" />
                    </div>                    
            </div>
            <div class="clear"></div>
         </fieldset>
         <a class="remove_section">Remove Section</a>
    </div>
HEREDOC;
    echo $section8;

    $section9 = <<< HEREDOC
        <div class="lpboxes section {$section_hidden($section9_text)} ">
        <h3>Section 9</h3>
        <fieldset>
            <label>Title</label>
            <input type="text" name="e_lp[_section9-title]" value="$section9_title" />
            <label>HTML Text</label>
            <textarea name="e_lp[_section9-text]">$section9_text</textarea>
            <label>Image</label>
            <input type="text" name="e_lp[_section9-image]" value="$section9_image" />
            <label>Page Link</label>
            {$wp_dropdown_pages('echo=0&name=e_lp[_section9-link]&selected='.$section9_link)}            
            <div class="sublinks">
                <a id="sub-section9_add-title">Add Title</a>
                <a id="sub-section9_add-text">Add Text Box</a>
                <a id="sub-section9_add-img">Add Image</a>
                <a id="sub-section9_add-link">Add Link</a>
                <div class="clear"></div>
            </div>
            <div id="section9_sub1" class="sub-section sec9_sub1">
                <h3>Sub Section 1</h3>
                    <div class="sec9_sub1titles {$section9_hidden_subtitle($section9_title2)} ">
                        <label class="remove_sub_section9-title">Title</label>
                        <input type="text" name="e_lp[_section9-title2]" value="$section9_title2" />
                    </div>
                    <div class="sec9_sub1text {$section9_hidden_subtext($section9_text2)} ">
                        <label class="remove_sub_section9-text">Text</label>
                        <textarea name="e_lp[_section9-text2]">$section9_text2</textarea>
                    </div>
                    <div class="sec9_sub1image {$section9_hidden_subimage($section9_image2)} ">
                        <label class="remove_sub_section9-img">Image/Video</label>
                        <textarea class="textvid" name="e_lp[_section9-image2]">$section9_image2</textarea>
                    </div>
                    <div class="sec9_sub1link {$section9_hidden_sublink($section9_link2)} ">
                        <label class="remove_sub_section9-link">Link</label>
                        <input type="text" name="e_lp[_section9-link2]" value="$section9_link2" />
                    </div>                    
            </div>
            <div id="section9_sub2" class="sub-section  sec9_sub2">
                <h3>Sub Section 2</h3>
                    <div class="sec9_sub2titles {$section9_hidden_subtitle($section9_title3)} ">
                        <label class="remove_sub_section9-title">Title</label>
                        <input type="text" name="e_lp[_section9-title3]" value="$section9_title3" />
                    </div>
                    <div class="sec9_sub2text {$section9_hidden_subtext($section9_text3)} ">
                        <label class="remove_sub_section9-text">Text</label>
                        <textarea name="e_lp[_section9-text3]">$section9_text3</textarea>
                    </div>
                    <div class="sec9_sub2image {$section9_hidden_subimage($section9_image3)} ">
                        <label class="remove_sub_section9-img">Image/Video</label>
                        <textarea class="textvid" name="e_lp[_section9-image3]">$section9_image3</textarea>
                    </div>
                    <div class="sec9_sub2link {$section9_hidden_sublink($section9_link3)} ">
                        <label class="remove_sub_section9-link">Link</label>
                        <input type="text" name="e_lp[_section9-link3]" value="$section9_link3" />
                    </div>                    
            </div>
            <div id="section9_sub3" class="sub-section sec9_sub3">
                <h3>Sub Section 3</h3>
                    <div class="sec9_sub3titles {$section9_hidden_subtitle($section9_title4)} ">
                        <label class="remove_sub_section9-title">Title</label>
                        <input type="text" name="e_lp[_section9-title4]" value="$section9_title4" />
                    </div>
                    <div class="sec9_sub3text {$section9_hidden_subtext($section9_text4)} ">
                        <label  class="remove_sub_section9-text">Text</label>
                        <textarea name="e_lp[_section9-text4]">$section9_text4</textarea>
                    </div>
                    <div class="sec9_sub3image {$section9_hidden_subimage($section9_image4)} ">
                        <label class="remove_sub_section9-img">Image/Video</label>
                        <textarea class="textvid" name="e_lp[_section9-image4]">$section9_image4</textarea>
                    </div>
                    <div class="sec9_sub3link {$section9_hidden_sublink($section9_link4)} ">
                        <label class="remove_sub_section9-link">Link</label>
                        <input type="text" name="e_lp[_section9-link4]" value="$section9_link4" />
                    </div>                    
            </div>
            <div class="clear"></div>
         </fieldset>
         <a class="remove_section">Remove Section</a>
    </div>
HEREDOC;
    echo $section9;

    $section10 = <<< HEREDOC
        <div class="lpboxes section {$section_hidden($section10_text)} ">
        <h3>Section 10</h3>
        <fieldset>
            <label>Title</label>
            <input type="text" name="e_lp[_section10-title]" value="$section10_title" />
            <label>HTML Text</label>
            <textarea name="e_lp[_section10-text]">$section10_text</textarea>
            <label>Image</label>
            <input type="text" name="e_lp[_section10-image]" value="$section10_image" />
            <label>Page Link</label>
            {$wp_dropdown_pages('echo=0&name=e_lp[_section10-link]&selected='.$section10_link)}            
            <div class="sublinks">
                <a id="sub-section10_add-title">Add Title</a>
                <a id="sub-section10_add-text">Add Text Box</a>
                <a id="sub-section10_add-img">Add Image</a>
                <a id="sub-section10_add-link">Add Link</a>
                <div class="clear"></div>
            </div>
            <div id="section10_sub1" class="sub-section sec10_sub1">
                <h3>Sub Section 1</h3>
                    <div class="sec10_sub1titles {$section10_hidden_subtitle($section10_title2)} ">
                        <label class="remove_sub_section10-title">Title</label>
                        <input type="text" name="e_lp[_section10-title2]" value="$section10_title2" />
                    </div>
                    <div class="sec10_sub1text {$section10_hidden_subtext($section10_text2)} ">
                        <label class="remove_sub_section10-text">Text</label>
                        <textarea name="e_lp[_section10-text2]">$section10_text2</textarea>
                    </div>
                    <div class="sec10_sub1image {$section10_hidden_subimage($section10_image2)} ">
                        <label class="remove_sub_section10-img">Image/Video</label>
                        <textarea class="textvid" name="e_lp[_section10-image2]">$section10_image2</textarea>
                    </div>
                    <div class="sec10_sub1link {$section10_hidden_sublink($section10_link2)} ">
                        <label class="remove_sub_section10-link">Link</label>
                        <input type="text" name="e_lp[_section10-link2]" value="$section10_link2" />
                    </div>                    
            </div>
            <div id="section10_sub2" class="sub-section  sec10_sub2">
                <h3>Sub Section 2</h3>
                    <div class="sec10_sub2titles {$section10_hidden_subtitle($section10_title3)} ">
                        <label class="remove_sub_section10-title">Title</label>
                        <input type="text" name="e_lp[_section10-title3]" value="$section10_title3" />
                    </div>
                    <div class="sec10_sub2text {$section10_hidden_subtext($section10_text3)} ">
                        <label class="remove_sub_section10-text">Text</label>
                        <textarea name="e_lp[_section10-text3]">$section10_text3</textarea>
                    </div>
                    <div class="sec10_sub2image {$section10_hidden_subimage($section10_image3)} ">
                        <label class="remove_sub_section10-img">Image/Video</label>
                        <textarea class="textvid" name="e_lp[_section10-image3]">$section10_image3</textarea>
                    </div>
                    <div class="sec10_sub2link {$section10_hidden_sublink($section10_link3)} ">
                        <label class="remove_sub_section10-link">Link</label>
                        <input type="text" name="e_lp[_section10-link3]" value="$section10_link3" />
                    </div>                    
            </div>
            <div id="section10_sub3" class="sub-section sec10_sub3">
                <h3>Sub Section 3</h3>
                    <div class="sec10_sub3titles {$section10_hidden_subtitle($section10_title4)} ">
                        <label class="remove_sub_section10-title">Title</label>
                        <input type="text" name="e_lp[_section10-title4]" value="$section10_title4" />
                    </div>
                    <div class="sec10_sub3text {$section10_hidden_subtext($section10_text4)} ">
                        <label  class="remove_sub_section10-text">Text</label>
                        <textarea name="e_lp[_section10-text4]">$section10_text4</textarea>
                    </div>
                    <div class="sec10_sub3image {$section10_hidden_subimage($section10_image4)} ">
                        <label class="remove_sub_section10-img">Image/Video</label>
                        <textarea class="textvid" name="e_lp[_section10-image4]">$section10_image4</textarea>
                    </div>
                    <div class="sec10_sub3link {$section10_hidden_sublink($section10_link4)} ">
                        <label class="remove_sub_section10-link">Link</label>
                        <input type="text" name="e_lp[_section10-link4]" value="$section10_link4" />
                    </div>                    
            </div>
            <div class="clear"></div>
         </fieldset>
         <a class="remove_section">Remove Section</a>
    </div>
HEREDOC;
    echo $section10;
    echo '<a id="section_add">Add New Section</a>';
//----------------------------------------------------- Link Boxes --------------------------------------------------------------
    $linkbox1 = <<< HEREDOC
        <hr>
        <div class="lpboxes linkbox {$is_hidden($link_box1_text)} " style="display: block;">
        <h3>Link Box 1</h3>
        <fieldset>
            <label>Title</label>
            <input type="text" name="e_lp[_link_box1-title]" value="$link_box1_title"  />
            <label>HTML Text</label>
            <textarea name="e_lp[_link_box1-text]">$link_box1_text</textarea>
            <label>Page Link</label>
            {$wp_dropdown_pages('echo=0&name=e_lp[_link_box1-link]&selected='.$link_box1_link)}
            <label>Image</label>
            <input type="text" name="e_lp[_link_box1-image]" value="$link_box1_image"  />
         </fieldset>
    </div>
HEREDOC;
    echo $linkbox1;

    $linkbox2 = <<< HEREDOC
        <div class="lpboxes linkbox {$is_hidden($link_box2_text)} ">
        <h3>Link Box 2</h3>
        <fieldset>
            <label>Title</label>
            <input type="text" name="e_lp[_link_box2-title]" value="$link_box2_title"  />
            <label>HTML Text</label>
            <textarea name="e_lp[_link_box2-text]">$link_box2_text</textarea>
            <label>Page Link</label>
            {$wp_dropdown_pages('echo=0&name=e_lp[_link_box2-link]&selected='.$link_box2_link)}
            <label>Image</label>
            <input type="text" name="e_lp[_link_box2-image]" value="$link_box2_image"  />
         </fieldset>
            <a class="remove_linkbox">Remove Link Box</a>
    </div>
HEREDOC;
    echo $linkbox2;

    $linkbox3 = <<< HEREDOC
        <div class="lpboxes linkbox {$is_hidden($link_box3_text)} ">
        <h3>Link Box 3</h3>
        <fieldset>
            <label>Title</label>
            <input type="text" name="e_lp[_link_box3-title]" value="$link_box3_title"  />
            <label>HTML Text</label>
            <textarea name="e_lp[_link_box3-text]">$link_box3_text</textarea>
            <label>Page Link</label>
            {$wp_dropdown_pages('echo=0&name=e_lp[_link_box3-link]&selected='.$link_box3_link)}
            <label>Image</label>
            <input type="text" name="e_lp[_link_box3-image]" value="$link_box3_image"  />
         </fieldset>
            <a class="remove_linkbox">Remove Link Box</a>
    </div>
HEREDOC;
    echo $linkbox3;

    $linkbox4 = <<< HEREDOC
        <div class="lpboxes linkbox {$is_hidden($link_box4_text)} ">
        <h3>Link Box 4</h3>
        <fieldset>
            <label>Title</label>
            <input type="text" name="e_lp[_link_box4-title]" value="$link_box4_title"  />
            <label>HTML Text</label>
            <textarea name="e_lp[_link_box4-text]">$link_box4_text</textarea>
            <label>Page Link</label>
            {$wp_dropdown_pages('echo=0&name=e_lp[_link_box4-link]&selected='.$link_box4_link)}
            <label>Image</label>
            <input type="text" name="e_lp[_link_box4-image]" value="$link_box4_image"  />
         </fieldset>
            <a class="remove_linkbox">Remove Link Box</a>
    </div>
HEREDOC;
    echo $linkbox4;

    $linkbox5 = <<< HEREDOC
        <div class="lpboxes linkbox {$is_hidden($link_box5_text)} ">
        <h3>Link Box 5</h3>
        <fieldset>
            <label>Title</label>
            <input type="text" name="e_lp[_link_box5-title]" value="$link_box5_title"  />
            <label>HTML Text</label>
            <textarea name="e_lp[_link_box5-text]">$link_box5_text</textarea>
            <label>Page Link</label>
            {$wp_dropdown_pages('echo=0&name=e_lp[_link_box5-link]&selected='.$link_box5_link)}
            <label>Image</label>
            <input type="text" name="e_lp[_link_box5-image]" value="$link_box5_image"  />
         </fieldset>
            <a class="remove_linkbox">Remove Link Box</a>
    </div>
HEREDOC;
    echo $linkbox5;

    $linkbox6 = <<< HEREDOC
        <div class="lpboxes linkbox {$is_hidden($link_box6_text)} ">
        <h3>Link Box 6</h3>
        <fieldset>
            <label>Title</label>
            <input type="text" name="e_lp[_link_box6-title]" value="$link_box6_title"  />
            <label>HTML Text</label>
            <textarea name="e_lp[_link_box6-text]">$link_box6_text</textarea>
            <label>Page Link</label>
            {$wp_dropdown_pages('echo=0&name=e_lp[_link_box6-link]&selected='.$link_box6_link)}
            <label>Image</label>
            <input type="text" name="e_lp[_link_box6-image]" value="$link_box6_image"  />
         </fieldset>
            <a class="remove_linkbox">Remove Link Box</a>
    </div>
HEREDOC;
    echo $linkbox6;

    $linkbox7 = <<< HEREDOC
        <div class="lpboxes linkbox {$is_hidden($link_box7_text)} ">
        <h3>Link Box 7</h3>
        <fieldset>
            <label>Title</label>
            <input type="text" name="e_lp[_link_box7-title]" value="$link_box7_title"  />
            <label>HTML Text</label>
            <textarea name="e_lp[_link_box7-text]">$link_box7_text</textarea>
            <label>Page Link</label>
            {$wp_dropdown_pages('echo=0&name=e_lp[_link_box7-link]&selected='.$link_box7_link)}
            <label>Image</label>
            <input type="text" name="e_lp[_link_box7-image]" value="$link_box7_image"  />
         </fieldset>
            <a class="remove_linkbox">Remove Link Box</a>
    </div>
HEREDOC;
    echo $linkbox7;

    $linkbox8 = <<< HEREDOC
        <div class="lpboxes linkbox {$is_hidden($link_box8_text)} ">
        <h3>Link Box 8</h3>
        <fieldset>
            <label>Title</label>
            <input type="text" name="e_lp[_link_box8-title]" value="$link_box8_title"  />
            <label>HTML Text</label>
            <textarea name="e_lp[_link_box8-text]">$link_box8_text</textarea>
            <label>Page Link</label>
            {$wp_dropdown_pages('echo=0&name=e_lp[_link_box8-link]&selected='.$link_box8_link)}
            <label>Image</label>
            <input type="text" name="e_lp[_link_box8-image]" value="$link_box8_image"  />
         </fieldset>
            <a class="remove_linkbox">Remove Link Box</a>
    </div>
HEREDOC;
    echo $linkbox8;

    echo '<a id="linkbox_add">Add New Link Box</a>';

    $leadform_meta = <<<HEREDOC
    <hr>
 <div class="lpboxes" id="leadform_wrapper">
        <h3>Lead Form</h3>
            <fieldset>
                <label>Form Title</label><input type="text" name="e_lp[_lp_form_header]" value="$lp_form_header"  />
                <label>Form Description</label><textarea name="e_lp[_lp_form_copy]">$lp_form_copy</textarea>
                <label>Thank You</label><textarea name="e_lp[_lp_form_ty]">$lp_form_thankyou</textarea>
                <label>HEAD Text (analtyics, meta, etc)</label><textarea name="e_lp[_lp_form_head_scripts]">$lp_form_head_scripts</textarea>
                <div id="form_sub">
                    <h3 id="toggle_ini">CKG-LEAD-FORM (ini)</h3>
                    <h3 id="toggle_xml">xForms (xml)</h3>
                    <div id="subform_ini" class=" {$subform_hidden_ini($lp_ini_form)} ">
                        <label>INI filename</label><input type="text" name="e_lp[_lp_ini_form]" value="$lp_ini_form"  />
                        <label>jQuery</label><textarea name="e_lp[_lp_form_js]">$lp_form_js</textarea>
                        <a id="dualini_add">Dual form</a>
                        <div id="subform_dualini" class=" {$subform_hidden_dualini($lp_ini_form2)} ">
                            <label>INI filename</label><input type="text" name="e_lp[_lp_ini_form2]" value="$lp_ini_form2"  />
                        </div>
                     </div>
                     <div id="subform_xml" class=" {$subform_hidden_xml($lp_xml_form)} ">
                        <label>XML filename</label><input type="text" name="e_lp[_lp_xml_form]" value="$lp_xml_form"  />
                        <label>JS Step Success</label><textarea name="e_lp[_lp_form_js_step]">$lp_form_js_step</textarea>
                        <label>JS Form Success</label><textarea name="e_lp[_lp_form_js_success]">$lp_form_js_success</textarea>
                        <a id="dualxml_add">Dual form</a>
                        <div id="subform_dualxml" class=" {$subform_hidden_dualxml($lp_xml_form2)} ">
                            <label>XML filename</label><input type="text" name="e_lp[_lp_xml_form2]" value="$lp_xml_form2"  />
                            <label>JS Step Success</label><textarea name="e_lp[_lp_form_js_step2]">$lp_form_js_step2</textarea>
                            <label>JS Form Success</label><textarea name="e_lp[_lp_form_js_success2]">$lp_form_js_success2</textarea>
                        </div>
                    </div>
                </div>
            </fieldset>
    </div>
HEREDOC;
    echo $leadform_meta;

    $quote_meta = <<<HEREDOC
    <div class="lpboxes">
        <h3>Quote Area</h3>
        <fieldset>
            <textarea name="e_lp[_lp_quote_text]">$lp_quote_text</textarea>
        </fieldset>
    </div>
HEREDOC;
    echo $quote_meta;

    $footer_meta = <<<HEREDOC
        <div class="lpboxes">
            <h3>Footer Text</h3>
            <fieldset>
                <textarea name="e_lp[_lp_footer]">$lp_footer</textarea>
            </fieldset>
        </div>
    <div class="clear"></div>
HEREDOC;
    echo $footer_meta;

} //end meta box fields display

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