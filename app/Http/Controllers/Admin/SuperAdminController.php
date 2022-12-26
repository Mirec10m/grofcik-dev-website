<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\RedirectResponse;

class SuperAdminController extends AdminController
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
