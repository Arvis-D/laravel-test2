<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    private function users()
    {
        return belongsToMany(User::class);
    }
}
