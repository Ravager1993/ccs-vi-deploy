<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
// use DB;
use App\Counter;

class StatisticController extends Controller
{
    public function daily() {
        $counter = Counter::all();
        // $counter = DB::table('counter');
        return view('dailystat', ['counter' => $counter]);
        // return view('statistic', compact('g1c'));

        //return view('statistic');
    }

    public function weekly() {
        $counter = Counter::all();
        // $counter = DB::table('counter');
        return view('weeklystat', ['counter' => $counter]);
        // return view('statistic', compact('g1c'));

        //return view('statistic');
    }

    public function monthly() {
        $counter = Counter::all();
        // $counter = DB::table('counter');
        return view('monthlystat', ['counter' => $counter]);
        // return view('statistic', compact('g1c'));

        //return view('statistic');
    }
}
