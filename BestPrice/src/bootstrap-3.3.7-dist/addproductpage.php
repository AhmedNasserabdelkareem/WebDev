<?php
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
echo "hi";
      /*
    7amo  
     3ayezen n7ot productname ,  file_name fe row 21   
     
    */

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



    <div class="container">
         <form action = "" method = "POST" enctype = "multipart/form-data">
         <input type = "file" name = "image" />
         <input type = "submit"/>
          <img src="<?php echo "Uploads/".$file_name;?>" width="1500" height="550"/>
         
      </form>
        
       
            
        </div>
    <div class="images  col-xs-6 col-xs-pull-2 ">
       
            
            <img class= "center-block" src="" width=50% alt="laptop">
            
                
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
    <h1 class="ddjd">lenovo ideapad <span>310</span></h1>
            <p   id= "dicript" class="lead"> </p>
            <br>
            <br>
            <br>
               <form class="ssss"id="frm7" action="/action_page.php">
         discription:   <input type="text3" name="disname" value="Duck"><br><br>
</form> 
        <button class="dd" id="add88"   onclick="myFunction22()">add8</button>

       
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
   function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


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
      <th class="ah8">the supplieraa</th>
     <th class="ah8">price</th>
      <th class="ah8">date</th>
        <th class="ah8">likes</th>
      <th class="ah8">dislikes</th>
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

