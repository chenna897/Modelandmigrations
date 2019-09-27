<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\StudentDetail;

class StudInsertController extends Controller 
{
    public function insertform()
    {
        return view('stud_create');
    }

    public function insert(Request $request)
    {

        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $city_name = $request->input('city_name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $enum = $request->input('enum');
        $data = array('first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email,"phone"=>$phone,"enum"=>$enum);
        
        $student = StudentDetail::create($data);
        return redirect()->back()->with('success', 'Record inserted successfully');
    }
}