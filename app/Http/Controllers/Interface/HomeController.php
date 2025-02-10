<?php

namespace App\Http\Controllers\Interface;

use App\Http\Controllers\Controller;
use App\Models\Cakes;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $cakes = Cakes::all();
        $cakes = $cakes->toArray();

        return view('index', compact('cakes'));
    }
}
