@extends ('includes.common_template')
@section ('title')
ContactUs
@stop

@section('content')

<div class="container-fluid">
				<div>
                <img  class="img-fluid" src="{{asset('images/rdcBanner.png')}}" alt="Contact-Banner Image"/>
                </div>
                
                
	<div class="row">
    	<div class="col-md-6"> 
        		<div class="m-2 p-2">
        		<h4 class=" text-primary m-2 pt-5">Address</h4> 
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img class="img-fluid" src="{{asset('images/ANOsir.jpg')}}" alt="Contact-Banner Image" style="width:400px; height:350px;">
    </div>
    <div class="flip-card-back">
      <h1 class="mt-4 p-1">Lt K.Ganeshbabu</h1> 
      <h4 class="mb-1">Associate NCC officer</h4>
      <address class="text-justify lh-lg fs-6 m-1 p-1">Sri Kaliswari College (Autonomous),
            Virudhunagar Main Road, Anaikuttam,<br>
            	Sivakasi – 626 130,<br>
            	Virudhunagar(Dist),<br>
            	Tamilnadu.
        </address>
    </div>
  </div>
</div>
</div>
        <div class="m-2 p-2">
            	<h4 class="text-primary">Contact No</h4>
                <address>
                +91-9790424902 <br>
                (04562)232648 <br>
				</address>
            </div>
			<div class="m-2 p-2">
            	<h4 class="text-primary">Fax</h4>
                <p>(04562) 232264</p>
            </div>
			<div class="m-2 p-2">
            	<h4 class="text-primary">Email</h4>
                <p>
                ncc@kaliswaricollege.edu.in<br>    
                kaliswaricollegencc@gmail.com   
                </p>
            </div>
        </div>
         
    <div class=" bg-light pt-5 col-md-6">
    @if(Session::has('message'))
    <p class="alert alert-success">{{ Session::get('message') }}</p>
    @endif
    
    		<form action="/contact-us" method="POST">
            @csrf
            <div class="mt-3 mb-3">
  			<label for="name"><h5>Name:</h5></label>
  			<input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mt-3 mb-3">
  			<label for="phone"><h5>Mobile Number:</h5></label>
  			<input type="phone" class="form-control" id="number" name="mobile" required> 
  			</div>
            <div class="mt-3 mb-3">
            <label for="mail"><h5>E-mail:</h5></label>
  			<input type="email" class="form-control" id="mailid" name="email" required> 
            </div>
            <div class="mt-3 mb-3">
            <label for="message"><h5>Your Message:</h5></label><br>
  			<textarea id="message" class="form-control" rows="5" cols="25" name="message" required></textarea>
            </div>
            
            
            <input class="btn btn-badge btn-primary btn-md rounded-corner m-3"type="submit" value="Submit">
			</form> 

            </div>
    </div>
    </div>
</div>	
<?php

 try{
    if(DB::connection()->getPdo()){
        echo ".";
    }
 }catch(Exception $e){
    echo "Error".$e;
 }
?>

@stop
