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
    width: 50%;
	text-align: center;
    max-width: 500px;
    margin: auto;
    background: white;
    padding: 10px;
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
		
                    
                   
        
		</div>
		
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
               
<div class="slider">
<h1>About Us</h1>

<p> A car service is a series of maintenance procedures carried out at a set time interval or after the vehicle has travelled a certain distance.
 Customer follow ups details,form entry and employee details. The system is efficient in generating reports
 which will help in the maintenance of the car service easily. It can also easily manage Car, Booking, Repair Car,
 Insurance, Payment etc. This project is very helpful for customer who want to repair or servicing his car. 
 It maintains all the records of car service and maintain the records of customer registration, changing of address and many more.
 This system is managing the details of payment, time period, car details, customer personal details service specification are updated to database.Regular servicing is very important for keeping your vehicle in good driving condition.
 Servicing your vehicle is very important, especially if you use your vehicle extensively. 
 Yes, by servicing your vehicle on a regular basis, you will avoid costly repairs and will save lot of money.
 The actual schedule of car maintenance varies depending on the year, make, and model of a car, its driving conditions and driver behavior.
 Specialty car service specializing in certain parts such as brakesand exhaust systems,  body, air conditioner repairs, and wheel alignment or those who only work on certain brands of vehicle .
 It helps to understand the garage ,service station and specialist repair shop setup and environment. It helps to know the requirement of tools &equipment used in garage, service station and specialist repair shop & power tools . 
 It helps in study the layout of garage, service station and specialist repair shop.It will keep the record of vehicles entering with their duration of stay, driver particulars and all the other necessary details and their problems that will be charged accordingly.
 All the details can be retrieved for security purposes. For our project, we have decided to design a system that can be deployed in existing service centre which would provide information about the problems faced by customers.
 The system will keep information regarding  servicesbefore they enter the facility. 



Also the manager can manage rates, search and can have all the history of that vehicle. This and the other configuration option of managing the employees is also availablethrough a GUI 
interface.The Suite will set a new industrybenchmark for flexibility and user friendliness which will make it one of the most popular choices in the industry in future.


              </p>
            </div>
			<div class="footer">&copy; Copyright 2018. All Rights Reserved.</div>

        </div>
    </body>
</html>
