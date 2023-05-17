<?php

namespace App\Http\Controllers;

use App\Service\ShowImagesService;

class ShowImagesController extends Controller
{
    protected $showImagesService;

    public function __construct(ShowImagesService $showImagesService){
        $this->showImagesService = $showImagesService;
    }

    public function index()
    {
        $listImages = $this->showImagesService->getListImages();
        return view('gallery', compact('listImages'));
    }
}
