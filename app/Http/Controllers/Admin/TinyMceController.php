<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;

class TinyMceController extends Controller
{
    use UploadTrait;

    public function upload(Request $request) {

        $file = $request->file('file');
        $path = $file->store('tinymce');
        return response()->json(['location' => "/data/$path"]);
    }
}
