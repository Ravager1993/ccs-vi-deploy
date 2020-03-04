<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Counter;
use Carbon\Traits\Timestamp;

// date_default_timezone_set("Asia/Manila");

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     
    public function index()
    {
  
        $thisDay = date('Y-m-d');
        $thisMonth = date('Y-m');
        $thisYear = date('Y');
        $daily = Counter::all()->whereBetween('created_at', [$thisDay.' 00:00:00', $thisDay.' 24:00:00']);
        $gradeLevel = Counter::all()->where('grade_level', 2);

        return view('home',
            ['daily' => count($daily)],
            ['gradeLevel' => $gradeLevel]
        );
    }
}
