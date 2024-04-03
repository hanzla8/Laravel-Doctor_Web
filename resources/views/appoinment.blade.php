@extends('navbar')

@section('content')

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Book your Seat</span>
          <h1 class="text-capitalize mb-5 text-lg">Appoinment</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Book your Seat</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>

<section class="appoinment section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
          <div class="mt-3">
            <div class="feature-icon mb-3">
              <i class="icofont-support text-lg"></i>
            </div>
             <span class="h3">Call for an Emergency Service!</span>
              <h2 class="text-color mt-3">+84 789 1256 </h2>
          </div>
      </div>

      <div class="col-lg-8">
      <div class="appoinment-wrap mt-5 mt-lg-0">
					<h2 class="mb-2 title-color">Book appoinment</h2>
					<p class="mb-4">Mollitia dicta commodi est recusandae iste, natus eum asperiores corrupti qui velit . Iste dolorum atque similique praesentium soluta.</p>  
					@if(Session::has('message'))
						<p class="alert alert-info">{{ Session::get('message') }}</p>	
					@endif
					<form class="appoinment-form" method="post" action="{{route('appoinment-insert')}}">
					@csrf
                    <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <select name="department" class="form-control" id="exampleFormControlSelect1">
                                  <option>Chose Department</option>
                                  <option value="Skin">Skin</option>
                                  <option value="Health">Health</option>
                                  <option value="Heart">Heart</option>
                                  <option value="Sargen">Sargen</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <select name="doctor" class="form-control" id="exampleFormControlSelect2">
                                  <option>Select Doctors</option>
                                  <option value="Doctor Laiba">Doctor Laiba</option>
                                  <option value="Doctor Moosa">Doctor Moosa</option>
                                  <option value="Doctor Ali">Doctor Ali</option>
                                  <option value="Doctor Zayneb">Doctor Zayneb</option>
                                </select>
                            </div>
                        </div>

                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="date" id="date" type="date" class="form-control" placeholder="dd/mm/yyyy">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="time" id="time" type="time" class="form-control" placeholder="Time">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="name" id="name" type="text" class="form-control" placeholder="Full Name">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="number" id="phone" type="Number" class="form-control" placeholder="Phone Number">
                            </div>
                        </div>
                    </div>
                    <div class="form-group-2 mb-4">
                        <textarea name="message" id="message" class="form-control" rows="6" placeholder="Your Message"></textarea>
                    </div>

                    <button class="btn btn-main btn-round-full" type="submit">Add Appoinment <i class="icofont-simple-right ml-2  "></i></button>
                </form>
            </div>
      </div>
    </div>
  </div>
</section>

@endsection