@extends('layouts.app')

@section('content')
                 <h1 class="text-center">File Aploading:</h1>
                 <h3 class="text-center">Appload your Pictures</h3>
        <form action="{{route('save')}}" method="post" enctype="multipart/form-data">
            @csrf
         <div class="container">
            <div class="form-group">
                <label for="">File</label>
                <input type="file" name="file" id="" class="form-control">
                <button type="submit" class="btn btn-success">submit</button>
            </div>
         </div>
        </form>

@endsection
