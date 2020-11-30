@extends('users.layout')
	@section('content') 
		<main>
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
						<h2 class="mb-4">我々のメニュー</h2>
						<p>お客様に素晴らしい料理を提供させていただきます</p>
					</div>
				</div>
				<section class="pt-5 bg-light" id="lunchbox-section">
					<div class="container">
						<div class="row justify-content-center">
								<div class="align-self-stretch ftco-animate mx-3">
									<div class="media-body">
										<h5>毎日栄養価の高い最高の食材を使用して常にお客様がお食事を満足できるよう作っております。</h5>
									</div> 
								</div>
						</div>

						<div class="row justify-content-center py-3">
							<div class="col-md-12 heading-section text-center ftco-animate">
								<h3>今月のお弁当メニュー</h3>
							</div>
						</div>
						<div class="col-md-12">
							<table class="table table-hover table-fixed justify-content-center">
								<thead>
									<tr>
										<th scope="row" class="px-2">Date</th>
										<th class="px-2">Name</th>
										<th class="px-2">Description</th>
										<th class="px-2">Price</th>
										<th class="px-2">Kcal</th>
										<th class="px-2">Action</th>
									</tr>
								</thead>
								<tbody>
								@foreach ($mainDishs as $mainDish)
									<tr>
										<th scope="row" class="px-2">{{ $mainDish->date }}</th>
										<td class="px-2 text-center">{{ $mainDish->menu }}</td>
										<td class="px-2 text-center">{{ $mainDish->description }}</td>
										<td class="px-2 text-center">{{ $mainDish->price }}-MMK</td>
										<td class="px-2 text-center">{{ $mainDish->kcal }}-Kcal</td>
										<td class="px-2 text-center">
											<a href="{{ route('user.order',$mainDish->id) }}" class="btn btn-success btn-sm my-2">order</a>
										</td>
									</tr>
								@endforeach
								</tbody>
							</table>
							{!! $mainDishs->links() !!}
						</div>
				</section>
				<!-- side dish menu display -->
				<section>
					<div class="jumbotron bg-light">
						
								<h4 class="col-md-12 heading-section text-center ftco-animate">おかずメニュー</h4>
							
						<div class="row pb-4">
							@foreach ($sideDishs as $sideDish)
								<div class="col-4">
									<div class="bg-light">
										<div class="my-3">
											<h5 class="display-5">{{$sideDish->menu}}</h5>
											<a type="button" href="" class="btn btn-primary btn-sm my-2" data-toggle="modal" data-target="#detail">
												detail
											</a>
										</div>
										<div class="bg-white" style="border-radius: 21px 21px 0 0;">
											<img class="card-img-top" src="{{ asset('storage/img/'.$sideDish->image) }}" width="300" height="200" alt="Card image cap">
										</div>
									</div>
								</div>
							@endforeach 
						</div>
						<div class="text-center">
							<button type="button" class="btn btn-light">View More</button>
						</div>
					</div>
				</section>
				<!-- Menu Type display  -->
				<section class="pt-5 pb-5 bg-light" id="side-school-event-section">
					<div>
						<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
							<li class="nav-item p-3">
								<a type="button" class="btn btn btn-outline-secondary active" id="school-tab" data-toggle="tab" href="#school" role="tab" aria-controls="school"
								aria-selected="true">School Lunch</a>
							</li>
							<li class="nav-item p-3">
								<a type="button" class="btn btn btn-outline-secondary" id="company-tab" data-toggle="tab" href="#company" role="tab" aria-controls="company"
								aria-selected="false">Company Food</a>
							</li>
							<li class="nav-item p-3">
								<a type="button" class="btn btn btn-outline-secondary" id="eventlunch-tab" data-toggle="tab" href="#eventlunch" role="tab" aria-controls="eventlunch"
								aria-selected="false">Events Food</a>
							</li>
						</ul>
					</div>
					<div class="tab-content align-self-stretch ftco-animate mx-3" id="myTabContent">
						<!-- School Lunch -->
						<div class="tab-pane fade show active" id="school" role="tabpanel" aria-labelledby="school-tab">
							<div class="row justify-content-center mt-3">
								<div class="align-self-stretch ftco-animate mx-3">
									<div class="media-body">
										<p> School - Lunch Let us provide the food for your next event. We promise your guests or clients will be delighted! We cater for corporate events, weddings, </p>
									</div> 
								</div>
							</div>
							<div class="row pb-4">
							@foreach ($schoolLunchs as $schoolLunch)
								<div class="col-4">
									<div class="bg-light">
										<div class="my-3">
											<h6 class="display-5">{{$schoolLunch->menu}}</h6>
											<h6 class="card-subtitle mb-2 text-muted"><bold>PRICE : </bold>{{$schoolLunch->price}} MMK </h6>
										</div>
										<div class="bg-white" style="width: 100%;border-radius: 21px 21px 0 0;">
											<img class="card-img-top" src="{{ asset('storage/img/'.$schoolLunch->image) }}" height="250" alt="Card image cap">
										</div>
									</div>
								</div>
							@endforeach 
							</div>
							<div class="text-center">
								<button type="button" class="btn btn-light">View More</button>
							</div>
						</div>
						<!-- Company Lunch -->
						<div class="tab-pane fade show" id="company" role="tabpanel" aria-labelledby="company-tab">	
							<div class="row justify-content-center mt-3">
								<div class="align-self-stretch ftco-animate mx-3">
									<div class="media-body">
										<p>Company Lunch Let us provide the food for your next event. We promise your guests or clients will be delighted! We cater for corporate events, weddings, </p>
									</div> 
								</div>
							</div>
							<div class="row pb-4">
								@foreach ($companyLunchs as $companyLunch)
									<div class="col-4">
										<div class="bg-light">
											<div class="my-3">
												<h6 class="display-5">{{$companyLunch->menu}}</h6>
												<h6 class="card-subtitle mb-2 text-muted"><bold>PRICE : </bold>{{$companyLunch->price}} MMK </h6>
											</div>
											<div class="bg-white" style="width: 100%;border-radius: 21px 21px 0 0;">
												<img class="card-img-top" src="{{ asset('storage/img/'.$companyLunch->image) }}" height="250" alt="Card image cap">
											</div>
										</div>
									</div>
								@endforeach 
							</div>
							<div class="text-center">
								<button type="button" class="btn btn-light">View More</button>
							</div>
						</div>
						<!-- Event Lunch -->
						<div class="tab-pane fade show" id="eventlunch" role="tabpanel" aria-labelledby="eventlunch-tab">	
							<div class="row justify-content-center mt-3">
								<div class="align-self-stretch ftco-animate mx-3">
									<div class="media-body">
										<p>Event Lunch Let us provide the food for your next event. We promise your guests or clients will be delighted! We cater for corporate events, weddings, </p>
									</div> 
								</div>
							</div>
							<div class="row pb-4">
								@foreach ($events as $event)
									<div class="col-4">
										<div class="bg-light">
											<div class="my-3">
												<h6 class="display-5">{{$event->menu}}</h6>
												<h6 class="card-subtitle mb-2 text-muted"><bold>PRICE : </bold>{{$event->price}} MMK </h6>
											</div>
											<div class="bg-white" style="width: 100%;border-radius: 21px 21px 0 0;">
												<img class="card-img-top" src="{{ asset('storage/img/'.$event->image) }}" height="250" alt="Card image cap">
											</div>
										</div>
									</div>
								@endforeach 
							</div>
							<div class="text-center">
								<button type="button" class="btn btn-light">View More</button>
							</div>
						</div>
					</div>
				</section>

				<section class="pt-5 bg-light mt-3" id="orderpay-section">
        <div class="container px-5 pb-5">
          <h3 class="heading-section text-center ftco-animate"><b>お弁当、ご夕食ご案内</b></h3>
          <h4>1. ご注文方法</h4>
          <p>メール(<b class="text-info">awa.yoko.hayami@gmail.com</b>)  、電話(<b class="text-info">09792655994</b>) ）または 注文フォームにてお願いいたします。</p>
          <p class="mb-4">➢ 最初の注文時は、氏名、会社・所属名、電話番号、配達先住所（配達する場所）をご連絡お願いいたします。できるだけわかりやすく、また、必要に応じて目立つ建物等らの位置関係等加えていただけますと助かります。</p>
           <h4>2.　ご注文期限</h4>
           <h5>＜ティラワ工業団地＞</h5>
           <p>ランチ ： 前日までにご注文の場合、配達いたします。当日ご注文の場合、ドライバーに取りにいただく前提でご準備いたします。</p>
          <h5>＜ヤンゴン市内＞</h5>
          <p>ランチ ： 前日まで、及び当日 9 時までのご注文の場合、配達いたします。ドライバーに取りにきていただく場合、午後 9 時以降のご注文もお受けいたします。</p>
          <p>ディナー ： 前日まで、及び当日昼 12 時までにご注文の場合、配達いたします。ドライバーに取りにきていただく場合、午後 3 時までご注文をお受けいたします。</p>
          <p>➢ 個数の多い会議弁当の場合は、前日午後 3 時までにご注文いただければ、指定時間までにお届けするようにいたします。 </p>
          <p>➢ 前日までのご注文の場合は、土曜日も、ランチ、ディナーご注文をお受けいたします。日・祭日は休業しております。</p>
          <p class="mb-4">➢ パーティー・メニュー、総菜、飲み会メニュー等も適宜対応させていただきますので、お気軽にご相談ください。</p>

          <h4>3.　お値段</h4>
          <p>ランチ ： 日替わり弁当（7,000KS. ） 夕食 ： 日替わりセット（5,000KS. 、ごはんなし）/＊ ご飯ありのお弁当形式の場合は（7,000KS. ）になります。</p>
          <p class="mb-4">➢ 会議弁当、飲み会料理、等は、内容、お値段に関し、適宜ご相談ベースで対応させていただきます。</p>

          <p>➢ アレルギー等がございます場合は、事前にご連絡ください。</p>
           
           <h4>4.　最低ご注文数</h4>
           <p>最低注文数は 1 個とさせていただきます。</p>
           <p class="mb-4">➢ ティラワ工業団地に関しても当面 1 個で試験的やらせていただきます。</p>

           <h4>5.　配送料</h4>
           <h5>＜ティラワ工業団地＞</h5>

           <p>お弁当一個につきまして配送料５００KS.（従い、お昼の日替わり弁当は 1-9 個の場合、7,500KS./個、10 個以上の場合配送料は無料で、日替わりお弁当 7,000KS./個。）</p>
           <h5>＜ヤンゴン市内＞</h5>
           <p>お弁当３個以上は配送料無料、1 個、2 個の場合は配送料 3,000KS．（従い、お昼の日替わり弁当は 1 個の場合は、10,000KS./個、2 個の場合は 8,500KS/個、3 個以上の場合は配送料無料で、日替わりお弁当は 7,000KS./個）</p>
           <p>➢ ヤンゴン市内で、昼食、夕食、お惣菜、等一回のご注文合計 20,000KS.以上ご注文の場合は配送料無料。20,000KS.未満の場合は、配送料として 3,000．KS.を別途いただきます。</p>
           <p>➢ お代金は、デリバリー時にデリバリー員に現金でお渡しください。</p>
            <p>➢ 昼食弁当箱は、状況に応じて、当日午後、あるいは翌日回収させていただきます。</p>
            

        </div>
    </section>
				
			</div>
		</main>
	@endsection