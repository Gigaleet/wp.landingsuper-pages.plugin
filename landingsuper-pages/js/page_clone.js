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