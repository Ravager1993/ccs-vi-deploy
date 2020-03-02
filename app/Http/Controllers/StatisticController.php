<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
// use DB;
use App\Counter;

class StatisticController extends Controller
{
    public function index() {
        $counter = Counter::all();
        // $counter = DB::table('counter');
        return view('statistic', ['counter' => $counter]);
        // return view('statistic', compact('g1c'));

        //return view('statistic');
    }
}
