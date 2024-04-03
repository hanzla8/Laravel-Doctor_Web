@extends('admin.navbar')

@section('content')
	

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
     
      <div class="row mt-3">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Patient Appointment</h5>
			          <div class="table-responsive">
               <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Paitent name</th>
                      <th scope="col">Doctor</th>
                      <th scope="col">Department</th>
                      <th scope="col">date</th>
                      <th scope="col">time</th>
                      <th scope="col">Number</th>
                      <th scope="col">message</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($appointment as $app)
                    <tr>
                      <th>{{$app->id}}</th>
                      <td>{{$app->name}}</td>
                      <td>{{$app->doctor}}</td>
                      <td>{{$app->department}}</td>
                      <td>{{$app->date}}</td>
                      <td>{{$app->time}}</td>
                      <td>{{$app->number}}</td>
                      <td>{{$app->message}}</td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
            </div>
            </div>
          </div>
        </div>

        <!-- 2nd Table Contact -->
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Contact Submission</h5>
			        <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Topic</th>
                    <th scope="col">number</th>
                    <th scope="col">message</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($contact as $co)
                  <tr>
                    <th>{{$co->id}}</th>
                    <td>{{$co->name}}</td>
                    <td>{{$co->email}}</td>
                    <td>{{$co->topic}}</td>
                    <td>{{$co->number}}</td>
                    <td>{{$co->message}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
      </div><!--End Row-->


      <!-- User Table -->
      <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">User Login Submission</h5>
			  <div class="table-responsive">
               <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Usertype</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($user as $us)
                    <tr>
                      <th>{{$us->id}}</th>
                      <td>{{$us->name}}</td>
                      <td>{{$us->email}}</td>
                      <td>{{$us->usertype}}</td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
            </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Responsive Table</h5>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Heading</th>
                      <th scope="col">Heading</th>
                      <th scope="col">Heading</th>
                      <th scope="col">Heading</th>
                      <th scope="col">Heading</th>
                      <th scope="col">Heading</th>
                      <th scope="col">Heading</th>
                      <th scope="col">Heading</th>
                      <th scope="col">Heading</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Doctor Table</h5>
			  <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">email</th>
                    <th scope="col">Number</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
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
                    <td><img src="/doctor/{{$do->image}}" width="80" alt=""></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
      </div><!--End Row-->

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