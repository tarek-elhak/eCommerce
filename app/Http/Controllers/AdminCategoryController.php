<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Validation\Rule;

class AdminCategoryController extends Controller
{
    //
    public function create()
    {
        return View("category.create");
    }
    public function store(Request $request)
    {
        $attributes = $request->validate([
           'category_name' => ["required" , Rule::unique("categories","category_name")]
        ]);

        $category = Category::create($attributes);
        $category->save();
        return redirect("admin/dashboard")->with(["message" => "category has been added successfully"]);
    }
}
