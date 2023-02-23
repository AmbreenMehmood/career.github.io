

<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>GoodWEB Solutions - Responsive HTML5 Landing Page Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('user/images/favicon.ico" type="image/x-icon') }}" />
    <link rel="apple-touch-icon" href="{{ asset('user/images/apple-touch-icon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href= "{{ asset('user/css/bootstrap.min.css') }}">
    {{-- "{{ asset('css/style.css') }}" --}}
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('user/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('user/css/responsive.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('user/css/custom.css') }}">

    <!-- Modernizer for Portfolio -->
    <script src="{{ asset('user/js/modernizer.js') }}"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<style>
.row{
    display: flex;
    justify-content: center;
    text-align: center;
   
}
.ab{
   
    border: 2px solid black;
    margin: 10px;
    padding: 30px;
}
a{
    color: orangered;
    font-weight: bold;
}
</style>
<body>

    <!-- LOADER -->
    <!-- <div id="preloader">
        <div class="loader">
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__ball"></div>
		</div>
    </div> -->
    <!-- end loader -->
    <!-- END LOADER -->
    
	<div class="top-bar">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="left-top">
						<div class="email-box">
							<a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> youremail@gmail.com</a>
						</div>
						<div class="phone-box">
							<a href="tel:1234567890"><i class="fa fa-phone" aria-hidden="true"></i> +1 234 567 890</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="right-top">
						<div class="social-box">
							<ul>
								<li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-rss-square" aria-hidden="true"></i></a></li>
							<ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    {{-- <a class="navbar-brand" href="index.html"><img src="images/logos/logo.png" alt="image"></a> --}}
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="active" href="/index">Home</a></li>
                        <li><a href="/about-us">About us</a></li>
						<li><a href="/contact">Contact</a></li>
						<li><a href="/career2">Careers</a></li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div id="features" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>JOIN OUR TEAM</h3>
                <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, <br>lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem!</p>
            </div>


           <!-- -----------------------------  -->
           
         
    
       <div class="container">
        <div class="row">
           <div class="ab">
            <h2>Full stack Developer</h2>
            <p>Lorem ipsum dolor sit amet.</p>
            <a href="/fsd">More Details</a>
           </div>
           <div class="ab">
            <h2>Software Developer</h2>
            <p>Lorem ipsum dolor sit amet.</p>
            <a href="/sd">More Details</a>
           </div>
           <div class="ab">
            <h2>Mern stack Developer</h2>
            <p>Lorem ipsum dolor sit amet.</p>
            <a href="/msd">More Details</a>
           </div>
           <div class="ab">
            <h2>Senior Developer</h2>
            <p>Lorem ipsum dolor sit amet.</p>
            <a href="/sdp">More Details</a>
           </div>
        </div>
       </div>
     
       

     
</body>
</html>