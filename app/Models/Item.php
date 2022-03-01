<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $guarded = ["id"];


    // item belongs to a category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // item belongs to a member
    public function member()
    {
        return $this->belongsTo(User::class);
    }
}
