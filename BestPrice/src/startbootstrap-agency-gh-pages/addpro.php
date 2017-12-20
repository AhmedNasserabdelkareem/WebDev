<?php
$flag =0;
$imagelink="file:///C:/Users/Ahmed/Desktop/17202965_1302825663130471_5909456626206454997_n.jpg";
//if ($_SERVER["REQUEST_METHOD"] == 'POST'&& isset($_POST['gmail'])) {
  

//$flag=1;
  //}


   if(isset($_FILES['image'])){
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
   }
   function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$lname="";
$productname="";
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
 if (empty($_POST["lname"])) {
    $rname = "Product Name is required";
    
  } else {
    $lname = test_input($_POST["lname"]);
    // check if name only contains letters and whitespace
    $productname=$lname;

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
$sql = "CREATE TABLE if not exists MyGuestsss ( 
filename VARCHAR(50) ,
productname VARCHAR(30)

)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuestsss created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$sql = "INSERT INTO MyGuestsss (filename, productname)
VALUES ($file_name, '$productname')";
echo "hihi";

if ($conn->query($sql) === TRUE) {

    echo "New record created successfully";
} else {

    echo "Error: "  . $conn->error;
}

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

    <title>add product</title>

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
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                               <button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span> view
</button>
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
                </div>
                <!-- hidden products -->
                <script >
              
/*<?php
//if ($flag==1){
 
  
   
  //  echo "
    //$('#btn2').click(function(){
  //   $('.new1 ,.sss ,.dd,.sav,.fucki').show();
//
    //});
    // $('#btn2').click(function(){
      //  $('.add ').hide();
    //});" ;
    
    
//}else{
 // echo  

//}


 ?>*/

$(document).ready(function(){

    $('#btn2').click(function(){
     $('.new1 ,.sss ,.dd,.dd2,.sav,.fucki').show();

    });
     $('#btn2').click(function(){
        $('.add ').hide();
    });
     $("#sav1").click(function(){
        $(".dd,.sav,.sss ").hide();
    });
   $("#sav1").click(function(){
        $(".add2 ").show();
    });
    });
  
   
    
    
    });;;
</script>
                <form hidden class="sss" id="frm7" action="/action_page.php">
        product name:   <input type="text3" name="lname" value="Duck"><br><br>
        image link:   <input type="text3" name="lname" value="your_link"><br><br>

</form> 
        <button hidden class="dd" id="add88"   onclick="myFunction22()">add name </button>
             <form hidden class="fucki"  enctype = "multipart/form-data">
                 
          <button hidden class="dd2" id="add882"   onclick="myFunction32()">add link </button>


      </form >
       <button hidden id="add" class="sav" id="sav1" >save changes</button>

        <script>

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
         document.getElementById("name1").innerHTML = text;
         <?php
//$imagelink=text;
         ?>
         
        
         
    
         }
        </script>
                 <div hidden class=" new1 col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                              <button type="button" class="btn btn-default btn-lg" id="myButton">   <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span> view </button>
                          <script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "file:///E:/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/HTML-3%20-%20Copy.html";
    };
</script>
                            </div>
                        </div>
                        <img src= <?php  echo '$imagelink' ; ?> class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4 id="name1"></h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
            </div>
        </div>

 <div class="portfolio-hover-content">
                              <button  type="button" id= "btn2" class=" add btn btn-default btn-lg">   <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span> add new product</button>
                            </div>    </section>
    
    
    <!-- Insert your content here -->
 
<?php 

?>

</body>

</html>
