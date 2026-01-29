@extends('Admin.sidebare')

@section('admin')

<div class="container">

<div class="row">
    <div class="col-md-12 text-center">
        <H1>Insert Course</H1>
    </div>

   

</div>
 <form action="{{route('insert')}}" method="post" enctype="multipart/form-data">
@csrf
    <div class="row">
        <div class="col-md-4 offset-2">
            <input type="text" placeholder="Course Name" name="name" class="form-control">
            @error('name')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="col-md-4">
             <input type="number" placeholder="Course amount" name="amount" class="form-control">
               @error('amount')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
    </div>
    <div class="row mt-5">
         <div class="col-md-4 offset-2">
            <textarea name="desc" class="form-control" placeholder="Description"></textarea>
              @error('desc')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="col-md-4">
             <input type="file"  name="pic" class="form-control">
               @error('pic')
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