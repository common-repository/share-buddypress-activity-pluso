<div class="mx-main-page-text-wrap">

    <h1><?php echo __('Select the countries that will be blocked for your site', 'mxdnsms-domain'); ?></h1>

    <div class="mx-attention">
        <?php echo __('Make sure you have NOT selected <strong>your own country</strong>. Otherwise, you will not be able to access your site.', 'mxdnsms-domain'); ?>    
    </div>
    <br>

    <form id="mxdnsms_form_update">

        <div class="mxdnsms_countries_wrapper">

            <?php foreach ($data['countries'] as $key => $value) : ?>

                <div class="mxdnsms_country <?php echo in_array( $key, $data['black_list'] ) ? 'mxdnsms_country_blocked' : ''; ?>">

                    <input type="checkbox" id="<?php echo esc_attr( $key ); ?>" name="mxdnsms_countries" class="mxdnsms_countries" value="<?php echo esc_html( $key ); ?>" <?php echo in_array( $key, $data['black_list'] ) ? 'checked' : ''; ?> />
                    <label for="<?php echo esc_attr( $key ); ?>"><?php echo esc_html( $value['country'] ); ?></label>
                
                </div>

            <?php endforeach; ?>

        </div>

        <p class="mx-submit_button_wrap">
            <input type="hidden" id="mxdnsms_wpnonce" name="mxdnsms_wpnonce" value="<?php echo wp_create_nonce('mxdnsms_nonce_request'); ?>" />
            <input class="button-primary" type="submit" name="mxdnsms_submit" value="<?php echo __('Save', 'mxdnsms-domain'); ?>" />
        </p>

    </form>

</div>