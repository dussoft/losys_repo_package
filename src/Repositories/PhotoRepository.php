<?php

namespace Referenzverwaltung\ModelPhoto\Repositories;

use Referenzverwaltung\ModelPhoto\Interfaces\PhotoRepositoryInterface;
use Referenzverwaltung\ModelPhoto\Models\Photo;

class PhotoRepository implements PhotoRepositoryInterface 
{
    public function getAllPhotos() 
    {
        return Photo::all();
    }

    public function getPhotoById(int $photoId) 
    {
        return Photo::findOrFail($photoId);
    }

    public function deletePhoto(int $photoId) 
    {
        Photo::destroy($photoId);
    }

    public function createPhoto(array $photoDetails) 
    {
        return Photo::create($photoDetails);
    }

    public function updatePhoto(int $photoId, array $newDetails) 
    {
        return Photo::whereId($photoId)->update($newDetails);
    }

    public function getFulfilledPhotos() 
    {
        return Photo::where('is_fulfilled', true);
    }
}
