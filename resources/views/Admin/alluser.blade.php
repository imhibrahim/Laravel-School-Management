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
                    <th>Mail</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
           

           @foreach ($alluser as $user)
             <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role}}</td>
                <td>
                    <a href="{{route('userdel',$user->id)}}">delete</a>
                </td>
             </tr>
           @endforeach
 </table>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection