<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminMemberController extends Controller
{
    //
    public function index()
    {
        return View("members.index");
    }
}
