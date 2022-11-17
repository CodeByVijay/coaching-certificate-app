<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use App\Models\ContactUs;
use App\Models\NewStudents;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class AdminHomeController extends Controller
{
    public function dashboard()
    {
        $data['totalNewStudent'] = NewStudents::count();
        $data['totalStudentEnroll'] = User::where('is_admin', 0)->count();
        $data['totalIssuedCertificate'] = User::where('is_admin', 0)->where('certificate_issue', 1)->count();
        $data['totalQuerys'] = ContactUs::count();
        return view('admin.dashboard', $data);
    }

    public function NewStudents()
    {
        $data['newStudents'] = NewStudents::orderBy('id', 'DESC')->get();
        return view('admin.newstudent', $data);
    }
    public function StudentMessage()
    {
        $data['messages'] = ContactUs::orderBy('id', 'DESC')->get();
        return view('admin.message', $data);
    }

    public function StudentRegistration()
    {
        return view('admin.studentregistration');
    }
    public function AllEnrollStudent()
    {
        $data['allEnrollStudents'] = User::where('is_admin', 0)->orderBy('id', 'DESC')->get();
        return view('admin.enrolledstudent', $data);
    }

    public function NotIssueCertificate()
    {
        $data['notIssuedCertificate'] = User::where('is_admin', 0)->where('certificate_issue', 0)->orderBy('id', 'DESC')->get();
        return view('admin.notissuecertificate', $data);
    }
    public function IssuedCertificate()
    {
        $data['issuedCertificate'] = User::where('is_admin', 0)->where('certificate_issue', 1)->orderBy('id', 'DESC')->get();
        return view('admin.issuecertificate', $data);
    }

    public function newStudentDelete($id)
    {
        NewStudents::find($id)->delete();
        return redirect()->back()->with('success', "Student Deleted Successfully.");
    }
    public function StudentMessageDelete($id)
    {
        ContactUs::find($id)->delete();
        return redirect()->back()->with('success', "Student Deleted Successfully.");
    }

    public function StudentDelete($id)
    {
        User::find($id)->delete();
        return redirect()->back()->with('success', "Student Deleted Successfully.");
    }


    public function StudentRegistrationPost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required|min:10|max:10',
            'address' => 'required',
            'course' => 'required',
            'duration' => 'required',
        ]);

        $student = new User();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->mobile = $request->mobile;
        $student->address = $request->address;
        $student->course = $request->course;
        $student->duration = $request->duration;
        $student->save();

        return redirect()->route('AllEnrollStudent')->with('success', 'Student Registration Complete.');
    }


    public function certificateGenerate($id)
    {
        $student = User::find($id);
        if ($student->certificate_issue == 0) {
            $date = date('d M Y');
            $sign = "Khilesh Tembhare";
            $cer_no = rand(100000000, 999999999);
            $img = Image::make(public_path('certificate/certificate_blank.jpg'));
            $img->text($student->name, 800, 500, function ($font) {
                $font->file(public_path('certificate/LibreBaskerville-Italic.ttf'));
                $font->size(50);
                $font->color('#244f9b');
                $font->align('center');
                $font->valign('bottom');
                $font->angle(0);
            });

            $img->text($date, 310, 835, function ($font) {
                $font->file(public_path('certificate/font.ttf'));
                $font->size(30);
                $font->color('#111a28');
                $font->align('center');
                $font->valign('bottom');
                $font->angle(0);
            });

            $img->text($student->course, 950, 630, function ($font) {
                $font->file(public_path('certificate/font.ttf'));
                $font->size(30);
                $font->color('#2e499b');
                $font->align('center');
                $font->valign('bottom');
                $font->angle(0);
            });

            $img->text($sign, 1170, 800, function ($font) {
                $font->file(public_path('certificate/signfont.otf'));
                $font->size(50);
                $font->color('#c62e46');
                $font->align('center');
                $font->valign('bottom');
                $font->angle(0);
            });
            $img->text($cer_no, 430, 915, function ($font) {
                $font->file(public_path('certificate/font.ttf'));
                $font->size(30);
                $font->color('#4a6d9f');
                $font->align('center');
                $font->valign('bottom');
                $font->angle(0);
            });
            $certificate_name = $cer_no . ".jpg";
            $img->save(public_path('certificate/' . $certificate_name));

            $certificate = new Certificate();
            $certificate->user_id = $id;
            $certificate->certificate_no = $cer_no;
            $certificate->certificate_image = $certificate_name;
            $certificate->issued_date = $date;
            $certificate->save();

            $student->certificate_issue = 1;
            $student->update();
            return redirect()->back()->with('success', "Certificate Generated.");
        }

        return redirect()->back()->with('success', "Certificate Already Generated.");
    }

    public function viewCertificate($id)
    {
        $data['certificate_image'] = Certificate::where('user_id', $id)->select('certificate_image')->first();
        return view('admin.view-certificate', $data);
    }


    // Admin Profile
    public function profileUpdate()
    {
        $admin = User::find(1);
        return view('admin.profile', compact('admin'));
    }

    public function profileUpdatePost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|min:10|max:10',
            'password' => 'same:con_password',
        ],[
            'password.same'=>'Password & Confirm Password Not Same.'
        ]);

        $admin = User::find(1);
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->mobile = $request->mobile;
        $admin->address = $request->address;
        if(!empty($request->password) && !empty($request->con_password)){
            $admin->password = Hash::make($request->password);
        }
        $admin->update();
        return redirect()->route('dashboard')->with('success',"Profile Successfully Updated.");
    }
}
