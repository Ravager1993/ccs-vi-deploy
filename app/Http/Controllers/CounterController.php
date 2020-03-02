<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Teacher;
class CounterController extends Controller
{
    public function index() {
        $teachers = Teacher::all()->toArray();
        return view('counter', compact('teachers'));

        // return view('counter');
    }
}
