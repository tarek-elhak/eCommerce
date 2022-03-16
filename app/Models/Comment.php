<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    // comment belongs to an item
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
    // belongs to a member
    public function member()
    {
        return $this->belongsTo(User::class);
    }
}
