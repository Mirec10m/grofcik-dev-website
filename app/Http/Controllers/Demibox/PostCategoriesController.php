<?php

namespace App\Http\Controllers\Demibox;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Requests\Demibox\CreatePostCategoryRequest;
use App\Http\Requests\Demibox\UpdatePostCategoryRequest;
use App\PostCategory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class PostCategoriesController extends AdminController
{

    public function index() : Factory | View | Application
    {
        $post_categories = PostCategory::all();

        return view('admin.post_categories.index', compact('post_categories'));
    }

    public function create() : Factory | View | Application
    {
        return view('admin.post_categories.create');
    }

    public function store(CreatePostCategoryRequest $request) : RedirectResponse
    {
        $post_category = PostCategory::create($request->all());

        $this->_setFlashMessage('success', 'Vytvorená', "Kategória <b>$post_category->name_sk</b> bola vytvorená");

        return redirect()->route('post-categories.index');
    }

    public function edit(PostCategory $post_category) : Factory | View | Application
    {
        return view('admin.post_categories.edit', compact('post_category'));
    }

    public function update(UpdatePostCategoryRequest $request, PostCategory $post_category) : RedirectResponse
    {
        $post_category->update($request->all());

        $this->_setFlashMessage('success', 'Zmenená', "Kategória <b>$post_category->name_sk</b> bola zmenená");

        return back();
    }

    public function destroy(PostCategory $post_category) : RedirectResponse
    {
        $post_category->delete();

        $this->_setFlashMessage('success', 'Vymazaná', "Kategória <b>$post_category->name_sk</b> bola vymazaná");

        return back();
    }

}
