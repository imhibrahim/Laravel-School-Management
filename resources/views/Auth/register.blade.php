<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2 text-center">
<h1>Register Page</h1>

<form action="{{route('userReg')}}" method="post">
    @csrf
    <div class="row">
        <div class="col-md-6">
             <input type="text" placeholder="Enter Name" class="form-control" name="name" value="{{old('name')}}">
             @error('name')
                <p class="text-danger">{{$message}}</p> 
             @enderror
            
            </div>
        <div class="col-md-6"> 
            <input type="text" placeholder="Enter Mail" class="form-control" name="email" value="{{old('email')}}"> 
            @error("email")
                  <p class="text-danger">{{$message}}</p> 
            @enderror
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <input type="text" placeholder="Password" class="form-control mt-5" name="password" value="{{old('password')}}">
              @error("password")
                  <p class="text-danger">{{$message}}</p> 
            @enderror
     <button class="btn btn-outline-info mt-5">Register</button>
    </div>
        <div class="col-md-3"></div>

    
    </div>
</form>

        </div>
    </div>
</div>
    
</body>
</html>