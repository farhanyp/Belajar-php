<?php

namespace BelajarPhpMvc\Belajar\PHP\MVC\Controller;

class ProductController{

    function categories (string $productId, string $categoryId){
        echo "PRODUCT $productId, CATEGORY $categoryId";
    }
}