<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;

class DashboardController extends AdminController
{

    public function index() : Factory | View | Application
    {
        return view('admin.dashboard.index');
    }

    public function overview() : Factory | View | Application
    {
        return view('admin.dashboard.overview');
    }

}
