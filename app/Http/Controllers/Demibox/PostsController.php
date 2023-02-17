<?php

namespace App\Http\Controllers\Demibox;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Requests\Demibox\CreatePostRequest;
use App\Http\Requests\Demibox\UpdatePostRequest;
use App\Post;
use App\PostCategory;
use App\PostTag;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;

class PostsController extends AdminController
{

    public function index() : Factory | View | Application
    {
        $posts = Post::all();

        return view('admin.posts.index', compact('posts'));
    }

    public function create() : Factory | View | Application
    {
        $post_categories = PostCategory::all(); // dependent on config
        $post_tags = PostTag::all(); // dependent on config

        return view('admin.posts.create', compact('post_categories', 'post_tags'));
    }

    public function store(CreatePostRequest $request) : RedirectResponse
    {
        $post = Post::create($request->all());

        // dependent on config -> create tags connection

        $this->_setFlashMessage('success', 'Vytvorený', "Článok <b>name_sk</b> bol vytvorený");

        return redirect()->route('posts.index');
    }

    public function edit(Post $post) : Factory | View | Application
    {
        $post_categories = PostCategory::all(); // dependent on config
        $post_tags = PostTag::all(); // dependent on config

        return view('admin.posts.edit', compact('post', 'post_categories', 'post_tags'));
    }

    public function update(UpdatePostRequest $request, Post $post) : RedirectResponse
    {
        $post->update($request->all());

        // dependent on config -> update tags connection

        $this->_setFlashMessage('success', 'Zmenený', "Článok <b>name_sk</b> bol zmenený");

        return back();
    }

    public function destroy(Post $post) : RedirectResponse
    {
        $post->delete();

        $this->_setFlashMessage('success', 'Vymazaný', "Článok <b>name_sk</b> bol vymazaný");

        return back();
    }

}
