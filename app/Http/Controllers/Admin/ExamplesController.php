<?php

namespace App\Http\Controllers\Admin;

use App\Example;
use App\Http\Requests\CreateExamplesRequest;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;

class ExamplesController extends AdminController
{

    public function store() {
    }

    public function index(){
        return view('admin.examples.index');
    }

    public function create(){
        return view('admin.examples.create');
    }

    public function edit(){
        return view('admin.examples.edit');
    }

    public function gallery(){
        return view('admin.examples.gallery');
    }

    public function delete(){
        $this->_setFlashMessage('success', 'Vymazaná', "Položka <b>name_sk</b> bola vymazaná");

        return redirect()->route('examples.index');
    }
}
