<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    // view the form login
    public function create()
    {
        return View("session.create");
    }
    // attempting to login
    public function store()
    {
        $attributes = request()->validate([
            "username" => ['required'],
            "password" => ["required"],
        ]);

        $attributes["is_admin"] = true;

        if (Auth::attempt($attributes)){
            return redirect("/admin/dashboard");
        }else{
            return back()->with(["message" => "invalid credentials"]);
        }
    }
    public function destroy()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect('/admin/login');
    }
}
