<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class StudUpdateController extends Controller
{

    public function index()
    {
        $users = DB::select('select * from student_details');
        return view('stud_edit_view', ['users' => $users]);
    }

    public function show($id)
    {
        $users = DB::select('select * from student_details where id = ?', [$id]);
        return view('stud_update', ['users' => $users]);
    }

    public function edit(Request $request, $id)
    {
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $city_name = $request->input('city_name');
        $email = $request->input('email');
        DB::update('update student_details set first_name = ?,last_name=?,city_name=?,email=? where id = ?', [$first_name, $last_name, $city_name, $email, $id]);
        return redirect("/edit-records")->with('success', 'Record updated successfully');
    }
}
