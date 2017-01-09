<?php namespace App\Repositories;


class PhotoRepository
{

    /** Zwraca ścieżkę do folderu ze zdjeciami */
    public function getPhotosDir()
    {
        return './img/hafty/';
    }

    /** Zwraca ścieżkę do folderu z miniaturkami */
    public function getThumbnailDir()
    {
        return './img/miniaturki/';
    }

    /**
     * Pobiera nazwy plików z folderu $dir i zapisuje je do array
     */
    public function getPhotosNames()
    {
        $dir = $this->getPhotosDir();
        $result = [];
        foreach (scandir($dir) as $file) {
            if ($file != '.' && $file != '..') {
                $result[] = $file;
            }
        }
        return $result;
    }

    /**
     * Zwraca tablicę z gotowymi ścieżkami do zdjęć w postaci:
     *  [
     *    'photo' => './img/hafty/1.jpg'
     *    'thumbnail' => './img/miniaturki/1.jpg'
     *  ]
     */
    public function getAll()
    {
        $result = [];
        foreach ($this->getPhotosNames() as $photo_name) {
            $photo = [
                'photo' => $this->getPhotosDir() . $photo_name,
                'thumbnail' => $this->getThumbnailDir() . $photo_name
            ];
            $result[] = $photo;
        }
        return $result;
    }
}