@extends('admin.navbar')

@section('content')
	
<div class="content-wrapper">
  <div class="container-fluid">

    <div class="row mt-3">
      <div class="col-lg-6 mx-auto">
        <div class="card">
          <div class="card-body">
            <div class="card-title">Update Form</div>
            <hr>
            <form action="{{route('Doctor.update', $doctor->id )}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="input-1">Name</label>
                <input type="text" name="name" class="form-control" id="input-1" value="{{$doctor->name}}">
              </div>
              <div class="form-group">
                <label for="input-2">Email</label>
                <input type="text" name="email" class="form-control" id="input-2" value="{{$doctor->email}}">
              </div>
              <div class="form-group">
                <label for="input-3">Mobile</label>
                <input type="text" name="number" class="form-control" id="input-3" value="{{$doctor->number}}">
              </div>
              <div class="form-group">
                <label for="input-4">Description</label>
                <input type="text" name="description" class="form-control" id="input-4" value="{{$doctor->description}}">
              </div>
              <div class="form-group">
                <label for="input-5">Image</label>
                <input type="file" name="image" class="form-control-file form-control-rounded" id="input-5" value="{{$doctor->name}}">
              </div>

              <!-- Current Images -->
              <div class="form-group">
                  <img src="/doctor/{{ $doctor->image }}" width="80" height="80" alt="">                
              </div>


            
              <div class="form-group">
                <button type="submit" name="submit" class="btn btn-light px-5"><i class="icon-lock"></i> Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>


    </div>
  </div><!--End Row-->


  @endsection