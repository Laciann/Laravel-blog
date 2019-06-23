<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::get();
        return view('')
    }
    public function create(){
        return view('contact.create');
    }

    public function store(Request $request){
        Contact::create([
             'name' => $request->get('name'),
             'address' => $request->get('address'),
             'phone' => $request->get('phone'),
        ]);

        return redirect()->back();
    }
}
