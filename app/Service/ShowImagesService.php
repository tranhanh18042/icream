<?php

namespace App\Service;

use App\Repository\ShowImagesRepository;

class ShowImagesService
{
    protected $showImagesRepository;

    public function __construct(ShowImagesRepository $showImagesRepository)
    {
        $this->showImagesRepository = $showImagesRepository;
    }
    public function getListImages()
    {
        return $this->showImagesRepository->getAll();
    }
}
