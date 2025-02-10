<?php

namespace App\Http\Controllers\Interface;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    //
    public function index()
    {
        return view('Interface.blogs.index');
    }
    public function detail_blog(Request $request, $id)
    {
        return view('Interface.blogs.detail');
    }
}
