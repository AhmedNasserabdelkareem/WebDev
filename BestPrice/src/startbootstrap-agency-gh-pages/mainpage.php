<?php

$noofmess=0;
$contactarray=array("","",0,"");

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$rname = $rmail=$rphone =$rmessege= "";
$xname=$xmail=$xphone=$xmess="";
$NAME=$EMAIL=$PHONE=$MESSAGE="";
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
 if (empty($_POST["xname"])) {
    $rname = "Name is required";
    
  } else {
    $xname = test_input($_POST["xname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$xname)) {
      $rname= "Only letters and white space allowed";     
    }else{
        $NAME=$xname;
    }
}
//*****************************************\\\\\\\\\\\\\\\\
     if (empty($_POST["xmail"])) {
    $rmail = "Email is required";
    
  } else {
    $xmail = test_input($_POST["xmail"]);
    // check if name only contains letters and whitespace
    if (!filter_var($xmail, FILTER_VALIDATE_EMAIL)) {
  $rmail = "Invalid email format"; 
    }else{
        $EMAIL=$xmail;
    }
}

//*****************************************\\\\\\\\\\\\\\\\
     if (empty($_POST["xphone"])) {
    $rphone = "Phone is required";
    
  } else {
    $xphone = test_input($_POST["xphone"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9]*$/",$xphone)) {
      $rphone= "Only Numbers allowed";     
      
    }else{
        $PHONE=$xphone;
    }
}
//*****************************************\\\\\\\\\\\\\\\\
     if (empty($_POST["xmess"])) {
    $rmessege = "Your Message please ^_^";
    
  } else {
    $xmess = test_input($_POST["xmess"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$xmess)) {
      $rmessege= "Only letters and Numbers and white space allowed";     
      
    }else{
        $MESSAGE=$xmess;
    }

  }

}
//****///
if (isset($NAME)&&isset($EMAIL)&&isset($PHONE)&&isset($MESSAGE)){
    if(!empty('NAME')&&!empty('EMAIL')&&!empty('PHONE')&&!empty('MESSAGE')){
        //   $noofmess++;
            $headers='From:'.$EMAIL;
    $total="Name: ".$NAME."\r\n"."Phone: ".$PHONE."\r\n"."Message: ".$MESSAGE."\r\n";
    array_push($contactarray,$NAME,$EMAIL,$PHONE,$MESSAGE);
   // mail('ahmed_nasser_csed@outlook.com', 'Our Website', $total,$headers);

    }/*  7amo   hena hta5od NAME , EMAIL, PHONE , MESSAGE , total */
 
    //ini_set(varname, newvalue)
}
/*foreach ($contactarray as $value) {
    echo "$value <br>";
}*/
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->
<link rel='stylesheet'href='edit.css'/>
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Start Best price</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                   
                    <li>
                        <a class="page-scroll" href="#portfolio">Products</a>
                    </li>
                   <!-- <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>-->
                    <li>
                        <a class="page-scroll" href="#team">Team</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To Our Site!</div>
                <div class="intro-heading">It's Nice To help you</div>
                <a href="#portfolio" class="page-scroll btn btn-xl">Tell Me More</a>
            </div>
        </div>
    </header>

   

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Products</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                               <button id="p1" type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span> open
</button>
                                 <script type="text/javascript">
    document.getElementById("p1").onclick = function () {
        location.href = "file:///C:/Users/king/Downloads/startbootstrap-agency-gh-pages/startbootstrap-agency-gh-pages/HTML-3%20-%20Copy.html";
    };
</script>
                            </div>
                        </div>
                        <img src="img/portfolio/macbook-577758_1920.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>laptobs</h4>
                        <p class="text-muted">Graphic Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                              <button id="p2"type="button" class="btn btn-default btn-lg">   <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span> open </button>
                             <script type="text/javascript">
    document.getElementById("p2").onclick = function () {
        location.href = "file:///C:/Users/king/Downloads/startbootstrap-agency-gh-pages/startbootstrap-agency-gh-pages/HTML-3%20-%20Copy%20(2).html";
    };
