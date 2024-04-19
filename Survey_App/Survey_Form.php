<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Taking Survey Page</title>
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <link href="materialize/css/materialize.min.css" rel="stylesheet" />
</head>

<style type="text/css">

  .survey .mainhead {

    width: 99%;
    position:fixed;
    margin:-15% 0;
    background-color:#0D7377;
    font-size:30px;
    text-align:center;
    color:black;

  }

  .survey form {

    margin:15% 0;

  }

  .survey .top-lable {
        font-size: 30px;
  }

  .survey .checkbox-inputs {
        font-size: 25px;
  }

  .survey .lables-inputs {
        font-size: 25px;
        margin:0 5%;
  }
  .survey .lables-inputs .surname {
    font-size: 20px;
    margin:0 14.6%;
  }
  .survey .lables-inputs .names {
    font-size: 20px;
    margin:0 11.8%;
  }
  .survey .lables-inputs .contact {
    font-size: 20px;
    margin:0 8%;
  }
  .survey .lables-inputs .date {
    font-size: 20px;
    margin:0 18.7%;
  }
  .survey .lables-inputs .age {
    font-size: 20px;
    margin:0 19.3%;
  }

  .survey .lables-inputs select {
    font-size: 25px;
    margin:0 15.3%;
  }

  .survey .favaurite-food {

    margin:2% 0;

  }

  .survey .scale-table {
    margin:2% 0;
    font-size: 20px;
  }

  .survey .lables-inputs {
        font-size: 25px;
        margin:0 5%;
  }

  .survey .button-sub button{

    width:20%;
    margin:3% 40%;
	  font-size:35px;
    background-color:#E8E8E8;
	  color:black;

  }


</style>

<body>

    <div class="survey">
      
      <div class="mainhead">
    
        <h1>Take Our Survey</h1>
    
      </div>
       
	    <form action="" method="post" class="cotact">
        
        <div class="personal-details">

          <div class="top-lable">
            <label><b>Person Contact:</b></label>
          </div>

          <div class="lables-inputs">

            <br><label for="contact"><b>Choose:</b></label>
	          <select name="contact" id="contact">
            <option value="">Contact</option>
            </select>              
        
            <br><label><b>First Names</b></label>
	          <input class="names" type="text" placeholder="Enter your First Names..." name="names" required/>
        
            <br><label><b>Contact Number</b></label>
	          <input class="contact" type="text" placeholder="Your Contact Number..." name="Contact" required/>
        
            <br><label><b>Date</b></label>
            <input class="date" type="date" name="date" required/>
	
	          <br><label><b>Age</b></label>
	          <input class="age" type="number" placeholder="Enter Your Age..." name="age" required/>

          </div>
	        
        </div>
        <br>
        <hr>

        <div class="personal-details">

          <div class="top-lable">
            <label><b>Personal Details:</b></label>
          </div>

          <div class="lables-inputs">

            <br><label><b>Contact:</b></label>
	          <input class="surname" type="text" placeholder="Entrer Your Surname..." name="surname" required/>
        
            <br><label><b>First Names</b></label>
	          <input class="names" type="text" placeholder="Enter your First Names..." name="names" required/>
        
            <br><label><b>Contact Number</b></label>
	          <input class="contact" type="text" placeholder="Your Contact Number..." name="Contact" required/>
        
            <br><label><b>Date</b></label>
            <input class="date" type="date" name="date" required/>
	
	          <br><label><b>Age</b></label>
	          <input class="age" type="number" placeholder="Enter Your Age..." name="age" required/>



          </div>
	        
        </div>
        <br>
        <hr>

        <div class="favaurite-food">

          <div class="top-lable">
            <label><b>What is your favourite food? (You can choose more than 1 answer)</b></label>
          </div>

          <div class="checkbox-inputs">

            <label>
              <input type="checkbox"  name="pizza">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Pizza</b>
            </label>
        
            <br>
            <label>
              <input type="checkbox"  name="pasta">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Pasta</b>
            </label>
        
            <br>
            <label>
              <input type="checkbox"  name="pap-wors">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Pap and Wors</b>
            </label>
	
	          <br>
            <label>
              <input type="checkbox"  name="chicken-stir">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Chicken Stir Fry</b>
            </label>

            <br>
            <label>
              <input type="checkbox"  name="beef-stir">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Beef Stir Fry</b>
            </label>

            <br>
            <label>
              <input type="checkbox"  name="other">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Other</b>
            </label>

          </div>

        </div>
        <hr>


        <div class="scale-table">

          <div class="top-lable">
            <label><b>On a scale of 1 to 5 indicate whether you strongly agree to strongly disagree</b></label>
          </div>

          <table style="border:2; width:100%">

            <tr>
              <th style="background:#cccccc"></th>
              <th style="background:#cccccc">Strongly Agree<br>(1)</th>
              <th style="background:#cccccc">Agree<br>(2)</th>
              <th style="background:#cccccc">Neutral<br>(3)</th>
              <th style="background:#cccccc">Disagree<br>(4)</th>
              <th style="background:#cccccc">Strongly Disagree<br>(5)</th>
            </tr>

            <tr>
              <th>I like to eat out</th>
              <th><input type="radio" name="eatout" value="1"/></th>
              <th><input type="radio" name="eatout" value="2"/></th>
              <th><input type="radio" name="eatout" value="3"/></th>
              <th><input type="radio" name="eatout" value="4"/></th>
              <th><input type="radio" name="eatout" value="5"/></th>
            </tr>

            <tr>
              <th>I like to watch movies</th>
              <th><input type="radio" name="watchmovie" value="1"/></th>
              <th><input type="radio" name="watchmovie" value="2"/></th>
              <th><input type="radio" name="watchmovie" value="3"/></th>
              <th><input type="radio" name="watchmovie" value="4"/></th>
              <th><input type="radio" name="watchmovie" value="5"/></th>
            </tr>

            <tr>
              <th>I like to watch TV</th>
              <th><input type="radio" name="watchtv" value="1" /></th>
              <th><input type="radio" name="watchtv" value="2" /></th>
              <th><input type="radio" name="watchtv" value="3" /></th>
              <th><input type="radio" name="watchtv" value="4" /></th>
              <th><input type="radio" name="watchtv" value="5" /></th>
            </tr>

            <tr>
              <th>I like to listen to the radio</th>
              <th><input type="radio" name="listenradio" value="1" /></th>
              <th><input type="radio" name="listenradio" value="2" /></th>
              <th><input type="radio" name="listenradio" value="3" /></th>
              <th><input type="radio" name="listenradio" value="4" /></th>
              <th><input type="radio" name="listenradio" value="5" /></th>
            </tr>
          </table>

        </div>
        <br>
        <hr>

        <div class="button-sub">
          <button type="Submit" name="submit">Submit</button>
        </div>
        <hr>

	    </form>

     </div>
     
    <script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
    <script type="text/javascript" src="meterialize/js/materialize.mini.js"></script>

    <script>
      $('.date').pickdate(
        {
          selectMonths:true,
          selectYear:15
      });
    </script>
  </body>

