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
	          <li class="nav-item"><a href="/" class="nav-link"><span>Back to Homepage</span></a></li>
	        </ul>
	      </div>
	    </div>
    </nav>
    
<main>
<div class="ftco-intro img" id="about-section" style="background-image: url(images/order.jpg);">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-9 text-center">
            <h2>Thank you for your orders</h2>
					</div>
				</div>
			</div>
</div>


<div class="container">
        <div class="row justify-content-center mb-3 py-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2>Order from here</h2>
            <h5 class="text-justified">You can order by E-mail or by Contact Number or by order form</h5>
          </div>
        </div>

        <div class="row block-12">
          <div class="col-md-7 order-md-last d-flex ftco-animate">
            
            <form action="{{ route('orders.store') }}" method="POST" class="bg-light p-4">
            <!-- Success message -->
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif

            <h3 class="text-center pb-2">Order Form</h3>

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
                  <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone" placeholder="Contact Number">
                    @if ($errors->has('phone'))
                    <div class="error text-danger">
                        {{ $errors->first('phone') }}
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
                    <textarea class="form-control {{ $errors->has('subject') ? 'error' : '' }}" rows="2" name="address" id="address" placeholder="Address to deliever"></textarea>
                      @if ($errors->has('address'))
                      <div class="error text-danger">
                          {{ $errors->first('address') }}
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

                <div class="form-group">               
                    <input type="text" name="qty" class="form-control mb-4" placeholder="Numbers of orders">
                      @if ($errors->has('qty'))
                      <div class="error text-danger">
                          {{ $errors->first('qty') }}
                      </div>
                      @endif
                </div>

                <!-- order item -->
                <div class="form-group">
                    <input type="text" name="order_item_id" class="form-control" placeholder="Order item" value="">
                </div>

                    <!-- status -->
                <div class="form-group">
                    <input type="text" name="status" class="form-control" placeholder="status" value="">
                </div>

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
                <button type="submit" class="btn btn-primary py-3 px-5">Order</button>
              
            </form>
          
          </div>

          <div class="col-md-5 d-flex">
          	<div class="row d-flex contact-info mb-5">
              
              <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="text-danger">
                    <p>If you want to order with side_dish or if you have food allergy, please write it in message box.Thanks.</p>
			            </div>
			          </div>
              </div>


		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-phone2"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Contact Number</h3>
                    <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
                    <p><a href="#">Mon to Fri- 9:00 - 5:00</a></p>
                    <p><a href="#">Sat - 9: 00 - 12:00</a></p>
			            </div>
			          </div>
              </div>
              
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-paper-plane"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Email Address</h3>
				            <p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
			            </div>
			          </div>
		          </div>
          </div>
        </div>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" integrity="sha256-5YmaxAwMjIpMrVlK84Y/+NjCpKnFYa8bWWBbUHSBGfU=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker').datepicker();
    });
</script>
    
  </body>
</html>