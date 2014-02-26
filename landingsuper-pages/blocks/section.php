<div class="sections_wrap">
    <h3>Sections</h3>
    <!-- Start Loop -->
    <?php 
        for($c=1; $c <= $total_num_sec; $c++) { 
    ?>
    <div class="lpboxes section <?php echo $section_hidden(${'section'.$c.'_text'}) ?>">
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
                    <li id="sub-section<?php echo $c ?>_add-title" class="button">Add Title</li>
                    <li id="sub-section<?php echo $c ?>_add-text" class="button">Add Text Box</li>
                    <li id="sub-section<?php echo $c ?>_add-img" class="button">Add Image/Video</li>
                    <li id="sub-section<?php echo $c ?>_add-link" class="button">Add Link</li>
                    <div class="clear"></div>
                </ul>
                <!-- Start 2nd Loop -->
                <?php for($cc=1, $ccc=2; $cc <= $total_num_sub_sec; $cc++, $ccc++) { ?>
                <div id="section<?php echo $c ?>_sub<?php echo $cc ?>" class="sub-section sec<?php echo $c ?>_sub<?php echo $cc ?>">
                    <h3>Sub Section <?php echo $cc ?></h3>
                    <div class="sec<?php echo $c ?>_sub<?php echo $cc ?>titles <?php echo ${'section'.$c.'_hidden_subtitle'}(${'section'.$c.'_title'.$ccc}) ?>">
                        <label class="remove_sub_section<?php echo $c ?>-title">Title</label>
                        <input type="text" name="e_lp[_section<?php echo $c ?>-title<?php echo $ccc ?>]" value="<?php echo ${'section'.$c.'_title'.$ccc} ?>" />
                    </div>
                    <div class="sec<?php echo $c ?>_sub<?php echo $cc ?>text <?php echo ${'section'.$c.'_hidden_subtext'}(${'section'.$c.'_text'.$ccc}) ?> ">
                        <label class="remove_sub_section<?php echo $c ?>-text">Text</label>
                        <textarea name="e_lp[_section<?php echo $c ?>-text<?php echo $ccc ?>]"><?php echo ${'section'.$c.'_text'. $ccc} ?></textarea>
                    </div>
                    <div class="sec<?php echo $c ?>_sub<?php echo $cc ?>image <?php echo ${'section'.$c.'_hidden_subimage'}(${'section'.$c.'_image'.$ccc}) ?> ">
                        <label class="remove_sub_section<?php echo $c ?>-img">Image/Video</label>
                        <textarea class="textvid" name="e_lp[_section<?php echo $c ?>-image<?php echo $ccc ?>]"><?php echo ${'section'.$c.'_image'. $ccc} ?></textarea>
                    </div>
                    <div class="sec<?php echo $c ?>_sub<?php echo $cc ?>link <?php echo ${'section'.$c.'_hidden_sublink'}(${'section'.$c.'_link'.$ccc}) ?> ">
                        <label class="remove_sub_section<?php echo $c ?>-link">Link</label>
                        <input type="text" name="e_lp[_section<?php echo $c ?>-link<?php echo $ccc ?>]" value="<?php echo ${'section'.$c.'_link'.$ccc} ?>" />
                    </div>                    
                </div>
                <?php } ?>
                <!-- End 2nd Loop -->
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
            <a class="remove_section button">Remove Section</a>
        </fieldset>
    </div>
    <?php } ?>
    <!-- End Loop -->
    <a id="section_add" class="button button-primary">Add New Section</a>
</div>