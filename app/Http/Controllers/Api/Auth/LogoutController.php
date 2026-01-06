<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Dedoc\Scramble\Attributes\Group;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

#[Group('Auth')]
class LogoutController extends Controller
{
    /**
     * Realiza o logout do usuário autenticado.
     */
    public function __invoke()
    {
        $user = Auth::user();

        $user->currentAccessToken()->delete();

        return $this->success('Logout realizado com sucesso.', Response::HTTP_OK);
    }
}
