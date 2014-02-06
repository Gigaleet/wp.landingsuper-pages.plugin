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
            $(this).parent().parent().addClass('hidden_section');
            $(this).parent().children('input').val('');
            $(this).parent().children('textarea').val('');
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
            //Check to see if all inputs and textareas in sub4 are empty; if so display none
            if ($('.sec1_sub4titles').hasClass('hidden_section1_subtitle') && $('.sec1_sub4text').hasClass('hidden_section1_subtext') && $('.sec1_sub4image').hasClass('hidden_section1_subimage') && $('.sec1_sub4link').hasClass('hidden_section1_sublink')){
                $('.sec1_sub4').addClass('hidden_sub1');
            }else{
                $('.sec1_sub4').removeClass('hidden_sub1');
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
            //Check to see if all inputs and textareas in sub4 are empty; if so display none
            if ($('.sec2_sub4titles').hasClass('hidden_section2_subtitle') && $('.sec2_sub4text').hasClass('hidden_section2_subtext') && $('.sec2_sub4image').hasClass('hidden_section2_subimage') && $('.sec2_sub4link').hasClass('hidden_section2_sublink')){
                $('.sec2_sub4').addClass('hidden_sub2');
            }else{
                $('.sec2_sub4').removeClass('hidden_sub2');
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
            //Check to see if all inputs and textareas in sub4 are empty; if so display none
            if ($('.sec3_sub4titles').hasClass('hidden_section3_subtitle') && $('.sec3_sub4text').hasClass('hidden_section3_subtext') && $('.sec3_sub4image').hasClass('hidden_section3_subimage') && $('.sec3_sub4link').hasClass('hidden_section3_sublink')){
                $('.sec3_sub4').addClass('hidden_sub3');
            }else{
                $('.sec3_sub4').removeClass('hidden_sub3');
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
            //Check to see if all inputs and textareas in sub4 are empty; if so display none
            if ($('.sec4_sub4titles').hasClass('hidden_section4_subtitle') && $('.sec4_sub4text').hasClass('hidden_section4_subtext') && $('.sec4_sub4image').hasClass('hidden_section4_subimage') && $('.sec4_sub4link').hasClass('hidden_section4_sublink')){
                $('.sec4_sub4').addClass('hidden_sub4');
            }else{
                $('.sec4_sub4').removeClass('hidden_sub4');
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
            //Check to see if all inputs and textareas in sub5 are empty; if so display none
            if ($('.sec5_sub4titles').hasClass('hidden_section5_subtitle') && $('.sec5_sub4text').hasClass('hidden_section5_subtext') && $('.sec5_sub4image').hasClass('hidden_section5_subimage') && $('.sec5_sub4link').hasClass('hidden_section5_sublink')){
                $('.sec5_sub4').addClass('hidden_sub5');
            }else{
                $('.sec5_sub4').removeClass('hidden_sub5');
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
            //Check to see if all inputs and textareas in sub6 are empty; if so display none
            if ($('.sec6_sub4titles').hasClass('hidden_section6_subtitle') && $('.sec6_sub4text').hasClass('hidden_section6_subtext') && $('.sec6_sub4image').hasClass('hidden_section6_subimage') && $('.sec6_sub4link').hasClass('hidden_section6_sublink')){
                $('.sec6_sub4').addClass('hidden_sub6');
            }else{
                $('.sec6_sub4').removeClass('hidden_sub6');
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
            //Check to see if all inputs and textareas in sub7 are empty; if so display none
            if ($('.sec7_sub4titles').hasClass('hidden_section7_subtitle') && $('.sec7_sub4text').hasClass('hidden_section7_subtext') && $('.sec7_sub4image').hasClass('hidden_section7_subimage') && $('.sec7_sub4link').hasClass('hidden_section7_sublink')){
                $('.sec7_sub4').addClass('hidden_sub7');
            }else{
                $('.sec7_sub4').removeClass('hidden_sub7');
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
            //Check to see if all inputs and textareas in sub8 are empty; if so display none
            if ($('.sec8_sub4titles').hasClass('hidden_section8_subtitle') && $('.sec8_sub4text').hasClass('hidden_section8_subtext') && $('.sec8_sub4image').hasClass('hidden_section8_subimage') && $('.sec8_sub4link').hasClass('hidden_section8_sublink')){
                $('.sec8_sub4').addClass('hidden_sub8');
            }else{
                $('.sec8_sub4').removeClass('hidden_sub8');
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
            //Check to see if all inputs and textareas in sub9 are empty; if so display none
            if ($('.sec9_sub4titles').hasClass('hidden_section9_subtitle') && $('.sec9_sub4text').hasClass('hidden_section9_subtext') && $('.sec9_sub4image').hasClass('hidden_section9_subimage') && $('.sec9_sub4link').hasClass('hidden_section9_sublink')){
                $('.sec9_sub4').addClass('hidden_sub9');
            }else{
                $('.sec9_sub4').removeClass('hidden_sub9');
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
            //Check to see if all inputs and textareas in sub10 are empty; if so display none
            if ($('.sec10_sub4titles').hasClass('hidden_section10_subtitle') && $('.sec10_sub4text').hasClass('hidden_section10_subtext') && $('.sec10_sub4image').hasClass('hidden_section10_subimage') && $('.sec10_sub4link').hasClass('hidden_section10_sublink')){
                $('.sec10_sub4').addClass('hidden_sub10');
            }else{
                $('.sec10_sub4').removeClass('hidden_sub10');
            };
        }
        setInterval(subcheck, 100);
        //Sub Section 1
        //add and remove sub section1 titles
        $("#sub-section1_add-title").click(function(){
            $('.hidden_section1_subtitle:first').removeClass('hidden_section1_subtitle').show();
        });
        $(".remove_sub_section1-title").dblclick(function(){
            $(this).parent().addClass('hidden_section1_subtitle');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section1 text
        $("#sub-section1_add-text").click(function(){
            $('.hidden_section1_subtext:first').removeClass('hidden_section1_subtext').show();
        });
        $(".remove_sub_section1-text").dblclick(function(){
            $(this).parent().addClass('hidden_section1_subtext');
            $(this).parent().children('textarea').val('');
        });
        //add and remove sub section1 link
        $("#sub-section1_add-link").click(function(){
            $('.hidden_section1_sublink:first').removeClass('hidden_section1_sublink').show();
        });
        $(".remove_sub_section1-link").dblclick(function(){
            $(this).parent().addClass('hidden_section1_sublink');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section1 image
        $("#sub-section1_add-img").click(function(){
            $('.hidden_section1_subimage:first').removeClass('hidden_section1_subimage').show();
        });
        $(".remove_sub_section1-img").dblclick(function(){
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
        $(".remove_sub_section2-text").dblclick(function(){
            $(this).parent().addClass('hidden_section2_subtext');
            $(this).parent().children('textarea').val('');
        });
        //add and remove sub section2 link
        $("#sub-section2_add-link").click(function(){
            $('.hidden_section2_sublink:first').removeClass('hidden_section2_sublink').show();
        });
        $(".remove_sub_section2-link").dblclick(function(){
            $(this).parent().addClass('hidden_section2_sublink');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section2 image
        $("#sub-section2_add-img").click(function(){
            $('.hidden_section2_subimage:first').removeClass('hidden_section2_subimage').show();
        });
        $(".remove_sub_section2-img").dblclick(function(){
            $(this).parent().addClass('hidden_section2_subimage');
            $(this).parent().children('input').val('');
        });
        //Sub Section 3
        //add and remove sub section3 titles
        $("#sub-section3_add-title").click(function(){
            $('.hidden_section3_subtitle:first').removeClass('hidden_section3_subtitle').show();
        });
        $(".remove_sub_section3-title").dblclick(function(){
            $(this).parent().addClass('hidden_section3_subtitle');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section3 text
        $("#sub-section3_add-text").click(function(){
            $('.hidden_section3_subtext:first').removeClass('hidden_section3_subtext').show();
        });
        $(".remove_sub_section3-text").dblclick(function(){
            $(this).parent().addClass('hidden_section3_subtext');
            $(this).parent().children('textarea').val('');
        });
        //add and remove sub section3 link
        $("#sub-section3_add-link").click(function(){
            $('.hidden_section3_sublink:first').removeClass('hidden_section3_sublink').show();
        });
        $(".remove_sub_section3-link").dblclick(function(){
            $(this).parent().addClass('hidden_section3_sublink');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section3 image
        $("#sub-section3_add-img").click(function(){
            $('.hidden_section3_subimage:first').removeClass('hidden_section3_subimage').show();
        });
        $(".remove_sub_section3-img").dblclick(function(){
            $(this).parent().addClass('hidden_section3_subimage');
            $(this).parent().children('input').val('');
        });
        //Sub Section 4
        //add and remove sub section4 titles
        $("#sub-section4_add-title").click(function(){
            $('.hidden_section4_subtitle:first').removeClass('hidden_section4_subtitle').show();
        });
        $(".remove_sub_section4-title").dblclick(function(){
            $(this).parent().addClass('hidden_section4_subtitle');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section4 text
        $("#sub-section4_add-text").click(function(){
            $('.hidden_section4_subtext:first').removeClass('hidden_section4_subtext').show();
        });
        $(".remove_sub_section4-text").dblclick(function(){
            $(this).parent().addClass('hidden_section4_subtext');
            $(this).parent().children('textarea').val('');
        });
        //add and remove sub section4 link
        $("#sub-section4_add-link").click(function(){
            $('.hidden_section4_sublink:first').removeClass('hidden_section4_sublink').show();
        });
        $(".remove_sub_section4-link").dblclick(function(){
            $(this).parent().addClass('hidden_section4_sublink');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section4 image
        $("#sub-section4_add-img").click(function(){
            $('.hidden_section4_subimage:first').removeClass('hidden_section4_subimage').show();
        });
        $(".remove_sub_section4-img").dblclick(function(){
            $(this).parent().addClass('hidden_section4_subimage');
            $(this).parent().children('input').val('');
        });
        //Sub Section 5
        //add and remove sub section5 titles
        $("#sub-section5_add-title").click(function(){
            $('.hidden_section5_subtitle:first').removeClass('hidden_section5_subtitle').show();
        });
        $(".remove_sub_section5-title").dblclick(function(){
            $(this).parent().addClass('hidden_section5_subtitle');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section5 text
        $("#sub-section5_add-text").click(function(){
            $('.hidden_section5_subtext:first').removeClass('hidden_section5_subtext').show();
        });
        $(".remove_sub_section5-text").dblclick(function(){
            $(this).parent().addClass('hidden_section5_subtext');
            $(this).parent().children('textarea').val('');
        });
        //add and remove sub section5 link
        $("#sub-section5_add-link").click(function(){
            $('.hidden_section5_sublink:first').removeClass('hidden_section5_sublink').show();
        });
        $(".remove_sub_section5-link").dblclick(function(){
            $(this).parent().addClass('hidden_section5_sublink');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section5 image
        $("#sub-section5_add-img").click(function(){
            $('.hidden_section5_subimage:first').removeClass('hidden_section5_subimage').show();
        });
        $(".remove_sub_section5-img").dblclick(function(){
            $(this).parent().addClass('hidden_section5_subimage');
            $(this).parent().children('input').val('');
        });
        //Sub Section 6
        //add and remove sub section6 titles
        $("#sub-section6_add-title").click(function(){
            $('.hidden_section6_subtitle:first').removeClass('hidden_section6_subtitle').show();
        });
        $(".remove_sub_section6-title").dblclick(function(){
            $(this).parent().addClass('hidden_section6_subtitle');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section6 text
        $("#sub-section6_add-text").click(function(){
            $('.hidden_section6_subtext:first').removeClass('hidden_section6_subtext').show();
        });
        $(".remove_sub_section6-text").dblclick(function(){
            $(this).parent().addClass('hidden_section6_subtext');
            $(this).parent().children('textarea').val('');
        });
        //add and remove sub section6 link
        $("#sub-section6_add-link").click(function(){
            $('.hidden_section6_sublink:first').removeClass('hidden_section6_sublink').show();
        });
        $(".remove_sub_section6-link").dblclick(function(){
            $(this).parent().addClass('hidden_section6_sublink');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section6 image
        $("#sub-section6_add-img").click(function(){
            $('.hidden_section6_subimage:first').removeClass('hidden_section6_subimage').show();
        });
        $(".remove_sub_section6-img").dblclick(function(){
            $(this).parent().addClass('hidden_section6_subimage');
            $(this).parent().children('input').val('');
        });
        //Sub Section 7
        //add and remove sub section7 titles
        $("#sub-section7_add-title").click(function(){
            $('.hidden_section7_subtitle:first').removeClass('hidden_section7_subtitle').show();
        });
        $(".remove_sub_section7-title").dblclick(function(){
            $(this).parent().addClass('hidden_section7_subtitle');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section7 text
        $("#sub-section7_add-text").click(function(){
            $('.hidden_section7_subtext:first').removeClass('hidden_section7_subtext').show();
        });
        $(".remove_sub_section7-text").dblclick(function(){
            $(this).parent().addClass('hidden_section7_subtext');
            $(this).parent().children('textarea').val('');
        });
        //add and remove sub section7 link
        $("#sub-section7_add-link").click(function(){
            $('.hidden_section7_sublink:first').removeClass('hidden_section7_sublink').show();
        });
        $(".remove_sub_section7-link").dblclick(function(){
            $(this).parent().addClass('hidden_section7_sublink');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section7 image
        $("#sub-section7_add-img").click(function(){
            $('.hidden_section7_subimage:first').removeClass('hidden_section7_subimage').show();
        });
        $(".remove_sub_section7-img").dblclick(function(){
            $(this).parent().addClass('hidden_section7_subimage');
            $(this).parent().children('input').val('');
        });
        //Sub Section 8
        //add and remove sub section8 titles
        $("#sub-section8_add-title").click(function(){
            $('.hidden_section8_subtitle:first').removeClass('hidden_section8_subtitle').show();
        });
        $(".remove_sub_section8-title").dblclick(function(){
            $(this).parent().addClass('hidden_section8_subtitle');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section8 text
        $("#sub-section8_add-text").click(function(){
            $('.hidden_section8_subtext:first').removeClass('hidden_section8_subtext').show();
        });
        $(".remove_sub_section8-text").dblclick(function(){
            $(this).parent().addClass('hidden_section8_subtext');
            $(this).parent().children('textarea').val('');
        });
        //add and remove sub section8 link
        $("#sub-section8_add-link").click(function(){
            $('.hidden_section8_sublink:first').removeClass('hidden_section8_sublink').show();
        });
        $(".remove_sub_section8-link").dblclick(function(){
            $(this).parent().addClass('hidden_section8_sublink');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section8 image
        $("#sub-section8_add-img").click(function(){
            $('.hidden_section8_subimage:first').removeClass('hidden_section8_subimage').show();
        });
        $(".remove_sub_section8-img").dblclick(function(){
            $(this).parent().addClass('hidden_section8_subimage');
            $(this).parent().children('input').val('');
        });
        //Sub Section 9
        //add and remove sub section9 titles
        $("#sub-section9_add-title").click(function(){
            $('.hidden_section9_subtitle:first').removeClass('hidden_section9_subtitle').show();
        });
        $(".remove_sub_section9-title").dblclick(function(){
            $(this).parent().addClass('hidden_section9_subtitle');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section9 text
        $("#sub-section9_add-text").click(function(){
            $('.hidden_section9_subtext:first').removeClass('hidden_section9_subtext').show();
        });
        $(".remove_sub_section9-text").dblclick(function(){
            $(this).parent().addClass('hidden_section9_subtext');
            $(this).parent().children('textarea').val('');
        });
        //add and remove sub section9 link
        $("#sub-section9_add-link").click(function(){
            $('.hidden_section9_sublink:first').removeClass('hidden_section9_sublink').show();
        });
        $(".remove_sub_section9-link").dblclick(function(){
            $(this).parent().addClass('hidden_section9_sublink');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section9 image
        $("#sub-section9_add-img").click(function(){
            $('.hidden_section9_subimage:first').removeClass('hidden_section9_subimage').show();
        });
        $(".remove_sub_section9-img").dblclick(function(){
            $(this).parent().addClass('hidden_section9_subimage');
            $(this).parent().children('input').val('');
        });
        //Sub Section 10
        //add and remove sub section10 titles
        $("#sub-section10_add-title").click(function(){
            $('.hidden_section10_subtitle:first').removeClass('hidden_section10_subtitle').show();
        });
        $(".remove_sub_section10-title").dblclick(function(){
            $(this).parent().addClass('hidden_section10_subtitle');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section10 text
        $("#sub-section10_add-text").click(function(){
            $('.hidden_section10_subtext:first').removeClass('hidden_section10_subtext').show();
        });
        $(".remove_sub_section10-text").dblclick(function(){
            $(this).parent().addClass('hidden_section10_subtext');
            $(this).parent().children('textarea').val('');
        });
        //add and remove sub section10 link
        $("#sub-section10_add-link").click(function(){
            $('.hidden_section10_sublink:first').removeClass('hidden_section10_sublink').show();
        });
        $(".remove_sub_section10-link").dblclick(function(){
            $(this).parent().addClass('hidden_section10_sublink');
            $(this).parent().children('input').val('');
        });
        //add and remove sub section10 image
        $("#sub-section10_add-img").click(function(){
            $('.hidden_section10_subimage:first').removeClass('hidden_section10_subimage').show();
        });
        $(".remove_sub_section10-img").dblclick(function(){
            $(this).parent().addClass('hidden_section10_subimage');
            $(this).parent().children('input').val('');
        });
        //add and remove link boxes
        $("#linkbox_add").click(function(){
            $('.hidden_lp:first').removeClass('hidden_lp').show();
        });
        $(".remove_linkbox").click(function(){
            $(this).parent().parent().addClass('hidden_lp');
            $(this).parent().children('input').val('');
            $(this).parent().children('textarea').val('');
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