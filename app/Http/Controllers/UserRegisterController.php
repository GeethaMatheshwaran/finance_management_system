<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_detail;

class UserRegisterController extends Controller
{
   public function store_user_details_method(Request $request){
        // $request->validate(
        //     [
        //         'user_name'=>'required',
        //         'user_email'=>'required',
        //         'user_password'=>'required',
        //     ]
        //     );
        //     $user_details = new user_detail;
        //     $user_details->user_name = $request->input('user_name');
        //     $user_details->user_email = $request->input('user_email');
        //     $user_details->user_password = $request->input('user_password');
        //     $user_details->save();
            //
            // Validate the incoming request data
        $validatedData = $request->validate([
            'user_name' => 'required',
            'user_email' => 'required',
            'user_password' => 'required',
            // Add validation rules for other fields as needed
        ]);

        // Create a new instance of the model with the validated data
        $newData = user_detail::create($validatedData);

        // Optionally, you can do additional processing here
        // ...

        // Redirect or return a response as needed
        return redirect()->route('customer_detail.customer_display_uri')->with('success', 'Data saved successfully!');

            //
   }
}
