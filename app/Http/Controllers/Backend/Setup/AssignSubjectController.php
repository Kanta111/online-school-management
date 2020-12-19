<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\StudentClass;
use App\AssignSubject;
use App\ Subject;
use DB;

class AssignSubjectController extends Controller
{
    public function view(){
    	
        $data['allData']  =AssignSubject::select('class_id')->groupBy('class_id')->get();
   	    return view('backend.setup.assign_subject.view-assign-subject',$data);
   }
   public function add(){
   	    $data['subjects'] = Subject::all();
   	    $data['classes']  = StudentClass::all();
    	return view('backend.setup.assign_subject.add-assign-subject',$data);

   }

   public function edit($class_id){


   		$data['editData']=AssignSubject::where('class_id',$class_id)->get();
      $data['subjects']=Subject::all();
      $data['classes']=StudentClass::all();
   		
   		return view('backend.setup.assign_subject.edit-assign-subject',$data);


   }
   public function update(Request $request,$class_id){
   	   if($request->subject_id==NULL){
        return redirect()->back()->with('error','Sorry! you do not select any item');
       }else{
        AssignSubject::where('class_id',$class_id)->delete();
         $subjectCount = count($request->subject_id);
        for ($i=0; $i < $subjectCount; $i++) {
            $assign_sub = new AssignSubject();
            $assign_sub->class_id = $request->class_id;
            $assign_sub->subject_id= $request->subject_id[$i];
           
            $assign_sub->full_mark=$request->full_mark[$i];
            $assign_sub->pass_mark=$request->pass_mark[$i];
           
            $assign_sub->save(); 
            # code...
          }

       }

       
     
     	return redirect()->route('setups.assign.subject.view')->with('success','Data Updated successfully');
     	



     }
   

     

     public function store(Request $request){

        $subjectCount = count($request->subject_id);
        if ($subjectCount!=NULL) {
        	for ($i=0; $i < $subjectCount; $i++) {
        	  $assign_sub = new AssignSubject();
        	  $assign_sub->class_id = $request->class_id;
        	  $assign_sub->subject_id= $request->subject_id[$i];
        	 
        	  $assign_sub->full_mark=$request->full_mark[$i];
        	  $assign_sub->pass_mark=$request->pass_mark[$i];
        	 
        	  $assign_sub->save(); 
        		# code...
        	}
        	# code...
        }

       return redirect()->route('setups.assign.subject.view')->with('success','Data Inserted successfully');

     }



      public function details($class_id){
        $data['editData']=AssignSubject::where('class_id',$class_id)->get();
        return view('backend.setup.assign_subject.details-assign-subject',$data);


     	 
}
}


