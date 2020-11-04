<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AWA-Co.,ltd</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  	<div class="py-1 bg-black top">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 1235 2355 98</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">youremail@email.com</span>
					    </div>
					    <!--<div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
						    <p class="mb-0 register-link"><a href="#" class="mr-3">Sign Up</a> <a href="#" class="mr-3" data-toggle="modal" data-target="#SigninForm">Sign In</a></p>
					    </div> -->
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">AWA-Co.,ltd</a>
	      
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="/" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="#japan-section" class="nav-link"><span>Japanese dishes</span></a></li>
	          <li class="nav-item"><a href="#myanmar-section" class="nav-link"><span>Myanmar dishes</span></a></li>
	          <li class="nav-item"><a href="#italian-section" class="nav-link"><span>Italian dishes</span></a></li>
	          
	        </ul>
	      </div>
	    </div>
	  </nav>
	  
	 <main>

    <!--sign in form-->
    <!--<div class="modal fade" id="SigninForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form class="text-center border border-light p-5" action="#" method="">
      <div class="modal-body mx-3">
        <!-- Email -->
          <!--<input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

        <!-- Password -->
         <!-- <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

      </div>
      <div class="d-flex justify-content-around">
        <div>
            <!-- Remember me -->
           <!-- <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
            </div>
        </div>
        <div>
            <!-- Forgot password -->
          <!--  <a href="">Forgot password?</a>
        </div>
    </div>

    <!-- Sign in button -->
   <!-- <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>

    </div>
    </form>

  </div>
</div>
    <!--sign in form-->
<div class="ftco-intro img" id="about-section" style="background-image: url(images/cookingclass.jpg);">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-9 text-center">
						<h2 class="text-default">Cooking Classes</h2>
					</div>
				</div>
			</div>
</div>

<div class="container">
   
        <div class="row justify-content-center pt-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Courses</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
    
    <section class="pt-5 bg-light" id="japan-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="align-self-stretch ftco-animate mx-3">
              <div class="media-body">
              <h3 class="heading my-3">Japanese dishes</h3>
                <p>We provide school meals which are freshly prepared each day with the best ingredients for a nutritious. We always try for the students to be satisfy their school lunch.</p>
              </div> 
            </div>
            <!-- <p class="mb-0"><a href="#" class="btn btn-info px-4 py-3" data-toggle="modal" data-target="#addBookCourse">Booking Course</a></p> -->
            </div>

        <!--lunchbox menu start-->
	
    		<div class="row justify-content-center py-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
              <h4>Available courses</h4>
          </div>
        </div>

        <div class="row">
          @foreach ($courses as $course)
            <div class="col-md-3">
                <!-- Card -->
                <div class="card mb-4">
                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top" src="{{ asset('storage/img/'.$course->image) }}" alt="Card image cap">
                        <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card content-->
                    <div class="card-body">

                      <!--Title-->
                      <h4 class="card-title">{{ $course->course }}</h4>
                      <!--Text-->
                      <p class="card-text">{{ $course->description }}</p>
                      <p class="card-text" style="color: blue">{{ $course->price }} - MMK </p>
                      <a href="#" class="btn btn-info px-4 py-3" data-toggle="modal" data-target="#addBookCourse">Booking Course</a>

                    </div>
                </div>
                <!-- Card -->
            </div>
          @endforeach
          {!! $courses->links() !!}
        </div>
      </div>
    <!--lunchbox menu end-->
	</section>

 <section class="pt-5" id="myanmar-section">
 <div class="container">
    <div class="row justify-content-center">
            <div class="align-self-stretch ftco-animate mx-3">
              <div class="media-body">
              <h3 class="heading my-3">Myanmar Dishes</h3>
                <p>We can help you design and deliver a successful meal program with a focus on healthy nutrition to revitalize your staff. Your customized meal plan will consist of diverse, 
                restaurant-quality menus tailored to your budget, dietary restrictions, and unique needs.</p>
              </div> 
            </div>
            <p class="mb-0"><a href="#" class="btn btn-info px-4 py-3" data-toggle="modal" data-target="#addBookCourse">Booking Course</a></p>
	</div>

    <!--lunchbox menu start-->
	
    <div class="row justify-content-center py-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                <h4>Available Courses</h4>
                </div>
            </div>

        <div class="row">
            <div class="col-md-3">
                <!-- Card -->
                <div class="card mb-4">

                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top" src="images/italian dishes/Ahijo.jpg" alt="Card image cap">
                        <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                    <!--Title-->
                    <h4 class="card-title">Ahijo</h4>
                    <!--Text-->
                    <p class="card-text" style="color: blue">5000 - MMK </p>
                    </div>
                </div>
                <!-- Card -->
            </div>
        </div>
        </div>
    <!--lunchbox menu end-->
