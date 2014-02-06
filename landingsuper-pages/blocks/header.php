<div class="lpboxes">
    <h3>Header</h3>
    <fieldset>
        <label>Template</label>
        <select name="e_lp[_lp_template]">
        <option value="<?php echo $lp_template ?>"><?php echo $lp_template ?></option>
            <optgroup label="options"><?php echo $lp_template_options ?></optgroup>
        </select>
        <label>Logo <span>(required)</span></label><input type="text" name="e_lp[_lp_logo]" value="<?php echo $lp_logo ?>"  />
        <label>Program Title</label><input type="text" name="e_lp[_lp_program]" value="<?php echo $lp_program ?>"  />
        <label>Slogan</label><textarea name="e_lp[_lp_slogan_text]" ><?php echo $lp_slogan_text ?></textarea>
        <label>Header Image</label><input type="text" name="e_lp[_lp_hero_img]" value="<?php echo $lp_hero_img ?>"  />
    </fieldset>
</div>