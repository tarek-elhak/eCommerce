<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;

class AdminMemberController extends Controller
{
    //
    public function index()
    {
        return View("members.index" , [
            "members" => User::all()->except(["is_admin" => 1])
        ]);
    }

    public function create()
    {
        return View("members.create");
    }
    public function store(){
        // validate

        $attributes = request()->validate([
            "username" => ["required" , Rule::unique("users" ,"username")],
            "full_name" => ["required"],
            "email" => ["required" , "email"],
            "password" => ["required" , "min:10"]
        ]);
        $attributes["is_admin"] = 0;
        $attributes["is_trusted"] = 0;
        $attributes["is_registered"] = 1;
        $user = User::create($attributes);
        $user->save();
        return redirect("/admin/members");
    }
}
