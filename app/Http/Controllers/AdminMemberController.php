<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
        $attributes["password"] = bcrypt($attributes["password"]);
        $attributes["is_admin"] = 0;
        $attributes["is_trusted"] = 0;
        $attributes["is_registered"] = 1;
        $user = User::create($attributes);
        $user->save();
        return redirect("/admin/members");
    }

    public function edit(User $user){
        return View("members.edit" , [
            "member" => $user
        ]);
    }

    public function update(User $user){
        if (request("password")){
            $attributes = request()->validate([
                "username" => ["required" , Rule::unique("users" ,"username")->ignore($user->id)],
                "full_name" => ["required"],
                "email" => ["required" , "email"],
                "password" => ["required" , "min:10"]
            ]);
            $user->password = bcrypt($attributes["password"]);
        }else{
            $attributes = request()->validate([
                "username" => ["required" , Rule::unique("users" ,"username")->ignore($user->id)],
                "full_name" => ["required"],
                "email" => ["required" , "email"],
            ]);
        }

        $user->username = $attributes["username"];
        $user->full_name = $attributes["full_name"];
        $user->email = $attributes["email"];
        $user->save();

        return redirect("/admin/members");
    }

    public function destroy(User $user){

        $user->delete();

        return redirect("/admin/members");

    }
}
