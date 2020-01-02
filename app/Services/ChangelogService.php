<?php

namespace App\Services;

use App\Changelog;
use Illuminate\Support\Facades\Auth;

class ChangelogService
{
    public function createChangelog($item, $action)
    {
        $changelog = new Changelog([
            'user_name' => Auth::user()->name,
            'product_title' => $item,
            'action' => $action
        ]);
        $changelog->save();
    }
}