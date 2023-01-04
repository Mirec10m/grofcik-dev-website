<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    /**
     * Set alert message for view
     * @param string $icon alert icon (success / error)
     * @param string $title alert title
     * @param string $message alert message
     * @return void
     */
    protected function _setFlashMessage(string $icon, string $title, string $message) : void
    {
        request()->session()->flash('icon', $icon);
        request()->session()->flash('title', $title);
        request()->session()->flash('message', $message);
    }

}
