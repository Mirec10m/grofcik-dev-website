<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;

class UsersController extends AdminController
{

    public function index () : Factory | View | Application
    {
        $users = User::noSuperadmin()->get();

        return view('admin.users.index', compact('users'));
    }

    public function create () : Factory | View | Application
    {
        return view('admin.users.create');
    }

    public function store (CreateUserRequest $request) : RedirectResponse
    {
        $user = new User( $request->only([ 'name', 'surname', 'email', 'password' ]) );
        //$user = User::create( $request->only([ 'name', 'surname', 'email', 'password' ]) );

        $this->_setFlashMessage('success', 'Vytvorený', "Používateľ <b>$user->full_name</b> bol vytvorený");

        return redirect()->route('users.index');
    }

    public function edit (User $user) : Factory | View | Application
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update (UpdateUserRequest $request, User $user) : RedirectResponse
    {
        //$user->update( $request->only([ 'name', 'surname' ]) );

        $this->_setFlashMessage('success', 'Zmenený', "Používateľ <b>$user->full_name</b> bol zmenený");

        return back();
    }

    public function destroy (User $user) : RedirectResponse
    {
        //$user->delete();

        $this->_setFlashMessage('success', 'Vymazaný', "Používateľ <b>$user->full_name</b> bol vymazaný");

        return back();
    }

}
