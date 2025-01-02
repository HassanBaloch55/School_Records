@extends('layouts.app')

@section('content')

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
<br><br><br><br>
@endsection
