<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FormController extends Controller
{
    public function submit(Request $request)
    {
        // Retrieve form data
        $name = $request->input('name');
        $email = $request->input('email');
        $number = $request->input('number');
        $department = $request->input('department');
        $bloodgroup = $request->input('bloodgroup');
        $gender = $request->input('gender');
        $skillset = $request->input('skillset');

        // Save the form data to the database
        DB::table('form_data')->insert([
            'name' => $name,
            'email' => $email,
            'number' => $number,
            'department' => $department,
            'bloodgroup' => $bloodgroup,
            'gender' => $gender,
            'skillset' => $skillset,
        ]);

        // Redirect the user to a success page or display a success message
        return redirect()->route('success');
    }
    public function displayData()
    {
        // Fetch the data from the database
        $formData = DB::table('form_data')->get();

        // Pass the data to the view for display
        return view('data-display', ['formData' => $formData]);
    }
}
