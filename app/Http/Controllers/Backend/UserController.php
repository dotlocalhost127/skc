<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function ViewUser()
    {
        //$allData = User::all();
        $data['allData'] = User::all();
        return view('Backend.user.user_view', $data); 
    }

    public function AddUser()
    {
        //$allData = User::all();
        $data['allData'] = User::all();
        return view('Backend.user.Add_User', $data); 
    }

    public function userStore(request $request){

        $validateData = $request->validate([
            'name' => ['required'],
            'Email' => ['required|unique:users'],
            'phone' => ['required'],
            'role' => ['required'],
            'password' => ['required'],
        ]);
        
        $data = new user();
        $data->role =$request->role;
        $data->name =$request->name;
        $data->email =$request->email;
        $data->phone =$request->phone; 
        $data->password =bcrypt($request->password);
        $data->save();
        $notification = array(
            'message' => 'New user added successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('user.view')->with($notification);

    }

    public function UserEdit($id){
        $editData = User::find($id);
        return view('backend.user.Edit_User', compact('editData'));

    }

    public function UsersUpdate( request $update, $id){ 
        $data = User::find($id);
        $data->role =$update->role;
        $data->name =$update->name;
        $data->email =$update->email;
        $data->phone =$update->phone; 
        $data->password =bcrypt($update->password);
        $data->save();
        $notification = array(
            'message' => 'User Updated successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('user.view')->with($notification);

    }

    public function UserDelete( $id){ 
        $user = User::find($id);
        $user->Delete();
        $notification = array(
            'message' => 'User Deleted successfully',
            'alert-type' => 'warning'
        );
        return redirect()->route('user.view')->with($notification);

    }

    public function ChangePassword(){ 
       return view('backend.user.edit_password');

    }
}
