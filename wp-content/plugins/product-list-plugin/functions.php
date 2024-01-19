<?php

// Function to retrieve products from the file
if (!function_exists('get_products')) {
    function get_products() {
        $file_path = ABSPATH . 'data/products.txt';

        // Check if the file exists
        if (file_exists($file_path)) {
            $products = file($file_path, FILE_IGNORE_NEW_LINES);

            // Check if the file is not empty
            if ($products !== false) {
                return $products;
            }
        }

        return array(); // Return an empty array if the file doesn't exist or is empty
    }
}

// Function to delete a product from the file
if (!function_exists('delete_product_from_file')) {
    function delete_product_from_file($product_name) {
        $file_path = ABSPATH . 'data/products.txt';

        $products = get_products();

        // Check if the product exists
        $key = array_search($product_name, $products);
        if ($key !== false) {
            // Remove the product from the array
            unset($products[$key]);

            // Save the updated product list to the file
            $write_result = file_put_contents($file_path, implode("\n", $products));

            return $write_result !== false;
        }

        return false; // Product not found
    }
}


?>
