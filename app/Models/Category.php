<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class Category extends Model
{
    use HasFactory;
    protected $guarded = ["id"];


    // category has many items

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
