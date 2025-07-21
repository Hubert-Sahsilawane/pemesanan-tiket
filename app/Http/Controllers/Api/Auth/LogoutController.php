<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        if ($request->user()) {
            $request->user()->token()->revoke();

            return response()->json([
                'status' => true,
                'message' => 'Logout berhasil',
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => 'User tidak ditemukan atau belum login',
        ], 401);
    }
}
