<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #000;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
.logo {
    width: 18%;
    float: left;
    margin-left: 58px;
}
         .top-left.links {
   
    display: inline-block;
    float: left;
    width: 57%;
    margin-top: 67px;
}

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

          .links > a {
    color: #fff;
        margin-right: 40px;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
    background-color: #000;
    border-radius: 11px;
    padding: 10px 10px;
    font-style: italic;
}
.slider {
    float: left;
    width: 100%;
}
.footer {
    font-size: 16px;
    float: left;
    width: 100%;
    text-align: center;
    background-color: #000;
    color: #fff;
    padding: 10px 0;
}

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
	 
        <div class="full-height">
		<div class="logo"><img src="logo.jpg" alt="img"></div>
		<div class="top-left links">
		
                    <a href="homeInfo">Home</a>
                    <a href="https://laracasts.com">Services</a>
                    <a href="https://laravel-news.com">Contact Us</a>
                   
        
		</div>
		
            @if (Route::has('login'))
                <div class="top-right links">
                   
                        
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                   
                </div>
				
            @endif

            <div class="content">
               
<div class="slider"><img src="service.png" alt="img"></div>
              
            </div>
			<div class="footer">&copy; Copyright 2018. All Rights Reserved.</div>

        </div>
    </body>
</html>
