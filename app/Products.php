<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = ['title', 'price', 'quantity'];

    private function users()
    {
        return belongsToMany(User::class);
    }
}
