<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;

class AuthService
{
    /**
     * Register a new user.
     */
    public function register(array $data): array
    {
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);

        // Generate token
        return [
            'name' => $user->name,
        ];
    }
}
