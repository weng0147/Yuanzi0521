(function($) {

	var $wrapper = $('.fl-node-<br>
<b>Warning</b>:  Undefined variable $cf_module in <b>E:\xampp\htdocs\testsite\wordpress-6.6.1-zh_CN\wordpress\wp-content\plugins\cartflows\modules\beaver-builder\cartflows-bb-checkout-form\js\settings-js.php</b> on line <b>12</b><br>
<br>
<b>Warning</b>:  Attempt to read property "node" on null in <b>E:\xampp\htdocs\testsite\wordpress-6.6.1-zh_CN\wordpress\wp-content\plugins\cartflows\modules\beaver-builder\cartflows-bb-checkout-form\js\settings-js.php</b> on line <b>12</b><br>
 .cartflows-bb__checkout-form' );

	var $offer_wrap = $('body').find( '#wcf-pre-checkout-offer-modal' );

	var settings_data = $wrapper.data( 'settings-data' );

	var enable_product_options = settings_data.enable_product_options;

	var form = $('.fl-builder-settings');

	if( 'yes' === enable_product_options ) {

		form.find( "#fl-field-product_options_position .fl-field-label" ).show();
		form.find( "#fl-field-product_options_position select" ).show();
		form.find( "#fl-field-product_options_position .fl-field-description" ).hide();

		form.find( "#fl-field-product_options_skin" ).show();
		form.find( "#fl-field-product_options_images" ).show();
		form.find( "#fl-field-product_option_section_title_text" ).show();

		form.find('#fl-builder-settings-section-product_style').show();

	} else {

		form.find( "#fl-field-product_options_position .fl-field-label" ).hide();
		form.find( "#fl-field-product_options_position select" ).hide();
		form.find( "#fl-field-product_options_position .fl-field-description" ).show();

		form.find( "#fl-field-product_options_skin" ).hide();
		form.find( "#fl-field-product_options_images" ).hide();
		form.find( "#fl-field-product_option_section_title_text" ).hide();

		form.find('#fl-builder-settings-section-product_style').hide();
	}
})(jQuery);
