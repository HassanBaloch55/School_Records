@extends('layouts.app')
@section('content')
<div class="container">

    <form action="{{ route('children.update', $child) }}" method="POST">
        @csrf
        <h1 class="text-center">Edit Child</h1>
        @method('PUT')
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $child->name }}" required>
        </div>
        <div class="form-group">
            <label>Date of Birth</label>
            <input type="date" name="date_of_birth" class="form-control" value="{{ $child->date_of_birth }}" required>
        </div>
        <div class="form-group">
            <label>Grade</label>
            <input type="text" name="grade" class="form-control" value="{{ $child->grade }}" required>
        </div>
        <button type="submit" >Update Child</button>
    </form>
</div>
<br><br><br><br>
@endsection
