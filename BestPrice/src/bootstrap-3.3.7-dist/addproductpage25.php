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
    $proplace=$proprice=$prodate="";
        if (empty($_POST["place"])) {
    //$rname = "link is required";
    
  } else {
    $proplace = test_input($_POST["place"]);
    // check if name only contains letters and whitespace
    

    }
        if (empty($_POST["price"])) {
   // $rname = "link is required";
    
  } else {
    $proprice = test_input($_POST["price"]);
    // check if name only contains letters and whitespace
    

    }
        if (empty($_POST["date22"])) {
    //$rname = "link is required";
    
  } 


    $servername = "localhost";
  $username = "root";
$password = "";
$dbname = "newdatabase";


// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 //Create database
$prodate =date ('Y-m-d h:i');
$sql = "INSERT INTO comments (pname,supplier,price, tedata, user)
VALUES ('$productname', '$proplace','$proprice','$prodate','ahmed')";


if ($conn->query($sql) === TRUE) {

   // echo "New record created successfully";
} else {

    //echo "Error: "  . $conn->error;
}

$conn->close();
    /*
    7amo  
     3ayezen n7ot productname ,  file_name fe row 30  

    */

}


?>
<!doctype html>

<html lang="en">
<head>
    <title>add products page25</title>
     <meta charset="utf-8">
          <!--  ie -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- first meta mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if lt IE 9]>
    
    <![endif]-->
    <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/jquery-3.1.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/plugins.js"></script>
     <link rel='stylesheet'href='css/bootstrap.css'/>
    <link rel='stylesheet'href='best3.css'/>
        
</head>
<body>
<section>
 


<script>
function myFunction() {
    var btn = document.createElement("tablestriped");
    document.body.appendChild(btn);
}
</script>



    
    <div class="images  col-xs-6 col-xs-pull-2 ">
       
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
$k="";
foreach ($_POST as $name => $val)
{
  echo $name."hh";
     $k= $name ;
}

$sql = 'SELECT filename FROM myguestsss WHERE ID='.$k;
$result = $conn->query($sql);
$row = $result->fetch_assoc();
            echo'<img class= "center-block" src="'.$row["filename"].'" width=50% alt="">';
            ?>
                
        </div>        
    </div>
    </div>
    
 <script>
 $(document).ready(function(){
    $("#add88").click(function(){
        $(".ssss , .dd").hide();
    });
     
    
    
    });

</script>

<div class="lead col-xs-4 " >
    <h1 class="ddjd">


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
$k="";
foreach ($_POST as $name => $val)
{
     $k= $name ;
}
$sql = 'SELECT productname,description FROM myguestsss WHERE ID='.$k;
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo $row["productname"];
echo "<br><br>";
echo $row["description"];
?>
  
</h1>
            <p   id= "dicript" class="lead"> add aldescription ya hamada</p>
            <br>
            <br>
            <br>
              

        <button id="buttonLike1" class="like btn btn-success">Like <span id="spanButtonLike1" class="badge"> 0 </span></button>

        <script>

function myFunction22() {
    var x = document.getElementById("frm7");
    var text = "";
   var i=0;

    text = x.elements[0].value;
         document.getElementById("dicript").innerHTML = text;
         
                 if(document.getElementById('button').clicked == true)
{
   <?php
 


$disname="";
$discript="";
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
//*****************************************\\\\\\\\\\\\\\\\
     if (empty($_POST["disname"])) {
    $rmessege = "Your discription please ^_^";
    
  } else {
    $disname = test_input($_POST["disnameis"]);
    
        $discript=$disname;
  }

  /*  7amo   3ayzen hena discript*/

//*****************************************\\\\\\\\\\\\\\\\
   /*  if (empty($_POST["xphone"])) {
    $rphone = "Phone is required";
    
  } else {
    $xphone = test_input($_POST["xphone"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9]*$/",$xphone)) {
      $rphone= "Only Numbers allowed";     
      
    }else{
        $PHONE=$xphone;
    }
}*/
//*****************************************\\\\\\\\\\\\\\\\


}


   ?>
}
    
         }
        </script>
</div>    </div>
<h1>kk</h1>
    <!-- table of prices-->

    <div class="col-md-4 col-md-pull-2  col-xs-12 col-xs-pull-8">
    <section class="tablo">
    <div class="container fu">
        <br>
        <br>
        <br>
        <br>
      
    <table id = "sajed" class="  table table-striped">
  <thead>
    <tr>
      <th class="ah8">#</th>
      <th class="ah8">the supplier</th>
     <th class="ah8">price</th>
      <th class="ah8">date</th>
      <th class="ah8">user name</th>

    </tr>
  </thead>
  <tbody>
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

$sql = "SELECT pname, supplier, price, tedata, user FROM comments";
$result = $conn->query($sql);
$i=1;
if ($result->num_rows > 0) {
     // output data of each row
  
     while($row = $result->fetch_assoc()) {
      
  echo '<tr hidden class="r1"></tr>
      
<th class="ah7"scope="row">'.$i.'</th>
<td class="ah9"id="price1" >'. $row["supplier"].'</td>
      <td class="ah7"id="place1">'. $row["price"].'</td> 
      <td class="ah9" id="date1">'. $row["tedata"].'</td>
        <td class="ah9">'.$row["user"].'</td>';
        $i++;
      }}
   $conn->close();
?>

  </tbody>
</table>
      <script>
        
       //like   

       var buttonLike = document.getElementById('buttonLike1'),
    spanButtonLike = document.getElementById('spanButtonLike1'),
    i = 0;
buttonLike.onclick = function () {

    'use strict';
    
// dislike
 var buttonLike = document.getElementById('buttonLike11'),
    spanButtonLike = document.getElementById('spanButtonLike11'),
    j = 0;

buttonLike.onclick = function () {

    'use strict';

    if (j >= 999) {

        spanButtonLike11.textContent = (j + 1) / 1000;
        spanButtonLike11.textContent = spanButtonLike.textContent + 'K';
        j = j + 1;

    } else {

        spanButtonLike11.textContent = j + 1;
        j = j + 1;
    }

};


        </script>
    <br>
    <br>
    <br>
    <br>
    <br>
    <form class="frm1"id="frm1" method="post" action="<?php echo$_SERVER["PHP_SELF"];?>">
        
  place:  <input type="text1" name="place" >
  price:  <input type="text2" name="price" >
     <input type="submit" name="uploadButton"  value="Add the comment">

</form> 
<br>
<br>
<br>
<br>
    </body>
    </html>
