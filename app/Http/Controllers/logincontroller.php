<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class logincontroller extends Controller
{
    
    
    public function index(){
        
        return view('login');
        
        
    }
    
    
    public function verify(Request $req){
        
        $user=DB::table('user')->where('username',$req->uname)->where('password',$req->upass)->first();
        
        
        if($user->type=="admin"){
            
          $req->session()->put('uname', $req->uname);
            return redirect()->route('admin.adminpanel');
            
        }
        else if ($user->type=="customer"){
            
             $req->session()->put('uname', $req->uname);
            return redirect()->route('customer.home');
        }
        else {
            $req->session()->flash('msg', "Invalid username/password");
    		return redirect('/login');
        }
    }
    public function logout(Request $req){
    	
    	//session('age', null);
    	$req->session()->flush();

    	return redirect('login');    }
    
}
