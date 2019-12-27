<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Changelog;

class ChangelogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $changelog = Changelog::latest()->get();

        if(request('from') ==! NULL && request('to') ==! NULL){
            $from = request('from');
            $to = request('to');
            $changelogFiltered = Changelog::whereBetween('created_at', [$from, $to])->get();
        } else {
            $changelogFiltered = $changelog;
        }

        return view('changelog', [
            'changelog' => $changelog,
            'filtered' => $changelogFiltered
        ]);
    }
}
