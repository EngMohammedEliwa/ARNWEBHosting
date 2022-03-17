<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo.png" type = 'image/png'>

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Login</title>
</head>
<body>


    <div class="make_row">
        <div class="col1">
            <img src="images/bg-03.png" alt="">
        </div>


        <form method="POST" action="{{ route('login') }}">
            @csrf

        <div class="col2">
             <div class="make_col">

                <h1 class="text_1">Login to ARM</h1>


                <div class=" wrap-input100 validate-input">
                    <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <span class="label-input100">Email</span>
                </div>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror




                <div class=" wrap-input100">
                    <input type="password" class=" input100  @error('password') is-invalid @enderror" required name="password" >
                    <span class="label-input100">Password</span>

                </div>


                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror







                <div class="make_row_1">
                    <div class="left make_row">


                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>






                    </div>

                    <div>



                        @if (Route::has('password.request'))
                        <a style="text-decoration: none;" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }} </a>
                            @endif
                    </div>
                </div>

                <div class="submit">
                    <input type="submit" class="login100-form-btn" value="Login">
                </div>

                <div class="text_2 mar_1">
                    <span>or sign up using</span>
                </div>

                <div class="make_row mar_1">
                    <div class="img_1">
                        <a href="http://"><img src="images/facebook.png" alt=""></a>
                    </div>
                    <div class="img_1">
                       <a href="http://"><img src="images/tweet.png" alt=""></a>

                    </div>
                </div>
             </div>
        </div>
    </div>
</body>
</html>
