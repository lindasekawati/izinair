<?php namespace IzinAir\Http\Controllers;

use IzinAir\Http\Requests;
use IzinAir\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FormIzinController extends Controller {

	//
	public function getForm(){
		return view('pemohon.form.index_form');
	}
	public function getFormNew($id){
		if($id==1)
			return view('pemohon.form.new.form1');
		else if($id==2)
			return view('pemohon.form.new.form2');
		else if($id==3)
			return view('pemohon.form.new.form3');
		else if($id==4)
			return view('pemohon.form.new.form4');
	}

}