$sql = 'SELECT `pname`, `supplier`, `price`, `tedata`, `user` FROM `comments` WHERE pname= "lenovo"';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
     // output data of each row
  $i=0;
     while($row = $result->fetch_assoc()) {
      
       
  echo '
    <tr hidden class="r1">
      <th class="ah7"scope="row">'.$i.'</th>
      <td class="ah9"id="price1" >'. $row["supplier"].'</td>
      <td class="ah7"id="place1">'. $row["price"].'</td>
      <td class="ah9" id="date1">'. $row["tedata"].'</<td class="ah9">
       <td class="ah9" >   <button id="buttonLike1" class="like btn btn-success">Like <span id="spanButtonLike1" class="badge"> 0 </span></button></<td class="ah9">
          <td class="ah9" >   <button id="buttonLike11" class="like btn btn-danger">disLike <span id="spanButtonLike11" class="badge"> 0 </span></button></<td class="ah9">

    </tr>
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

//like 
 var buttonLike = document.getElementById('buttonLike2'),
    spanButtonLike = document.getElementById('spanButtonLike2'),
    ii = 0;

buttonLike.onclick = function () {

    'use strict';

    if (ii >= 999) {

        spanButtonLike2.textContent = (ii + 1) / 1000;
        spanButtonLike2.textContent = spanButtonLike1.textContent + 'K';
        ii = ii + 1;

    } else {

        spanButtonLike2.textContent = ii + 1;
        ii = ii + 1;
    }

};
// dislike
 var buttonLike = document.getElementById('buttonLike22'),
    spanButtonLike = document.getElementById('spanButtonLike22'),
    jj = 0;

buttonLike.onclick = function () {

    'use strict';

    if (jj >= 999) {

        spanButtonLike22.textContent = (jj + 1) / 1000;
        spanButtonLike22.textContent = spanButtonLike.textContent + 'K';
        jj = jj + 1;

    } else {

        spanButtonLike22.textContent = jj + 1;
        jj = jj + 1;
    }

};

//like 
 var buttonLike = document.getElementById('buttonLike3'),
    spanButtonLike = document.getElementById('spanButtonLike3'),
    iii = 0;

buttonLike.onclick = function () {

    'use strict';

    if (iii >= 999) {

        spanButtonLike3.textContent = (iii + 1) / 1000;
        spanButtonLike3.textContent = spanButtonLike1.textContent + 'K';
        iii = iii + 1;

    } else {

        spanButtonLike3.textContent = iii + 1;
        iii = iii + 1;
    }

};
// dislike
 var buttonLike = document.getElementById('buttonLike33'),
    spanButtonLike = document.getElementById('spanButtonLike33'),
    jjj = 0;

buttonLike.onclick = function () {

    'use strict';

    if (jjj >= 999) {

        spanButtonLike33.textContent = (jjj + 1) / 1000;
        spanButtonLike33.textContent = spanButtonLike.textContent + 'K';
        jjj = jjj + 1;

    } else {

        spanButtonLike33.textContent = jjj + 1;
        jjj = jjj + 1;
    }

};

//like 
 var buttonLike = document.getElementById('buttonLike4'),
    spanButtonLike = document.getElementById('spanButtonLike4'),
    iiii = 0;

buttonLike.onclick = function () {

    'use strict';

    if (iiii >= 999) {

        spanButtonLike4.textContent = (iiii + 1) / 1000;
        spanButtonLike4.textContent = spanButtonLike1.textContent + 'K';
        iiii = iiii + 1;

    } else {

        spanButtonLike4.textContent = iiii + 1;
        iiii = iiii + 1;
    }

};
// dislike
 var buttonLike = document.getElementById('buttonLike44'),
    spanButtonLike = document.getElementById('spanButtonLike44'),
    jjjj = 0;

buttonLike.onclick = function () {

    'use strict';

    if (jjjj >= 999) {

        spanButtonLike44.textContent = (jjjj + 1) / 1000;
        spanButtonLike44.textContent = spanButtonLike.textContent + 'K';
        jjjj = jjjj + 1;

    } else {

        spanButtonLike44.textContent = jjjj + 1;
        jjjj = jjjj + 1;
    }

};

//like 
 var buttonLike = document.getElementById('buttonLike5'),
    spanButtonLike = document.getElementById('spanButtonLike5'),
    i5 = 00;

buttonLike.onclick = function () {

    'use strict';

    if (i5 >= 999) {

        spanButtonLike5.textContent = (i5 + 1) / 1000;
        spanButtonLike5.textContent = spanButtonLike1.textContent + 'K';
        i5 = i5 + 1;

    } else {

        spanButtonLike5.textContent = i5+ 1;
        i5 = i5 + 1;
    }

};
// dislike
 var buttonLike = document.getElementById('buttonLike55'),
    spanButtonLike = document.getElementById('spanButtonLike55'),
    j5= 0;

buttonLike.onclick = function () {

    'use strict';

    if (j5 >= 999) {

        spanButtonLike55.textContent = (j5 + 1) / 1000;
        spanButtonLike55.textContent = spanButtonLike.textContent + 'K';
        j5 = j5 + 1;

    } else {

        spanButtonLike55.textContent = j5 + 1;
        j5 = j5+ 1;
    }

};
//like 
 var buttonLike = document.getElementById('buttonLike6'),
    spanButtonLike = document.getElementById('spanButtonLike6'),
    i6 = 00;

buttonLike.onclick = function () {

    'use strict';

    if (i6 >= 999) {

        spanButtonLike6.textContent = (i6 + 1) / 1000;
        spanButtonLike6.textContent = spanButtonLike1.textContent + 'K';
        i6 = i6 + 1;

    } else {

        spanButtonLike6.textContent = i6+ 1;
        i6 = i6 + 1;
    }

};
// dislike
 var buttonLike = document.getElementById('buttonLike66'),
    spanButtonLike = document.getElementById('spanButtonLike66'),
    j6= 0;

buttonLike.onclick = function () {

    'use strict';

    if (j6 >= 999) {

        spanButtonLike66.textContent = (j6 + 1) / 1000;
        spanButtonLike66.textContent = spanButtonLike.textContent + 'K';
        j6 = j6 + 1;

    } else {

        spanButtonLike66.textContent = j6+ 1;
        j6 = j6+ 1;
    }

};

//like 
 var buttonLike = document.getElementById('buttonLike7'),
    spanButtonLike = document.getElementById('spanButtonLike7'),
    i7 = 00;

buttonLike.onclick = function () {

    'use strict';

    if (i7 >= 999) {

        spanButtonLike7.textContent = (i7 + 1) / 1000;
        spanButtonLike7.textContent = spanButtonLike1.textContent + 'K';
        i7 = i7 + 1;

    } else {

        spanButtonLike7.textContent = i7+ 1;
        i7 = i7 + 1;
    }

};
// dislike
 var buttonLike = document.getElementById('buttonLike77'),
    spanButtonLike = document.getElementById('spanButtonLike77'),
    j7= 0;

buttonLike.onclick = function () {

    'use strict';

    if (j7 >= 999) {

        spanButtonLike77.textContent = (j7 + 1) / 1000;
        spanButtonLike77.textContent = spanButtonLike.textContent + 'K';
        j7 = j7 + 1;

    } else {

        spanButtonLike77.textContent = j7+ 1;
        j7 = j7+ 1;
    }

};

//like 
 var buttonLike = document.getElementById('buttonLike8'),
    spanButtonLike = document.getElementById('spanButtonLike8'),
    i8 = 00;

buttonLike.onclick = function () {

    'use strict';

    if (i8 >= 999) {

        spanButtonLike8.textContent = (i8 + 1) / 1000;
        spanButtonLike8.textContent = spanButtonLike1.textContent + 'K';
        i8 = i8 + 1;

    } else {

        spanButtonLike8.textContent = i8+ 1;
        i8 = i8 + 1;
    }

};
// dislike
 var buttonLike = document.getElementById('buttonLike88'),
    spanButtonLike = document.getElementById('spanButtonLike88'),
    j8= 0;

buttonLike.onclick = function () {

    'use strict';

    if (j8 >= 999) {

        spanButtonLike88.textContent = (j8 + 1) / 1000;
        spanButtonLike88.textContent = spanButtonLike.textContent + 'K';
        j8 = j8 + 1;

    } else {

        spanButtonLike88.textContent = j8+ 1;
        j8 = j8+ 1;
    }

};


        </script>
    <br>
    <br>
    <br>
    <br>
    <br>
   
    <form class="frm1"id="frm1" action="/action_page.php">
        
  place:  <input type="text1" name="fname" value="Donald">
  price:  <input type="text2" name="lname" value="Duck">
  date:   <input type="text3" name="dname" value="Duck"><br><br>
</form> 


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
    <!--end of the table-->
   
    <!-- start the slide show of opinions-->
    
    
    
    <!-- Insert your content here -->
    </div></div>
</body>
</html>
