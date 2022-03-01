<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Models\Category;


class AdminItemController extends Controller
{
    /**
     * Display all items
     *
     */
    public function index()
    {
        return View("items.index", ["items" => Item::with("category","member")->get()]);
    }

    /**
     * Show the form for creating a new Item.
     */
    public function create()
    {
        return View("items.create", [
            "categories" => Category::all()
        ]);
    }
    /**
     * persist a new item
     */
    public function store(Request $request)
    {
        // validate the add item form data
        $attributes = $request->validate([
            "name" => ["required"],
            "description" => ["required" , "min:50"],
            "price" => ["required" , "numeric"],
            "currency" => ["required"],
            "made_country" => ["required"],
            "status" => ["required"],
            "image" => ["required"],
            "category" => ["required"],
            "number_of_available_pieces" => ["required" , "integer"]
        ]);
        $attributes["member_id"] = auth()->id();
        $attributes["category_id"] = $request->input("category");
        $attributes["image"] = $request->file("image")->store("public/items");

        // create a new item record
        Item::create($attributes);
        return redirect("/admin/dashboard")->with(["successMessage" => "Item has been added successfully"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }
}
