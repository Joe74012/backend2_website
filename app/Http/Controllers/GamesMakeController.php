<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesMakeController extends Controller
{
    public  function redirect()
    {
        return view('gamemake');
    }
}
