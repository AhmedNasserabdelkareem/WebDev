<?php
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
    <title><!-- Insert your title here --></title>
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
       
            
            <img class= "center-block" src="" width=50% alt="">
            
                
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
    <h1 class="ddjd"> add alname ya hamada</h1>
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

$sql = "SELECT pname, supplier, price, tedata, user FROM comments where pname='lenovo'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
     // output data of each row
  $i=0;
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
<!-- 
<th class="ah7"scope="row">'.$i.'</th>
      <td class="ah9"id="price1" >'. $row["supplier"].'</td>
      <td class="ah7"id="place1">'. $row["price"].'</td> 
      <td class="ah9" id="date1">'. $row["tedata"].'</td>
        <td class="ah9">'.$row["user"].'</td>    




    <tr hidden class="r1">
      <th class="ah7"scope="row">1</th>
      <td class="ah9"id="price1" ></td>
      <td class="ah7" ><</td>
      <td class="ah9" id="date1"></<td class="ah9">
       <td class="ah9"></<td class="ah9">

       </tr>

   
<button id="buttonLike1" class="like btn btn-success">Like <span id="spanButtonLike1" class="badge"> 0 </span></button>
          <button id="buttonLike11" class="like btn btn-danger">disLike <span id="spanButtonLike11" class="badge"> 0 </span></button>
    <tr hidden class="r2">
      <th class="ah7"scope="row">2</th>
      <td class="ah9"id="price2"></td>
      <td class="ah7" id="place2"></td>
     <td class="ah9"id="date2"></td>
       <td class="ah9" >   <button id="buttonLike2" class="like btn btn-success">Like <span id="spanButtonLike2" class="badge"> 0 </span></button></<td class="ah9">
          <td class="ah9" >   <button id="buttonLike22" class="like btn btn-danger">disLike <span id="spanButtonLike22" class="badge"> 0 </span></button></<td class="ah9">

    </tr>
    <tr hidden class="r3">
      <th class="ah7"scope="row">3</th>
      <td class="ah9"id="price3"></td>
      <td class="ah7" id="place3"></td>
     <td class="ah9"id="date3"></td>
       <td class="ah9" >   <button id="buttonLike3" class="like btn btn-success">Like <span id="spanButtonLike3" class="badge"> 0 </span></button></<td class="ah9">
          <td class="ah9" >   <button id="buttonLike33" class="like btn btn-danger">disLike <span id="spanButtonLike33" class="badge"> 0 </span></button></<td class="ah9">

    </tr>
    <tr hidden class="r4">
      <th class="ah7"scope="row">4</th>
        <td class="ah9" id="price4"></ <td class="ah9">
        <td class="ah7" id="place4"></td>
        <td class="ah9"id="date4"></td>
          <td class="ah9" >   <button id="buttonLike4" class="like btn btn-success">Like <span id="spanButtonLike4" class="badge"> 0 </span></button></<td class="ah9">
          <td class="ah9" >   <button id="buttonLike44" class="like btn btn-danger">disLike <span id="spanButtonLike44" class="badge"> 0 </span></button></<td class="ah9">

    </tr>
    <tr hidden class="r5">
      <th class="ah7"scope="row">5</th>
       <td class="ah9" id="price5"></ <td class="ah9">
      <td class="ah7" id="place5"></td>
       <td class="ah9"id="date5"></td>
         <td class="ah9" >   <button id="buttonLike5" class="like btn btn-success">Like <span id="spanButtonLike5" class="badge"> 0 </span></button></<td class="ah9">
          <td class="ah9" >   <button id="buttonLike55" class="like btn btn-danger">disLike <span id="spanButtonLike55" class="badge"> 0 </span></button></<td class="ah9">

    </tr>
    <tr hidden class="r6">
      <th class="ah7"scope="row">6</th>
      <td class="ah9"id="price6"></td>
      <td class="ah7" id="place6"></td>
      <td class="ah9"id="date6"></td>
        <td class="ah9" >   <button id="buttonLike6" class="like btn btn-success">Like <span id="spanButtonLike6" class="badge"> 0 </span></button></<td class="ah9">
          <td class="ah9" >   <button id="buttonLike66" class="like btn btn-danger">disLike <span id="spanButtonLike66" class="badge"> 0 </span></button></<td class="ah9">

    </tr>
    <tr hidden class="r7">
      <th class="ah7"scope="row">7</th>
      <td class="ah9"id="price7"></td>
      <td class="ah7" id="place7"></td>
      <td class="ah9"id="date7"></td>
        <td class="ah9" >   <button id="buttonLike7" class="like btn btn-success">Like <span id="spanButtonLike7" class="badge"> 0 </span></button></<td class="ah9">
          <td class="ah9" >   <button id="buttonLike77" class="like btn btn-danger">disLike <span id="spanButtonLike77" class="badge"> 0 </span></button></<td class="ah9">

    </tr>
    <tr hidden class="r8">
      <th class="ah7"scope="row">8</th>
        <td class="ah9" id="price8"></ <td class="ah9">
      <td class="ah7" id="place8"></td>
       <td class="ah9"id="date8"></td>
         <td class="ah9" >   <button id="buttonLike8" class="like btn btn-success">Like <span id="spanButtonLike8" class="badge"> 0 </span></button></<td class="ah9">
          <td class="ah9" >   <button id="buttonLike88" class="like btn btn-danger">disLike <span id="spanButtonLike88" class="badge"> 0 </span></button></<td class="ah9">

    </tr>
    -->
  </tbody>
