<?php

namespace App\Http\Controllers;

use App\Service\ProductService;

class ProductController extends Controller
{
    protected $productService;
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $listProduct = $this->productService->getListBestPrices();
        return view('productBestPrice', compact('listProduct'));
    }
    public function getList()
    {
        $listProducts = $this->productService->getListProducts();
        return view('listProduct', compact('listProducts'));
    }
}
