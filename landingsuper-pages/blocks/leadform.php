<div class="lpboxes" id="leadform_wrapper">
    <h3>Lead Form</h3>
    <fieldset>
        <label>Form Title</label><input type="text" name="e_lp[_lp_form_header]" value="<?php echo $lp_form_header ?>"  />
        <label>Form Description</label><textarea name="e_lp[_lp_form_copy]"><?php echo $lp_form_copy ?></textarea>
        <label>Thank You</label><textarea name="e_lp[_lp_form_ty]"><?php echo $lp_form_thankyou ?></textarea>
        <label>HEAD Text (analtyics, meta, etc)</label><textarea name="e_lp[_lp_form_head_scripts]"><?php echo $lp_form_head_scripts ?></textarea>
        <div id="form_sub">
            <ul class="formlinks">
                <li id="toggle_ini" class="button button-primary">CKG-LEAD-FORM (ini)</li>
                <li id="toggle_xml" class="button button-primary">xForms (xml)</li>
                <div class="clear"></div>
            </ul>
            <div id="subform_ini" class="form_type_wrap <?php echo $subform_hidden_ini($lp_ini_form) ?>">
                <h3>CKG-LEAD-FORM (ini)</h3>
                <div class="inner_pad">
                    <label>INI filename</label><input type="text" name="e_lp[_lp_ini_form]" value="<?php echo $lp_ini_form ?>"  />
                    <label>jQuery</label><textarea name="e_lp[_lp_form_js]"><?php echo $lp_form_js ?></textarea>
                    <!-- <a id="dualini_add" class="button button-primary">Dual form</a>
                    <div id="subform_dualini" class="<?php echo $subform_hidden_dualini($lp_ini_form2) ?>">
                        <label>INI filename</label><input type="text" name="e_lp[_lp_ini_form2]" value="<?php echo $lp_ini_form2 ?>"  />
                    </div> -->
                </div>
            </div>
            <div id="subform_xml" class="form_type_wrap <?php echo $subform_hidden_xml($lp_xml_form) ?>">
                <h3>xForms (xml)</h3>
                <div class="inner_pad">
                    <label>XML filename</label><input type="text" name="e_lp[_lp_xml_form]" value="<?php echo $lp_xml_form ?>"  />
                    <label>JS Step Success</label><textarea name="e_lp[_lp_form_js_step]"><?php echo $lp_form_js_step ?></textarea>
                    <label>JS Form Success</label><textarea name="e_lp[_lp_form_js_success]"><?php echo $lp_form_js_success ?></textarea>
                    <a id="dualxml_add" class="button button-primary">Dual form</a>
                    <div id="subform_dualxml" class="<?php echo $subform_hidden_dualxml($lp_xml_form2) ?>">
                        <label>XML filename</label><input type="text" name="e_lp[_lp_xml_form2]" value="<?php echo $lp_xml_form2 ?>"  />
                        <label>JS Step Success</label><textarea name="e_lp[_lp_form_js_step2]"><?php echo $lp_form_js_step2 ?></textarea>
                        <label>JS Form Success</label><textarea name="e_lp[_lp_form_js_success2]"><?php echo $lp_form_js_success2 ?></textarea>
                    </div>
                </div>
            </div>
        </div>
    </fieldset>
</div>