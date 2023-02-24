<?php

namespace App\Http\Controllers\Demibox;

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PostDraftsController extends AdminController
{

    public function save(Request $request) : JsonResponse
    {


        return response()->json([
            'draft_id' => null,
        ]);
    }

}
