<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Inertia\Inertia;
use Inertia\Response;

class AuthController extends Controller
{
    /*
        GET /register
        بيعرض صفحة الفورم فقط
    */
    public function create(): Response
    {
        return Inertia::render('Auth/Register');
    }

    /*
        POST /register
        بيستقبل بيانات الفورم بعد ما الـ RegisterRequest يفحصها
    */
    public function register(RegisterRequest $request)
    {
        $validated = $request->validated();

        // هنا بعدين هتعمل User::create($validated)
        return back()->with('success', 'Registration Successful');
    }
}
