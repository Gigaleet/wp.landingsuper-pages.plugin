jQuery(document).ready(function($){

        //Hide and show lpboxes when headline(h3) is clicked
        $('.lpboxes h3').toggle(function(){
            $(this).next('fieldset').hide();
        }, function(){
            $(this).next('fieldset').show();
        });

        //add and remove sections
        $('#section_add').click(function(){
            $('.hidden_section:first').removeClass('hidden_section').show();
        });
        $('.remove_section').click(function(){
            var current_sec = $(this).parent().parent().attr("id");
            $('#'+current_sec).addClass('hidden_section');
            $('#'+current_sec+' > fieldset input[type="text"]').val('');
            $('#'+current_sec+' textarea').val('');
            $('#'+current_sec+' iframe').contents().find('body').html('');
        });

        function subcheck() {
            //Check to see if all inputs and textareas in sub sec are empty; if so display none
            for (var j = 1; j <= 10; j++) {
                for (var i = 1; i <= 4; i++) {
                    if ($('.sec'+j+'_sub'+i+'titles').hasClass('hidden') && $('.sec'+j+'_sub'+i+'text').hasClass('hidden') && $('.sec'+j+'_sub'+i+'image').hasClass('hidden') && $('.sec'+j+'_sub'+i+'link').hasClass('hidden')){
                        $('.sec'+j+'_sub'+i).addClass('hidden');
                    }else{
                        $('.sec'+j+'_sub'+i).removeClass('hidden');
                    };
                };
            }; 
        }
        setInterval(subcheck, 100);

        // Sub Section Add/Remove
        // Add sub section titles, text, links, and images
        $('.add_sub_sec').click(function(){
            var currentId = $(this).attr('id');
            $('.'+currentId+':hidden:first').removeClass('hidden').show();
        });
        // Remove sub section titles, text, links, and images
        $('.remove_sub_sec').dblclick(function(){
            $(this).parent().addClass('hidden');
            $(this).parent().children('input').val('');
            $(this).parent().children('textarea').val('');
        });

        //add and remove link boxes
        $('#linkbox_add').click(function(){
            $('.hidden_lp:first').removeClass('hidden_lp').show();
        });
        $('.remove_linkbox').click(function(){
            $(this).parent().parent().addClass('hidden_lp');
            $(this).parent().children('input').val('');
            $(this).parent().children('textarea').val('');
        });
       
        //add and remove dual xml
        $('#dualxml_add').click(function(){
            if ($('#subform_dualxml').hasClass('hidden_xml')) {
                $('#subform_dualxml').removeClass('hidden_xml');
            } else if (!$('#subform_dualxml').hasClass('hidden_xml') && !$('#subform_dualxml').hasClass('lock_dualxml')) {
                $('#subform_dualxml').addClass('hidden_xml');
            };
        });

        // Remove dual form
        $('.remove_dualform').click(function(){
            $(this).parent().parent().addClass('hidden_xml').removeClass('lock_dualxml');
            $(this).parent().children('input').val('');
            $(this).parent().children('textarea').val('');
            $('#dualxml_select option:selected').val('').text('');
        });

        // Check form script textarea's for errors
        var boxes =
            [ '#js_step_success_id', '#js_step_success_id2', '#js_form_success_id', '#js_form_success_id2', '#js_form_success_anal_id', '#js_form_success_anal_id2', '#js_form_jquery_id' ];
            for (var index = 0; index < boxes.length; ++index){
                $(boxes[index]).bind ('input propertychange', function (e) {
                    code = $(this).val();
                    try {
                        (function(){
                            new Function(code);
                        })()
                        $(this).css('background-color', 'white');
                        $('#publish').show();
                    }
                    catch(e) {
                        $(this).css('background-color', 'red');
                        $('#publish').hide();
                    }                    
                });
            }


    });