<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;
use Illuminate\Support\Facades\DB;
class admincontroller extends Controller
{
    
    
    public function index(){
        
        return view('admin.adminpanel');
        
    }
    
    
    public function viewdata(Request $req){
        
        $blg=blog::All();
        
        
        return view('admin.viewdata')->with('blog',$blg);
    }
    
    
    public function addpost(){
        
       return view('admin.addpost'); 
        
        
    }
    
    public function submitdata(Request $req){
        
        $blog= new blog;
        
        $blog->title=$req->title;
        $blog->description=$req->des;
        $blog->Save();
        
        $blg=blog::All();
        
        return view('admin.viewdata')->with('blog',$blg);
        
        
        
        
    }
    
    public function edit($id){
        
        $blog = Blog::find($id);
    	return view('admin.edit')->with('blog', $blog);
        
        
        
    }
    
    
    public function update(Request $req, $id){
        
        
         $blog = Blog::find($id);  
        $blog->title=$req->title;
        $blog->description=$req->des;
        $blog->Save();
        
         $blg=blog::All();
        
        return view('admin.viewdata')->with('blog',$blg);
            
        
    }
    
    
    public function delete($id){
    	$blog = blog::find($id);
    	return view('admin.delete')->with('blog', $blog);
    }

    public function destroy($id){
    	$blog = blog::destroy($id);
    	return redirect()->route('admin.viewdata');
    }
}
    
    

