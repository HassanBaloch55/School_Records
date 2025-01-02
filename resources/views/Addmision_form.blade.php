@extends('layouts.app')

@section('content')
<div class="container">

    <form action="{{ route('Addmission.store') }}" method="POST">
        @csrf
        <h4>Al Hassan Education Enrollment Form</h4>
        <div class="row">
            <div class="col-md-6">
              <label for="fullName">Full Name:</label>
              <input type="text" name="FullName" class="form-control" required placeholder="Enter Name ...">
            </div>
            <div class="col-md-6">
              <label for="fatherName">Father's Name:</label>
              <input type="text" name="Father_Name" class="form-control" placeholder="Enter Father Name ..." required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
             <label for="dob">Date of Birth:</label>
             <input type="date" name="Birth" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="email">Email Address:</label>
                <input type="email" name="Email" class="form-control" placeholder="Enter Email ...." required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="phone">Phone Number:</label>
               <input type="text" name="Phone" class="form-control" placeholder="Enter Phone ..."required>
          </div>
            <div class="col-md-6">

                <label for="">Course</label>
                <select name="Course" id=""  class="form-control">
                    <option value="" >Select Course From List</option>
                    <option value="Micro Soft Office">Micro Soft Office</option>
                    <option value="Web Designing"    >Web Designing</option>
                    <option value="Web Development"  >Web Development</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="startDate">Preferred Start Date:</label>
            <input type="date" name="Start_date" class="form-control" id="startDate" required>
        </div>

        <div class="form-group">
            <label for="comments">Special Requirements or Comments:</label>
            <textarea class="form-control" name="Query" id="comments" rows="3" placeholder="Enter Any Query !"></textarea>
        </div>

        <button type="submit" >Send</button>
    </form>
</div>

<br><br><br>
@endsection
