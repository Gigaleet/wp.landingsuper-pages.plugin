<div class="sections_wrap">
    <h3>Sections</h3>
    <!-- Start Loop -->
    <?php 
        for($c=1; $c <= $total_num_sec; $c++) { 
    ?>
    <div class="lpboxes section <?php echo $section_hidden(${'section'.$c.'_title'}, ${'section'.$c.'_text'}) ?>" id="Section<?php echo $c ?>">
        <h3>Section <?php echo $c ?></h3>
        <fieldset>
            <label>Title</label>
            <input type="text" name="e_lp[_section<?php echo $c ?>-title]" value="<?php echo ${'section'.$c.'_title'} ?>" />
            <label>HTML Text</label>
            <?php wp_editor( htmlspecialchars_decode(${'section'.$c.'_text'}), 'wp_wysiwyg_editor'.$c, $settings = array('textarea_name'=>'e_lp[_section'.$c.'-text]') ); ?>
            <label>Image</label>
            <input type="text" name="e_lp[_section<?php echo $c ?>-image]" value="<?php echo ${'section'.$c.'_image'} ?>" />
            <label>Page Link</label>
            <?php echo $wp_dropdown_pages('echo=0&name=e_lp[_section'.$c.'-link]&selected='.${'section'.$c.'_link'}) ?>
            <div class="sub_sec_wrap">
                <h3>Sub Sections</h3>
                <ul class="sublinks">
                    <li class="add_sub_sec  button" id="sub-section<?php echo $c ?>_add-title">Add Title</li>
                    <li class="add_sub_sec button" id="sub-section<?php echo $c ?>_add-text">Add Text Box</li>
                    <li class="add_sub_sec button" id="sub-section<?php echo $c ?>_add-img">Add Image/Video</li>
                    <li class="add_sub_sec button" id="sub-section<?php echo $c ?>_add-link">Add Link</li>
                    <div class="clear"></div>
                </ul>
                <!-- Start 2nd Loop -->
                <?php for($cc=1, $ccc=2; $cc <= $total_num_sub_sec; $cc++, $ccc++) { ?>
                <div id="section<?php echo $c ?>_sub<?php echo $cc ?>" class="sub-section sec<?php echo $c ?>_sub<?php echo $cc ?>">
                    <h3>Sub Section <?php echo $cc ?></h3>
                    <div class="sub-section<?php echo $c ?>_add-title sec<?php echo $c ?>_sub<?php echo $cc ?>titles <?php echo $gen_is_hidden(${'section'.$c.'_title'.$ccc}) ?>">
                        <label class="remove_sub_sec">Title</label>
                        <input type="text" name="e_lp[_section<?php echo $c ?>-title<?php echo $ccc ?>]" value="<?php echo ${'section'.$c.'_title'.$ccc} ?>" />
                    </div>
                    <div class="sub-section<?php echo $c ?>_add-text sec<?php echo $c ?>_sub<?php echo $cc ?>text <?php echo $gen_is_hidden(${'section'.$c.'_text'.$ccc}) ?> ">
                        <label class="remove_sub_sec">Text</label>
                        <textarea name="e_lp[_section<?php echo $c ?>-text<?php echo $ccc ?>]"><?php echo ${'section'.$c.'_text'. $ccc} ?></textarea>
                    </div>
                    <div class="sub-section<?php echo $c ?>_add-img sec<?php echo $c ?>_sub<?php echo $cc ?>image <?php echo $gen_is_hidden(${'section'.$c.'_image'.$ccc}) ?> ">
                        <label class="remove_sub_sec">Image/Video</label>
                        <textarea class="textvid" name="e_lp[_section<?php echo $c ?>-image<?php echo $ccc ?>]"><?php echo ${'section'.$c.'_image'. $ccc} ?></textarea>
                    </div>
                    <div class="sub-section<?php echo $c ?>_add-link sec<?php echo $c ?>_sub<?php echo $cc ?>link <?php echo $gen_is_hidden(${'section'.$c.'_link'.$ccc}) ?> ">
                        <label class="remove_sub_sec">Link</label>
                        <input type="text" name="e_lp[_section<?php echo $c ?>-link<?php echo $ccc ?>]" value="<?php echo ${'section'.$c.'_link'.$ccc} ?>" />
                    </div>                    
                </div>
                <?php } ?>
                <!-- End 2nd Loop -->
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
            <a class="remove_section button" title="Remove Section">Remove Section</a>
        </fieldset>
    </div>
    <?php } ?>
    <!-- End Loop -->
    <a id="section_add" class="button button-primary">Add New Section</a>
</div>