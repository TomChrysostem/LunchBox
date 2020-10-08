@extends('users.layout')
 
@section('content')

	  
	<section class="hero-wrap js-fullheight" style="background-image: url('images/wall2.jpg');" data-section="home" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
                <div class="col-md-5 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">“Good food is Good mood”</h1>
                </div>
            </div>
        </div>
  </section>

		
	<section class="pt-5 bg-light" id="services-section">
			<div class="container">
				<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Lunchbox Services</h2>
            <p>We are always happy to offer the customers with our wonderful food</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <img src="images/school-lunch.jpg" class="img-fluid rounded-circle" alt="Colorlib Template">
              <div class="media-body">
                <h3 class="heading my-3">School Lunch</h3>
                <p>We provide school meals which are freshly prepared each day with the best ingredients for a nutritious and satisfying school lunch.</p>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block mt-lg-5 pt-lg-4">
              <img src="images/staff lunch.jpg" class="img-fluid rounded-circle" alt="Colorlib Template">
              <div class="media-body">
                <h3 class="heading my-3">Saff Lunch</h3>
                <p>We can help you design and deliver a successful meal program with a focus on healthy nutrition to revitalize your staff. Your customized meal plan will consist of diverse, 
                restaurant-quality menus tailored to your budget, dietary restrictions, and unique needs.</p>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <img src="images/event food.jpg" class="img-fluid rounded-circle" alt="Colorlib Template">
              <div class="media-body">
                <h3 class="heading my-3">Event & Party Food</h3>
                <p>Let us provide the food for your next event. We promise your guests or clients will be delighted! We cater for corporate events, weddings, 
                birthdays, charity events  and all sorts of special occasions.</p>
              </div>
            </div>      
          </div>

			</div>
        <div class="row justify-content-center py-4">
          <p class="mb-3 mx-3"><a href="/service" class="btn btn-info px-4 py-3">Detail Information</a></p>
          <p class="mb-3 mx-3"><a href="#" class="btn btn-success px-4 py-3" data-toggle="modal" data-target="#Orderlunchbox">Order Lunchbox</a></p>
        </div>

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
                    <form class="text-center border border-light p-3" action="#!" method="POST">
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
                    <input type="text" name="quantity" class="form-control mb-4" placeholder="Numbers of orders">
              
                    <!-- Message -->
                    <div class="form-group">
                        <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="4" placeholder="Message"></textarea>
                    </div>
                    <!-- Send button -->
                    <button class="btn btn-success btn-block" type="submit">Order</button>
                    </form>
            <!-- Default form contact -->
            </div>
            <!--endmodel-->
      
	</section>



  <section class="ftco-intro img" id="about-section" style="background-image: url(images/wall3.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12 text-center">
						<h2>Cooking Class</h2>
						<h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Cook together, stay together</h1>
						<p class="mb-0"><a href="#" class="btn btn-success px-4 py-3" data-toggle="modal" data-target="#addBookCourse">Booking Course</a></p>
					</div>
				</div>
			</div>

      <!--model-->
  
           
    <!--model-->
  
    <div class="modal fade" id="addBookCourse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header bg-info">
                        <p class="text-justified">You can register by Mail: <a class="text-info">awa.yoko.hayami@gmail.com</a> or by Contact Number: <a class="text-info">09792655994</a> or by<a class="text-info"> order form</a></p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                  <div class="modal-body">
                <!-- Default form contact -->
                    <form class="text-center border border-light p-5" action="#!" method="POST">
                      <p class="h4 mb-4">Register Form</p>
                    <!-- Name -->
                        <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Name">
                    <!-- Email -->
                        <input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail">
                    <!-- ph no -->
                        <input type="text" class="form-control mb-4" placeholder="Contact Number">
                    <!-- courses -->
                        <label>Course</label>
                          <select class="browser-default custom-select mb-4">
                            <option value="" disabled>Choose option</option>
                            <option value="1" selected>Japanese dish</option>
                            <option value="2">Myanmar dish</option>
                            <option value="3">Italian dish</option>
                          </select>
                    <!-- no of students -->
                        <label>Numbers of people</label>
                          <select class="browser-default custom-select mb-4">
                            <option value="" disabled>Choose option</option>
                            <option value="1" selected>1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                          </select>
                    <!-- date -->
                          <input type="text" class="form-control mb-4" placeholder="Date">
                    <!-- Message -->
                    <div class="form-group">
                        <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="4" placeholder="Message"></textarea>
                    </div>
                    <!-- Send button -->
                    <button class="btn btn-info btn-block" type="submit">Send</button>
                    </form>
            <!-- Default form contact -->
            </div>
            <!--endmodel-->

		</section>



		
    <section class="ftco-section ftco-services-2 bg-light" id="workflow-section">
			<div class="container">
				<div class="row">
          <div class="col-md-4 heading-section ftco-animate">
          <h2 class="mb-5">Class Types</h2>
            <div class="media block-6 services text-center d-block pt-md-5 mt-md-5">
              <img src="images/one-class.jpg" class="img-fluid" alt="Colorlib Template">
              <div class="media-body p-md-3">
                <h3 class="heading mb-3">Individual Class</h3>
                <p class="mb-5">All Chefparade cooking classes are lead by the best chefs who love what they do and love to teach you that​.</p>
                <hr>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate mt-lg-5">
            <div class="media block-6 services text-center d-block mt-lg-5 pt-md-5 pt-lg-4">
              <img src="images/group-class.jpg" class="img-fluid" alt="Colorlib Template">
              <div class="media-body p-md-3">
                <h3 class="heading mb-3">Group Class</h3>
                <p class="mb-5">Private Group Cooking Classes offer a unique experience full of fun, laughter, good food and good wine. Book for one of the private group cooking classes.</p>
                <hr>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <img src="images/cookingtraining.jpg" class="img-fluid" alt="Colorlib Template">
              <div class="media-body p-md-3">
                <h3 class="heading mb-3">Cheft-training Class</h3>
                <p class="mb-5">A student interested in culinary arts can take a broad or narrow approach, learning about all types of cooking or a specific area, such as baking or regional cuisine. Continue reading to learn about education and career options in this field.</p>
                <hr>
              </div>
            </div>      
          </div>
        </div>
			</div>

      <div class="row justify-content-center">
          <p class="mx-3"><a href="/course" class="btn btn-info px-4 py-3">Detail Information</a></p>
          <p class="mx-3"><a href="#" class="btn btn-success px-4 py-3" data-toggle="modal" data-target="#addBookCourse">Book Course</a></p>
      </div>
    </section>
    
 <!--about us-->
		<section class="pt-5" id="agent-section">
    	<div class="container">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-2">About us</h2>
          </div>
         
          <div class="row mt-5">
            <div class="col-md-6 mt-5">
              <h3 class="h3-responsive font-weight-bold">About our school</h3>
                <p class="text-xl-left">
                    Whether you’re a kitchen novice or you already know some of the tricks of the trade, you’ll have a great time 
                    at Food at 52. We offer hands-on tuition in an atmospheric and professional cookery school in the heart 
                    of Clerkenwell, central London. Our classes are a fun chance to catch up with old friends and meet new ones 
                    whilst learning to cook impressive dishes with delicious recipes you can cook again and again at home. 
                </p>
            </div>
                  
            <div class="col-md-6 mt-5">
                  <img class="d-block w-100" src="images/cooking.jpg" alt="cooking">
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6 mt-5">
                <img src="images/cook.jpg" alt="cook" class="d-block w-100">
            </div>
                  
            <div class="col-md-6 mt-5">
                <h3 class="h3-responsive font-weight-bold">Teacher and Food writer</h3>
                <p class="text-xl-left">
                My name is John Benbow and I have been cooking ever since I remember. 
                For me, the essential ingredient for a good meal is the passion and conviction the food has been made with,
                 be it a dinner party for 10 or a quick supper for the family.</p>
                 <p class="text-xl-left"> After many years of running a film set building company I left behind the dust of the workshops 
                 for the fragrant steam of the kitchen. Friends had been asking for a culinary crash course so in 
                 2007 I launched Food at 52 to pass on my knowledge and enthusiasm to others.</p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6 mt-5">
              <h3 class="h3-responsive font-weight-bold">Our school location</h3>
              <p class="text-xl-left">
                    Being on Central Street in Clerkenwell means we’re located as the street name indicates: 
                    in the heart of central London. As a result, we are very easy to access by public transport;
                     surrounded by bus routes, ten minutes from Old Street, Barbican and Angel Underground stations 
                    and near King's Cross, Farringdon and Liverpool Street rail stations. 
                    There is short and longer term car parking near by and bicycle rails close too. 
                    See below for a map for more detail.
                </p>
            </div>
              <!--Google map-->
              <div class="col-md-6 mt-5 map-container">
                <!--Google map-->
                     
                            <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                                 style="border:0" allowfullscreen></iframe>
                   
                <!--Google Maps-->
              </div>
              <!--Google Maps-->
            
        </div>
           <!--about us-->
    	</div>
    </section>
<!--contact-->
    <section class="pt-5 contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-2">Contact Us</h2>
            <p>Email us with any questions or call us with the following contact Number. We would be happy to answer your questions.</p>
          </div>
        </div>

        <div class="row block-9">
          <div class="col-md-7 order-md-last d-flex ftco-animate">
            <form action="#" class="bg-light p-4 p-md-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-5 d-flex">
          	<div class="row d-flex contact-info mb-5">
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-map-signs"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Address</h3>
				            <p>198 West 21th Street, Suite 721 New York NY 10016</p>
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
    </section>
	
@endsection