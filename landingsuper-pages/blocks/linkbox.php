<div>
    <h2>Link Boxes</h2>
    <!-- Start Loop -->
    <?php 
        for($lbc=1; $lbc <= 8; $lbc++) { 
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
        </fieldset>
        <a class="remove_linkbox">Remove Link Box</a>
    </div>
    <?php } ?>
    <!-- End Loop -->
    <a id="linkbox_add">Add New Link Box</a>
</div>