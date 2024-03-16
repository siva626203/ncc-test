@extends('includes.common_template')
@section('title')
Welcome to NCC Webportal
@stop

@section('content')

<!-- Start WOWSlider.com BODY section --> 
	<div>
  <div id="wowslider-container1">
	<div class="ws_images">
    <ul>
		<li><img src="{{asset('data1/images/img20230914wa0007.jpg')}}" alt="IMG-20230914-WA0007" title="28(TN)BN,ANOs" id="wows1_0"/></li>
		<li><img src="{{asset('data1/images/img20230914wa0001.jpg')}}" alt="IMG-20230914-WA0001" title="SKC_NCC" id="wows1_1"/></li>
		<li><img src="{{asset('data1/images/img20230914wa0004.jpg')}}" alt="IMG-20230914-WA0004" title="With DDG_NCC" id="wows1_2"/></li>
		<li><a href="http://wowslider.net"><img src="{{asset('data1/images/img20230914wa0006.jpg')}}" alt="slider jquery" title="SD_Seniors" id="wows1_3"/></a></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="IMG-20230914-WA0007"><span><img src="{{asset('data1/tooltips/img20230914wa0007.jpg')}}" alt="IMG-20230914-WA0007"/>1</span></a>
		<a href="#" title="IMG-20230914-WA0001"><span><img src="{{asset('data1/tooltips/img20230914wa0001.jpg')}}" alt="IMG-20230914-WA0001"/>2</span></a>
		<a href="#" title="IMG-20230914-WA0004"><span><img src="{{asset('data1/tooltips/img20230914wa0004.jpg')}}" alt="IMG-20230914-WA0004"/>3</span></a>
		<a href="#" title="IMG-20230914-WA0006"><span><img src="{{asset('data1/tooltips/img20230914wa0006.jpg')}}" alt="IMG-20230914-WA0006"/>4</span></a>
	</div></div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="{{asset('engine1/wowslider.js')}}"></script>
	<script type="text/javascript" src="{{asset('engine1/script.js')}}"></script>
  </div>
        
<!-- Row card-->
<div class="container-fluid">
  <div class="row header-height">
    <div class="col-md-4  bg-warning text-white text-center header-col">
    <img src="{{asset('images/presd.png')}}" class="img-rounded float-start" alt="President of India Logo" >
    <h2 class="m-0 lh-lg">Smt Droupathi Murmu</h2>  <h5>Honorable President of India</h5> <a href="https://presidentofindia.nic.in/" target="_blank"> <button type="button" class="btn btn-md btn-primary badge rounded-pill text-white">View more</button></a></div>
    
   <div class="col-md-4 header-center-bg"> <!--<button class="button2 btn btn-sm btn-warning">View more</button>-->  </div>
    
    <div class="col-md-4  bg-warning text-white text-center header-col"><img src="{{asset('images/dgncc.png')}}" class="img-fluid img-rounded float-end" alt="DG NCC" > <h2 class="m-0 lh-lg">Lt.Gen Gurbirpal singh</h2> <h5>Directorate General of NCC</h5><a href="https://indiancc.nic.in/dg-ncc-lt-gen-gurbirpal-singh/" target="_blank"> <button type="button" class="btn btn-md btn-primary badge rounded-pill text-white">View more</button></a></div>
  </div>
</div>
</div>

<!--body content-->
<div class="container-fluid bg-white">
<div class="container">
	<div class="row  pt-5 pb-5">
      <div class="col-md-4">
      <img src="{{asset('images/aim.jpg')}}" class="img-rounded" id="img1" alt="#"></div>
      <div class="container col-md-8 text-center">
      <h1 class="pb-2">Aims </h1>
      <h4 class="lh-lg">To develop qualities of character, courage, comradeship, discipline, leadership, secular outlook, spirit of adventure and sportsmanship and the ideals of selfless service among the youth to make them useful citizen. To create a human resource of organised, trained and motivated youth to provide leadership in all walks of life including the Armed Forces and be always available for the service of the nation.</h4></div>
  	</div>
  </div>
</div>	

<div class="container-fluid bg-light">
<div class="container">
<div class="row  pt-5 pb-5">
      <div class="container col-md-8 text-center">
      <h1 class="pb-2">Emblem</h1>
      <h4 class="lh-lg">NCC flag contains NCC crest in gold in the middle, with the letters NCC encircled by a wreath of seventeen lotus with a background of red (Army), blue (Navy) and light blue (Air force). The seventeen lotuses represent 17 state directorates. Ekta aur anushasan (Unity and discipline) is written at the bottom.</h4></div>
      <div class="col-md-4 text-center">
      <img src="{{asset('images/emblem.png')}}"  class="img-fluid" alt="#"></div>
    </div> 
  </div>
</div>

<div class="container-fluid bg-white">
<div class="container">
<div class="row  pt-5 pb-5">
      <div class="col-md-4 text-center">
      <img src="{{asset('images/motto.png')}}" alt="#" id="img1"/></div>
    <div class="container col-md-8 text-center">
      <h1 class="pb-2">Motto</h1>
      <h4 class="lh-lg">The motto of NCC is <b><q>Unity and Discipline</q></b> which was adopted on 23 Des.1957. In living up to its motto, the NCC strive to be and is one of the greatest cohesive forces of the nation, bringing together the youth hailing from different parts of the country and moulding them into united, secular and disciplined citizens of the nation.</h4></div>
    </div>
</div>
</div>

<div class="container-fluid bg-light">
<div class="container">
<div class="row  pt-5 pb-5">
      <div class="container col-md-8 text-center">
      <h1 class="pb-2">Pledge</h1>
      <h4 class="lh-lg">We the cadets of the National Cadet Corps,Do soloemnly pledge that we shall always uphold the unity of India.We resolve to be disciplined and responsible citizen of our nation. We shall undertake positive community and service in the spirit of selflessness and concern for our fellow beings.</h4></div>
      <div class="col-md-4 text-center">
      <img src="{{asset('images/pledge.png')}}" alt="#" id="img1"></div>
    </div> 
</div>
</div>

@stop