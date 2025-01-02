@extends('layouts.app')
@section('content')
<div class="container">
       <button><a href="{{route('Student.trash')}}">Go TO Trash</a></button>
        <table>
            <thead style="border: 1px solid black;padding:1vh 2vh;">
                 <tr>
                   <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Grade</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody style="border: 1px solid black;padding:1vh 2vh;">
                @foreach ($stu_data as $record)
                    <tr>
                    <td>{{$record->id}}</td>
                    <td>{{$record->fname}}</td>
                    <td>{{$record->lname}}</td>
                    <td>{{$record->age}}</td>
                    <td>{{$record->Gender}}</td>
                    <td>{{$record->Grade}}</td>
                    <td><button type="submit" class="btn btn-danger"><a href="Del_Records/{{$record->id}}">Trash</a></button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</div>
@endsection
