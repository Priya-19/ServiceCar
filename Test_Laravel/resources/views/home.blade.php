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
			
			
			.dropbtn {
    background-color: #000;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    right: 0;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color: #3e8e41;}
        </style>
	
		@extends('layouts.app')

@section('content')
<div class="full-height">
		<div class="logo"><img src="logo.jpg" alt="img"></div>
		<div class="top-left links">
		  
					
                    <a href="/services">Car</a>
                    <a href="/carservice">Service</a>
                    <a href="/invoice">Invoice</a>
                   
        
		</div>	
<div class="container">
   <!-- <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">-->
                    @if (session('status'))
                        hello
                            {{ session('status') }}
                       
                    @endif

                  
					
		
		
		
		
                </div>
        <!--    </div>
        </div>
    </div>
</div>-->

<body>
	 

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
				
            @endif

            <div class="content">
               
<div class="slider"><img src="service.png" alt="img"></div>
              
            </div>
			<div class="footer">&copy; Copyright 2018. All Rights Reserved.</div>
			</div>
    </body>
@endsection