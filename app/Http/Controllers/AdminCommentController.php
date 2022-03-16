<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class AdminCommentController extends Controller
{
    //

    public function index()
    {
        return View("comment.index",["comments" => Comment::with(["member","item"])->get()]);
    }
}
