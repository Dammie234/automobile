
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automobile - vehicle listing</title>
     <!-- font awesome -->
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}"> 
 <!-- my style -->
 <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body style="background-color: rgb(249,249,249);">
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
            <li class="nav-item ">
              <a class="nav-link" href="{{route('index')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
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
    <section class="info1" style="background-image: url(../assets/images/vehicles/luxury-car.jpg); padding: 150px 0px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <h1 class="heading text-white">Vehicle Listing</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row mt-5 mb-4">
            <div class="col-md-8 mt-5">
                <div class="row mb-4">
                    <div class="col-md-12">
                        <div class="float-left">
                            <h5>Showing 1-15 of 69 Listings</h5>
                        </div>
                        <div class="float-right">
                           <div class="row">
                             <div class="container">
                               <div class="col-md-6">
                                  <div class="dropdown">
                                    <button class="drop-btn">Default Order</button>
                                    <div class="dropdown-content">
                                      <a href="">Default order</a>
                                      <a href="">Price high to Low</a>
                                      <a href="">Price Low to High</a>
                                      <a href="">Newest Properties</a>
                                    </div>
                                  </div>
                               </div>
                             </div>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                   
                    @foreach($vehicles as $vehicle)
                        <div class="col-md-6 col-sm-6 col-xs-12 col mb-4 feature">
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
            </div>
            <div class="col-md-4 col mt-5">
              <section class="search-cars" style="background-color:white ;">
                <h4 style="margin-left: 20px; padding-top: 30px;">Search Cars</h4>
                <div class="container">
                  <div class="row">
                    <div class="col-md-12 mt-3 mb-3">
                      <select name="" id="" class="form-control">
                        <option value="">Location</option>
                        <option value="">Lagos</option>
                        <option value="">Abuja</option>
                        <option value="">Ibadan</option>
                        <option value="">Kano</option>
                      </select>
                    </div>  
                  </div>
                  <div class="row">
                    <div class="col-md-12 mt-3 mb-3">
                        <select name="brand" id="brand" class="form-control @error('brand') is-invalid @enderror">
                            <option value="">Select your brand</option>
                            @foreach($brands as $brand)
                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                            @endforeach()
                        </select>
                   </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 mt-3 mb-3">
                        <select name="make" id="model" class="form-control @error('model') is-invalid @enderror">
                            <option value="0" disable="true" selected="true"> Select Model </option>
                        </select>
                   </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12 mt-3 mb-5">
                      <select name="" id="" class="form-control">
                        <option value="">Year</option>
                        <option value="">2021</option>
                        <option value="">2020</option>
                        <option value="">2019</option>
                        <option value="">2018</option>
                      </select>
                   </div>
                  </div>
                </div>
                <div class="category" style="padding-left: 30px; border-top: 1px solid black; padding-bottom: 20px;">
                  <h5 style="padding-bottom: 20px; padding-top: 20px;">Category</h5>
                 <p><a href="">Luxury</a> (45)</p> 
                 <p><a href="">Pickup Truck</a> (21)</p>
                 <p><a href="">Sports Car</a> (19)</p>
                 <p><a href="">Automakers</a> (22)</p>
                 <p><a href="">Wagon</a> (9)</p>
                </div>
                <div class="question pl-4" style="border-top: 1px solid black; padding-bottom: 20px;">
                  <h5 style="padding-top: 20px; padding-bottom: 20px;">Get a Question?</h5>
                  <p><i class="fa fa-map-marker" style="color:  #ffb400;"></i> 20/F Green Road, Dhanmondi</p>
                  <p><i class="fa fa-envelope" style="color:  #ffb400;"></i> info@themevessel.com</p>
                  <p><i class="fa fa-phone" style="color:#ffb400 ;"></i> +2349078071290</p>
                  <!-- start of liks under get aquestion -->
                  <div class="question row">
                    <div class="col-md-8">
                      <div class="quest row no-gutters">
                        <div class="col-md-2">
                          <i class="facebook fa fa-facebook"></i>
                        </div>
                        <div class="col-md-2">
                          <i class="linkedin fa fa-linkedin"></i>
                        </div>
                        <div class="col-md-2">
                          <i class="google fa fa-google-plus"></i>
                        </div>
                        <div class="col-md-2">
                          <i class="twitter fa fa-twitter"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="seperator row ">
                    <div class="facebook col-md-2 pr-3 ">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </div>
                    <div class="twitter col-md-2 pr-2">
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                    <div class="google col-md-2 pr-2">
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                    <div class="linkedin col-md-2">
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div> -->
                </div>
              </section>
              
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


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.js')}}"></script> 
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
</body>
</html>