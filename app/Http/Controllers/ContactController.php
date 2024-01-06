<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();
      return view('msgs.index', ['contacts'=>$contacts]);

    }

     public function store(Request $request){
       $data=$request->validate([
          'name' => 'required',
             'email' => 'required',
             'subject' => 'required',
             'msg' => 'required',
       ]);
       
       $newProduct = Contact::create($data);
       return redirect(route('msgs.index'))->with('success', 'New Activity has been created Succesffully');
    }
 
    public function update(Contact $contact,Request $request){
       $data=$request->validate([
        'name' => 'required',
           'email' => 'required',
           'subject' => 'required',
           'msg' => 'required',
       ]);
      $contact->update($data);
       return redirect(route('msgs.index'))->with('success', 'Activity Updated Succesffully');
    }
    
 
    public function edit(Contact $contact){
     return view('msgs.edit', ['contact'=>$contact]);
    }
 
    public function destroy(Contact $contact){

          $contact->delete();
          return redirect(route('msgs.index'))->with('success', 'Activity deleted Succesffully');
    }
    public function show(Contact $contact)
     {
 
         return view('msgs.show', compact('Contact'));
     }
}
