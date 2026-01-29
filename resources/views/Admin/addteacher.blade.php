@extends('Admin.sidebare')

@section('admin')

<div class="container">

<div class="row">
    <div class="col-md-12 text-center">
        <H1>Insert Teacher</H1>
    </div>

   

</div>
 <form action="{{route('addteacher')}}" method="post" enctype="multipart/form-data">
@csrf
    <div class="row">
        <div class="col-md-4 offset-2">
            <input type="text" placeholder="Teacher Name" name="name" class="form-control">
            @error('name')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="col-md-4">
             <input type="number" placeholder="Teacher Age" name="age" class="form-control">
               @error('age')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
    </div>
    <div class="row mt-5">
         <div class="col-md-4 offset-2">
           <select name="qualification"  class="form-control">
            <option selected disabled>---Select Qualification---</option>
            <option value="bba">BBA</option>
            <option value="Cs">Cs</option>
            <option value="developer">Developer</option>
            <option value="Designer">Designer</option>
           </select>
              @error('qualification')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="col-md-4">
            <select name="course_id" class="form-control">
                    <option selected disabled>---Select Course---</option>
                @foreach ($course as $data)
                     <option value="{{$data->id}}">{{$data->name}}</option>
                @endforeach
            </select>
                @error('course_id')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
    </div>
<div class="row text-center mt-5">
<div class="col-md-5"></div>        
<div class="col-md-2"><button class="btn btn-info">Insert</button>
</div>        
<div class="col-md-5"></div>        
</div>

    </form>


</div>

@endsection