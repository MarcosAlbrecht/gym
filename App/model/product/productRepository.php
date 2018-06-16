<?php

namespace App\Model\Product;

interface ProductRepository
{
    public function getProducts();
    public function getProduct($id);
    public function getProductsCategory($category);
}
