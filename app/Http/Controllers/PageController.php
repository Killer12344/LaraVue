<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public  function index(){
        return view('welcome');
    }

    public  function saveContact(Request $request){

        $request->validate([
            'name' => 'required|',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'message' => 'required|min:10',
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

    }
}
