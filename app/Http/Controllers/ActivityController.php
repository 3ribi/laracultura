<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Activity;

class ActivityController extends Controller
{
   public function index(){
      $activities = Activity::all();
    return view('activity.index', ['activities'=>$activities]);
   }

   public function create(){
      return view('activity.create');
   
   }
    public function store(Request $request){
      $data=$request->validate([
         'ar_title' => 'required',
            'en_title' => 'required',
            'fr_title' => 'required',
            'ar_description' => 'required',
            'en_description' => 'required',
            'fr_description' => 'required',
      ]);
      $newProduct = Activity::create($data);
      return redirect(route('activity.index'))->with('success', 'New Activity has been created Succesffully');
   }

   public function update(Activity $activity,Request $request){
      $data=$request->validate([
         'ar_title' => 'required',
            'en_title' => 'required',
            'fr_title' => 'required',
            'ar_description' => 'required',
            'en_description' => 'required',
            'fr_description' => 'required',
      ]);
     $activity->update($data);
      return redirect(route('activity.index'))->with('success', 'Activity Updated Succesffully');
   }
   

   public function edit(Activity $activity){
    return view('activity.edit', ['activity'=>$activity]);
   }

   public function destroy(Activity $activity){
         $activity->delete();
         return redirect(route('activity.index'))->with('success', 'Activity deleted Succesffully');
   }
   public function show(Activity $activity)
    {

        return view('activity.show', compact('activity'));
    }
}
