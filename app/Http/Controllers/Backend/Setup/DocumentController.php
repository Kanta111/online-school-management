<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Documents;
use Db;

class DocumentController extends Controller
{
    public function create(){
    	return view('backend.setup.document.create');
    }
    public function index(){
    	$file=Documents::all();
    	return view('backend.setup.document.view',compact('file'));



    }

    public function store(Request $request){
    	$data=new Documents;
    	if($request->file('file')){
    		$file=$request->file('file');
    		$filename=time().'.'.$file->getClientOriginalExtension();
    		$request->file->move('upload/',$filename);

    		$data->file= $filename;
    	}
    	$data->subject=$request->subject;
    	$data->date=$request->date;
    	$data->save();
    	return redirect()->route('setups.assign.files.index')->with('success','Data Inserted successfully');
     	


    }

    public function show($id){
    	$data=Documents::find($id);
    	return view('backend.setup.document.details',compact('data'));


    }
    public function download($file){
    	return response()->download('upload/'.$file);


    }

      
    }
