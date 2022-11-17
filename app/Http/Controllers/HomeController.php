<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\NewStudents;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function StudentRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required|min:10|max:10',
            'address' => 'required',
            'course' => 'required',
            'duration' => 'required',
        ]);

        $student = new NewStudents();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->mobile = $request->mobile;
        $student->address = $request->address;
        $student->course = $request->course;
        $student->duration = $request->duration;
        $student->save();

        return redirect()->route('home')->with('success', 'Student Registration Complete.');
    }

    public function VerifyCertificate(Request $request)
    {
        $certificate_image = Certificate::where('certificate_no', $request->cer_no)->first();
        return view('view-certificate', compact('certificate_image'));
    }
}
