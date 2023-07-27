<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_detail;

class UserRegisterController extends Controller
{

    public function show_user_details()
    {
        $user_details = user_detail::all();
        return view('user_details.user_details_display', compact('user_details'));
    }
    public function store_user_details_method(Request $request)
    {

        // Validate the incoming request data
        $validatedData = $request->validate([
            'user_name' => 'required',
            'user_email' => 'required',
            'user_password' => 'required',
        ]);

        // Create a new instance of the model with the validated data
        $newData = user_detail::create($validatedData);

        // Optionally, you can do additional processing here
        // ...

        //return redirect()->route('customer_display_uri')->with('success', 'Data saved successfully!');
        return view('customer_details.customer_details_display');
    }
}
