<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::get();
        return view('contact.index', compact('contacts'));
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

    public function edit($id){
        $contact = Contact::findOrFail($id);
        return view('contact.edit', compact('contact'));
    }

    public function update($id){
        $contact = Contact::findOrFail($id);
        $contact->name = request('name');
        $contact->address = request('address');
        $contact->phone = request('phone');
        $contact->save();
        return redirect()->to('/contacts');
    }

    public function show($id){
        $contact = Contact::findOrFail($id);
        return view('contact.show',compact('contact') );
    }
}
