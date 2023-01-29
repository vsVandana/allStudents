<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="Description" content="Enter your description here" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/bc102016f4.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    body {
     background-color:#e5e5e5;
      background-size: cover;
      background-repeat: no-repeat;
    }

    .left>i {
      border: 2px solid black;
      font-size: 1.5rem;
      padding: 0.4rem;
      border-radius: 1.5rem;
    }
    .center{
      width:20rem;
     
    }
  </style>
  <title>Student-list</title>
</head>

<body>
  <form action="" method="post">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <div class="left d-flex align-items-center justify-content-start">
          <i class="fa-sharp fa-solid fa-building-columns d-inline-block align-text-top"></i>

        </div>

        <div class="center d-flex col-6">
          <form  action="" role="search">
            @csrf
                 <input class="form-control me-2" type="search" name="search" placeholder="Search by name " aria-label="Search" >
                  <button class="btn btn-outline-success" type="submit">Search</button>

                  <a href="{{url('/')}}">
                    <button class="btn btn-outline-primary" id="reset"  type="submit">Reset</button>
                  </a>
          </form>


        </div>
        <div class="right d-grid gap-2 d-md-flex justify-content-md-end">
          <a href="{{url('/studentCreate')}}">
            <button class="btn btn-primary" type="button">Add</button>
          </a>
        </div>

      </div>
      </div>
    </nav>

    <div>
      <table class="table caption-top ">
        <thead class="table-dark">
          <tr>
          <th scope="col">Id</th>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th scope="col">email</th>
            <th scope="col">dob</th>
            <th scope="col">phone</th>
            <th scope="col">address</th>
            <th scope="col">Action</th>
            
          </tr>
        </thead>
        <tbody>
          @foreach($students as $student)
          <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->fname}}</td>
            <td>{{$student->lname}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->dob}}</td>
            <td>{{$student->phone}}</td>
            <td>{{$student->address}}</td>
            <td>
               <a href="{{route('student.edit' , ['id' => $student->id])}}">              
          <button class="btn btn-success" id="edit"><i class="fa-regular fa-pen-to-square"></i></button>
               </a>
          <a href="{{route('student.delete' , ['id' => $student->id])}}" id="delete">
               <button class="btn btn-danger" ><i class="fa-regular fa-trash-can"></i></button>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </form>
  
<script>

</script>
</body>

</html>