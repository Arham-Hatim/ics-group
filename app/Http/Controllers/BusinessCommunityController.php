<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinessCommunityController extends Controller
{
    /**
     * Display the business community page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('business-community');
    }
}
