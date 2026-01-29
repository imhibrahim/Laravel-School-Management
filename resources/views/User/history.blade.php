@extends('User.sidebare')
@section('web')
    

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2 text-center">
            <h1>User History</h1>
<table class="table">
    <tr>
        <th>Id</th>
        <th>User Name</th>
        <th>Course</th>
        <th>Date of Birth</th>
        <th>Enroll Time</th>
        <th>Download</th>
    </tr>
   @foreach ($data as $history)
       <tr>
        <td>{{$history->id}}</td>
        <td>{{$history->user->name}}</td>
        <td>{{$history->course->name}}</td>
        <td>{{$history->DOB}}</td>
        <td>{{$history->created_at}}</td>
        <td><a href="{{route('pdf',$history->id)}}">Click to Download</a></td>
       </tr>
   @endforeach
</table>

        </div>
    </div>
</div>

@endsection