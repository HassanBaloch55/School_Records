@extends('layouts.app')

@section('content')
<style>
    form{
        height: auto;
        width: 80%;
        display: block;
        margin: auto;
        border: 0.5px solid green;
        padding: 1vh 2vw ;
        position: relative;
        top: 4vh;
        box-shadow: 1px 3px 2px 3px purple;
    }
    form button {
    display: block;
     margin: auto;
     background-color: black;
     color: white;
     padding: 0.5vh 2vw;
     border: 1px dashed white;
     border-radius: 10px;
    }
</style>
<div class="container">

    <form action="{{ route('children.store') }}" method="POST">
                 <h1 class="text-center">Add New Child Record</h1>
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Date of Birth</label>
            <input type="date" name="date_of_birth" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Grade</label>
            <input type="text" name="grade" class="form-control" required>
        </div>
        <button type="submit">Save</button>
    </form>

</div>
@endsection