</html>

<?php

  //connection to database
  $conn=mysqli_connect("localhost","root","","survey");

  // create short variable names
  $surname= mysqli_real_escape_string($conn,$_POST['surname']);
  $names= mysqli_real_escape_string($conn,$_POST['names']);
  $contact= mysqli_real_escape_string($conn,$_POST['Contact']);
  $date= mysqli_real_escape_string($conn,$_POST['date']);
  $age= mysqli_real_escape_string($conn,$_POST['age']);

  //run insert
  $insertclient = "INSERT INTO client (Contact, Surname, Names, Age, TodayDate) VALUES ('$contact','$surname', '$names', '$age', '$date');";
  $intclient = mysqli_query($conn,$queryclient);

  


  if(isset($_POST['submit'])) { 

    //check box variable
    $chpizza = "";
    $chpasta = "";
    $chpap = "";
    $chchicken = "";
    $chbeef = "";
    $chother = "";

    //radio button variaable
    $reat = "";
    $rmovie = "";
    $rtv = "";
    $rradio = "";

    //checking if radio button are all checked
    if($_SERVER["REQUEST_METHOD"]=="POST") {

      if(empty($_POST["pizza"]) && empty($_POST["pasta"]) && empty($_POST["pap-wors"]) && empty($_POST["chicken-stir"]) 
      && empty($_POST["beef-stir"]) && empty($_POST["other"]) ) {

        $chother = "At least check other";
        
        echo '<script type="text/javaScript">alert("'.$chother.'");</script>';
        echo '<script type="text/JavaScript"> window.location= "take_survey.php" ; </script>';

      }else {

        if(empty($_POST["eatout"]) || empty($_POST["watchmovie"]) || empty($_POST["watchtv"]) || empty($_POST["listenradio"])) {

          $reat = " Click at least one radio button in row 1 in the table' '";
          $rmovie = "Click at least one radio button in row 2 in the table' '";
          $rtv = "Click at least one radio button in row 3 in the ' ' ";
          $rradio = "Click at least one radio button in row 1 in the table' '";
  
          echo '<script type="text/javaScript">alert("'.$reat.$rmovie.$rtv.$rradio.'");</script>';
          echo '<script type="text/JavaScript"> window.location= "take_survey.php" ; </script>';
  
        }else {

          //validating and inserting data in table meal
          if(isset($_POST['pizza'])) { 
          
            $chpizza = mysqli_real_escape_string($conn,$_POST['pizza']);

            $queryfood = "SELECT * FROM food WHERE FoodID='$chpizza'";
            
            $resultfood = mysqli_query($conn,$queryfood);

            $rowfood = mysqli_fetch_array($resultfood)

            $chpizzae = $rowfood['FoodID'];
            $chname =  $rowfood['FoodName']; 
          
            $insertmeal = "INSERT INTO meal (Contact, FoodID, FooDName) VALUES ('$contact', '$chpizza', '$chname');";
            $inmeal = mysqli_query($conn,$insertmeal);

          } elseif(isset($_POST['pasta'])) {

            $chpasta = mysqli_real_escape_string($conn,$_POST['pasta']);

            $queryfood = "SELECT * FROM food WHERE FoodID='$chpasta'";

            $resultfood = mysqli_query($conn,$queryfood);

            $rowfood = mysqli_fetch_array($resultfood)

            $chpizza = $rowfood['FoodID'];
            $chname =  $rowfood['FoodName'];

            $insertmeal = "INSERT INTO meal (Contact, FoodID, FooDName) VALUES ('$contact', '$chpizza', '$chname');";
            $inmeal = mysqli_query($conn,$insertmeal);

          } elseif(isset($_POST['pap-wors'])) {

            $chpap = mysqli_real_escape_string($conn,$_POST['pap-wors']);

            $queryfood = "SELECT * FROM food WHERE FoodID='$chpap'";
          
            $resultfood = mysqli_query($conn,$queryfood);

            $rowfood = mysqli_fetch_array($resultfood)

            $chpizza = $rowfood['FoodID'];
            $chname =  $rowfood['FoodName'];

            $insertmeal = "INSERT INTO meal (Contact, FoodID, FooDName) VALUES ('$contact', '$chpizza', '$chname');";
            $inmeal = mysqli_query($conn,$insertmeal);

          } elseif(isset($_POST['chicken-stir'])) {

            $chchicken = mysqli_real_escape_string($conn,$_POST['chicken-stir']);

            $queryfood = "SELECT * FROM food WHERE FoodID='$chchicken'";

            $resultfood = mysqli_query($conn,$queryfood);

            $rowfood = mysqli_fetch_array($resultfood)

            $chpizza = $rowfood['FoodID'];
            $chname =  $rowfood['FoodName'];

            $insertmeal = "INSERT INTO meal (Contact, FoodID, FooDName) VALUES ('$contact', '$chpizza', '$chname');";
            $inmeal = mysqli_query($conn,$insertmeal);


          } elseif(isset($_POST['beef-stir'])) {

            $chbeef = mysqli_real_escape_string($conn,$_POST['beef-stir']);

            $queryfood = "SELECT * FROM food WHERE FoodID='$chbeef'";

            $resultfood = mysqli_query($conn,$queryfood);

            $rowfood = mysqli_fetch_array($resultfood)

            $chpizza = $rowfood['FoodID'];
            $chname =  $rowfood['FoodName'];

            $insertmeal = "INSERT INTO meal (Contact, FoodID, FooDName) VALUES ('$contact', '$chpizza', '$chname');";
            $inmeal = mysqli_query($conn,$insertmeal);

          } else {

            $chother = mysqli_real_escape_string($conn,$_POST['other']);

            $queryfood = "SELECT * FROM food WHERE FoodID='$chother'";

            $resultfood = mysqli_query($conn,$queryfood);

            $rowfood = mysqli_fetch_array($resultfood)

            $chpizza = $rowfood['FoodID'];
            $chname =  $rowfood['FoodName'];

            $insertmeal = "INSERT INTO meal (Contact, FoodID, FooDName) VALUES ('$contact', '$chpizza', '$chname');";
            $inmeal = mysqli_query($conn,$insertmeal);

          }

          //codition to insert value in table activity and ratting
          if(isset($_POST['eatout'])) {

            $scale = mysqli_real_escape_string($conn,$_POST['eatout']);

            $querysc = "SELECT * FROM scale WHERE ScaleID='$scale'";

            $resultsc = mysqli_query($conn,$querysc);

            $rowsc = mysqli_fetch_array($resultsc)

            $scid = $rowsc['ScaleID'];
            $scname =  $rowsc['ScaleName'];

            $queryho = "SELECT * FROM hobby WHERE Hobby='1'";

            $resultho = mysqli_query($conn,$queryho);

            $rowho = mysqli_fetch_array($resultho)

            $rdeat = $rowho['HobbyID'];
            $rdname =  $rowho['HobbyName'];

            $insertratting = "INSERT INTO ratting (ScaleID, ScaleName, HobbyID, HobbyName) VALUES ('$scid','$scname', '$rdeat', '$rdname');";
            $inmeal = mysqli_query($conn,$insertratting);

            $insertact = "INSERT INTO activity (Contact, HobbyID, HobbyName) VALUES ('$contact', '$rdeat', '$rdname');";
            $inmeal = mysqli_query($conn,$insertact);
           

          }elseif(isset($_POST['watchmovie'])) {

            $scale = mysqli_real_escape_string($conn,$_POST['watchmovie']);

            $querysc = "SELECT * FROM scale WHERE ScaleID='$scale'";

            $resultsc = mysqli_query($conn,$querysc);

            $rowsc = mysqli_fetch_array($resultsc)

            $scid = $rowsc['ScaleID'];
            $scname =  $rowsc['ScaleName'];

            $queryho = "SELECT * FROM hobby WHERE Hobby='2'";

            $resultho = mysqli_query($conn,$queryho);

            $rowho = mysqli_fetch_array($resultho)

            $rdeat = $rowho['HobbyID'];
            $rdname =  $rowho['HobbyName'];

            $insertratting = "INSERT INTO ratting (ScaleID, ScaleName, HobbyID, HobbyName) VALUES ('$scid','$scname', '$rdeat', '$rdname');";
            $inmeal = mysqli_query($conn,$insertratting);

            $insertact = "INSERT INTO activity (Contact, HobbyID, HobbyName) VALUES ('$contact', '$rdeat', '$rdname');";
            $inmeal = mysqli_query($conn,$insertact);
            

          }elseif(isset($_POST['watchtv'])) {

            $scale = mysqli_real_escape_string($conn,$_POST['watchtv']);

            $querysc = "SELECT * FROM scale WHERE ScaleID='$scale'";

            $resultsc = mysqli_query($conn,$querysc);

            $rowsc = mysqli_fetch_array($resultsc)

            $scid = $rowsc['ScaleID'];
            $scname =  $rowsc['ScaleName'];

            $queryho = "SELECT * FROM hobby WHERE Hobby='3'";

            $resultho = mysqli_query($conn,$queryho);

            $rowho = mysqli_fetch_array($resultho)

            $rdeat = $rowho['HobbyID'];
            $rdname =  $rowho['HobbyName'];

            $insertratting = "INSERT INTO ratting (ScaleID, ScaleName, HobbyID, HobbyName) VALUES ('$scid','$scname', '$rdeat', '$rdname');";
            $inmeal = mysqli_query($conn,$insertratting);

            $insertact = "INSERT INTO activity (Contact, HobbyID, HobbyName) VALUES ('$contact', '$rdeat', '$rdname');";
            $inmeal = mysqli_query($conn,$insertact);
            

          }else(isset($_POST['listenradio'])) {

            $scale = mysqli_real_escape_string($conn,$_POST['listenradio']);

            $querysc = "SELECT * FROM scale WHERE ScaleID='$scale'";

            $resultsc = mysqli_query($conn,$querysc);

            $rowsc = mysqli_fetch_array($resultsc)

            $scid = $rowsc['ScaleID'];
            $scname =  $rowsc['ScaleName'];

            $queryho = "SELECT * FROM hobby WHERE Hobby='4'";

            $resultho = mysqli_query($conn,$queryho);

            $rowho = mysqli_fetch_array($resultho)

            $rdeat = $rowho['HobbyID'];
            $rdname =  $rowho['HobbyName'];

            $insertratting = "INSERT INTO ratting (ScaleID, ScaleName, HobbyID, HobbyName) VALUES ('$scid','$scname', '$rdeat', '$rdname');";
            $inmeal = mysqli_query($conn,$insertratting);

            $insertact = "INSERT INTO activity (Contact, HobbyID, HobbyName) VALUES ('$contact', '$rdeat', '$rdname');";
            $inmeal = mysqli_query($conn,$insertact);
            
          }

         
        }
        
        echo '<script type="text/JavaScript"> window.location= "index.php" ; </script>';
      }

   
    }

  } 

?>