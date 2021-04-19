<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\VendorResource;

class VendorController extends Controller
{
    use ApiResponser;

    public function index(Request $request)
    {
        $vendors = Vendor::all();

        return VendorResource::collection($vendors);
    }
}
