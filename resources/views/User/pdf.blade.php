<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
</head>
<body>

<h1 style="color: green; text-align:center">{{$title}}</h1>
<h2 style="color:red">{{$date}}</h2>
    <hr><hr>
  <table class="table">
    <tr>
        <th>Id</th>
        <th>User Name</th>
        <th>Course</th>
        <th>Date of Birth</th>
        <th>Enroll Time</th>

    </tr>
   @foreach ($history as $history)
       <tr>
        <td>{{$history->id}}</td>
        <td>{{$history->user->name}}</td>
        <td>{{$history->course->name}}</td>
        <td>{{$history->DOB}}</td>
        <td>{{$history->created_at}}</td>
       
       </tr>
   @endforeach
</table>
</body>
</html>