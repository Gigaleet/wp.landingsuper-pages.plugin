<?php
    global $current_user;
    $user_roles = $current_user->roles;
    $user_role = array_shift($user_roles);
    if($user_role == "administrator" || $user_role == "site_manager") {
        $user_type = "admin";
    } else {
        $user_type = "non-admin";
    }
?>
<div class="lpboxes" id="analytics_wrapper">
    <h3>Page Analytics</h3>
    <fieldset>
        <p>Analytics and tracking scripts entered below will ONLY be applied to this page. <br><small>(Note: This section replaced "HEAD Text (analtyics, meta, etc)" section, works the same.</small></p>
        <label>Scripts:</label><textarea name="e_lp[_lp_analytics]"><?php echo $lp_analytics ?></textarea>
    </fieldset>
</div>
<div class="lpboxes" id="leadform_wrapper">    
    <h3>Lead Form</h3>
    <fieldset>
        <label>Form Title</label><input type="text" name="e_lp[_lp_form_header]" value="<?php echo $lp_form_header ?>"  />
        <label>Form Description</label><textarea name="e_lp[_lp_form_copy]"><?php echo $lp_form_copy ?></textarea>
        <?php if($user_type == "admin"): ?>
            <label>XML filename</label>
                <select name="e_lp[_lp_xml_form]">
                    <option value="<?php echo $lp_xml_form ?>"><?php echo $lp_xml_form ?></option>
                    <optgroup label="options"><?php echo $lp_form_temp_options ?></optgroup>
                </select>
            <label>JS INIT</label><textarea name="e_lp[_lp_form_js_init]" id="js_init_textarea_id"><?php echo $lp_form_js_init ?></textarea> <!-- NEW - JS INIT -->
        <?php endif; ?>
        <label>JS Step Success</label><textarea name="e_lp[_lp_form_js_step]" id="js_step_success_id"><?php echo $lp_form_js_step ?></textarea>
        <label>JS Form Success</label><textarea name="e_lp[_lp_form_js_success]" id="js_form_success_id"><?php echo $lp_form_js_success ?></textarea>
        <label>Thank You</label><textarea name="e_lp[_lp_form_ty]"><?php echo $lp_form_thankyou ?></textarea>
        <?php if($user_type == "admin"): ?>
            <a id="dualxml_add" class="button button-primary">Dual form</a>
        <?php endif; ?>
        <div id="subform_dualxml" class="lpboxes <?php echo $subform_hidden_dualxml($lp_xml_form2) ?>">
            <h3>Dual Form</h3>
            <fieldset>
                <label>Form Title 2</label><input type="text" name="e_lp[_lp_form_header2]" value="<?php echo $lp_form_header2 ?>"  />
                <label>Form Description 2</label><textarea name="e_lp[_lp_form_copy2]"><?php echo $lp_form_copy2 ?></textarea>
                <?php if($user_type == "admin"): ?>
                    <label>XML filename 2</label>
                        <select name="e_lp[_lp_xml_form2]" id="dualxml_select">
                            <option value="<?php echo $lp_xml_form2 ?>"><?php echo $lp_xml_form2 ?></option>
                            <optgroup label="options"><?php echo $lp_form_temp_options ?></optgroup>
                        </select>
                    <label>JS INIT 2</label><textarea name="e_lp[_lp_form_js_init2]" id="js_init_textarea_id2"><?php echo $lp_form_js_init2 ?></textarea> <!-- NEW - JS INIT -->
                <?php endif; ?>
                <label>JS Step Success 2</label><textarea name="e_lp[_lp_form_js_step2]" id="js_step_success_id2"><?php echo $lp_form_js_step2 ?></textarea>
                <label>JS Form Success 2</label><textarea name="e_lp[_lp_form_js_success2]" id="js_form_success_id2"><?php echo $lp_form_js_success2 ?></textarea>
                <label>Thank You 2</label><textarea name="e_lp[_lp_form_ty2]"><?php echo $lp_form_thankyou2 ?></textarea>
                <?php if($user_type == "admin"): ?>
                    <a class="remove_dualform button">Remove Dual Form</a>
                <?php endif; ?>
            </fieldset>
        </div>
    </fieldset>
</div>