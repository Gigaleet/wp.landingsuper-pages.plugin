<div class="lpboxes">
    <h3>Quote Area</h3>
    <fieldset>
        <?php wp_editor( htmlspecialchars_decode($lp_quote_text), 'wp_wysiwyg_editor_quote', $settings = array('textarea_name'=>'e_lp[_lp_quote_text]') ); ?>
    </fieldset>
</div>