@extends('users.layout')
 
	@section('content')
		<main>
			<div class="ftco-intro img" id="about-section" style="background-image: url{{ asset('images/lunchbox1.jpg') }};">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-md-9 text-center">
								<h2>Lunchbox Services</h2>
							</div>
						</div>
					</div>
			</div>
			<section>
				<div class="jumbotron">
					<table class="table">
						<thead>
							<tr>
								<th>Date</th>
								<th>Menu</th>
								<th>Name</th>
								<th>Description</th>
								<th>Price</th>
								<th>Kcal</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>{{ $menu->date }}</td>
								<td class="text-center"><img class="img-fluid img-thumbnail" src="{{ asset('storage/img/'.$menu->image) }}" alt="Card image cap" width="100" height="80"></td>
								<td class="text-center">{{ $menu->menu }}</td>
								<td class="text-center">{{ $menu->description }}</td>
								<td class="text-center">{{ $menu->price }}-MMK</td>
								<td class="text-center">{{ $menu->kcal }}-Kcal</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="row block-12 px-5">
					<div class="col-md-7 order-last">
						<form action="{{ route('user.serve') }}" method="POST" class="bg-light p-4">
							@if(Session::has('success'))
								<div class="alert alert-success">
									{{Session::get('success')}}
								</div>
							@endif
							<h3 class="text-center pb-2">注文フォーム</h3>
							@csrf
							<div class="form-group">
								<input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="user_name" id="user_name" placeholder="氏名">
								@if ($errors->has('user_name'))
								<div class="error text-danger">
									{{ $errors->first('user_name') }}
								</div>
								@endif
							</div>
							<div class="form-group">
								<input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email" placeholder="メール">
								@if ($errors->has('email'))
								<div class="error text-danger">
									{{ $errors->first('email') }}
								</div>
								@endif
							</div>
							<div class="form-group">
								<input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone" placeholder="連絡先番号">
								@if ($errors->has('phone'))
								<div class="error text-danger">
									{{ $errors->first('phone') }}
								</div>
								@endif
							</div>
							<div class="form-group">
								<textarea class="form-control {{ $errors->has('subject') ? 'error' : '' }}" rows="2" name="address" id="address" placeholder="配達先の住所"></textarea>
									@if ($errors->has('address'))
									<div class="error text-danger">
										{{ $errors->first('address') }}
									</div>
									@endif
							</div>
							<div class="form-group">
								<input type="date" name="date" class="form-control" placeholder="配達して欲しい日にち"/> 
									@if ($errors->has('date'))
									<div class="error text-danger">
										{{ $errors->first('date') }}
									</div>
									@endif
							</div>
							<div class="form-group">               
								<input type="text" name="qty" id="qty" class="form-control mb-4" placeholder="注文数">
									@if ($errors->has('qty'))
									<div class="error text-danger">
										{{ $errors->first('qty') }}
									</div>
									@endif
							</div>
							<div class="form-group">               
								<input type="text" name="status" class="form-control mb-4" value="1" hidden>  
							</div>	
							<div class="form-group">               
								<input type="text" class="form-control mb-4" value="{{ $menu->id }}" name="menu_id" hidden>  
							</div>
							<div class="form-group">
								<textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="messages" id="messages"
								cols="30" rows="7" placeholder="メッセージボックス"></textarea>
									@if ($errors->has('messages'))
									<div class="error text-danger">
										{{ $errors->first('messages') }}
									</div>
									@endif
							</div>

							<button type="submit" class="btn btn-primary py-3 px-5">予約する</button>
						</form>
					</div>

					<div class="col-md-5 d-flex">
						<div class="row d-flex contact-info mb-5">
							
							<div class="col-md-12 ftco-animate">
								<div class="box p-2 px-3 bg-light d-flex">
									<div>
										<p class="text-justified">ご注文は メールで: <a class="text-info">awa.yoko.hayami@gmail.com</a> または電話で: <a class="text-info">09792655994</a> または<a class="text-info"> 注文フォームで</a>お願い申し上げます。</p>
									</div>
								</div>
							</div>
							<div class="col-md-12 ftco-animate">
								<div class="box p-2 px-3 bg-light d-flex">
									<div>
										<p  class="text-danger">＊＊＊副食も注文したい場合、または食物アレルギーがある場合は、メッセージボックスに記入してください。ありがとうございます。</p>
									</div>
								</div>
							</div>
							<div class="col-md-12 ftco-animate">
								<div class="box p-2 px-3 bg-light d-flex">
									<div class="icon mr-3">
										<span class="icon-phone2"></span>
									</div>
									<div>
										<h3 class="mb-3">お問い合わせ先. 営業時間：</h3>
										<p><a href="#">月曜日～金曜日- 9:00 - 5:00</a></p>
										<p><a href="#">土曜日 - 9: 00 - 12:00</a></p>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</section>
		</main>
	@endsection