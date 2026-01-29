@extends('User.sidebare')

@section('web')

<div class="container">
    <div class="row text-center">
        <div class="col-md-6 text-center">
            <img src="{{url('storage/course/'.$detail->picture)}}" style="width: 100%;" alt="">
        </div>
        <div class="col-md-6">
            <h1>{{$detail->name}}</h1>
            <p>{{$detail->desc}}</p>
            <code>{{$detail->amount}}</code> <br><br>
            <br>
           <a href="{{route('enrollform',$detail->id)}}" class="btn btn-info">Enroll</a>
        </div>
    </div>
</div>

@endsection