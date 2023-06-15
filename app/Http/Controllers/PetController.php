<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;

class PetController extends Controller
{
    public function index(){
        $data = Pet::get();
        //return $data;
        return view ('PList',compact('data'));
    }
    
    public function AddList(){
        return view('Add-List');
    }
    public function SaveList(request $request){
       $request->validate([
        'name' => 'Required',
        'description' => 'Required',
        'category' => 'Required',
        'unit' => 'Required',
        'value' => 'Required',
       ]);
       
       $name = $request->name;
       $description = $request->description;
       $category = $request->category;
       $unit = $request->unit;
       $value = $request->value;

       $Pet = new Pet();
       $Pet->name = $name;
       $Pet->description = $description;
       $Pet->category = $category;
       $Pet->unit = $unit;
       $Pet->value = $value;
       $Pet->save();

       return redirect()->back()->with('success','owner added.');

    }

    public function editList($id){
        $data = Pet::where('id','=',$id)->first();
        return view('edit-List',compact('data'));
    }

    public function UpdateList(request $request)
    {
        $request->validate([
            'name' => 'Required',
            'description' => 'Required',
            'category' => 'Required',
            'unit' => 'Required',
            'value' => 'Required',
           ]);

           $id=$request->id;
           $name = $request->name;
           $description = $request->description;
           $category = $request->category;
           $unit = $request->unit;
           $value = $request->value;
           
           Pet::where('id','=',$id)->update([
            'name'=>$name,
            'description'=>$description,
            'category'=>$category,
            'unit'=>$unit,
            'value'=>$value,
           ]);
           return redirect()->back()->with('success','owner updated.');

    }

    public function DeleteList($id){
        Pet::where('id','=',$id)->delete();
        return redirect()->back()->with('success','owner deleted.');
    }
}