<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Route;
use DB;

class EmployeeController extends Controller
{
    
  
    public function store(Request $request)
    {
        $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required',
            'contact'=>'required',
            
     ]);
       employee::create([
           'e_firstname'=>$request->fname,
           'e_lastname'=>$request->lname,
           'e_email'=>$request->email,
           'e_contact'=>$request->contact,
       ]);

       return redirect()->back();
    }

      public function show(){
      
        $data['records'] = DB::table('employees')->Orderby('id','desc')->get();
       
        return view('home',$data);
    }

  public function search(Request $request){
        $name = $request->search;
      
        $data['records'] = DB::table('employees')->where('e_firstname',$name)->Orderby('id','desc')->get();
        return view('home',$data);
    }

    
    public function update($id)
    {
      
       $data['r'] = DB::table('employees')->where('id',$id)->first();
       return view('update',$data);
       return \Redirect::route('home')->with('message', 'Data updated saved correctly!!!');
        
    }

    public function set(Request $req)
    {
        $id = $req->id;
        $fname = $req->fname;
        $lname = $req->lname;
        $email = $req->email;
        $contact = $req->contact;
          DB::update('update employees set e_firstname = ?,e_lastname = ?,e_email = ?,e_contact = ? where id = ?',[$fname,$lname,$email,$contact,$id]);
           return redirect()->back();
        }

    
}
