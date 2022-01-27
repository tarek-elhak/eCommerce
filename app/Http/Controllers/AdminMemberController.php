<?php

namespace App\Http\Controllers;

use App\Models\User;

class AdminMemberController extends Controller
{
    //
    public function index()
    {
        return View("members.index" , [
            "members" => User::all()->except(["is_admin" => 1])
        ]);
    }
}
