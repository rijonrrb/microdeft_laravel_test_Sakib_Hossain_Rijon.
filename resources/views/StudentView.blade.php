<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">

<style>
 .badge:after{
        content:attr(value);
        font-size:24px;
        color: #fff;
        background: red;
        border-radius:50%;
        padding: 0 5px;
        position:relative;
        left:-8px;
        top:-10px;
        opacity:0.9;
    }
</style>

</head>
<body style="background-color: #eee;"> 
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand mb-3 text-primary" href="{{route('AddStudent')}}">Add Student</a>   
  </nav>
 

    <div class="table-responsive custom-table-responsive mt-4">

      <table class="table table-striped">
        <thead>
          <tr>  
            <th scope="col">SL.</th>
            <th scope="col">Student Name</th>
            <th scope="col">Student class</th>
            <th scope="col">Student dob</th>
            <th scope="col">Student image</th>
            <th scope="col">Student department_id</th>
            <th scope="col">update</th>
            <th scope="col">delete</th>
          </tr>
        </thead>
        <tbody>
          @php        
          $i = 1; 
          @endphp
          @foreach($Students as $Student)
          <tr scope="row">
              <td >{{$i++}}</td>
              <td >{{$Student->name}}</td>
              <td>{{$Student->class}}</td>
              <td>{{$Student->date_of_birth}}</td>
              <td>{{$Student->student_image}}</td>
              <td>{{$Student->department_id}}</td>
              <td><a href="{{route('UpdateStudent',['id'=>$Student->id])}}">Update</a></td>
              <td><a href="{{route('deleteStudent',['id'=>$Student->id])}}">Delete</a></td>
          </tr>
          <tr class="spacer"><td colspan="100"></td></tr>
          @endforeach

        </tbody>
      </table>

</div>

</body>
<html>