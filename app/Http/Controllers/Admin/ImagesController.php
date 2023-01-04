<?php

namespace App\Http\Controllers\Admin;

use App\Image;
use App\Traits\DeleteTrait;
use Illuminate\Http\RedirectResponse;

class ImagesController extends AdminController
{
    use DeleteTrait;

    public function delete(Image $image) : RedirectResponse
    {
        $this->delete_image($image);

        return back();
    }

}
