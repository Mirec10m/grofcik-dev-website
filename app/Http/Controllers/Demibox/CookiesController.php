<?php

namespace App\Http\Controllers\Demibox;

use App\Http\Controllers\Controller;
use App\Http\Requests\Demibox\CookiesSubmitRequest;
use Illuminate\Http\JsonResponse;

class CookiesController extends Controller
{

    public function submit(CookiesSubmitRequest $request) : JsonResponse
    {
        $data = [
            'cookies_dismissed' => 1,
            'cookies_analytical' => $request->cookies_analytical == 1 ? 1 : 0,
            'cookies_marketing' => $request->cookies_marketing == 1 ? 1 : 0,
        ];

        session($data);

        return response()->json($data);
    }

}
