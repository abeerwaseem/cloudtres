<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ImageResource;

class ImageController extends Controller
{
    use ApiResponser;

    public function index(Request $request)
    {
        $images = Image::all();

        return ImageResource::collection($images);
    }
}
