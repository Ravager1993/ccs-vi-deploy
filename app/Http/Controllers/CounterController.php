<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Counter;
class CounterController extends Controller
{
    public function index() {
        $teachers = Counter::all()->toArray();
        return view('counter', compact('teacher'));

        // return view('counter');
    }
}
