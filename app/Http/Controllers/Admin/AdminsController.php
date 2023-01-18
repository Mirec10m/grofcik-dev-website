<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class AdminsController extends AdminController
{

    public function index () : Factory | View | Application
    {
        $admins = User::noSuperadmin()->where('admin', 1)->get();

        return view('admin.admins.index', compact('admins'));
    }

    public function create () : Factory | View | Application
    {
        return view('admin.admins.create');
    }

    public function store (CreateUserRequest $request) : RedirectResponse
    {
        $admin = new User( $request->only([ 'username', 'name', 'surname', 'email', 'password' ]) );
        //$admin = User::create( $request->only([ 'username', 'name', 'surname', 'email', 'password' ]) );

        $this->_setFlashMessage('success', 'Vytvorený', "Administrátor <b>$admin->full_name</b> bol vytvorený");

        return redirect()->route('admins.index');
    }

    public function edit (User $admin) : Factory | View | Application
    {
        return view('admin.admins.edit', compact('admin'));
    }

    public function update (UpdateUserRequest $request, User $admin) : RedirectResponse
    {
        //$admin->update( $request->only([ 'name', 'surname' ]) );

        $this->_setFlashMessage('success', 'Zmenený', "Administrátor <b>$admin->full_name</b> bol zmenený");

        return back();
    }

    public function destroy (User $admin) : RedirectResponse
    {
        //$admin->delete();

        $this->_setFlashMessage('success', 'Vymazaný', "Administrátor <b>$admin->full_name</b> bol vymazaný");

        return back();
    }

}