</table>
      <script>
        
       //like   

       var buttonLike = document.getElementById('buttonLike1'),
    spanButtonLike = document.getElementById('spanButtonLike1'),
    i = 0;

buttonLike.onclick = function () {

    'use strict';

    if (i >= 999) {

        spanButtonLike1.textContent = (i + 1) / 1000;
        spanButtonLike1.textContent = spanButtonLike1.textContent + 'K';
        i = i + 1;

    } else {

        spanButtonLike1.textContent = i + 1;
        i = i + 1;
    }

};
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
<!--   
    


<div id="bbb">
    <p>Click "add" to add your price and place and date</p>
<button class="add11"id="add11" onclick="myFunction1()">add</button>
<button id="sav1" class="sav1" >save</button>
    <script>

 $(document).ready(function(){
    $("#sav1").click(function(){
     $(".add11,.sav1").hide();

    });
    $("#sav1").click(function(){
     $(".add22,.sav2 ").show();

    });
     $("#add11").click(function(){
     $(".r1 ").show();

    });
    });

</script>
<button hidden class="add22"id="add22" onclick="myFunction2()">add</button>
<button hidden id="sav2" class="sav2" >save</button>
 <script>

 $(document).ready(function(){
    $("#sav2").click(function(){
     $(".add22,.sav2").hide();

    });
    $("#sav2").click(function(){
     $(".add33,.sav3").show();

    });
     $("#add22").click(function(){
     $(".r2 ").show();

    });
    });

</script>
<button hidden class="add33" id="add33" onclick ="myFunction3()">add</button>
<button hidden id="sav3" class="sav3" >save</button>
<script>

 $(document).ready(function(){
    $("#sav3").click(function(){
     $(".add33,.sav3").hide();

    });
    $("#sav3").click(function(){
     $(".add44,.sav4").show();

    });
     $("#add33").click(function(){
     $(".r3 ").show();

    });
    });

</script>
<button hidden class="add44" id="add44" onclick="myFunction4()">add</button>
<button hidden id="sav4" class="sav4" >save</button>
<script>

 $(document).ready(function(){
    $("#sav4").click(function(){
     $(".add44,.sav4").hide();

    });
    $("#sav4").click(function(){
     $(".add55,.sav5").show();

    });
     $("#add44").click(function(){
     $(".r4 ").show();

    });
    });

</script>
<button hidden class="add55" id="add55" onclick="myFunction5()">add</button>
<button hidden id="sav5" class="sav5" >save</button>
<script>

 $(document).ready(function(){
    $("#sav5").click(function(){
     $(".add55,.sav5").hide();

    });
    $("#sav5").click(function(){
     $(".add66,.sav6").show();

    });
     $("#add55").click(function(){
     $(".r5 ").show();

    });
    });

</script>
<button hidden class="add66" id="add66" onclick="myFunction6()">add</button>
<button hidden id="sav6" class="sav6" >save</button>
<script>

 $(document).ready(function(){
    $("#sav6").click(function(){
     $(".add66,.sav6").hide();

    });
    $("#sav6").click(function(){
     $(".add77,.sav7").show();

    });
     $("#add66").click(function(){
     $(".r6 ").show();

    });
    });

