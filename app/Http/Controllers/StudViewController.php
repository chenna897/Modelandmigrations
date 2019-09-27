<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use App\StudentDetail;

class StudViewController extends Controller
{
    public function index()
    {
        $users = StudentDetail::all();
        return view('stud_view', ['users' => $users]);
    }
}
