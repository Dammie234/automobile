
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- font awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}"> 
<!-- my style -->
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>Automobile</title>
  </head>
  <body>
    <section class="info d-none d-md-block">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
                <ul>
                    <li><i class="fa fa-phone"></i> Need Support 09078071290</li>
                    <li><i class="fa fa-envelope"></i> info@automobile.com</li>
                </ul>
            </div>
            <div class="col-md-3"> 
                <ul>
                    <li><i class="fa fa-sign-in"></i> login</li>
                    <li><i class="fa fa-user"></i> Register</li>
                </ul>
            </div>
          </div>  
        </div>

        </div>
    </section>
    <header class="container">
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: white;">
        <a class="navbar-brand" href="#">Automobile</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('index')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('vehicles')}}">Vehicle Listing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="vehicle-repair.html">Vehicle Repairs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="vehicle-loan.html">Vehicle Loan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="brand-new.html">Brand New</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
           
          </ul>
        </div>
      </nav>
    </header>
    <section>
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('assets/images/mitsubish.jpg')}}" class="d-block w-100" alt="a car">
            <div class="carousel-caption">
              <h1>Find your dream car</h1>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- <section class="search">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <form action="{{route('search')}}" method="GET" class="row no-gutters">
              
              <div class="col-md-2 form-group mb-0 pb-0">
                <select name="brand" id="brand" class="form-control @error('brand') is-invalid @enderror">
                  <option value="">Select your brand</option>
                  @foreach($brands as $brand)
                      <option value="{{$brand->id}}">{{$brand->name}}</option>
                  @endforeach()
              </select>
              </div>
              <div class="col-md-2 form-group mb-0 pb-0">
                <select name="model" id="model" class="form-control @error('model') is-invalid @enderror">
                  <option value="0" disable="true" selected="true"> Select Model </option>
              </select>
              </div>
              <div class="col-md-1 form-group mb-0 pb-0">
                <select name="year" id="" class="form-control">
                  <option value="">Year</option>
                  @for($i = 2000; $i <= date('Y'); $i++)
                    <option value="{{$i}}">{{$i}}</option>
                  @endfor
                </select>
              </div>
              <div class="col-md-2 form-group mb-0 pb-0">
                <select name="location" id="" class="form-control">
                  <option value="">Location</option>
                  <option value="Lagos">Lagos</option>
                  <option value="Abuja">Abuja</option>
                </select>
              </div>
              <div class="col-md-2 form-group mb-0 pb-0">
                <select name="vehicle_type" id="" class="form-control">
                  <option value="">Vehicle Type</option>
                  <option value="">Truck</option>
                  <option value="">Car</option>
                  <option value="">Motorcycle</option>
            
                </select>
              </div>
              <div class="col-md-2 form-group mb-0 pb-0">
                <select name="usage" id="" class="form-control">
                  <option value="">Usage</option>
                  <option value="new">New</option>
                  <option value="foreign">Foreign Used</option>
                  <option value="nigerian">Nigerian Used</option>
                </select>
              </div>
              <div class="col-md-1"><button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button></div>
            </form>
          </div>
        </div>
      </div>
    </section> --}}
    <section class="features">
      <div class="container">
        <div class="row justify-content-md-center pt-5">
          <div class="col-md-6 text-center pt-3">
            <h2 class="text-uppercase">Featured VEHICLES</h2>
            <p>Lorem ipsum dolor sit amet consectetur dolor?</p>
          </div>
        </div>
        <div class="row mt-5">
          @foreach($vehicles as $vehicle)
          <div class="col-md-4 col-sm-6 col-xs-12 col mb-4 feature">
            <div class="image">
              <div class="forsale"><h6>For Sale</h6></div>
              <div class="price"><h6>&#8358;{{$vehicle->price}}</h6></div>
              <img src="{{asset('images/vehicles/' . $vehicle->featured_image)}}"class="img-fluid">
            </div>
            <div class="content pb-1 ">
              <h5 class="text-uppercase pt-4 pl-3" style="color: #ffb400;"><a href="{{route('vehicle', $vehicle->slug)}}">{{$vehicle->name}}</a></h5>
              <h6 class="h6 text-uppercase pl-3 ">{{$vehicle->usage}} | {{$vehicle->drive_type}} | {{$vehicle->body_style}}</h6>
              <ul class="mt-3 pl-3">
                <li><i class="fa fa-sign-in"></i> {{$vehicle->fuel_type}}</li>
                <li><i class="fa fa-user"></i>{{$vehicle->millage}}km</li>
                <li><i class="fa fa-user"></i>{{$vehicle->transmission}}</li>
                <li><i class="fa fa-user"></i> Sport</li>
                <li><i class="fa fa-cog"></i> {{$vehicle->colour}}</li>
                <li><i class="fa fa-calendar"></i> {{$vehicle->year}}</li>
              </ul>
              <div class="clearfix"></div>
              <div class="divider mt-3"></div>
              <div class="row no-gutters">
                <div class="col-md-8 pt-3 pl-3">
                  <i class=" fa fa-star"></i>
                  <i class=" fa fa-star"></i>
                  <i class=" fa fa-star"></i>
                  <i class=" fa fa-star"></i>
                  <i class=" fa fa-star"></i>
                  (65 reviews)
                </div>
                <div class="col-md-2 brd-left">
                  <i class="fa fa-heart"></i>
                </div>
                <div class="col-md-2 brd-left">
                  <i class="fa fa-share"></i>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          

        </div>
        <div class="row justify-content-md-center mt-5">
          <div class="col-md-6 text-center">
            <h3 class="text-uppercase">we are the best</h3>
            <p>Lorem ipsum dolor sit amet consectetur dolor?</p>
          </div>
        </div>
        <div class="row pt-3">
          <div class="col-md-3 ">
            <div class="inner">
              <div class="icon">
                <i class="fa fa-shield"></i>
              </div>
              <div>
                <h5 class="text-center mt-3" style="font-weight: bold;">Highly Secured</h5>
                <p class="lead text-center pt-2">designing this isnt an easy thing so dont joke with me when i ask you to 
                  bring me what i realy want. 
                </p>
                <p class="text-center mt-4" style="color: #ffb400;">Read More</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="inner">
              <div class="icon">
                <i class="fa fa-phone"></i>
              </div>
              <div>
                <h5 class="text-center mt-3" style="font-weight: bold;">Highly Secured</h5>
                <p class="lead text-center pt-2">designing this isnt an easy thing so dont joke with me when i ask you to 
                  bring me what i realy want. 
                </p>
                <p class="text-center mt-4" style="color: #ffb400;">Read More</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="inner">
              <div class="icon">
                <i class="fa fa-shield"></i>
              </div>
              <div>
                <h5 class="text-center mt-3" style="font-weight: bold;">Highly Secured</h5>
                <p class="lead text-center pt-2">designing this isnt an easy thing so dont joke with me when i ask you to 
                  bring me what i realy want. 
                </p>
                <p class="text-center mt-4" style="color: #ffb400;">Read More</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="inner">
              <div class="icon">
                <i class="fa fa-shield"></i>
              </div>
              <div>
                <h5 class="text-center mt-3" style="font-weight: bold;">Highly Secured</h5>
                <p class="lead text-center pt-2">designing this isnt an easy thing so dont joke with me when i ask you to 
                  bring me what i realy want. 
                </p>
                <p class="text-center mt-4" style="color: #ffb400;">Read More</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-md-center mt-4">
          <div class="col-md-6 text-center">
            <button class="text-uppercase mb-2 btn btn-primary" style="background-color:#ffb400; color: white; ">read me</button>
          </div>
        </div>
        <div class="row justify-content-md-center">
          <div class="co-md-6">
            <h3 class="text-uppercase text-center mt-5 pt-2">latest offers</h3>
            <p class="text-centre">Lorem ipsum dolor sit amet consectetur dolor?</p>
          </div>
        </div>
        <div class="row pb-5">
          <div class="col-md-7">
            <div class="row trans">
              <div class="col-md-12 feature">
                <div class="image">
                  <div class="new"><h6>NEW</h6></div>
                  <div class="rent"><h6 class="amnt"><small>&#8358;</small><sub style="color:#ffb400 ;"><b>150000/month</b></sub></h6><h6>Toyota Prius</h6></div>
                  <img src="{{asset('assets/images/vehicles/img-1.jpg')}}" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-6 feature">
                <div class="image">
                  <div class="new"><h6>NEW</h6></div>
                  <div class="rent"><h6 class="amnt"><small>&#8358;</small><sub style="color:#ffb400 ;"><b>150000/month</b></sub></h6><h6>Toyota Prius</h6></div>
                  <img src="{{asset('assets/images/vehicles/img-2.jpg')}}" class="img-fluid">
                </div>
              </div>
              <div class="col-md-6 feature">
                <div class="image">
                  <div class="new"><h6>NEW</h6></div>
                  <div class="rent"><h6 class="amnt"><small>&#8358;</small><sub style="color:#ffb400 ;"><b>150000/month</b></sub></h6><h6>Toyota Prius</h6></div>
                  <img src="{{asset('assets/images/vehicles/img-3.jpg')}}" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-5 feature">
            <div class="image">
              <div class="new"><h6>NEW</h6></div>
              <div class="rent"><h6 class="amnt"><small>&#8358;</small><sub style="color:#ffb400 ;"><b>150000/month</b></sub></h6><h6>Toyota Prius</h6></div>
              <img src="{{asset('assets/images/vehicles/img-4.jpg')}}" class="img-fluid">
            </div>
          </div>  
        </div>  
    </section>
    <section class="info1">
    <div class="container">
     <div class="row">
       <div class="col-md-3 col-sm-6 col-xs-12 coljustify-content-md-center">
         <div class="icon text-center">
           <i class="fa fa-car"></i>
           <h3 style="color: white; margin-top: 5px;">976</h3>
           <h5 style="color: #ffb400;">Total Cars</h5>
         </div>
       </div>
       <div class="col-md-3 col-sm-6 col-xs-12 col justify-content-md-center">
        <div class="icon text-center">
          <i class="fa fa-car"></i>
          <h3 style="color: white; margin-top: 5px;">976</h3>
          <h5 style="color: #ffb400;">Total Cars</h5>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 col justify-content-md-center">
        <div class="icon text-center">
          <i class="fa fa-car"></i>
          <h3 style="color: white; margin-top: 5px;">976</h3>
          <h5 style="color: #ffb400;">Total Cars</h5>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 col justify-content-md-center">
        <div class="icon text-center">
          <i class="fa fa-car"></i>
          <h3 style="color: white; margin-top: 5px;">976</h3>
          <h5 style="color: #ffb400;">Total Cars</h5>
        </div>
      </div>
     </div>
    </div>
    </section>
    <footer class="footer">
      <div class="container pt-5">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6">
                <h3 style="color: white;">Autocar<h3>
                  <p style="color: white; font-size: 15px; font-weight: lighter; padding-top: 15px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos accusamus animi aut maiores. Explicabo maxime est quidem eos libero? Sed in, necessitatibus nisi aperiam pariatur velit! Ullam sit exercitationem quaerat.</p>
              </div>
              <div class="foot col-md-6">
                <h4 style="color: white; font-weight: normal; padding-left: 35px;">Contact Info</h4>
                <ul style="color: white;">
                  <li><i class="fa fa-map-marker"></i> login</li>
                  <li><i class="fa fa-envelope"></i> info@ataekongm.com</li>
                  <li><i class="fa fa-phone"></i> +2349037557146</li>
                  <li><i class="fa fa-fax"></i> +0477 85X6 552</li>
              </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12 col">
            <div class="row">
              <div class=" foot1 col-md-5">
                <h4 style="color: white; padding-left: 35px;">Useful Links</h4>
                <ul class="links">
                  <li><i class="fa fa-chevron-right"><a href="#">Home</a></i></li>
                  <li><i class="fa fa-chevron-right"><a href="#">About Us</a></i></li>
                  <li><i class="fa fa-chevron-right"><a href="#">Services</a></i></li>
                  <li><i class="fa fa-chevron-right"><a href="#">Car Listing</a></i></li>
                  <li><i class="fa fa-chevron-right"><a href="#">Blog</a></i></li>
                  <li><i class="fa fa-chevron-right"><a href="#">Contact Us</a></i></li>
                  <li><i class="fa fa-chevron-right"><a href="#">Elements</a></i></li>
                </ul>
              </div>
              <div class="col-md-7">
                <h4 style="color: white;">Subscribe</h4>
                <p style="color: white; font-size: 15px; font-weight: lighter; padding-top: 15px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos accusamus animi aut maiores. Explicabo maxime est quidem eos libero? Sed in, necessitatibus nisi aperiam pariatur velit! Ullam sit exercitationem quaerat.</p>
                <form class="form-block">
                  <div class="row no-gutters">
                    <div class="col-md-10 pr-2">
                      <div class="form-group mx-sm-6 ">
                        <label for="inputemail" class="sr-only">email address</label>
                        <input type="email" class="form-control" id="inputPassword2" placeholder="email address...">
                      </div> 
                    </div>
                    <div class="col-md-2">
                      <button type="submit" class="btn btn-primary" style="background-color: gold;"><i class="fa fa-send" style="color: white;"></i></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>  
      </div>
      <div class="divider1 mt-4" style="border-top: 1px solid white;">
        <div class="container mt-4 pb-3">
          <div class="row">
            <div class="col-md-10">
              <h6 style="color: white;">All Copyright Reserved</h6>
            </div>
            <div class="anchor col-md-2">
              <div class="row ">
                <div class="facebook col-md-3 pr-3 ">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </div>
                <div class="twitter col-md-3 pr-2">
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </div>
                <div class="google col-md-3 pr-2">
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                </div>
                <div class="linkedin col-md-3">
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.js')}}"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
      $('#brand').on('change', function(e){
        console.log(e);
        var brand_id = e.target.value;
        $.get('/json-model?brand_id=' + brand_id,function(data) {
          console.log(data);
          $('#model').empty();
          $('#model').append('<option value="0" disable="true" selected="true">Select your model </option>');

          $.each(data, function(index, typesObj){
            $('#model').append('<option value="'+ typesObj.id +'">'+ typesObj.model +'</option>');
          })
        });
      });
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>
