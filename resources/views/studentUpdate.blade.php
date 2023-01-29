@extends('layouts.main')

@section('main-container')
<body>
    <div class="container ">
      <div class="logo text-center">
        
        <i class="fa-sharp fa-solid fa-building-columns "></i>
      </div>
<h1 class=" text-decoration-underline text-center  m-1 mb-5 ">Student-Update</h1>

<form  action="{{route('student.update' , ['id' => $student->id])}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
  <div class="form-row">
  <div class="form-group col-md-6">
  <label for="fname">Firstname :-</label>
      <input type="text" name="fname" class="form-control" placeholder=" First name" value="{{$student->fname}}">
    </div>
    <div class="form-group col-md-6">
    <label for="lname">Lastname :-</label>
      <input type="text" name="lname"class="form-control" placeholder=" Last name" value="{{$student->lname}}">
      
    </div>
    
    <div class="form-group col-md-12">
        <label for="email">Email :-</label>
        <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="example@gmail.com" value="{{$student->email}}">
        
    </div>
    <div class="form-group col-md-6">
      <label for="dob">Date Of Birth :-</label>
      <input type="date" name="dob" class="form-control"  placeholder="Date of Birth" value="{{$student->dob}}">
      
    </div>
    <div class="form-group col-md-6">
      <label for="phone">Mobile Number :-</label>
      <input type="number" name="phone" class="form-control" value="{{$student->phone}}" >
      
    </div>
    
  </div>
  <div class="form-floating mb-3">
    <label for="address">Address :-</label>
    <textarea name="address" class="form-control" id="inputAddress" placeholder="Enter your full address here..." >{{$student->address}}</textarea>
    
  </div>
 
  <div class="form-group  d-flex justify-content-md-end">

    <button type="submit" class="btn btn-primary submit pl-4 pr-4 fw-bold">Submit</button>
  </div>

</form>
</div>
</body>
@endsection
