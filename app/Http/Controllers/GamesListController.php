<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesListController extends Controller
{
    public  function redirect()
    {
        return view('gameview');
    }
}
