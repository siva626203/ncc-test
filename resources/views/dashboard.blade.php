@extends('includes.common_template')
@section('title')
Dashboard
@stop

@section('content')

<div class="container-fluid">
  @if(Session::has('message'))
    <p class="alert alert-danger">{{ Session::get('message') }}</p>
    @endif
   <?php

 try{
    if(DB::connection()->getPdo()){
        echo  ".";
        $data=DB::table('entrollment')->get();

    }
 }catch(Exception $e){
    echo "Error".$e;
 }
?>
<form action="/dashboard" method="POST">
  @csrf
<button type="submit" class="btn btn-danger">Logout</button>
</form>
      <div class="container col-md-12 pt-5 pb-5 text-center table-responsive">
      <table class="table table-hover">
    <thead>
      <tr>
       <th>Name</th>
       <th>Nationality</th>
       <th>DOB</th>
       <th>Mobile</th>
       <th>Email</th>
       <th>College Name</th>
       <th>Unit Name</th>
       <th>Training</th>
       <th>Father Name</th>
       <th>Mother Name</th>
       <th>Address</th>
       <th>Blood Group</th>
       <th>Gender</th>
       <th>Education</th>
       <th>Identification</th>
       <th>Before Endroll</th>
       <th>Acc No</th>
       <th>Bank Name</th>
       <th>IFSC</th>
       <th>Branch</th>
       <th>Aadhar</th>
       <th>Pan Id</th>
       <th>Profile</th>
       <th>Signature</th>
       <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach($data as $data){
        echo "<tr>";
        echo "<td>".$data->name."</td>";
        echo "<td>".$data->nationality."</td>";
        echo "<td>".$data->dob."</td>";
        echo "<td>".$data->mobile."</td>";
        echo "<td>".$data->email."</td>";
        echo "<td>".$data->collegename."</td>";
        echo "<td>".$data->unitname."</td>";
        echo "<td>".$data->training."</td>";
        echo "<td>".$data->fathername."</td>";
        echo "<td>".$data->mothername."</td>";
        echo "<td>".$data->address."</td>";
        echo "<td>".$data->blood."</td>";
        echo "<td>".$data->gender."</td>";
        echo "<td>".$data->education."</td>";
        echo "<td>".$data->identification."</td>";
        echo "<td>".$data->beforeendroll."</td>";
        echo "<td>".$data->accno."</td>";
        echo "<td>".$data->bankname."</td>";
        echo "<td>".$data->ifsc."</td>";
        echo "<td>".$data->branch."</td>";
        echo "<td>".$data->aadhar."</td>";
        echo "<td>".$data->panid."</td>";
        echo "<td>".$data->profile."</td>";
        echo "<td>".$data->signature."</td>";
        echo "<td><a href='/delete/".$data->id."' class='btn btn-danger'>Delete</a></td>";
      }
      ?>
      
    </tbody>
  </table>    
    </div>
   
    </div>
   	
@stop