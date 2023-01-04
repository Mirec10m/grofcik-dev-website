<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;

class SitemapController extends Controller
{

    public function render() : Response | Application | ResponseFactory
    {
        $content = view('layout.sitemap');

        return response($content, 200)->header('Content-Type', 'text/xml');
    }

}
