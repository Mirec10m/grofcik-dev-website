<?php

namespace App\Http\Controllers\Demibox;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Demibox\CreatePostCategoryRequest;
use App\Http\Requests\Demibox\CreatePostTagRequest;
use App\Http\Requests\Demibox\UpdatePostCategoryRequest;
use App\Http\Requests\Demibox\UpdatePostTagRequest;
use App\PostCategory;
use App\PostTag;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PostTagsController extends AdminController
{

    public function index() : Factory | View | Application
    {
        $post_tags = PostTag::all();

        return view('admin.post_tags.index', compact('post_tags'));
    }

    public function create() : Factory | View | Application
    {
        return view('admin.post_tags.create');
    }

    public function store(CreatePostTagRequest $request) : RedirectResponse
    {
        $post_tag = PostTag::create($request->all());

        $this->_setFlashMessage('success', 'Vytvorená', "Tag <b>$post_tag->name_sk</b> bol vytvorený");

        return redirect()->route('post-tags.index');
    }

    public function edit(PostTag $post_tag) : Factory | View | Application
    {
        return view('admin.post_tags.edit', compact('post_tag'));
    }

    public function update(UpdatePostTagRequest $request, PostTag $post_tag) : RedirectResponse
    {
        $post_tag->update($request->all());

        $this->_setFlashMessage('success', 'Zmenená', "Tag <b>$post_tag->name_sk</b> bol zmenený");

        return back();
    }

    public function destroy(PostTag $post_tag) : RedirectResponse
    {
        $post_tag->delete();

        $this->_setFlashMessage('success', 'Vymazaná', "Tag <b>$post_tag->name_sk</b> bol vymazaný");

        return back();
    }

}
