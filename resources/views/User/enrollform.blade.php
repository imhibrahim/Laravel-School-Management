@extends('User.sidebare')
@section('web')
    
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3 text-center">
            <h1>Enroll Form</h1>
            <form action="{{route('addmission')}}" method="post">
              @csrf
                <div class="col-md-4">
                    <input type="text" placeholder="Course Name" name="Cname" class="form-control mt-4" value="{{$data->name}}">
                    <input type="hidden" name="cid" value="{{$data->id}}">
                    <input type="text" placeholder="Course Name" name="username" class="form-control mt-4" value="{{Auth::user()->name}}">
                    <input type="hidden" name="uid" value="{{Auth::user()->id}}">
                    <input type="date" class="form-control mt-4"  name="dob">
                    <button>Submit</button>
                </div>
              
            </form>
        </div>
    </div>
</div>

@endsection