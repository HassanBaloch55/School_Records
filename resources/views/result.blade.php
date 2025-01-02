@extends('layouts.app')
@section('content')
<div class="container">


    <table class="table">
        <thead>
            <tr>
            <h4 class="text-center">Annual Eximanition Results:</h4>
                <th>Name</th>
                <th>Date of Birth</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($c as $child)
                <tr>

                    <td>{{ $child->name }}</td>
                    <td>{{ $child->date_of_birth }}</td>
                    <td>{{ $child->grade }}</td>
                    <!-- <td>
                        <a href="{{ route('children.edit', $child) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('children.destroy', $child) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td> -->
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<br><br><br><br>
@endsection
