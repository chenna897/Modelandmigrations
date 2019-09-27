<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\StudentDetail;

class StudDeleteController extends Controller
{
    public function index()
    {
        $users = StudentDetail::all();
        return view('stud_delete_view', ['users' => $users]);
    }
    public function destroy($id)
    {
        $de = StudentDetail::findOrFail($id);
        $de->delete();
        return redirect()->back()->with('success', 'Record deleted successfully');
    }
}