</script>
                            </div>
                        </div>
                        <img src="img/portfolio/pexels-photo.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>mobiles&tablets</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                              <button id="p3" type="button" class="btn btn-default btn-lg">   <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span> open </button>
                             <script type="text/javascript">
    document.getElementById("p3").onclick = function () {
        location.href = "file:///C:/Users/king/Downloads/startbootstrap-agency-gh-pages/startbootstrap-agency-gh-pages/HTML-3%20-%20Copy%20(3).html";
    };
</script>
                            </div>
                        </div>
                        <img src="img/portfolio/photo-camera-subject-photographer-51383.jpeg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>camera</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                              <button id="p4" type="button" class="btn btn-default btn-lg">   <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span> open </button>
                               <script type="text/javascript">
    document.getElementById("p4").onclick = function () {
        location.href = "file:///C:/Users/king/Downloads/startbootstrap-agency-gh-pages/startbootstrap-agency-gh-pages/HTML-3%20-%20Copy%20(4).html";
    };
</script>
                            </div>
                        </div>
                        <img src="img/portfolio/pexels-photo-125779.jpeg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>watch</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                              <button id="p5"type="button" class="btn btn-default btn-lg">   <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span> open </button>
                                <script type="text/javascript">
    document.getElementById("p5").onclick = function () {
        location.href = "file:///C:/Users/king/Downloads/startbootstrap-agency-gh-pages/startbootstrap-agency-gh-pages/HTML-3%20-%20Copy%20(5).html";
    };
</script>
                            </div>
                        </div>
                        <img src="img/portfolio/pexels-photo-164595.jpeg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>bed room</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                              <button id="p6"type="button" class="btn btn-default btn-lg">   <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span> open </button>
                             <script type="text/javascript">
    document.getElementById("p6").onclick = function () {
        location.href = "file:///C:/Users/king/Downloads/startbootstrap-agency-gh-pages/startbootstrap-agency-gh-pages/HTML-3%20-%20Copy%20(6).html";
    };
</script>
                            </div>
                        </div>
                        <img src="img/portfolio/laptop-notebook-computer-work-163178.jpeg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>mouse&keyboard</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

  

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="team-member">
                        <img src="img/team/15107250_1184592714953767_3373481563863629329_n.jpg" class="img-responsive img-circle" alt="">
                        <h4>Ahmed Hesham</h4>
                        <p class="text-muted">Lead Designer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/ahmed.elpop.5817?fref=ufi"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member">
                        <img src="img/team/khalid.jpg" class="img-responsive img-circle" alt="">
                        <h4>Ahmed khalid</h4>
                        <p class="text-muted">Lead Marketer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/Ahmed.Khaled.1997"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member">
                        <img src="img/team/nasser.jpg" class="img-responsive img-circle" alt="">
                        <h4>Ahmed Nasser</h4>
                        <p class="text-muted">Lead Developer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/ahmed.nasser.csed"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                 <div class="col-sm-3">
                    <div class="team-member">
                        <img src="img/team/m8rby.jpg" class="img-responsive img-circle" alt="">
                        <h4>Mohammed elma8rby</h4>
                        <p class="text-muted">Lead Developer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/profile.php?id=100002107996889"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Aside -->
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/envato.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>

    <!-- Contact Section -->
  <!--  <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>-->
        <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Best Price Form</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control"  name="xname" placeholder="Your Name *" id="name"  ><?php echo $rname ;?>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control"  name="xmail" placeholder="Your Email *" id="email"  ><?php echo $rmail ;?>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" name="xphone" placeholder="Your Phone *" id="phone" ><?php echo $rphone ;?>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="xmess" placeholder="Your Message *" id="message"></textarea> <?php echo $rmessege ;?>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Your Website 2016-<?php echo date("Y"); ?></span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>
