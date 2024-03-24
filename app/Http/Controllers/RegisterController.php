<?php

namespace App\Http\Controllers;

use App\Events\UserRegistered;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __invoke(RegisterRequest $request)
    {
        $dados = $request->validated();
        $user = User::query()->create($dados);

        UserRegistered::dispatch($user);

        return new UserResource($user);

    }
}
