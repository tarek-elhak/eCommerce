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
        $attributes["image"] = $request->file("image")->store("items");

        // create a new item record
        Item::create($attributes);
        return redirect("/admin/items")->with(["successMessage" => "Item has been added successfully"]);
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
     * Show the form for editing an item
     *
     * @param  \App\Models\Item  $item
     */
    public function edit(Item $item)
    {
        return View("items.edit" , [
            "item" => $item,
            "categories" => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     */
    public function update(Request $request, Item $item)
    {
        $attributes = $request->validate([
            "name" => ["required"],
            "description" => ["required" , "min:50"],
            "price" => ["required" , "numeric"],
            "number_of_available_pieces" => ["required" , "integer"]
        ]);
        $attributes["member_id"] = auth()->id();
        $attributes["category_id"] = $request->has("category") ? $request->input("category") : $item->category->id;
        $attributes["currency"] = $request->has("currency") ? $request->input("currency") : $item->currency;
        $attributes["made_country"] = $request->has("made_country") ? $request->input("made_country") : $item->made_country;
        $attributes["image"] = $request->hasFile("image") ? $request->file("image")->store("items") : $item->image;
        $attributes["status"] = $request->has("status") ? $request->input("status") : $item->status;

        $item->update($attributes);

        return redirect("/admin/items")->with(["successMessage" => "Item $item->name has been updated successfully"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     */
    public function destroy(Item $item)
    {
        //

        $item->delete();

        return redirect("/admin/items")->with(["dangerMessage" => "item $item->name has been deleted successfully"]);
    }
}
