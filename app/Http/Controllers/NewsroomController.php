<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsroomController extends Controller
{
    /**
     * Display the newsroom page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('newsroom');
    }
}
