@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">


               <!--<h5 class="font-weight-bold text-center pt-3">{{ __('ここからログインしなさい') }}</h5>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('メールアドレス') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('ログイン状態を保存する') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="p-3">
                                <button type="submit" class="btn btn-primary btn-fill mr-1">
                                    {{ __('ログイン') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        {{ __('パスワードをお忘れですか ?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>-->


<!--new-->
        <h5 class="card-header bg-info text-white text-center py-4">
            <strong>{{ __('ログインする') }}</strong>
        </h5>
    <form class="text-center p-3" method="POST" action="{{ route('login') }}">
    @csrf
        


    <!-- Email -->
    <div class="py-3 px-3">
        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="メールアドレス" required autocomplete="email" autofocus>              
			       @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                    </span>
                    @enderror
    </div>

    <!-- Password -->
    <div class="py-3 px-3">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="パスワード" required autocomplete="current-password">
			        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
    </div>

    <div class="d-flex py-3">
 
            <!-- Remember me -->
            <div class="custom-control custom-checkbox">
 		        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <p class="h6"><a class="text-success" for="defaultLoginFormRemember">ログイン状態を保存する</a></p>
            </div>
        
        <div class="pl-4">
            <!-- Forgot password -->

                    @if (Route::has('password.request'))
                    <p class="h6"><a href="{{ route('password.request') }}">
                            {{ __('パスワードをお忘れですか ?') }}
                        </a></p>
                    @endif
        </div>
    </div>

    <!-- Sign in button -->
    
                    <button type="submit" class="btn btn-primary btn-fill">
                            {{ __('ログイン') }}
                    </button>

    </form>
<!-- Default form login -->
            </div>
        </div>
    </div>
</div>
@endsection
