<?php

namespace App\Services;

use App\Traits\UploadTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class SEOService
{
    use UploadTrait;

    public function createSEO(Model $model, Request $request) : void
    {
        $seo = $model->seo()->create($request->seo);

        $this->upload_image($request, 'seo.image', 'seos', $seo);
    }

    public function updateSEO(Model $model, Request $request) : void
    {
        if ( !($seo = $model->seo) ) {
            $this->createSEO($model, $request);
            return;
        }

        $seo->update($request->seo);

        $this->upload_image($request, 'seo.image', 'seos', $seo);
    }

    public function deleteSEO(Model $model) : void
    {
        $model->seo()->delete();
    }

}
