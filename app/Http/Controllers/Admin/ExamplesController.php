<?php

namespace App\Http\Controllers\Admin;

use App\Example;
use App\Http\Requests\CreateExamplesRequest;
use App\Traits\UploadTrait;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ExamplesController extends AdminController
{

    public function index() : Factory | View | Application
    {
        return view('admin.examples.index');
    }

    public function create() : Factory | View | Application
    {
        return view('admin.examples.create');
    }

    public function store() : RedirectResponse
    {
        $this->_setFlashMessage('success', 'Vytvorená', "Položka <b>name_sk</b> bola vytvorená");

        return redirect()->route('examples.index');
    }

    public function edit() : Factory | View | Application
    {
        return view('admin.examples.edit');
    }

    public function update() : RedirectResponse
    {
        $this->_setFlashMessage('success', 'Zmenená', "Položka <b>name_sk</b> bola zmenená");

        return back();
    }

    public function delete() : RedirectResponse
    {
        $this->_setFlashMessage('success', 'Vymazaná', "Položka <b>name_sk</b> bola vymazaná");

        return redirect()->route('examples.index');
    }

    public function gallery() : Factory | View | Application
    {
        return view('admin.examples.gallery');
    }

    public function upload() : RedirectResponse
    {
        return redirect()->route('examples.gallery');
    }

}
