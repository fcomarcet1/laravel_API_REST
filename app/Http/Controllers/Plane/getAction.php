<?php

namespace App\Http\Controllers\Plane;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;

class getAction extends Controller
{

    public function __invoke()
    {
        return UserResource::collection(User::all());
    }
    
}
