<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Counter;
use App\Teacher;
class CounterController extends Controller
{
    public function index() {
        $teachers = Teacher::all()->toArray();
        return view('counter', compact('teachers'));

        // return view('counter');
    }

    public function submit(Request $req) {

        $counter = new Counter();
        $counter->grade_level = $req->radioGrade;
        $counter->section = $req->selectSection;
        $counter->save();
        return redirect('counter')->with('status', 'Success! you may now enter');

    }
}
