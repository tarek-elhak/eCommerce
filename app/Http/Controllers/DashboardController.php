<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    //
    public function index(){
        return View("dashboard.index",[
            "members" => User::all()->except(["is-admin" => 1])
        ]);
    }
}
