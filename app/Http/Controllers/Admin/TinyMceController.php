<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class TinyMceController extends Controller
{
    use UploadTrait;

    public function upload(Request $request) : JsonResponse
    {
        $file = $request->file('file');

        $path = $file->store('tinymce');

        return response()->json([ 'location' => "/data/$path" ]);
    }

}