</script>
<button hidden class="add77" id="add77" onclick="myFunction7()">add</button>
<button hidden id="sav7" class="sav7" >save</button>
<script>

 $(document).ready(function(){
    $("#sav7").click(function(){
     $(".add77,.sav7").hide();

    });
    $("#sav7").click(function(){
     $(".add88,.sav8").show();

    });
     $("#add77").click(function(){
     $(".r7 ").show();

    });
    });

</script>
<button hidden class="add88" id="add88" onclick="myFunction8()">add</button>
<button hidden  id="sav8" class="sav8" >save</button>
<script>

 $(document).ready(function(){
    $("#sav8").click(function(){
     $(".add88,.sav8,.frm1").hide();

    });
      $("#add88").click(function(){
      $(".r8").show();

    });
    $("#sav8").click(function(){
     $(".add99 ,.r8").show();

    });
   
    });

</script>
<button hidden class="add99"> add more prices</button>
 </div></div>
    </section>
    
<script>
function myFunction1() {
    var x = document.getElementById("frm1");
    var text = "";
   var i=0;

    text = x.elements[0].value;
         document.getElementById("price1").innerHTML = text;
          text = x.elements[1].value;
         document.getElementById("place1").innerHTML = text;
           text = x.elements[2].value;
         document.getElementById("date1").innerHTML = text;
         
    
         }
         function myFunction2() {
            document.getElementById("add11").disabled = true;
    var x = document.getElementById("frm1");
    var text = "";
   var i=0;
   
    text = x.elements[0].value;
         document.getElementById("price2").innerHTML = text;
          text = x.elements[1].value;
         document.getElementById("place2").innerHTML = text;
           text = x.elements[2].value;
         document.getElementById("date2").innerHTML = text;
         }
         function myFunction3() {
            document.getElementById("add22").disabled = true;
    var x = document.getElementById("frm1");
    var text = "";
   var i=0;

    text = x.elements[0].value;
         document.getElementById("price3").innerHTML = text;
          text = x.elements[1].value;
         document.getElementById("place3").innerHTML = text;
           text = x.elements[2].value;
         document.getElementById("date3").innerHTML = text;
         
    
         }
           function myFunction4() {
            document.getElementById("add33").disabled = true;
    var x = document.getElementById("frm1");
    var text = "";
   var i=0;

    text = x.elements[0].value;
         document.getElementById("price4").innerHTML = text;
          text = x.elements[1].value;
         document.getElementById("place4").innerHTML = text;
           text = x.elements[2].value;
         document.getElementById("date4").innerHTML = text;
         
    
         }
         function myFunction5() {
            document.getElementById("add44").disabled = true;
    var x = document.getElementById("frm1");
    var text = "";
   var i=0;

    text = x.elements[0].value;
         document.getElementById("price5").innerHTML = text;
          text = x.elements[1].value;
         document.getElementById("place5").innerHTML = text;
           text = x.elements[2].value;
         document.getElementById("date5").innerHTML = text;
         
    
         }
         function myFunction6() {
            document.getElementById("add55").disabled = true;
    var x = document.getElementById("frm1");
    var text = "";
   var i=0;

    text = x.elements[0].value;
         document.getElementById("price6").innerHTML = text;
          text = x.elements[1].value;
         document.getElementById("place6").innerHTML = text;
           text = x.elements[2].value;
         document.getElementById("date6").innerHTML = text;
         
    
         }
         
  function myFunction7() {
            document.getElementById("add66").disabled = true;
    var x = document.getElementById("frm1");
    var text = "";
   var i=0;

    text = x.elements[0].value;
         document.getElementById("price7").innerHTML = text;
          text = x.elements[1].value;
         document.getElementById("place7").innerHTML = text;
           text = x.elements[2].value;
         document.getElementById("date7").innerHTML = text;
         
    
         }
         function myFunction8() {
            document.getElementById("add77").disabled = true;
    var x = document.getElementById("frm1");
    var text = "";
   var i=0;

    text = x.elements[0].value;
         document.getElementById("price8").innerHTML = text;
          text = x.elements[1].value;
         document.getElementById("place8").innerHTML = text;
           text = x.elements[2].value;
         document.getElementById("date8").innerHTML = text;
         
    
         }
         function myFunction9() {
            document.getElementById("add88").disabled = true;
         }
</script>
-->
    <!--end of the table-->
   
    <!-- start the slide show of opinions-->
        
    
    <!-- Insert your content here -->

    </body>
    </html>
