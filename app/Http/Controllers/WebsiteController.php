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
}


