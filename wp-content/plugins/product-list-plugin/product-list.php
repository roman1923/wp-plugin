<?php
// Retrieve and display products from the file
$products = get_products();

?>

<ul class="product-list">
    <?php
    foreach ($products as $product) {
        ?>
        <li class="product-item" id="<?php echo esc_attr($product); ?>">
            <?php echo esc_html($product); ?>
            <button class="delete-product" data-product="<?php echo esc_attr($product); ?>">+</button>
        </li>
        <?php
    }
    ?>
</ul>

