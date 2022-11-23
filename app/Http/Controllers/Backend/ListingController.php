<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\backend\Carmakecontroller;
use App\Http\Controllers\backend\CarmodelController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carsmake;
use App\Models\CarsModel;
use App\Models\CarsListing;
use Nette\Utils\Json;
use Livewire\WithFileUploads;

class ListingController extends Controller
{
   public function Viewlisting(){
    $carlistingview = CarsListing::all();
    return view('backend.listing.carlisting.carslisting_view', compact('carlistingview'));
   }


   public function AddListing(){
      $add_listing['carsmakes'] = Carsmake::all();
      $add_listing['cars_models'] = CarsModel::all();
      return view('backend.listing.carlisting.Add_listing', $add_listing );
     }
     
             public function ListingStore(request $request){
            $listing = new CarsListing();
            $listing->name =$request->name;
            $listing->price =$request->price;
            $listing->make_id =$request->make_id;
            $listing->model_id =$request->model_id;
            $listing->year =$request->year;
            $listing->country =$request->country;
            $listing->mileage =$request->mileage;
            $image= $request->image;
            $imagename = $image->getClientOriginalName();
            $image->StoreAs('public/images', $imagename);
            $listing->image =$imagename;
            $listing->fuel_type =$request->fuel_type;
            $listing->transmission =$request->transmission;
            $listing->drive =$request->drive;
            $listing->exterior_color =$request->exterior_color;
            $listing->interior_color =$request->interior_color;
            $listing->stock_id =$request->stock_id;
            $listing->VIN =$request->VIN;
            $listing->features =$request->features;
            $listing->description =$request->description;
            $listing->status =$request->status;
            $listing->slug =$request->slug;

            $listing->save();
            $notification = array(
                'message' => 'Listing added  added successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('listing.View_listing')->with($notification);
    
        }
}
