<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\MessageBag;

trait HttpResponse
{
    public function success(string $message, int $status, array|Model|JsonResource $data = [])
    {
        return response()->json([
            'message' => $message,
            'status' => $status,
            'data' => $data
        ], $status, [], JSON_UNESCAPED_SLASHES);

        // url: 'https://api.minhaapi.com/api/users' => https:\/\/api.minhaapi,com\/api\/users
    }

    public function error(string $message, int $status, array|MessageBag $errors = [], array $data = [])
    {
        return response()->json([
            'message' => $message,
            'status' => $status,
            'errors' => $errors,
            'data' => $data
        ], $status, [], JSON_UNESCAPED_SLASHES);
    }
}