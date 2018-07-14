<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserProfileController extends Controller
{
   public function index()
   {
    $this->data['date'] = date("d-m-Y");   //Variable name with $this->data
    $this->data['date1'] = date("m-d-Y"); 
    return view('welcome',$this->data); //pass all variable through $this->data
   }

   public function view()
   {
    $this->data['users'] = User::get();   //get all Data from users table
    return view('usertables',$this->data);
   }

   public function add()
   {
       return view('form');
   }

   public function saveUser(Request $request)
   {
    // dd($request->all());   //checking the request
    // $save = new User();
    // $save->username = $request->username;
    // $save->password = $request->password;
    // $save->email = $request->email;
    // $save->mobile_no = $request->mobile_no;
    // $save->save();
    if(!empty($request->id))
    {
        $save = User::findOrFail($request->id);
        $save->fill($request->all());
        $save->save();
    }
    
    else
    {
        $save = new User();
        $save->fill($request->all());
        $save->save();
    }

    if($save)
    {
       dd("Success");
    }
    else
    {
     dd("Error");   
    }

   }

    public function editUser($id)
    {
        $this->data['user'] = User::findOrFail($id);
        return view('form',$this->data);
    }

    public function deleteUser($id)
    {
        $delete = User::findOrFail($id);
        $delete->delete();

        if($delete)
        {
           return redirect()->back()->with(['success'=>"Deleted Success"]);
        }
         
        {
            return redirect()->back()->with(['success'=>"Deleted UnSuccess"]);
        }
    }
}
