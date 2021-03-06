<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Models\Comment;

class AdminCommentController extends Controller
{
    //

    public function index()
    {
        return View("comment.index",["comments" => Comment::with(["member","item"])->get()]);
    }

    public function show(Item $item)
    {
        return View("comment.index",["comments" => $item->comments]);
    }

    public function edit(Comment $comment)
    {
        return View("comment.edit",["comment" => $comment]);
    }

    public function update(Request $request , Comment $comment)
    {
        // validate

        $attributes = $request->validate([
            "body" =>["required"]
        ]);

        $attributes["is_approved"] = $request->has("is_approved") ? 1 : 0;

        $comment->update($attributes);

        $comment->save();

        return redirect("/admin/comments")->with(["successMessage" => "Comment Has Been Updated Successfully"]);

    }

    public function destroy(Comment $comment)
    {
        $comment->delete();

        return redirect("/admin/comments/")->with(["dangerMessage" => "Comment Has Been Deleted Successfully"]);
    }

    public function approve(Comment $comment)
    {
        $comment->is_approved = 1;

        $comment->save();

        return redirect("/admin/comments")->with(["successMessage" => "Comment Has Been Approved Successfully"]);
    }
}
