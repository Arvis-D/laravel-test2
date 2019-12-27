<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Changelog extends Model
{
    protected $table = 'products_audit';
    protected $fillable = ['user_name', 'product_title', 'action'];
}
