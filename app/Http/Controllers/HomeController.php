<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Models\Item;
use PhpParser\Node\Expr\Array_;


class HomeController extends Controller
{
    //
    public function index (Request $request)
    {
//        dd(Item::all());
        if ($request->has("category")) {
            $items = new Collection();

            foreach ($request->category as $category):
                $items = $items->merge(Category::where("category_name", $category)->first()->items()->with("category")->get());
            endforeach;
            return View("index",[
                "categories" => Category::all(),
                "items" => $items->sortByDesc("created_at")
            ]);
        }else{
            return View("index",[
                "categories" => Category::all(),
                "items" => Item::with("category")->get()->sortByDesc("created_at")
            ]);
        }
    }
}
