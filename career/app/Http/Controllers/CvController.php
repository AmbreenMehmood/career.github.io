<?php

namespace App\Http\Controllers;

use cv;
use App\Models\Applicant;
use Illuminate\Http\Request;

class CvController extends Controller
{
    public function showUploadForm()
    {
        return view('goodweb.fsd');
    }

    public function uploadCv(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'comments' => 'required',
            'cv' => 'required|mimes:pdf,doc,docx|max:2048',
        ]);


        if($p = Applicant::create ($request -> input()) ){
            $FM = $p -> id;
    
            $imageName =  $FM.'.'.$request->cv->extension();
            $request->cv->move('uploads/', $imageName);
            
            $p->first_name = $request->first_name;
            $p->last_name = $request->last_name;
            $p->email = $request->email;      
            $p->phone = $request->phone;      
            $p->comments = $request->comments;      
            $p->type = 'fsd';        
    
            $p->save();
            return back()->with( "success","data saved");
          }


          
        if($p = Applicant::create ($request -> input()) ){
            $FM = $p -> id;
    
            $imageName =  $FM.'.'.$request->cv->extension();
            $request->cv->move('uploads/', $imageName);
            
            $p->first_name = $request->first_name;
            $p->last_name = $request->last_name;
            $p->email = $request->email;      
            $p->phone = $request->phone;      
            $p->comments = $request->comments;      
            $p->type = 'msd';        
    
            $p->save();
            return back()->with( "success","data saved");
          }
   
    }
}