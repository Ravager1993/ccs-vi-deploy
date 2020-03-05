<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Counter;
use Carbon\Traits\Timestamp;


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

        $numDays = date('t');
  
        $thisDay = date('Y-m-d');
        $thisMonth = date('Y-m');
        $thisYear = date('Y');

        // $weeklyAverage = date()
        $counter = Counter::all();
        $daily = Counter::all()->whereBetween('created_at', [$thisDay.' 00:00:00', $thisDay.' 24:00:00']);
        $monthly = Counter::all()->whereBetween('created_at', [$thisMonth . '-01 00:00:00', $thisMonth . '-' . $numDays . '24:00:00']);
        $yearly = Counter::all()->whereBetween('created_at', [$thisYear.'-01-01 00:00:00', $thisYear.'-12-31 24:00:00']);
        // $weekly = Counter::all()->whereBetween('created_at', [$thisYear.'-'.date('m')-1]
        // $gl1 = Counter::all()->where('grade_level', '1');

        ///////////////////////////////////////////////////////////
        ///////////////////////////////////////////////////////////

        return view('home',
            ['counter' => $counter],
            [
                'daily' => count($daily),
                'monthly' => count($monthly),
                'yearly' => count($yearly),
            ],
        );
    }
}
