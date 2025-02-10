<?php

namespace App\Http\Controllers\Interface;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Cakes;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function index()
    {
        $cakes = Cakes::select('cakes.id', 'cakes.name', 'price', 'images', 'description', 'categories.name as category')->join('categories', 'cakes.category_id', '=', 'categories.id')->get();
        $cakes = $cakes->toArray();
        return view('Interface.cakes.shop', compact('cakes'));
    }
    public function cakeDetail(Request $request, $id)
    {
        $cake = Cakes::where('cakes.id', $id)->select('cakes.id', 'cakes.name', 'price', 'images', 'description', 'categories.name as category')->join('categories', 'cakes.category_id', '=', 'categories.id')->first();
        $cake = $cake->toArray();
        return view('Interface.cakes.detail', compact('cake'));
    }
}
