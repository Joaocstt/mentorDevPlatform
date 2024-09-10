<?php

namespace App\Http\Controllers\Mentor\Authentication;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\LoginRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;
use Inertia\Response;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

class LoginController extends Controller
{
    public function checkAuth(): RedirectResponse
    {
        if(!Auth::check()) {
            return redirect()->route('admin.login');
        }

        return redirect()->route('admin.dashboard');
    }

    public function show(): Response
    {
        if(Auth::check()) {
            return Inertia::render('Admin/dashboard');
        }

        return Inertia::render('Admin/login');

    }

    public function loginDo(LoginRequest $request): JsonResponse
    {
        $credentials = [
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ];

        if(Auth::attempt($credentials)) {
            Session::regenerateToken();

            return response()->json(['user' => Auth::user(), HttpFoundationResponse::HTTP_OK]);
        }

        return response()->json(['message' => 'Suas credencias são inválidas']
            , HttpFoundationResponse::HTTP_NOT_FOUND);

    }

    public function logout(): RedirectResponse
    {
        Auth::logout();
        Session::regenerateToken();
        return redirect()->route('client.login');
    }
}
