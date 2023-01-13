<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ExamplePagesController extends AdminController
{

    public function overview() : Factory | View | Application
    {
        return view('admin.superadmin.dashboard.overview');
    }

    public function table() : Factory | View | Application
    {
        return view('admin.superadmin.pages.table');
    }

    public function form() : Factory | View | Application
    {
        return view('admin.superadmin.pages.form');
    }

    public function components() : Factory | View | Application
    {
        return view('admin.superadmin.pages.components');
    }

    public function icons() : Factory | View | Application
    {
        return view('admin.superadmin.pages.icons');
    }

}
