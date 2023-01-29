@extends('layouts.main')

@section('main-container')
<body>
    <div class="container ">
      <div class="logo text-center">
        
        <i class="fa-sharp fa-solid fa-building-columns "></i>
      </div>
<h1 class=" text-decoration-underline text-center  m-1 mb-5 ">Student-Form</h1>

<form  action="{{URL::to('/studentStore')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
  <div class="form-row">
  <div class="form-group col-md-6">
  <label for="fname">Firstname :-</label>
      <input type="text" name="fname" class="form-control" placeholder=" First name" value="{{old('fname')}}">
      <span class="text-danger">
        @error('fname')
        {{$message}}
        @enderror
      </span>
    </div>
    <div class="form-group col-md-6">
    <label for="lname">Lastname :-</label>
      <input type="text" name="lname"class="form-control" placeholder=" Last name" value="{{old('lname')}}">
      <span class="text-danger">
        @error('lname')
        {{$message}}
        @enderror
      </span>
    </div>
    
    <div class="form-group col-md-12">
        <label for="email">Email :-</label>
        <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="example@gmail.com" value="{{old('email')}}">
        <span class="text-danger">
        @error('email')
        {{$message}}
        @enderror
      </span>
    </div>
    <div class="form-group col-md-6">
      <label for="dob">Date Of Birth :-</label>
      <input type="date" name="dob" class="form-control"  placeholder="Date of Birth" value="{{old('dob')}}">
      <span class="text-danger">
        @error('dob')
        {{$message}}
        @enderror
      </span>
    </div>
    <div class="form-group col-md-6">
      <label for="phone">Mobile Number :-</label>
      <input type="number" name="phone" class="form-control" value="{{old('phone')}}" >
      <span class="text-danger">
        @error('phone')
        {{$message}}
        @enderror
      </span>
    </div>
    
  </div>
  <div class="form-floating mb-3">
    <label for="address">Address :-</label>
    <textarea name="address" class="form-control" id="inputAddress" placeholder="Enter your full address here..." >{{old('address')}}</textarea>
    <span class="text-danger">
        @error('address')
        {{$message}}
        @enderror
      </span>
  </div>
  
  <div class="form-group  d-flex justify-content-md-end">
    <button type="submit" class="btn btn-primary submit pl-4 pr-4 fw-bold">Submit</button>
  </div>

</form>
</div>
</body>
@endsection
