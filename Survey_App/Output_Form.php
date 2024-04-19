<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Output Page</title>
  <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<style>

    .mainhead{

        width: 99%;
        margin: -15% 0;
        background-color:#0D7377;
        font-size:30px;
        text-align:center;
        color:black;
        position:fixed;      

    }

    form {

        margin:15% 0;

    }

    .statistic .text_output {
        font-size: 25px;
        margin:0 5%;

    }
    .statistic .text_output .text1 {
        font-size: 20px;
        margin:0 22.8%;
        border: none;

    }
    .statistic .text_output .text2 {
        font-size: 20px;
        margin:0 33.5%;
        border: none;

    }
    .statistic .text_output .text3 {
        font-size: 20px;
        margin:0 8.4%;
        border: none;

    }
    .statistic .text_output .text4 {
        font-size: 20px;
        margin:0 6%;
        border: none;

    }


    .food-percentage .text_output {
        font-size: 25px;
        margin:2% 5%;
    }
    .food-percentage .text_output .text1 {
        font-size: 20px;
        margin:0 16%;
        border: none;
    }
    .food-percentage .text_output .text2 {
        font-size: 20px;
        margin:0 16%;
        border: none;
    }
    .food-percentage .text_output .text3 {
        font-size: 20px;
        margin:0 8.5%;
        border: none;
    }
   
    .averages .text_output {
        font-size: 25px;
        margin:2% 5%;
        border: none;
    } 
    .averages .text_output .text1 {
        font-size: 20px;
        margin:0 22.4%;
        border: none;
    }
    .averages .text_output .text2 {
        font-size: 20px;
        margin:0 16.4%;
        border: none;
    }
    .averages .text_output .text3 {
        font-size: 20px;
        margin:0 20%;
        border: none;
    }
    .averages .text_output .text4 {
        font-size: 20px;
        margin:0 13%;
        border: none;
    }
  
    .button-sub button{
        width:20%;
        margin:3% 40%;
        font-size:35px;
        background-color:#E8E8E8;
        color:black;
    }

</style>

<body>

    <div class="mainhead">
    
        <h1>Output Display</h1>
    
    </div>
  
    <form method="post">
        
        <div class="statistic">
          
          <div class="text_output">

            <label><b>Total number of surveys:</b></label>
	        <textarea class="text1" rows="1">#surveys</textarea>
        
            <br><label><b>Average age:</b></label>
	        <textarea class="text2" rows="1">#average age</textarea>
        
            <br><label><b>Oldest person who participated in survey</b></label>
	        <textarea class="text3" rows="1">#max age</textarea>
            
            <br><label><b>Youngest person who participated in survey</b></label>
            <textarea class="text4" rows="1">#min age</textarea>
	
          </div>
	        
        </div>
        <br>

        <hr>

        <div class="food-percentage">

          <div class="text_output">

            <label><b>Percentage of people who like Pizza:</b></label>
	        <textarea class="text1" rows="1"></textarea>
        
            <br><label><b>Percentage of people who like Pizza:</b></label>
	        <textarea class="text2" rows="1"></textarea>
        
            <br><label><b>Percentage of people who like Pap and Wors:</b></label>
	        <textarea class="text3" rows="1"></textarea>
            
          </div>

        </div>

        <hr>

        <div class="averages">

            <div class="text_output">

                <label><b>People like to eat out:</b></label>
                <textarea class="text1" rows="1">#average of rating</textarea>
            
                <br><label><b>People like to watch movies:</b></label>
                <textarea class="text2" rows="1">#average of rating</textarea>
            
                <br><label><b>People like to watch TV:</b></label>
                <textarea class="text3" rows="1">#average of rating</textarea>
                
                <br><label><b>People like to listen to the radio:</b></label>
                <textarea class="text4" rows="1">#average of rating</textarea>
        
              </div>
        </div>

        <hr>

        <div class="button-sub">
          <button type="Submit" name="ok">Ok</button>
        </div>
        <hr>
	</form>

</body>

</html>

<?php

    if(isset($_POST['ok'])) {

            
    //set array
    $arraysc = array();
    $arrayho = array();
    $arrayfood = array();
    $clientfood = array();
    
    
    //run querys
    $querysc = "SELECT * FROM scale ORDER BY ScaleID ASC";
    $queryho = "SELECT * FROM hobby ORDER BY HobbyID ASC";
    $queryfood = "SELECT * FROM food ORDER BY FoodID ASC";
    
    

    $resultsc= mysqli_query($conn,$querysc);
    $resultho = mysqli_query($conn,$queryho);
    $resultfood = mysqli_query($conn,$queryfood);

    //look through query
    while($rowsc = mysqli_fetch_array($resultsc)) {

      //add each row returned into an array
      $arraysc[] = $rowsc;
     
    }

    while($rowho = mysqli_fetch_array($resultho)) {

      //add each row returned into an array
      $arrayho[] = $rowho;
    }
    
    while($rowfood = mysqli_fetch_array($resultfood)) {

      //add each row returned into an array
      $arrayfood[] = $rowfood;
    }
        
        echo '<script type="text/JavaScript"> window.location= "index.php" ; </script>';
   
    } 

?>
