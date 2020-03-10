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
        $teacher = Teacher::all();
        return view('maintenance.index', compact('teacher'));
    }
    
}
