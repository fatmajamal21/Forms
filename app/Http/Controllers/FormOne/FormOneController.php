<?php

namespace App\Http\Controllers\FormOne;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\contact;

class FormOneController extends Controller
{
    public function form_one()
    {
        return view('Forms.form_one');
    }
    public function index()
    {
        return view('Forms.index');
    }

    public function form_two()
    {
        return view('Forms.form_two');
    }
    public function ok()
    {
        return view('Forms.ok');
    }
    public function view_contact()
    {
        $contacts = contact::all();
        return view('Forms.view_contact', compact('contacts'));
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
        $namee = time() . '_' . rand() . '_' . $request->file('img')->getClientOriginalExtension();
        $request->file('img')->move(
            public_path('uploads'),
            $namee
        );
        Contact::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => $request->password,
            'img' => $namee,


        ]);

        return redirect()->route('Forms.view_contact')->with('message', 'Your message has been sent. Thank you!');
    }
}












        // DB::statement('INSERT INTO .......')
        // DB::insert('forms',[
        // ]);