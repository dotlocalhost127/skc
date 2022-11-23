<?php

namespace App\Http\Controllers\backend;

use App\Models\Carsmake;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Carmakecontroller extends Controller
{
    public function Viewmake(){
        $viewMake = Carsmake::all();
        return view('backend.listing.carsmake.cars_make_view', compact('viewMake'));
    }


    public function Carmake(){
        $Carmake = Carsmake::all();
        return view('backend.listing.carsmake.cars_make', compact('Carmake'));
    }

   
        public function Store_make(request $request){

            $validateData = $request->validate([
                'make' => ['required'],
            ]);
            
            $add_make = new Carsmake();
            $add_make->make =$request->make;

            $add_make->save();
            $notification = array(
                'message' => 'New make added successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('listing.view_make')->with($notification);
    
        }
    
    }





