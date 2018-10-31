<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>Par CJ</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <meta name="keywords" content="Attire Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
                SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
            <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
            <!-- Custom Theme files -->
            <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
            <link href="css/style.css" type="text/css" rel="stylesheet" media="all">   
            <link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons -->
            <!-- //Custom Theme files --> 
            <!-- js -->
            <script src="js/jquery-2.2.3.min.js"></script>  
            <!-- //js -->
            <!-- web-fonts -->  
            <link href="//fonts.googleapis.com/css?family=Limelight" rel="stylesheet">
            <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
            <!-- //web-fonts -->
        </head>
        <body>
            <!-- banner -->
            <div class="agileits-banner about-w3banner">
                <div class="bnr-agileinfo">
                    <div class="banner-top w3layouts">
                        <div class="container">  
                            <p><span class="glyphicon glyphicon-earphone"></span> +256704580154 </p> 
                        </div>
                    </div>
                    <div class="banner-w3text w3layouts">
                        <h6>Welcome To</h6>
                        <h2>Par CJ</h2> 
                    </div>
                    <!-- navigation -->
                    @include('partials._nav')
                    <!-- //navigation -->
                </div>
            </div>
            <!-- //banner --> 
            @yield('content')
            <!-- copy rights start here -->
            @include('partials._footer')
            <!-- //copy right end here -->

            <script src="js/SmoothScroll.min.js"></script> 
            <!-- start-smooth-scrolling -->
            <script type="text/javascript" src="js/move-top.js"></script>
            <script type="text/javascript" src="js/easing.js"></script>	
            <script type="text/javascript">
                    jQuery(document).ready(function($) {
                        $(".scroll").click(function(event){		
                            event.preventDefault();
                    
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                        });
                    });
            </script>
            <!-- //end-smooth-scrolling -->	
            <!-- smooth-scrolling-of-move-up -->
            <script type="text/javascript">
                $(document).ready(function() {
                    /*
                    var defaults = {
                        containerID: 'toTop', // fading element id
                        containerHoverID: 'toTopHover', // fading element hover id
                        scrollSpeed: 1200,
                        easingType: 'linear' 
                    };
                    */
                    
                    $().UItoTop({ easingType: 'easeOutQuart' });
                    
                });
            </script>
            <!-- //smooth-scrolling-of-move-up -->  
            <!-- Bootstrap core JavaScript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="js/bootstrap.js"></script>
        </body>
    </html>
