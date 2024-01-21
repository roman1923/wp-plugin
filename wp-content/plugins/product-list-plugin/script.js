jQuery(document).ready(function ($) {
	// Declare productItem outside the click event handler
	var productItem;

	// AJAX request to delete a product
	$('.delete-product').on('click', function () {
			var productName = $(this).data('product');
			productItem = $(this).parent(); // Assign value to productItem

			var nonce = product_list_script_vars.nonce;

			// Confirm deletion with the user
			if (confirm('Are you sure you want to delete this product?')) {
					var data = {
							action: 'delete_product',
							product_name: productName,
							nonce: nonce,
					};

					$.ajax({
							type: 'POST',
							url: product_list_script_vars.ajaxurl,
							data: data,
							success: function (response) {
									console.log(response);
									if (response.success) {
											productItem.remove();
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
