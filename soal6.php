<?php

echo "SELECT products.`id`, products.`name`, product_categories.`name` FROM products, product_categories WHERE products.`category_id` = `product_categories`.`id`";



?>

<script type="text/javascript">
	$("#soal6").addClass("active");
</script>