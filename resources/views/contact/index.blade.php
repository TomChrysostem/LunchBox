@extends('users.navbar')
	@section('content')

    <div class="ftco-intro img" id="about-section" style="background-image: url(images/contact.jpg);">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-9 text-center">
						<h2 class="text-warning">Contact us</h2>
					</div>
				</div>
			</div>
		</div>
        <div class="container">
        <div class="row justify-content-center mb-5 py-3">
					<div class="col-md-7 heading-section text-center ftco-animate">
						<h2 class="mb-2">問い合わせ</h2>
						<p>ご不明な点がございましたら、メールでお問い合わせいただくか、連絡先までお電話いただいたら、ご質問にお答えさせていただきます。</p>
					</div>
				</div>
				<div class="row block-9">
					<div class="col-md-7 order-md-last d-flex ftco-animate">
						<form action="/contact" class="bg-light p-4 p-md-5 contact-form" method="POST">
                @if(session('message'))
                    <div class='alert alert-success'>
                {{ session('message') }}
                </div>
                @endif
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif
						@csrf
							<div class="form-group">
								<input type="text" name="name" class="form-control" placeholder="氏名">
							</div>
							<div class="form-group">
								<input type="text" name="email" class="form-control" placeholder="メール">
							</div>

							<div class="form-group">
								<textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="問い合わせしたいことをこちらに書いて下さい。"></textarea>
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
										<p>Shwe Htan Pin Condminium No 7F,8F</p>
										<p>No.23 Shwe Htan  Pin St.（No .3 Block）</p>
										<p>Hlaing Township,Yangon</p>
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
										<p><a href="tel://1234567920">+ 95 9792655994</a></p>
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
										<p><a href="mailto:info@yoursite.com">awa.yoko.hayami@gmail.com</a></p>
									</div>
								</div>
							</div>
					</div>
				</div>
        </div>

    @endsection