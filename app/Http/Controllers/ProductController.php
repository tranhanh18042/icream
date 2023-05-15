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
        $listProduct = $this->productService->getListProducts();
        return view('product', compact('listProduct'));
    }
}