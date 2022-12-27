<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MenuSettingsRequest;
use App\Http\Requests\UpdatePasswordRequest;
use App\Http\Requests\UpdateSettingsRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;

class SettingsController extends AdminController
{

    public function edit() : Factory | View | Application
    {
        $user = auth()->user();

        return view('admin.settings.edit', compact('user'));
    }

    public function update(UpdateSettingsRequest $request) : RedirectResponse
    {
        $user = auth()->user();

        $user->update( $request->all() );

        $this->_setFlashMessage('success', 'Uložené', "Nastavenia boli úspešne uložené.");

        return back();
    }

    public function password() : Factory | View | Application
    {
        return view('admin.settings.password');
    }

    public function change(UpdatePasswordRequest $request) : RedirectResponse
    {
        $user = auth()->user();

        $user->password = bcrypt($request->password);
        $user->save();

        $this->_setFlashMessage('success', 'Zmenené', "Vaše heslo bolo zmenené.");

        return back();
    }

    public function menu(MenuSettingsRequest $request) : JsonResponse
    {
        session( $request->only([ 'menu_pinned' ]) );

        return response()->json();
    }

}
