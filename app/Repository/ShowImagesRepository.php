<?php

namespace App\Repository;

use App\Models\Images;

class ShowImagesRepository
{
    protected $images;
    public function __construct(Images $images)
    {
        $this->images = $images;
    }
    public function getAll()
    {
        return $this->images->all();
    }
}
