jQuery(document).ready(function ($) {

	// Edit table item
	$('#mxdnsms_form_update').on('submit', function (e) {

		e.preventDefault();

		var nonce = $(this).find('#mxdnsms_wpnonce').val();

		var countries = [];

		$('.mxdnsms_countries').each(function() {
			if($(this).is(':checked')) {
				countries.push($(this).val());
			}
		});

		var data = {

			'action': 'mxdnsms_update',
			'nonce': nonce,
			'countries': countries

		};

		jQuery.post(mxdnsms_admin_localize.ajaxurl, data, function (response) {

			// console.log(response);
			alert('Saved');

		});

	});

	// highlight block
	$( '.mxdnsms_countries' ).on('change', function() {
		$(this).parent().toggleClass('mxdnsms_country_blocked');
	});

});