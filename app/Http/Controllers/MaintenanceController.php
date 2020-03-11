<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
class MaintenanceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() {
        $teacher = Teacher::latest()->paginate(5);
        return view('maintenance.index', compact('teacher'));
    }

    public function insert(Request $req) {
        $teacher = new Teacher();
        $teacher->first_name = $req->first_name;
        $teacher->last_name = $req->last_name;
        $teacher->grade_level = $req->grade_level;
        $teacher->section = $req->section;
        $teacher->save();
        return redirect('maintenance');

    }

    public function delete(Request $req) {

    }
    
}
