jQuery(document).ready(function ($) {
	// AJAX request to delete a product
	$('.delete-product').on('click', function () {
			var productName = $(this).data('product');
			var nonce = product_list_script_vars.nonce; // Get the nonce value from localized script variables

			// Confirm deletion with the user
			if (confirm('Are you sure you want to delete this product?')) {
					var data = {
							action: 'delete_product',
							product_name: productName,
							nonce: nonce, // Include the nonce in the data
					};

					$.ajax({
							type: 'POST',
							url: product_list_script_vars.ajaxurl,
							data: data,
							success: function (response) {
									console.log(response);
									if (response.success) {
											// Update the UI or perform any other actions on success
											console.log(response.data);
											$(this).closest('.product-item').remove(); // Remove the product from the UI
									} else {
											console.error('Error deleting product: ' + response.data);
									}
							},
							error: function (error) {
									console.error('Error deleting product: ' + error.responseText);
							},
					});
			}
	});
});