<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class InternController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
        ]);

        $user = User::create([
            'name'         => $request->name,
            'email'        => $request->email,
            'phone'        => $request->phone,
            'designation'  => $request->designation,
            'joining_date' => $request->joining_date,
            'status'       => 'active',
            'notes'        => $request->notes   ,
            // 'role_id'      => 4,
            'password'     => Hash::make('123'),

            'intern_details' => [
                'dob'           => $request->dob,
                'college_name'  => $request->college_name,
                'university'    => $request->university,
                'qualification' => $request->qualification,
                'branch'        => $request->branch,
                'passing_year'  => $request->passing_year,
                'cgpa'          => $request->cgpa,
                'linkedin'      => $request->linkedin,
                'skills'        => $request->skills,
                'projects'      => $request->projects,
                'address'       => $request->address,
            ],
        ]);
            $user->assignRole('Intern ');

        return back()->with('success', 'Intern Added Successfully');
    }
}
