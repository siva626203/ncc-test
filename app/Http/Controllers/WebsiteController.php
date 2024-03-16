<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use Redirect;
use DB;
class WebsiteController extends Controller
{
    
	//aboutNCC
	function about(Request $request) {
	  return view('about');
	}
	//AimNCC
	function aim(Request $request){
		return view('AimNCC');
	}
	//MottoNCC
	function motto(Request $request){
		return view('Motto');
	}
	//CoreValues
	function corevalue(Request $request){
		return view('corevalues');
	}
	//NCCFlag
	function nccflag(Request $request){
		return view('flagNCC');
	}
	//NCCSong
	function nccsong(Request $request){
		return view('songNCC');
	}
	//pledge
	function pledge(Request $request){
		return view('pledge');
	}
	//dropdown-camp-rdc
	function campRdc(Request $request) {
	  return view('camp-rdc');
	}
	//dropdown-camp-atc
	function campAtc (Request $request){
		return view('camp-atc');
	}
	//dropdown-camp-tsc
	function campTsc (Request $request){
		return view ('camp-tsc');
	}
	//dropdown-camp-aac
	function campAac (Request $request){
		return view('camp-aac');
	}
	//dropdown-camp-iuc
	function campIuc (Request $request){
		return view('camp-iuc');
	}
	//dropdown-camp-blc
	function campBlc(){
		return view('camp-blc');
	}
	//dropdown-camp-NIC
	function campNIC(){
		return view('camp-nic');
	}
	//dropdown certificates
	function bcert(){
		return view('bcertipdf');
	}
	//dropdown events
	function nccevent(){
		return view('events');
	}
	//acheivements
	function acheive(){
		return view('acheivements');
	}
	//enrollmentForm
	function enroll(){
		return view('enrollment');
	}
	//eligibilitycreteria
	function eligi(){
		return view('eligibility');
	}
	//Contact-Us
	function contactUs(Request $request) {
		return view('contact-us');
	}
	
	function saveContactUs(Request $request) {
		$name = $request -> input('name');
		$mobile = $request -> input('mobile');
		$email = $request -> input('email');
		$message= $request -> input('message');
		DB::insert("insert into feedback(name,mobile,email,message) value(?,?,?,?)",[$name,$mobile,$email,$message]);
		return Redirect::to('/contact-us')->with('message', 'We received your message, our team will revert you shortly.');
		//return "Saved Successfully";
	}
	function saveForm(Request $request) {
		$file1=$request->file('profile');
		$file2=$request->file('signature');
		$profileName=$file1->getClientOriginalName();
		$signName=$file2->getClientOriginalName();
		$file1->move(public_path('profiles'),$profileName);
		$file2->move(public_path('signatures'), $signName);
		$profilePath='profiles/'.$profileName;
		$signPath='signatures/'.$signName;
		$name= $request -> input('name');
		$nationality= $request -> input('nationality');
		$dob= $request -> input('dob');
		$mobile= $request -> input('mobile');
		$email= $request -> input('email');
		$collegename= $request -> input('collegename');
		$unitname= $request -> input('unitname');
		$training= $request -> input('training');
		$fathername= $request -> input('fathername');
		$mothername= $request -> input('mothername');
		$address= $request -> input('address');
		$blood= $request -> input('blood');
		$sex= $request -> input('sex');
		$education= $request -> input('education');
		$indentification= $request -> input('indentification');
		$beforeentroll= $request -> input('beforeentroll');
		$accno= $request -> input('accno');
		$bankname= $request -> input('bankname');
		$ifsc= $request -> input('ifsc');
		$branch=$request -> input('branch');
		$aadhar=$request -> input('aadhar');
		$panid=$request -> input('panid');
		DB::insert("insert into entrollment(name,nationality,dob,mobile,email,collegename,unitname,training,fathername,mothername,address,blood,sex,education,indentification,beforeentroll,accno,bankname,ifsc,branch,aadhar,panid,profile,signature) value(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",[$name,$nationality,$dob,$mobile,$email,$collegename,$unitname,$training,$fathername,$mothername,$address,$blood,$sex,$education,$indentification,$beforeentroll,$accno,$bankname,$ifsc,$branch,$aadhar,$panid,$profilePath,$signPath]);
		return Redirect::to('/contact-us')->with('message', 'We received your message, our team will revert you shortly.');
		//return "Saved Successfully";
	}
}


