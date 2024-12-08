<?php

namespace App\Http\Controllers;

use Exception;
use App\Services\UserService;
use App\Http\Resources\UserResource;
use App\Http\Requests\PagianteRequest;



class UserController extends Controller
{
    private UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index(PagianteRequest $request)
    {
        try {
            return UserResource::collection($this->userService->list($request));
        } catch (Exception $exception){
            return response(['status'=> false, 'message' => $exception->getMessage()], 422);
        }
    }
}
