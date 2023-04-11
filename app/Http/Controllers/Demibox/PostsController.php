<?php

namespace App\Http\Controllers\Demibox;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Requests\Demibox\CreatePostRequest;
use App\Http\Requests\Demibox\UpdatePostRequest;
use App\Post;
use App\PostCategory;
use App\PostTag;
use App\Services\SEOService;
use App\Traits\UploadTrait;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;

class PostsController extends AdminController
{

    use UploadTrait;

    public function __construct(private SEOService $SEOService)
    {}

    public function index() : Factory | View | Application
    {
        $posts = Post::all();

        return view('admin.posts.index', compact('posts'));
    }

    public function create() : Factory | View | Application
    {
        $post_categories = config('demibox.blog.categories') ? PostCategory::all() : null;
        $post_tags = config('demibox.blog.tags') ? PostTag::all() : null;

        return view('admin.posts.create', compact('post_categories', 'post_tags'));
    }

    public function store(CreatePostRequest $request) : RedirectResponse
    {
        $post = Post::create($request->all());

        if ( config('demibox.blog.tags') ) {
            $post->tags()->attach($request->tags);
        }

        foreach ($request->items as $key => $item) {
            $post_item = $post->items()->create($item);

            if ($item['type'] == 'image') {
                $this->upload_image($request, "items.$key.image_file", 'post_items', $post_item);
            }
        }

        $this->SEOService->createSEO($post, $request);
        $this->upload_image($request, 'profile', 'posts', $post, 'profile');

        $this->_setFlashMessage('success', 'Vytvorený', "Článok <b>$post->name_sk</b> bol vytvorený");

        return redirect()->route('posts.index');
    }

    public function show(Post $post) : Factory | View | Application
    {
        app()->setLocale( request('locale') );

        $view = view('web.posts.show', compact('post'));

        app()->setLocale('sk');

        return $view;
    }

    public function edit(Post $post) : Factory | View | Application
    {
        $post_categories = config('demibox.blog.categories') ? PostCategory::all() : null;
        $post_tags = config('demibox.blog.tags') ? PostTag::all() : null;

        return view('admin.posts.edit', compact('post', 'post_categories', 'post_tags'));
    }

    public function update(UpdatePostRequest $request, Post $post) : RedirectResponse
    {
        $post->update($request->all());

        if ( config('demibox.blog.tags') ) {
            $post->tags()->sync($request->tags);
        }

        $item_ids = array_column($request->items, 'id');
        $post->items()->whereNotIn('id', $item_ids)->delete();

        foreach ($request->items as $key => $item) {
            if ( isset($item['id']) ) {
                $post_item = $post->items()->where('id', $item['id'])->first();
                $post_item->update($item);
            } else {
                $post_item = $post->items()->create($item);
            }

            $this->upload_image($request, "items.$key.image_file", 'post_items', $post_item);
        }

        $this->SEOService->updateSEO($post, $request);
        $this->upload_image($request, 'profile', 'posts', $post, 'profile');

        if ( $request->preview ) {
            return redirect()->route('posts.show', [ 'post' => $post, 'locale' => $request->preview ]);
        }

        $this->_setFlashMessage('success', 'Zmenený', "Článok <b>$post->name_sk</b> bol zmenený");

        return back();
    }

    public function destroy(Post $post) : RedirectResponse
    {
        $this->SEOService->deleteSEO($post);
        $post->delete();

        $this->_setFlashMessage('success', 'Vymazaný', "Článok <b>$post->name_sk</b> bol vymazaný");

        return back();
    }

}
