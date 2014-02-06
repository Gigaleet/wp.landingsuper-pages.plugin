<div class="link_box_wrap">
    <h3>Link Boxes</h3>
    <!-- Start Loop -->
    <?php 
        for($lbc=1; $lbc <= $total_num_lb; $lbc++) { 
    ?>
    <div class="lpboxes linkbox <?php echo $is_hidden(${'link_box'.$lbc.'_text'}) ?>">
        <h3>Link Box <?php echo $lbc ?></h3>
        <fieldset>
            <label>Title</label>
            <input type="text" name="e_lp[_link_box<?php echo $lbc ?>-title]" value="<?php echo ${'link_box'.$lbc.'_title'} ?>"  />
            <label>HTML Text</label>
            <textarea name="e_lp[_link_box<?php echo $lbc ?>-text]"><?php echo ${'link_box'.$lbc.'_text'} ?></textarea>
            <label>Page Link</label>
            <?php echo $wp_dropdown_pages('echo=0&name=e_lp[_link_box'.$lbc.'-link]&selected='.${'link_box'.$lbc.'_link'}); ?>
            <label>Image</label>
            <input type="text" name="e_lp[_link_box<?php echo $lbc ?>-image]" value="<?php echo ${'link_box'.$lbc.'_image'} ?>"  />
            <a class="remove_linkbox button">Remove Link Box</a>
        </fieldset>
    </div>
    <?php } ?>
    <!-- End Loop -->
    <a id="linkbox_add" class="button button-primary">Add New Link Box</a>
</div>