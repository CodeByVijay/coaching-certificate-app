<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function StudentRegister(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required|min:10|max:10',
            'address' => 'required',
        ]);

        $student = new User();
        $student->fname = $request->fname;
        $student->lname = $request->lname;
        $student->email = $request->email;
        $student->mobile = $request->mobile;
        $student->address = $request->address;
        $student->save();

        return redirect()->route('home')->with('success','Student Registration Complete.');
    }
}
