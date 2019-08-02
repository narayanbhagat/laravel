<?php

namespace App\Http\Controllers;

use App\DemoModel;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    //
    public function index(){

    	$all_data = DemoModel::orderby('id','desc')->get();
    	return view('index',compact('all_data'));
    }

    public function create(){
    	return view('create');
    }

    public function store(Request $request){

    	$request->validate([
    		'name' => 'required',
    		'email'=> 'required'
    	]);

    	DemoModel::create($request->all());
    	return redirect()->route('create')->with('success','Data submission successful');
    	// return view('store');
    }

    public function show($id){
    	$all_data = DemoModel::find($id);
    	return view('show',compact('all_data'));
    	// return view('show',compact('all_data'));
    }

    public function edit($id){
    	$all_data = DemoModel::find($id);
    	return view('edit',compact('all_data'));
    }

    public function update(Request $request, $id){

    	$updata_data = DemoModel::find($id);

    	$updata_data->name = $request->input('name');
    	$updata_data->email = $request->input('email');
    	$updata_data->save();

    	$request->validate([
    		'name' => 'name is required',
    		'email' => 'email is required'
    	]);

    	$updata_data->update($request->all());
    	return redirect()->route('index')->with('success','Data updated successfully');
    }

    public function delete($id){
    	DemoModel::find($id)->delete();

    	return redirect()->route('index')->with('success','Data deleted successfully');
    }
}
