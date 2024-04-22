<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Survey Main Page</title>
  <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<style>

    .mainhead{

        width: 99%;
        margin:-20% 0;
        background-color:#0D7377;
        font-size:30px;
        text-align:center;
        color:black;
        position:fixed;      

    }

    .button1 {
        
        margin:20% 35%;
    }

    .button1 button { 

        width:100%;
	    margin:5% 5%;
	    font-size:35px;
        background-color:#E8E8E8;
	    color:black;
                
    }

    .button2 {
        
        margin:-20% 35%;
    }


    .button2 button {

        width:100%;
        margin:5% 5%;
        font-size:35px;
        background-color:#E8E8E8;
        color:black;   
    }
    

</style>

<body>

    <div class="mainhead">
    
        <h1>Main Form</h1>
    
    </div>
    
    <form method="post">

        <div class="button1">
     
        <button type="Submit" name="survey">Fill Out Survey</button>

        </div>

        <div class="button2"> 

        <button type="Submit" name="results">View Survey Results</button>

        </div>
    </Form>

</body>

</html>

<?php

    if(isset($_POST['survey'])) {
   
        echo '<script type="text/JavaScript"> window.location= "Survey_Form.php" ; </script>';
    } 

    if(isset($_POST['results'])) {
   
        echo '<script type="text/JavaScript"> window.location= "Output_Form.php" ; </script>';
    } 

?>
