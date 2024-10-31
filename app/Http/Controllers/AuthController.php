<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApiLoginRequest;
use App\Http\Traits\ApiResponses;

class AuthController extends Controller
{
    use ApiResponses;

    public function login(ApiLoginRequest $request)
    {
        return $this->successResponse($request->get('email'));
    }

    public function register()
    {
        return $this->successResponse('Registered');
    }
}
