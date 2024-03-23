<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __invoke(RegisterRequest $request)
    {
        $dados = $request->validated();
        $user = User::query()->create($dados);
        return $user;
        // dd($dados);
    }
}