@extends('Admin.sidebare')

@section('admin')
    <div class="container">
        <div class="row">
@if (session('success'))
    <div class="alert alert-success" role="alert">
{{session('success')}}
</div>
@endif

            <div class="col-md-2"></div>
            <div class="col-md-8 text-center">

            <table class="table">
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>age</th>
                    <th>Qualification</th>
                    <th>Course</th>
                    <th>Action</th>
                </tr>
           @foreach ($data as $tec)
               <tr>
                <td>{{$tec->id}}</td>
                <td>{{$tec->name}}</td>
                <td>{{$tec->age}}</td>
                <td>{{$tec->qualification}}</td>
                <td>{{$tec->course->name}}</td>
                <td>
                    <a href="{{route('deltecher',$tec->id)}}">Delete</a> ||
                    <a href="{{route('editTecher',$tec->id)}}">Edit</a>
                </td>
               </tr>
           @endforeach

        
 </table>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection