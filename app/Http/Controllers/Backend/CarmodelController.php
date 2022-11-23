<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CarsModel;

class CarmodelController extends Controller
{
    public function Viewmodel(){
        $viewmodel = CarsModel::all();
        return view('backend.listing.CarModel.cars_model_view', compact('viewmodel'));
    }


    public function Add_Model(){
        $Add_Model = CarsModel::all();
        return view('backend.listing.CarModel.Add_model', compact('Add_Model'));
    }

   
        public function Store_Model(request $request){

            $validateData = $request->validate([
                'model' => ['required'],
            ]);
            
            $model = new CarsModel();
            $model->model =$request->model;

            $model->save();
            $notification = array(
                'message' => 'New Model added successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('listing.view_Model')->with($notification);
    
        }
}
