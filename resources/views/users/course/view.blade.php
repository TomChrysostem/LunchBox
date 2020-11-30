@extends('users.layout')

	@section('content') 
	<main>
		<div class="ftco-intro img" id="about-section" style="background-image: url(images/cookingclass.jpg);">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-9 text-center">
						<h2 class="text-default">All Courses</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="jumbotron">
				<div class="row">
					<div class="col-4">
						<img src="https://c.files.bbci.co.uk/13374/production/_110780787_tomjerrycrop.jpg" class="img-responsive" width="100%"/>
					</div>
					<div class="col-8">
						<h5 class="card-title">Course : Cooking Course <span class="badge badge-secondary">Category</span></h5>
						<p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
						Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
						Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						<h6 class="card-subtitle mb-2 text-muted">
						<div class="d-flex flex-row">
							<div class="p-2"><bold>PRICE : </bold>10000 MMK</div>
						</div>
						<div class="d-flex flex-row">
							<div class="p-2">QTY : 10</div>
							<div class="p-2">PERIOD : 10</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-4">
							<img src="https://c.files.bbci.co.uk/13374/production/_110780787_tomjerrycrop.jpg" class="img-responsive" width="100%"/>
						</div>
						<div class="col-6">
							<h5 class="card-title">hhhhhh</h5>
							<h6 class="card-subtitle mb-2 text-muted"><bold>PRICE : </bold>10000 MMK </h6>
							<p class="card-text">hhhhhhhhh</p>
							<a href="#" type="button" class="btn btn-outline-secondary">Book Course</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	@endsection