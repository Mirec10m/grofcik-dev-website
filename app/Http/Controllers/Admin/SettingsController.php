<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Settings\MenuSettingsRequest;
use App\Http\Requests\Settings\UpdateImageRequest;
use App\Http\Requests\Settings\UpdateProfileRequest;
use App\Http\Requests\Settings\UpdatePasswordRequest;
use App\Http\Requests\Settings\UpdateSettingsRequest;
use App\Traits\UploadTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;

class SettingsController extends AdminController
{
    use UploadTrait;

    public function index() : Factory | View | Application
    {
        $user = auth()->user();

        return view('admin.settings.index', compact('user'));
    }

    public function profile(UpdateProfileRequest $request) : RedirectResponse
    {
        $user = auth()->user();

        $user->update( $request->only([ 'name', 'surname', 'position' ]) );

        $this->_setFlashMessage('success', 'Uložené', "Nastavenia boli úspešne uložené.");

        return back();
    }

    public function password(UpdatePasswordRequest $request) : RedirectResponse
    {
        $user = auth()->user();

        $user->password = bcrypt($request->password);
        $user->save();

        $this->_setFlashMessage('success', 'Zmenené', "Vaše heslo bolo zmenené.");

        return back();
    }

    public function image(UpdateImageRequest $request) : RedirectResponse
    {
        $user = auth()->user();

        $this->upload_image($request, 'image', 'users', $user, 'profile');

        $this->_setFlashMessage('success', 'Nahratá', "Vaša profilová fotka bola nahratá.");

        return back();
    }

    public function settings(UpdateSettingsRequest $request) : RedirectResponse
    {
        $user = auth()->user();

        $user->menu_pinned = $request->menu_pinned;
        $user->save();

        session( $request->only([ 'menu_pinned' ]) );

        $this->_setFlashMessage('success', 'Zmenené', "Vaše nastavenia boli zmenené.");

        return back();
    }

    public function menu(MenuSettingsRequest $request) : JsonResponse
    {
        session( $request->only([ 'menu_pinned' ]) );

        return response()->json();
    }

}
