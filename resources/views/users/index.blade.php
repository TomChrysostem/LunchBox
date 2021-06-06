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
						<h2 class="mb-4">お弁当サービス</h2>
						<p>お客様に健康的で安全な食事を提供させていただきます。</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md d-flex align-self-stretch ftco-animate">
						<div class="media block-6 services text-center d-block">
							<img src="images/school-lunch.jpg" class="img-fluid rounded-circle" alt="Colorlib Template">
							<div class="media-body">
								<h3 class="heading my-3">給食</h3>
								<p>お子様の心身の健全な発達を目的とした 彩り豊かでバランスの良い食事を提供いたします。</p>
							</div>
						</div>      
					</div>
					<div class="col-md d-flex align-self-stretch ftco-animate">
						<div class="media block-6 services text-center d-block mt-lg-5 pt-lg-4">
							<img src="images/staff lunch.jpg" class="img-fluid rounded-circle" alt="Colorlib Template">
							<div class="media-body">
								<h3 class="heading my-3">スタッフのお弁当</h3>
								<p>生活習慣病などの予防の為の 栄誉バランスのとれた 食事を提供いたします。</p>
							</div>
						</div>      
					</div>
					<div class="col-md d-flex align-self-stretch ftco-animate">
						<div class="media block-6 services text-center d-block">
							<img src="images/event food.jpg" class="img-fluid rounded-circle" alt="Colorlib Template">
							<div class="media-body">
								<h3 class="heading my-3">イベント＆パーティーフード</h3>
								<p>各種イベントや、お誕生日や冠婚葬祭など内容に応じたメニューを提供いたします。（ご予算や目的など、ご相談に応じてアレンジさせていただきます）</p>
							</div>
						</div>      
					</div>
				</div>
				<div class="row justify-content-center py-4">
					<p class="mb-3 mx-3"><a href="{{ route('user.service') }}" class="btn btn-info px-4 py-3">詳しく見る</a></p>
				</div>
			</div>
		</section>
		<section class="ftco-intro img" id="about-section" style="background-image: url(images/wall3.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12 text-center">
						<h2>Cooking Class</h2>
						<h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Cook together, stay together</h1>
					</div>
				</div>
			</div>   
		</section>
		<section class="ftco-section ftco-services-2 bg-light" id="workflow-section">
			<div class="container">
				<div class="row">
					<div class="col-md-4 heading-section ftco-animate">
						<h2 class="mb-5">授業タイプ</h2>
						<div class="media block-6 services text-center d-block pt-md-5 mt-md-5">
							<img src="images/one-class.jpg" class="img-fluid" alt="Colorlib Template">
							<div class="media-body p-md-3">
								<h3 class="heading mb-3">個人レッスン</h3>
								<p class="mb-5">一品ずつきめ細かにお教えいたします。また、ご希望に応じてメニューもアレンジさせていただきます。</p>
								<hr>
							</div>
						</div>
					</div>
					<div class="col-md-4 d-flex align-self-stretch ftco-animate mt-lg-5">
						<div class="media block-6 services text-center d-block mt-lg-5 pt-md-5 pt-lg-4">
							<img src="images/group-class.jpg" class="img-fluid" alt="Colorlib Template">
							<div class="media-body p-md-3">
								<h3 class="heading mb-3">グループレッスン</h3>
								<p class="mb-5">一緒に楽しく作りながら 出来上がった後は、皆さんで試食していただけます。*お友達グループでのお申込みの場合はご希望がございましたらメニューのアレンジもお受けいたします</p>
								<hr>
							</div>
						</div>      
					</div>
					<div class="col-md-4 d-flex align-self-stretch ftco-animate">
						<div class="media block-6 services text-center d-block">
							<img src="images/cookingtraining.jpg" class="img-fluid" alt="Colorlib Template">
							<div class="media-body p-md-3">
								<h3 class="heading mb-3">シェフトレーニングレッスン</h3>
								<p class="mb-5">料理に興味のある皆様は経験豊富な教師から、あらゆる種類の料理や特定の分野について学ぶことができます。</p>
								<hr>
							</div>
						</div>      
					</div>
				</div>
				<div class="row justify-content-center">
					<p class="mx-3"><a href="{{ route('user.course') }}" class="btn btn-info px-4 py-3">詳しく見る</a></p>
				</div>
			</div>
		</section>
		<section class="pt-5" id="agent-section">
			<div class="container">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<h2 class="mb-2">ご案内</h2>
				</div>
				<div class="row mt-5">
					<div class="col-md-6 mt-5">
						<h3 class="h3-responsive font-weight-bold">学校内容</h3>
						<p class="text-xl-left">
							2015年ヤンゴンのレーダンにて開校大人のグループレッスン、　親子料理教室、　調理トレーニングコース　、
							糖尿病食や高血圧食など病気の予防や健康維持を目的としたコース、旅行者の市場でのお買い物＆ミャンマー料理教室など開催しています
							食の知識や食文化を知り、家族みんなの健康を守る安全で安心な食事をお伝えいたします。
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
						<h3 class="h3-responsive font-weight-bold">教師</h3>
						<p class="text-xl-left">
						徳島文理大学家政学管理栄養士専攻卒業後　病院給食などを経て、
						徳島文理大学家政学管理栄養士専攻卒業後　病院給食などを経て、
						２０１５年からヤンゴンで料理教室を設立した。
						和食をはじめ　ヘルシーにアレンジしたミャンマー料理やアジアン料理　イタリアン料理などのレシピをミャンマーの豊かな旬の食材を使って紹介しております。
						企業のレシピ開発や衛生管理のチェックもしながら　、地元の雑誌でもレシピ開発と衛生管理についても書いています。</p>
						<p class="text-xl-left"> そのうえ、学校や企業向けにもお弁当の委託業務や夕食、会食などの宅配サービスをしています。
								私の使命は、シンプルで栄養価の高いおいしい料理の作り方を人々に教育し、共有することです。</p>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-md-6 mt-5">
						<h3 class="h3-responsive font-weight-bold">アクセス</h3>
						<p class="text-xl-left">
						レダン-バス停から来る場合、Hledan- Center 側に少し歩いて、右側に　Zayar Thiri 道があります。その道を真っすぐ行ったら
						　左側に　Mya Yeik Condminium があります。バス停から Mya Yeik Condminium まで 4・5 分で行けます。</p>
					</div>
					<div class="col-md-6 mt-5 map-container">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15275.845995859692!2d96.1281802!3d16.828266!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8378dc7569aab97b!2sMya%20Yeik%20Condo!5e0!3m2!1sen!2ssg!4v1622999908439!5m2!1sen!2ssg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>	
					</div>				
				</div>
			</div>
		</section>
		<section class="pt-5 contact-section ftco-no-pb" id="contact-section">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
					<div class="col-md-7 heading-section text-center ftco-animate">
						<h2 class="mb-2">問い合わせ</h2>
						<p>ご不明な点がございましたら、メールでお問い合わせいただくか、連絡先までお電話いただいたら、ご質問にお答えさせていただきます。</p>
					</div>
				</div>
				<div class="row block-9">
					<div class="col-md-7 order-md-last d-flex ftco-animate">
						<form action="{{ route('user.contact-us') }}" class="bg-light p-4 p-md-5 contact-form" method="post">
							@csrf
							<div class="form-group">
								<input type="text" class="form-control" name="name" placeholder="氏名">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="email" placeholder="メール">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="subject" placeholder="件名">
							</div>
							<div class="form-group">
								<textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="問い合わせしたいことをこちらに書いて下さい。"></textarea>
							</div>
							<div class="form-group">
								<input type="submit" value="メッセージを送る" class="btn btn-primary py-3 px-5">
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
										<h3 class="mb-3">住所</h3>
										<p>Building-18, Mya Yeik Condminium 6-B</p>
										<p>Zayar Thiri Street, 1st Quarter,</p>
										<p>Kamaryut Township,Yangon</p>
									</div>
								</div>
							</div>
							<div class="col-md-12 ftco-animate">
								<div class="box p-2 px-3 bg-light d-flex">
									<div class="icon mr-3">
										<span class="icon-phone2"></span>
									</div>
									<div>
										<h3 class="mb-3">連絡先</h3>
										<p><a href="tel://+ 95 9792655994">+ 95 9792655994</a></p>
										<p><a href="#">Mon to Fri- 9:00 - 18:00</a></p>
										<p><a href="#">Sat - 9: 00 - 15:00</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-12 ftco-animate">
								<div class="box p-2 px-3 bg-light d-flex">
									<div class="icon mr-3">
										<span class="icon-paper-plane"></span>
									</div>
									<div>
										<h3 class="mb-3">メールアドレス</h3>
										<p><a href="mailto:awa.yoko.hayami@gmail.com">awa.yoko.hayami@gmail.com</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		</section>
	@endsection