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
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
						    <p class="mb-0 register-link"><a href="#" class="mr-3">Sign Up</a> <a href="#" class="mr-3" data-toggle="modal" data-target="#SigninForm">Sign In</a></p>
					    </div>
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
	          <li class="nav-item"><a href="#school-section" class="nav-link"><span>School Lunch</span></a></li>
	          <li class="nav-item"><a href="#staff-section" class="nav-link"><span>Lunchbox</span></a></li>
	          <li class="nav-item"><a href="#event-section" class="nav-link"><span>Event food</span></a></li>
            <li class="nav-item"><a href="#orderpay-section" class="nav-link"><span>Ordering and paying</span></a></li>
	          
	        </ul>
	      </div>
	    </div>
	  </nav>
	  
	 <main>

    <!--sign in form-->
    <div class="modal fade" id="SigninForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
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
          <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

        <!-- Password -->
          <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

      </div>
      <div class="d-flex justify-content-around">
        <div>
            <!-- Remember me -->
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
            </div>
        </div>
        <div>
            <!-- Forgot password -->
            <a href="">Forgot password?</a>
        </div>
    </div>

    <!-- Sign in button -->
    <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>

    </div>
    </form>

  </div>
</div>
    <!--sign in form-->
<div class="ftco-intro img" id="about-section" style="background-image: url(images/lunchbox1.jpg);">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-9 text-center">
						<h2>Lunchbox Services</h2>
					</div>
				</div>
			</div>
</div>

<div class="container">
   
        <div class="row justify-content-center pt-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Our Menus</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
    
    <section class="pt-5 bg-light" id="school-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="align-self-stretch ftco-animate mx-3">
              <div class="media-body">
              <h3 class="heading my-3">School Lunch</h3>
                <p>We provide school meals which are freshly prepared each day with the best ingredients for a nutritious. We always try for the students to be satisfy their school lunch.</p>
              </div> 
            </div>
            </div>

        <!--lunchbox menu start-->
	
    		<div class="row justify-content-center py-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h3>School Lunchbox Menus</h3>
                </div>
            </div>

        <div class="row">
        @foreach ($menus as $menu)
            <div class="col-md-3">
                <!-- Card -->
                <div class="card mb-4">

                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top" src="{{ asset('storage/img/'.$menu->image) }}" alt="Card image cap">
                        <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                    <!--Title-->
                    <h4 class="card-title">{{ $menu->menu }}</h4>
                    <!--Text-->
                    <p class="card-text" style="color: blue">{{ $menu->price }}</p>
                    <p class="mb-3 mx-3"><a href="#" class="btn btn-success px-4 py-3" data-toggle="modal" data-target="#Orderlunchbox">Order Lunchbox</a></p>
                    </div>
                </div>
                <!-- Card -->
            </div>
          @endforeach
        {!! $menus->links() !!}
        </div>
        </div>
    <!--lunchbox menu end-->
	</section>

 <section class="pt-5" id="staff-section">
 <div class="container">
    <div class="row justify-content-center">
            <div class="align-self-stretch ftco-animate mx-3">
              <div class="media-body">
              <h3 class="heading my-3">Saff Lunch</h3>
                <p>We can help you design and deliver a successful meal program with a focus on healthy nutrition to revitalize your staff. Your customized meal plan will consist of diverse, 
                restaurant-quality menus tailored to your budget, dietary restrictions, and unique needs.</p>
              </div> 
            </div>
            <p class="mb-3 mx-3"><a href="#" class="btn btn-success px-4 py-3" data-toggle="modal" data-target="#Orderlunchbox">Order Lunchbox</a></p>
	</div>

    <!--lunchbox menu start-->
	
    <div class="row justify-content-center py-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h3>School Lunchbox Menus</h3>
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


