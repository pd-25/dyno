<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class createCoursesController extends Controller
{
    public function createCourses(){
        return view('admin.createCourses');
    }
}
