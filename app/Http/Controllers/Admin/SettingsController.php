<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UpdatePasswordRequest;
use App\Http\Requests\UpdateSettingsRequest;
use App\User;

class SettingsController extends AdminController
{
    public function edit(){
        $user = User::findOrFail(auth()->id());

        return view('admin.settings.edit', compact('user'));
    }

    public function update(UpdateSettingsRequest $request){
        $user = User::findOrFail(auth()->id());

        $user->update($request->all());
        $user->save();

        $this->_setFlashMessage('success', 'Uložené', "Nastavenia boli úspešne uložené.");

        return back();
    }

    public function password(){

        return view('admin.settings.password');
    }

    public function change(UpdatePasswordRequest $request){
        $user = User::findOrFail(auth()->id());

        $user->password =  bcrypt($request->password);
        $user->save();

        $this->_setFlashMessage('success', 'Zmenené', "Vaše heslo bolo zmenené.");

        return back();
    }
}
