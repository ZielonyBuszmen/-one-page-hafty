<?php namespace App\Http\ViewComposers;

use App\Repositories\PhotoRepository;
use Illuminate\View\View;

class PhotoComposer
{
    protected $photos;

    public function __construct(PhotoRepository $photos)
    {
        $this->photos = $photos;
    }

    public function compose(View $view)
    {
        $view->with('photos', $this->photos->getAll());
    }
}