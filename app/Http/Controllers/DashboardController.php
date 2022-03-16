<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Item;

class DashboardController extends Controller
{
    //
    public function index(){
        return View("dashboard.index",[
            "members" => User::all()->except(["is-admin" => 1]),
            "items" => Item::all(),
            "comments" => Comment::all()
        ]);
    }
}
