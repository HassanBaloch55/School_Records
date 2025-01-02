@extends('layouts.app')
@section('content')

@if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<div class="container">
    <form action="{{route('login')}}" method="Post" style="width: 40%;">
        @csrf
       <h2>Student Login</h2>
        <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" name="Email" class="form-control" id="email"  placeholder="Enter Email" required >
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password"  name= "password" class="form-control"   id="password" placeholder="Enter Password" required>
        </div>
        <div class="text-center mt-3">
            <a href="#">Forgot Password?</a> &nbsp;&nbsp;&nbsp;

            <span><input type="checkbox" name="" id=""><a href="#">Remember Password</a></span>
        </div>
        <br><br>
        <button type="submit" class="btn btn-primary btn-block">Login</button>
        <br>
    </form>
</div>
@endsection
