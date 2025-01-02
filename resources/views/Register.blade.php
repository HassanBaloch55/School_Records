@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{route('Register')}}" method="Post">
        @csrf
      <h4>Student Registration</h4>
      <div class="row">
        <div class="col-md-6">
          <label for="fullName">First Name</label>
          <input type="text" name="fname" class="form-control" id="fName" placeholder="Enter First Name" required>
        </div>
        <div class="col-md-6">
             <label for="fullName">Last Name:</label>
             <input type="text" name="lname" class="form-control" id="lName" placeholder="Enter Last Name"  required>
        </div>
      </div>
        <div class="row">
            <div class="col-md-6">
              <label for="email">Email Address:</label>
              <input type="email" name="Email" class="form-control" id="email" placeholder="Enter Email" required>
            </div>
            <div class="col-md-6">
            <label for="City">City</label>
            <input type="text"  name= "City"class="form-control" id="City" placeholder="Enter City" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
              <label for="Password">Password:</label>
              <input type="password" name="password" class="form-control" id="confirmPassword" placeholder="Enter Password" required>
            </div>
            <div class="col-md-6">
             <label for="confirmPassword">Confirm Password:</label>
             <input type="password" name="Conf_pass" class="form-control" id="confirmPassword" placeholder="confirmPassword" required>
            </div>
        </div>
        <br><br><br>
        <button type="submit" class="">Register</button>
        <div class="text-center mt-3">
            <a href="/login">Already have an account? Login here</a>
        </div>
    </form>
</div>
 @endsection
