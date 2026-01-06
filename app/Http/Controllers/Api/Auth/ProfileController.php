<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Dedoc\Scramble\Attributes\Group;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

#[Group('Auth')]
class ProfileController extends Controller
{
    /**
     * Retorna o perfil do usuário autenticado.
     */
    public function __invoke()
    {
        $user = Auth::user();

        return $this->success('Perfil do usuário obtido com sucesso.', Response::HTTP_OK, [
            'user' => UserResource::make($user)
        ]);
    }
}
