@extends('Admin.sidebare')


@section('admin')
    
<div class="container">
    <div class="row text-center">
        <div class="col-md-12">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
 {{session('success')}}
</div>
            @endif
        </div>
        <div class="col-md-8 offset-2">
        
        <table class="table">
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
          @foreach ($data as $course)
                <tr>
                <td>{{$course->id}}</td>
                <td>{{$course->name}}</td>
                <td>{{$course->amount}}</td>
                <td>{{$course->desc}}</td>
                <td><img src="{{url('storage/course/'.$course->picture)}}" style="border-radius:50%;" width="100px" height="100px"></td>
           <td>
<a href="{{route('deletecourse',$course->id)}}">Delete</a>
<a href="{{route('editcourse',$course->id)}}">Edit</a>

           </td>
            </tr>
          @endforeach
        </table>

        </div>
    </div>
</div>

@endsection