<?php

namespace App\Http\Controllers\Accounts;

use App\Http\Controllers\Controller;
use App\Models\accounts;
use App\Models\c;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class AccountsController extends Controller
{
       
   public function ViewAccounts(){
    $viewaccount = accounts::all();
    $balance = new accounts( Create::




    );
    return view('backend.accounts.view_account', compact('viewaccount'));

   }

   public function AddAccounts(){
    $addaccount = accounts::all();
    return view('backend.accounts.Add_account', compact('addaccount'));

   }

   public function StoreAccounts(request $request){
    $addaccount = new accounts;
    $addaccount->reference= $request->reference;
    $addaccount->date=$request->date;
    $addaccount->particulars=$request->particulars;
    $addaccount->debit=$request->debit;
    $addaccount->credit=$request->credit;
   $addaccount->save();
    $notification = array(
        'message' => 'Accounts    added successfully',
        'alert-type' => 'success'
    );
    return redirect()->route('accounts.view_account')->with($notification);
}

}
