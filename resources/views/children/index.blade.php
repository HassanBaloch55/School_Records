@extends('layouts.app')
<style>
    table {
        height: auto;
        display: block;
        margin: auto;
        border: 0.5px solid green;
        position: relative;
        top: 4vh;
        box-shadow: 1px 3px 2px 3px purple;
    }
    table  td{
        width: 10%;
    }
</style>
@section('content')
<div class="container">
<h1 class="text-center">Children Records</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Date of Birth</th>
                <th>Grade</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($children as $child)
                <tr>
                    <td>{{ $child->name }}</td>
                    <td>{{ $child->date_of_birth }}</td>
                    <td>{{ $child->grade }}</td>
                    <td>
                        <a href="{{ route('children.edit', $child) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('children.destroy', $child) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <a href="{{ route('children.create') }}" class="btn btn-primary">Add New Record</a>
    </table>
</div>
@endsection