<section class="pt-5 bg-light" id="event-section">
<div class="container">
    <div class="row justify-content-center">
            <div class="align-self-stretch ftco-animate mx-3">
              <div class="media-body">
                <h3 class="heading my-3">Event & Party Food</h3>
                <p>Let us provide the food for your next event. We promise your guests or clients will be delighted! We cater for corporate events, weddings, 
                birthdays, charity events  and all sorts of special occasions.</p>
              </div> 
            </div>
            <p class="mb-3 mx-3"><a href="#" class="btn btn-success px-4 py-3" data-toggle="modal" data-target="#Orderlunchbox">Order Lunchbox</a></p>
	</div>

    <!--lunchbox menu start-->
	
    <div class="row justify-content-center py-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h3>School Lunchbox Menus</h3>
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
    
     <div class="modal fade" id="Orderlunchbox" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <p class="text-justified">You can order by Mail: <a class="text-info">awa.yoko.hayami@gmail.com</a> or by Contact Number: <a class="text-info">09792655994</a> or by<a class="text-info"> order form</a></p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                  <div class="modal-body">
                <!-- Default form contact -->
                    <form class="text-center border border-light p-3" action="{{route('users.order')}}" method="POST">
                    @csrf
                      <p class="h4 mb-4">Order Form</p>
                    <!-- Name -->
                        <input type="text" name="user_name" class="form-control mb-4" placeholder="Name">
                    <!-- Email -->
                        <input type="email" name="email" class="form-control mb-4" placeholder="E-mail">
                    <!-- phone -->
                    <input type="text" name="phone" class="form-control mb-4" placeholder="Contact number">
                     <!-- address -->
                     <div class="form-group">
                        <textarea class="form-control rounded-0" name="address" rows="3" placeholder="Address"></textarea>
                    </div>
                     <!-- date -->
                     <input type="text" name="date" class="form-control mb-4" placeholder="Date">

                      <!-- no of orders -->
                    <input type="text" name="qty" class="form-control mb-4" placeholder="Numbers of orders">

                    <input type="text" name="menu_id" class="form-control mb-4" value="{{ $menu->id }}" hidden>
                    <input type="text" name="status" class="form-control mb-4" value="1" hidden>
                    <!-- Message -->
                    <div class="form-group">
                        <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="4" placeholder="Message" name="messages"></textarea>
                    </div>
                    <!-- Send button -->
                    <button class="btn btn-success btn-block" type="submit">Order</button>
                    </form>
            <!-- Default form contact -->
            </div>
            <!--endmodel-->
    </section>

    <section class="pt-5 bg-light mt-3" id="orderpay-section">
        <div class="container px-5 pb-5">
          <h3 class="heading-section text-center ftco-animate"><b>Information for ordering and paying</b></h3>
          <h4>1.How to order</h4>
          <p>You can order by Mail (<b class="text-info">awa.yoko.hayami@gmail.com</b>) or by Contact Number (<b class="text-info">09792655994</b>) or by order form</p>
          <p class="mb-4">***Please let us know your name, company name/organization name, contact number, address to deliver if you are the customer for the first time</p>
           <h4>2.Order term</h4>
           <h5>Thilawar Industry Zone</h5>
           <p>Lunch: If the customer orders the day before ordered date, we will deliver to the address. 
           If the customer orders on that day(ordered date), the driver of the customer needs to come and take the orders.</p>
          <h5>Yangon area</h5>
          <p>- Lunch: We deliver one day advance orders as well as the order on that day by 9:00 a.m. 
          If the driver comes and takes the orders, we accept the orders at or after 9 : 00 p.m.</p>
          <p>- Dinner: We deliver one day advance orders as well as the order on that day by 12: 00 p.m. 
          If the driver comes and takes the orders, we accept the orders by 3 : 00 p.m.</p>
          <p>- If the customer orders for meeting lunch(many people) by 3 : 00 p.m in one day advance, 
          we will deliver in time. </p>
          <p>- If the customer orders in one day advance, we accept lunch and dinner order even on Saturday. 
          Sunday and National holidays do not accept the orders.</p>
          <p class="mb-4">- We also give services for party, side dishes, drinking party. Please feel free to contact us.</p>

          <h4>3.Price</h4>
          <p>- Lunch : Daily Special Lunch (7,000 MMK) Dinner: Daily Lunch Set
          (5,000 MMK- ***without rice)/(7,000 MMK *** with rice)</p>
          <p class="mb-4">- We can adjust the price and setting according to the customers’ 
          desire for Meeting lunchbox, Drinking party food, etc.</p>

          <p>- When the customer has allergy, please let us know in advance.</p>
           
           <h4>4.Numbers of orders</h4>
           <p>- We accept from only one order.</p>
           <p class="mb-4">- We are happy to accept (1) order even from Thilawar Industrial Zone as experiential.</p>

           <h4>5.Delivery fee</h4>
           <h5>Thilawar Industrial Zone</h5>

           <p>-	500 MMK per 1- lunchbox(1-9 Daily Special Lunches -> 7500 MMK, over 10 orders - > free delivery fee -> 7000 MMK per 1- lunchbox )</p>
           <h5>Yangon area</h5>
           <p>- Over 3 lunchboxes, delivery fee free. 1 or 2 orders, delivery fee will be 3000 MMK per one. (Therefore, for one order, it will be 10, 000 MMK / one, 
           for two orders, it will be 8,500 MMK / one, over 3 orders, delivery fee is free and it will be 7000 MMK / one.)</p>
           <p>- over 3 orders, delivery fee is free and it will be 7000 MMK / one.)</p>
           <p>- Within Yangon city, if one order for Lunch, Dinner is over 20,000 MMK, delivery fee will be free.
            But only the order is less than 20,000 MMK, delivery fee will be 3000 MMK.</p>
            <p>- Pay on delivery</p>
            <p>- The boxes of the lunch and food will be collected in the afternoon of that day or the next day.</p>

        </div>
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