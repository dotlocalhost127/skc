<?php

namespace App\Http\Controllers\Accounts;

use App\Http\Controllers\Controller;
use App\Models\accounts;
use App\Models\c;
use Illuminate\Http\Request;

class AccountsController extends Controller
{
       
   public function ViewAccounts(){
    $viewaccount = accounts::all();
    return view('backend.accounts.view_account', compact('viewaccount'));

   }

   public function AddAccounts(){
    $addaccount = accounts::all();
    return view('backend.accounts.Add_account', compact('addaccount'));

   }

   public function StoreAccounts(request $request){
    $addaccount = accounts::all();
    $addaccount->reference= $request->reference;
    $addaccount->date=$request->date;
    $addaccount->particulars=$request->particulars;
    $addaccount->debit=$request->debit;
    $addaccount->credit=$request->credit;
    $credit = $request->credit;
    $debit = $request->debit;
    $balance = $credit - $debit;
    $addaccount->$balance=$request->balance;
   $addaccount->save();
    $notification = array(
        'message' => 'Accounts  added  added successfully',
        'alert-type' => 'success'
    );
    return redirect()->route('accounts.view_account')->with($notification);
}

}