</section>


<section class="pt-5 bg-light" id="italian-section">
<div class="container">
    <div class="row justify-content-center">
            <div class="align-self-stretch ftco-animate mx-3">
              <div class="media-body">
                <h3 class="heading my-3">Italian Dishes</h3>
                <p>Let us provide the food for your next event. We promise your guests or clients will be delighted! We cater for corporate events, weddings, 
                birthdays, charity events  and all sorts of special occasions.</p>
              </div> 
            </div>
            <p class="mb-0"><a href="#" class="btn btn-info px-4 py-3" data-toggle="modal" data-target="#addBookCourse">Booking Course</a></p>
	</div>

    <!--lunchbox menu start-->
	
    <div class="row justify-content-center py-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h4>Available Courses</h4>
                </div>
            </div>

        <div class="row">
            <div class="col-md-3">
                <!-- Card -->
                <div class="card mb-4">

                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top" src="images/italian dishes/Ahijo.jpg" alt="Card image cap">
                        <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                    <!--Title-->
                    <h4 class="card-title">Ahijo</h4>
                    <!--Text-->
                    <p class="card-text" style="color: blue">5000 - MMK </p>
                    </div>
                </div>
                <!-- Card -->
            </div>
        </div>
    </div>
    <!--lunchbox menu end-->

    <!--model-->

    <div class="modal fade px-5 py-5" id="addBookCourse" aria-hidden="true">

            <div class="modal-header modal-dialog d-flex p-2">
                      <h3 class="font-weight-bold text-white">Thank you for your register</h3>
                        <button type="button" class="btn btn-warning px-3 float-right">
                              <span aria-hidden="true">&times;</span>
                        </button>
            </div>

            <div class="row block-12 px-5">
                <div class="col-md-7 order-last">
                    <form action="{{ route('users.booking') }}" method="POST" class="bg-light p-4">

                      <!-- Success message -->
                      @if(Session::has('success'))
                      <div class="alert alert-success">
                      {{Session::get('success')}}
                      </div>
                      @endif 

                      <h3 class="text-center pb-2">Register Form</h3>

                      @csrf
                      <div class="form-group">
                        <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="user_name" id="user_name" placeholder="Full Name">
                        <!-- Error -->
                          @if ($errors->has('user_name'))
                          <div class="error text-danger">
                              {{ $errors->first('user_name') }}
                          </div>
                          @endif
                      </div>

                      <div class="form-group">
                          <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email" placeholder="Email">
                          @if ($errors->has('email'))
                          <div class="error text-danger">
                              {{ $errors->first('email') }}
                          </div>
                          @endif
                      </div>

                      <div class="form-group">
                        <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone" placeholder="Contact Number">
                          @if ($errors->has('phone'))
                          <div class="error text-danger">
                              {{ $errors->first('phone') }}
                          </div>
                          @endif
                      </div>


                      <div class="form-group">
                          <textarea class="form-control {{ $errors->has('subject') ? 'error' : '' }}" rows="2" name="address" id="address" placeholder="Address to deliever"></textarea>
                          @if ($errors->has('address'))
                          <div class="error text-danger">
                              {{ $errors->first('address') }}
                          </div>
                          @endif
                      </div>


                      <div class="form-group">
                          <label for="exampleFormControlSelect1">Numbers student</label>
                            <select class="form-control" name="qty">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                            </select>
                          @if ($errors->has('qty'))
                          <div class="error text-danger">
                              {{ $errors->first('qty') }}
                          </div>
                          @endif
                      </div>

                      <div class="form-group">
                          <input type="text" name="date" class="form-control" id="datetimepicker" placeholder="Date"/> 
                          @if ($errors->has('date'))
                              <div class="error text-danger">
                          {{ $errors->first('date') }}
                          </div>
                          @endif
                      </div>

                      
                      <!--course id -->

                      <input type="text" class="form-control mb-4" name="course_id" value ="{{ $course->id }}" hidden/>


                      <div class="form-group">
                          <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="messages" id="messages"
                          cols="30" rows="7" placeholder="Message"></textarea>
                          @if ($errors->has('messages'))
                          <div class="error text-danger">
                             {{ $errors->first('messages') }}
                          </div>
                          @endif
                      </div>

                      <!-- Send button -->
                      <button type="submit" class="btn btn-primary py-3 px-5">Register</button>
                      </form>
                </div>

              <div class="col-md-5 d-flex">
                <div class="row d-flex">
                  
                  <div class="col-md-12 ftco-animate">
                    <div class="box p-2 px-3 bg-light d-flex">
                      <div>
                        <p class="text-justified">You can order by Mail: <a class="text-info">awa.yoko.hayami@gmail.com</a> or by Contact Number: <a class="text-info">09792655994</a> or by<a class="text-info"> order form</a></p>
                        <p  class="text-danger">If you want to order with side_dish or if you have food allergy, please write it in message box.Thanks.</p>
                      </div>
                    </div>
                  </div>


                  <div class="col-md-12 ftco-animate">
                    <div class="box p-2 px-3 bg-light d-flex">
                      <div class="icon mr-3">
                        <span class="icon-phone2"></span>
                      </div>
                      <div>
                        <h3 class="mb-3">Office Hour</h3>
                        <p><a href="#">Mon to Fri- 9:00 - 5:00</a></p>
                        <p><a href="#">Sat - 9: 00 - 12:00</a></p>
                      </div>
                    </div>
                  </div>

              </div>
            </div>
            </div>
            <!--endmodel-->


  
    <!--<div class="modal fade" id="addBookCourse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                        <p class="text-justified">You can register by Mail: <a class="text-info">awa.yoko.hayami@gmail.com</a> or by Contact Number: <a class="text-info">09792655994</a> or by<a class="text-info"> order form</a></p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                  <div class="modal-body">
                <!-- Default form contact --
                  <form class="text-center border border-light p-5" action="{{ route('users.booking') }}" method="POST">
                    @csrf
                        <p class="h4 mb-4">Booking Form</p>
                    <!-- Name --
                        <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="name" name="user_name">
                    <!-- Email --
                        <input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="email" name="email">
                    <!-- ph no --
                        <input type="text" class="form-control mb-4" placeholder="Contact Number" name="phone">
                    <!-- courses --
                        <div class="form-group">
                            <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="4" placeholder="address" name="address"></textarea>
                        </div>
                    <!-- no of students --
                        <label>Numbers of people</label>
                          <select class="browser-default custom-select mb-4" name="qty">
                            <option value="" disabled>Choose option</option>
                            <option value="1" selected>1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                          </select>
                    <!-- date --
                          <input type="text" class="form-control mb-4" placeholder="Date" name="date">
                          <input type="text" class="form-control mb-4" name="course_id" value ="{{ $course->id }}" hidden/>
                    <!-- Message --
                      <div class="form-group">
                          <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="4" placeholder="Message" name="messages"></textarea>
                      </div>
                    <!-- Send button --
                      <button class="btn btn-info btn-block" type="submit">Send</button>
                  </form>
            <!-- Default form contact --
            </div>
            <!--endmodel-->
    </section>

</div>


</main>
	
    <footer class=" mt-3 py-2 bg-dark"> 
         <div>
            <p class="col-md-12 text-center">Copyright &copy;<script>document.write(new Date().getFullYear());</script> </p>
         </div>
    </footer>
    

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>