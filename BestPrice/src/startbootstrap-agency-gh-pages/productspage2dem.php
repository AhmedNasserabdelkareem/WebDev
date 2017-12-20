<?php
session_start();

$flag =1;
//if ($_SERVER["REQUEST_METHOD"] == 'POST'&& isset($_POST['gmail'])) {
  

//$flag=1;
  //}


   /*if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"Uploads/".$file_name);
         
      }else{
         print_r($errors);
      }
   }*/
   function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$productname="";
$imagelink="";
$prodisc="";
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
 if (empty($_POST["pname"])) {
   $flag=0;
    
  } else {
    $productname = test_input($_POST["pname"]);
    // check if name only contains letters and whitespace
    

    }
    if (empty($_POST["ilink"])) {
    $rname = "link is required";
    
  } else {
    $imagelink = test_input($_POST["ilink"]);
    // check if name only contains letters and whitespace
    

    }

        if (empty($_POST["discribtion"])) {
    $rname = "Discribtion is required";
    
  } else {
    $prodisc = test_input($_POST["discribtion"]);
    // check if name only contains letters and whitespace
    

    }
    $servername = "localhost";
  $username = "root";
$password = "";
$dbname = "newDataBase";


// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 //Create database
//echo "hihi";
$sql = "INSERT INTO MyGuestsss (filename, productname,description)
VALUES ('$imagelink', '$productname','$prodisc')";
$conn->query($sql);
$_SESSION["id"]=$conn->insert_id;
$conn->close();
    /*
    7amo  
     3ayezen n7ot productname ,  file_name fe row 30  

    */

}


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>products page</title>

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
          <script src="js/plugins.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->
<link rel='stylesheet'href='edit.css'/>
     <!--   <script>
$(document).ready(function(){
  
    $("#btn2").click(function(){
        $('div').append("<br> Appended item </br>");
    });
});
</script> -->
</head>
<body>
    
    <!-- addind new -->
    
      <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class=" lab col-lg-12 text-center">
                    <h2 class="section-heading">laptobs</h2>
                </div>
            </div>
            <div class="row">
            <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newDataBase";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT filename, productname FROM myguestsss ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
     // output data of each row
  $i=0  ;
     while($row = $result->fetch_assoc()) {
 $i++;
      if (empty($row["filename"]))
        continue;
     
     
              echo ' <div class="col-md-4 col-sm-6 portfolio-item">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                              <form method ="post" action ="../bootstrap-3.3.7-dist/addproductpage25.php">
                                 <button type="submit" class="btn btn-default btn-lg" name='.$i.'>
                        <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span> view
                                  </button>
                                </form>

                      </div>
                        </div>
                        <img src= "'. $row["filename"].'" class="img-responsive" alt="">
                    <div class="portfolio-caption">
                        <h4>'. $row["productname"].'</h4>
                    </div>
                </div>' ;
                 }
} else {
    }

$conn->close();
?>



               <!-- <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                              <button type="button" class="btn btn-default btn-lg">   <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span> view </button>
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
                              <button type="button" class="btn btn-default btn-lg">   <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span> view </button>
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
                              <button type="button" class="btn btn-default btn-lg">   <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span> view </button>
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
                              <button type="button" class="btn btn-default btn-lg">   <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span> view </button>
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
                              <button type="button" class="btn btn-default btn-lg">   <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span> view </button>
                            </div>
                        </div>
                        <img src="img/portfolio/laptop-notebook-computer-work-163178.jpeg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>mouse&keyboard</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                 <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                              <button type="button" class="btn btn-default btn-lg">   <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span> view </button>
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
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                              <button type="button" class="btn btn-default btn-lg">   <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span> view </button>
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
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                              <button type="button" class="btn btn-default btn-lg">   <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span> view </button>
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
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                              <button type="button" class="btn btn-default btn-lg">   <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span> view </button>
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
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                              <button type="button" class="btn btn-default btn-lg">   <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span> view </button>
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
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                              <button type="button" class="btn btn-default btn-lg">   <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span> view </button>
                            </div>
                        </div>
                        <img src="img/portfolio/pexels-photo.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>mobiles&tablets</h4>
                        <p class="text-muted"></p>
                    </div>
                </div> -->
              <script>

 $(document).ready(function(){
    $("#btn2").click(function(){
     $(".sss").show();

    });
    /* $("#btn2").click(function(){
        $(".add ").hide();
    });
    $("#sav1").click(function(){
        $(".dd,.sav,.sss,.dd2 ").hide();
    });
   $("#sav1").click(function(){
        $(".add2 ").show();
    });
    */
    
    });

</script>
                <form hidden class="sss" id="frm7" method="post" action="<?php echo$_SERVER["PHP_SELF"];?>">
        product name:   <input type="text3" name="pname" ><br><br>
                  image link:   <input type="text3" name="ilink" ><br><br>
                 Discribtion <input type="text3" name="discribtion" ><br><br>
                  <input type="submit" name="uploadButton"  value="submit">

