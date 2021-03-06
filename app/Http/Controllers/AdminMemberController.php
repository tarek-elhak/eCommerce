<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class AdminMemberController extends Controller
{
    //
    public function index(Request $request)
    {
        if($request->has("pending")){
            return View("members.index", [
                "members" => User::where("is_registered" , 0 )->get()
            ]);
        }
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
        $attributes["registered_date"] = now();
        $user = User::create($attributes);
        $user->save();
        return redirect("/admin/members")->with(["successMessage" => "member has been added successfully"]);
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

        return redirect("/admin/members")->with(["successMessage" => "$user->username has been updated"]);
    }

    // activate pending.blade.php members

    public function activate (User $user):RedirectResponse
    {
        $user->is_registered = 1;
        $user->save();
        return back()->with(["successMessage" => "$user->username has beed activated successfully"]);
    }


    public function destroy(User $user){

        $user->delete();
        return redirect("/admin/members")->with(["dangerMessage" => "$user->username has been deleted"]);

    }
}
