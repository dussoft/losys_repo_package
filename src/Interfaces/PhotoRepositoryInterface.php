<?php

namespace Referenzverwaltung\ModelPhoto\Interfaces;

interface PhotoRepositoryInterface 
{
    public function getAllPhotos();
    public function getPhotoById(int $photoId);
    public function deletePhoto(int $photoId);
    public function createPhoto(array $photoDetails);
    public function updatePhoto(int $photoId, array $newDetails);
    public function getFulfilledPhotos();
}
 