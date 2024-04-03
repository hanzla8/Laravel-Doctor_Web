@extends('admin.navbar')

@section('content')
	
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3">  

      <div class="col-lg-6 mx-auto">
        <div class="card">
           <div class="card-body">
           <div class="card-title">Round Vertical Form</div>
           <hr>
            <form action="{{route('Doctor.inserted')}}" method="post" enctype="multipart/form-data">
              @csrf
           <div class="form-group">
            <label for="input-6">Name</label>
            <input type="text" name="name" class="form-control form-control-rounded" id="input-6" placeholder="Enter Your Name">
           </div>
           <div class="form-group">
            <label for="input-7">Email</label>
            <input type="email" name="email" class="form-control form-control-rounded" id="input-7" placeholder="Enter Your Email Address">
           </div>
           <div class="form-group">
            <label for="input-8">Mobile</label>
            <input type="text" name="number" class="form-control form-control-rounded" id="input-8" placeholder="Enter Your Mobile Number">
           </div>
           <div class="form-group">
            <label for="input-10">Description</label>
            <input type="text" name="description" class="form-control form-control-rounded" id="input-10" placeholder="Description">
           </div>
           <div class="form-group mb-5">
            <label for="input-9">Image</label>
            <input type="file" name="image" class="form-control-file form-control-rounded" id="input-9" placeholder="Enter image">
           </div>


           <div class="form-group">
            <button type="submit" name="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Register</button>
          </div>
          </form>
         </div>
         </div>
      </div>
    </div><!--End Row-->

    <div class="container-fluid">
     
     <div class="row mt-3">
       <div class="col-lg-12">
         <div class="card">
           <div class="card-body">
             <h5 class="card-title">Doctor Information</h5>
              <div class="table-responsive">
              <table class="table">
                 <thead>
                   <tr>
                     <th scope="col">ID</th>
                     <th scope="col">Name</th>
                     <th scope="col">Email</th>
                     <th scope="col">Number</th>
                     <th scope="col">Desc</th>
                     <th scope="col">image</th>
                     <th scope="col">Edit</th>
                     <th scope="col">Delete</th>

                   </tr>
                 </thead>
                 <tbody>
                  @foreach ($doctor as $do)
                   <tr>
                     <th>{{$do->id}}</th>
                     <td>{{$do->name}}</td>
                     <td>{{$do->email}}</td>
                     <td>{{$do->number}}</td>
                     <td>{{$do->description}}</td>
                     <td><img src="/doctor/{{ $do->image }}" width="80px" alt=""></td>
                     <td><a class="btn btn-warning" href="{{ route('Doctor.edit', $do->id) }}">Edit</a></td>
                     <td><a class="btn btn-danger" href="{{ route('doctor.delete', $do->id) }}">Delete</a></td>
                    </tr>
                   @endforeach
                 </tbody>
               </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->

    </div>
    <!-- End container-fluid-->
    
   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
    
    
    
    @endsection