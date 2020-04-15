<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class SuperAdminController extends AdminController
{
    public function migrate(Request $request){
        Artisan::call('migrate');

        $this->_setFlashMessage($request, 'success', 'Migrácie boli spustené.');

        return redirect()->route('dashboard.index');
    }

    public function seed(Request $request){
        Artisan::call('db:seed');

        $this->_setFlashMessage($request, 'success', 'Seedy boli spustené.');

        return redirect()->route('dashboard.index');
    }
}
