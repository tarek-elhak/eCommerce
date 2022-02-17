<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Validation\Rule;

class AdminCategoryController extends Controller
{
    //
    public function index ()
    {
        return View("category.index",[
            "categories" => Category::all()
        ]);
    }
    public function create()
    {
        return View("category.create");
    }
    public function store(Request $request)
    {
        $attributes = $request->validate([
           'category_name' => ["required" , Rule::unique("categories","category_name")],
        ]);
        $attributes["visible"] = $request->has("visible");
        $attributes["ads_allowed"] = $request->has("ads");
        $attributes["comments_allowed"] = $request->has("comments");

        $category = Category::create($attributes);
        $category->save();
        return redirect("admin/categories/")->with(["successMessage" => "$category->category_name has been added successfully"]);
    }
    public function edit(Category $category)
    {
        return View("category.edit" , ["category" => $category]);
    }
    public function update(Category $category)
    {
        $attributes = request()->validate([
            "category_name" => ["required",Rule::unique("categories","category_name")->ignore($category->id)]
        ]);
        $category->category_name = $attributes["category_name"];
        $category->visible = request()->has("visible");
        $category->ads_allowed = request()->has("ads");
        $category->comments_allowed = request()->has("comments");
        $category->save();
        return redirect("/admin/categories/")->with(["successMessage" => "$category->category_name has been updated successfully"]);
    }
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect("/admin/categories/")->with(["dangerMessage" => "$category->category_name has been removed"]);
    }
}
