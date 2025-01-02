@extends('layouts.app')
@section('content')
<div class="container">
  <form action="">

   <div class="col-8">
   <input type="Search" name="search" placeholder="Enter Search here>>>>"  value="{{$search}}"  class="form-control">
    <button type="submit" >Search</button>
</div>

  </form>
        <table style="width: 110%;">
            <thead style="border: 1px solid black;padding:1vh 2vh;">
                 <tr>
                   <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>Password</th>
                </tr>
            </thead>

            <tbody style="border: 1px solid black;padding:1vh 2vh;">
                @foreach ($Reg_data as $record)
                    <tr>
                    <td>{{$record->id}}</td>
                    <td>{{$record->fname}}</td>
                    <td>{{$record->lname}}</td>
                    <td>{{$record->Email}}</td>
                    <td>{{$record->City}}</td>
                    <td>{{$record->password}}</td>
                    <!-- <td><button type="submit" class="btn btn-danger"><a href="{{route('Student.delete',['id'=> $record->id])}}">Delete</a></button></td>
                    <td><button type="submit" class="btn btn-danger"><a href="{{route('Student.restore',['id'=> $record->id])}}">Restore</a></button></td> -->
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row">
        <!-- // using pagination method -->
            {{$Reg_data->links()}}
        </div>
</div>
@endsection
