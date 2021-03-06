@extends('users.navbar')
	@section('content')
		<div class="ftco-intro img" style="background-image: url('{{asset('images/cookingclass.jpg')}}');">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-9 text-center">
						<h2>Cooking Class</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<section>
				<div class="row block-12">
					<div class="col-md-5 d-flex">
						<div class="row d-flex contact-info mb-5 mt-3">
							<div class="col-md-12 ftco-animate">
								<div class="box p-4 bg-light d-flex">
									<div class="card">
										<img class="card card-img img-responsive" src="{{ asset('storage/img/'.$course->image) }}" alt="Card image"/>
										<div class="text-center d-flex align-items-center">
											<h4 class="card-title pt-2"><strong>{{$course->course}}</strong></h4>
											<!--<h5>Price: {{$course->price}} MMK </h5>-->
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 ftco-animate">
								<div class="box p-2 px-3 bg-light d-flex">
									<div>
										<p class="text-justified">If you want to make course reservation, please fill in the reservation form and press reserve button.</p>
									</div>
								</div>
							</div>
							<div class="col-md-12 ftco-animate">
								<div class="box p-2 px-3 bg-light d-flex">
									<div>
										<p  class="text-danger">＊＊＊If you have food allergy, please fill the name of the food which causes allergy in the message box.</p>
									</div>
								</div>
							</div>
							<div class="col-md-12 ftco-animate">
								<div class="box p-2 px-3 bg-light d-flex">
									<div class="icon mr-3">
										<span class="icon-phone2"></span>
									</div>
									<div>
										<h3 class="mb-3">Business Hour：</h3>
										<p><a href="#">Mon～Fri- 9:00 a.m - 5:00 p.m</a></p>
										<p><a href="#">Sat - 9: 00 a.m - 12:00 p.m</a></p>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="col-md-7 order-last mt-3">
						<form action="{{ route('user.booking') }}" method="POST" class="bg-light p-4">
							@if(Session::has('success'))
								<div class="alert alert-success">
									{{Session::get('success')}}
								</div>
							@endif
							<h3 class="text-center pb-2">Reservation Form</h3>
							@csrf
							<div class="form-group">
								<input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="user_name" id="user_name" placeholder="氏名 / Name">
								@if ($errors->has('user_name'))
								<div class="error text-danger">
									{{ $errors->first('user_name') }}
								</div>
								@endif
							</div>
							<div class="form-group">
								<input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email" placeholder="メール / E-mail">
								@if ($errors->has('email'))
								<div class="error text-danger">
									{{ $errors->first('email') }}
								</div>
								@endif
							</div>
							<div class="form-group">
								<input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone" placeholder="連絡先番号 / Phone Number">
								@if ($errors->has('phone'))
								<div class="error text-danger">
									{{ $errors->first('phone') }}
								</div>
								@endif
							</div>
							<div class="form-group">
								<textarea class="form-control {{ $errors->has('subject') ? 'error' : '' }}" rows="2" name="address" id="address" placeholder="住所 / Address"></textarea>
									@if ($errors->has('address'))
									<div class="error text-danger">
										{{ $errors->first('address') }}
									</div>
									@endif
							</div>
							<div class="form-group">
								<input type="date" name="date" class="form-control" placeholder="レッスン受けたい日にち / Desired Date"/> 
									@if ($errors->has('date'))
									<div class="error text-danger">
										{{ $errors->first('date') }}
									</div>
									@endif
							</div>
							<div class="form-group">
								<label>Number of people</label>
								<select class="form-control mb-4 custom-select mb-4" name="qty" id="qty">
									<option value="" disabled>Please select one item</option>
									<option value="1" selected>1</option>
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
								<input type="text" class="form-control mb-4" value="{{ $course->id }}" name="course_id" hidden>  
							</div>
							<div class="form-group">
								<textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="messages" id="messages"
								cols="30" rows="7" placeholder="Your message to your teacher"></textarea>
									@if ($errors->has('messages'))
									<div class="error text-danger">
										{{ $errors->first('messages') }}
									</div>
									@endif
							</div>

							<button type="submit" class="btn btn-primary py-3 px-5">Reserve</button>
						</form>
					</div>
				</div>
			</section>
		</div>
	@endsection