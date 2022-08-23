<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display dashboard home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('dashboard.home');
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
    
}
