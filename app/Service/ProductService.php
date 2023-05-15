<?php

namespace App\Service;

use App\Repository\ProductRepository;

class ProductService
{
    protected $productRepository;
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }
    public function getListBestPrices(){
        return $this->productRepository->bestPrices();
    }
}
