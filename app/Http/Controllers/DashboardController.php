<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display dashboard index page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.index');
    }

    /**
     * Display dashboard typography page.
     *
     * @return \Illuminate\Http\Response
     */
    public function typography()
    {
        return view('dashboard.typography');
    }

    /**
     * Display dashboard forms page.
     *
     * @return \Illuminate\Http\Response
     */
    public function forms()
    {
        return view('dashboard.forms');
    }
    
}