</form>
<!--
        <button hidden class="dd" id="add88"   onclick="myFunction22()">add8</button>
          <button hidden class="dd2" id="add882"   onclick="myFunction32()">add link </button>
       <button hidden class="sav" id="sav1">save changes</button>

        <script> 
/*
function myFunction22() {
    var x = document.getElementById("frm7");
    var text = "";
   var i=0;

    text = x.elements[0].value;
         document.getElementById("name1").innerHTML = text;
         
         
    
         }
          function myFunction32() {
    var x = document.getElementById("frm7");
    var text = "";
   var i=0;

    text = x.elements[0].value;
         document.getElementById("").innerHTML = text;}
         <?php
//$imagelink=text;

         ?>  */
        </script> -->
                 <div hidden class=" new1 col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                              <button type="button" class="btn btn-default btn-lg" id="myButton">   <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span> view </button>
                          <script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "file:///C:/Users/Ahmed/Downloads/Compressed/bestprice/New%20folder/startbootstrap-agency-gh-pages/mainpage.html";
    };
</script>
                            </div>
                        </div>
                        <img src="<?php echo"img/".$imagelink; ?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4 ><?php echo $productname;?></h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                 <!-- end product 2 and start hidden product 3 -->
                    <!-- hidden products -->
                <script>

 $(document).ready(function(){
    $("#btn3").click(function(){
     $(".new2 ,.fff ,.ff,.sav2").show();

    });
     $("#btn3").click(function(){
        $(".add2 ").hide();
    });
    $("#sav2").click(function(){
        $(".ff,.sav2,.fff ").hide();
    });
    $("#sav2").click(function(){
        $(".add3 ").show();
    });
    
    
    });

</script>
                <form hidden class="fff" id="frm8" action="/action_page.php">
        product name:   <input type="text3" name="lname" value="Duck"><br><br>
          image link:   <input type="text3" name="lname" value="your_link"><br><br>

</form> 
        <button hidden class="ff" id="add99"   onclick="myFunction23()">add</button>
 <button hidden class="ff2" id="add992"   onclick="myFunction32()">add link </button>
       <button hidden class="sav2" id="sav2">save changes</button>


        <script>

function myFunction23() {
    var x = document.getElementById("frm8");
    var text = "";
   var i=0;

    text = x.elements[0].value;
         document.getElementById("name2").innerHTML = text;
         
         
    
         }
        </script>
                 <div hidden class=" new2 col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                              <button type="button" class="btn btn-default btn-lg" id="myButton1">   <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span> view </button>
                          <script type="text/javascript">
    document.getElementById("myButton1").onclick = function () {
        location.href = "file:///C:/Users/Ahmed/Downloads/Compressed/bestprice/New%20folder/startbootstrap-agency-gh-pages/mainpage.html";
    };
</script>
                            </div>
                        </div>
                        <img src="image" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4 id="name2"></h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                 
                  <!-- end product 2 and start hidden product 3 -->
                    <!-- hidden products -->
                <script>

 $(document).ready(function(){
    $("#btn4").click(function(){
     $(".new3 ,.ttt ,.tt,.sav3").show();

    });
     $("#btn4").click(function(){
        $(".add3 ").hide();
    });
    $("#sav3").click(function(){
        $(".tt,.sav3,.ttt ").hide();
    });
   
    
    
    });

</script>
<!--                <form hidden class="ttt" id="frm9" action="/action_page.php">
        product name:   <input type="text3" name="lname" value="Duck"><br><br>
</form> 
        <button hidden class="tt" id="add97"   onclick="myFunction28()">add</button>
                    <form hidden class="fucki" action = "" method = "POST" enctype = "multipart/form-data">
         <input type = "file" name = "image" />
                  <input type = "submit"/>

      </form >
       <button hidden class="sav3" id="sav3">save changes</button>
-->

        <script>

function myFunction28() {
    var x = document.getElementById("frm9");
    var text = "";
   var i=0;

    text = x.elements[0].value;
         document.getElementById("name3").innerHTML = text;
         
         
    
         }
        </script>
                 <div hidden class=" new3 col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                              <button type="button" class="btn btn-default btn-lg" id="myButton2">   <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span> view </button>
                          <script type="text/javascript">
                            
                            
    document.getElementById("myButton2").onclick = function () {
        location.href = "file:///C:/Users/Ahmed/Downloads/Compressed/bestprice/New%20folder/startbootstrap-agency-gh-pages/mainpage.html";
    };
</script>
                            </div>
                        </div>
                         <img src="<?php echo "Uploads/".$file_name;?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4 id="name3"></h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                 
                 
                 
            </div>
        </div>

 <div class="portfolio-hover-content">
                              <button  type="button" id= "btn2" class=" add btn btn-default btn-lg">   <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span> add new product</button>
                            </div>
      <div  hidden class=" add2 portfolio-hover-content">
                              
                            </div>
         <div  hidden class=" add3 portfolio-hover-content">
                              
                            </div></section>
    
    
    <!-- Insert your content here -->
 


</body>

</html>
