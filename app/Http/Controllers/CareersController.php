<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareersController extends Controller
{
    /**
     * Display the careers page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('careers');
    }
}
