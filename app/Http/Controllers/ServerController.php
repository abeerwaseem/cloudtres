<?php

namespace App\Http\Controllers;

use App\Models\Server;
use App\Models\User;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ServerResource;
use App\Http\Resources\UserServerResource;

class ServerController extends Controller
{
    use ApiResponser;

    const ITEM_PER_PAGE = 10;

    public function index(Request $request)
    {
        $servers = Server::all();

        return ServerResource::collection($servers);
    }

    public function addUserServer(Request $request, Server $server)
    {
        $server->users()->attach(\Auth::user()->id, ['image_id' => $request->image, 'name' => $request->name]);

        return response()->json([
            'status' => 'Success',
            'message' => 'A Server has been added.'
        ], 200);
    }

    public function getUserServer(Request $request)
    {
        $per_page = $request->page * static::ITEM_PER_PAGE;
        $servers = User::find(\Auth::user()->id)->servers()->paginate($per_page);
        return UserServerResource::collection($servers);
    }

}
