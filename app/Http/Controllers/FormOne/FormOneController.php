<?php

namespace App\Http\Controllers\FormOne;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormOneController extends Controller
{
    public function form_one()
    {
        return view('Forms.form_one');
    }
    public function postcontact(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|max:20',
            'img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $request->file('img')->move(
            public_path('uploads'),
            time() . '_' . rand() . '_' . $request->file('img')->getClientOriginalExtension()
        );

        return redirect()->route('Forms.ok')->with('message', 'Your message has been sent. Thank you!');
    }
    public function ok()
    {
        return view('Forms.ok');
    }
}
