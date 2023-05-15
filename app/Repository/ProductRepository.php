<?php

namespace App\Repository;

use App\Models\Product;

class ProductRepository
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function bestPrices()
    {
        return $this->product = Product::paginate(8)->sortBy('price');
    }
}
