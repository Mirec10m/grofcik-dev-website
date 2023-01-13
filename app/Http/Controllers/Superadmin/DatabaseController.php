<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Artisan;

class DatabaseController extends AdminController
{

    public function migrate() : RedirectResponse
    {
        Artisan::call('migrate');

        $this->_setFlashMessage('success', 'Spustené', 'Migrácie boli spustené.');

        return redirect()->route('dashboard.index');
    }

    public function seed() : RedirectResponse
    {
        Artisan::call('db:seed');

        $this->_setFlashMessage('success', 'Spustené', 'Seedy boli spustené.');

        return redirect()->route('dashboard.index');
    }

}
