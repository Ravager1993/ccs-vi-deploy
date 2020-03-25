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
        $yesterday = date('Y-m-d',strtotime('-1 days'));
        $lastWeek = date('Y-m-d',strtotime('-7 days'));
        $lastlastWeek = date('Y-m-d',strtotime('-14 days'));
        $thisMonth = date('Y-m');
        $thisYear = date('Y');

        $counter = Counter::all();
        $g1t = Counter::all()->whereBetween('created_at', [$thisDay.' 00:00:00', $thisDay.' 24:00:00'])->where('grade_level',1);
        $g2t = Counter::all()->whereBetween('created_at', [$thisDay.' 00:00:00', $thisDay.' 24:00:00'])->where('grade_level',2);
        $g3t = Counter::all()->whereBetween('created_at', [$thisDay.' 00:00:00', $thisDay.' 24:00:00'])->where('grade_level',3);
        $g4t = Counter::all()->whereBetween('created_at', [$thisDay.' 00:00:00', $thisDay.' 24:00:00'])->where('grade_level',4);
        $g5t = Counter::all()->whereBetween('created_at', [$thisDay.' 00:00:00', $thisDay.' 24:00:00'])->where('grade_level',5);
        $g6t = Counter::all()->whereBetween('created_at', [$thisDay.' 00:00:00', $thisDay.' 24:00:00'])->where('grade_level',6);
        $g1y = Counter::all()->whereBetween('created_at', [$yesterday.' 00:00:00', $yesterday.' 24:00:00'])->where('grade_level',1);
        $g2y = Counter::all()->whereBetween('created_at', [$yesterday.' 00:00:00', $yesterday.' 24:00:00'])->where('grade_level',2);
        $g3y = Counter::all()->whereBetween('created_at', [$yesterday.' 00:00:00', $yesterday.' 24:00:00'])->where('grade_level',3);
        $g4y = Counter::all()->whereBetween('created_at', [$yesterday.' 00:00:00', $yesterday.' 24:00:00'])->where('grade_level',4);
        $g5y = Counter::all()->whereBetween('created_at', [$yesterday.' 00:00:00', $yesterday.' 24:00:00'])->where('grade_level',5);
        $g6y = Counter::all()->whereBetween('created_at', [$yesterday.' 00:00:00', $yesterday.' 24:00:00'])->where('grade_level',6);
        $g1lw = Counter::all()->whereBetween('created_at', [$lastlastWeek.' 00:00:00', $lastWeek.' 24:00:00'])->where('grade_level',1);
        $g2lw = Counter::all()->whereBetween('created_at', [$lastlastWeek.' 00:00:00', $lastWeek.' 24:00:00'])->where('grade_level',2);
        $g3lw = Counter::all()->whereBetween('created_at', [$lastlastWeek.' 00:00:00', $lastWeek.' 24:00:00'])->where('grade_level',3);
        $g4lw = Counter::all()->whereBetween('created_at', [$lastlastWeek.' 00:00:00', $lastWeek.' 24:00:00'])->where('grade_level',4);
        $g5lw = Counter::all()->whereBetween('created_at', [$lastlastWeek.' 00:00:00', $lastWeek.' 24:00:00'])->where('grade_level',5);
        $g6lw = Counter::all()->whereBetween('created_at', [$lastlastWeek.' 00:00:00', $lastWeek.' 24:00:00'])->where('grade_level',6);
        $daily = Counter::all()->whereBetween('created_at', [$thisDay.' 00:00:00', $thisDay.' 24:00:00']);
        $yday = Counter::all()->whereBetween('created_at', [$yesterday.' 00:00:00', $yesterday.' 24:00:00']);
        $weekly = Counter::all()->whereBetween('created_at', [$lastlastWeek.' 00:00:00', $lastWeek.' 24:00:00']);
        $monthly = Counter::all()->whereBetween('created_at', [$thisMonth . '-01 00:00:00', $thisMonth . '-' . $numDays . '24:00:00']);
        $yearly = Counter::all()->whereBetween('created_at', [$thisYear.'-01-01 00:00:00', $thisYear.'-12-31 24:00:00']);

        return view('admin.index',
            ['counter' => $counter],
            [
                'daily' => count($daily),
                'monthly' => count($monthly),
                'weekly' => count($weekly),
                'yearly' => count($yearly),
                'yday' => count($yday),
                'g1t' => count($g1t),
                'g2t' => count($g2t),
                'g3t' => count($g3t),
                'g4t' => count($g4t),
                'g5t' => count($g5t),
                'g6t' => count($g6t),
                'g1y' => count($g1y),
                'g2y' => count($g2y),
                'g3y' => count($g3y),
                'g4y' => count($g4y),
                'g5y' => count($g5y),
                'g6y' => count($g6y),
                'g1lw' => count($g1lw),
                'g2lw' => count($g2lw),
                'g3lw' => count($g3lw),
                'g4lw' => count($g4lw),
                'g5lw' => count($g5lw),
                'g6lw' => count($g6lw)
            ]
        );
    }
}
