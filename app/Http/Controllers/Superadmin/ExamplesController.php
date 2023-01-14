<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Requests\Superadmin\CreateExamplesRequest;
use App\Http\Requests\Superadmin\UpdateExamplesRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ExamplesController extends AdminController
{

    public function index() : Factory | View | Application
    {
        return view('admin.superadmin.examples.index');
    }

    public function create() : Factory | View | Application
    {
        return view('admin.superadmin.examples.create');
    }

    public function store(CreateExamplesRequest $request) : RedirectResponse
    {
        $this->_setFlashMessage('success', 'Vytvorená', "Položka <b>name_sk</b> bola vytvorená");

        return redirect()->route('superadmin.examples.index');
    }

    public function edit() : Factory | View | Application
    {
        return view('admin.superadmin.examples.edit');
    }

    public function update(UpdateExamplesRequest $request) : RedirectResponse
    {
        $this->_setFlashMessage('success', 'Zmenená', "Položka <b>name_sk</b> bola zmenená");

        return back();
    }

    public function destroy() : RedirectResponse
    {
        $this->_setFlashMessage('success', 'Vymazaná', "Položka <b>name_sk</b> bola vymazaná");

        return redirect()->route('superadmin.examples.index');
    }

    public function gallery() : Factory | View | Application
    {
        return view('admin.superadmin.examples.gallery');
    }

    public function upload() : RedirectResponse
    {
        $this->_setFlashMessage('success', 'Nahraný', "Obrázok položky <b>name_sk</b> bol nahraný do galérie");

        return redirect()->route('superadmin.examples.gallery');
    }

}
