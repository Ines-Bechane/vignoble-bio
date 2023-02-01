<?php

$product_id = $_GET['id'];

$product = getProduct($product_id);

$category = getCategory($product['category_id']);