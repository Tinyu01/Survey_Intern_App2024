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

  .survey .lables-inputs .l {
        font-size: 23px;
        margin:0 25%;
  }
  .survey .lables-inputs .fullnames {
    font-size: 20px;
    margin:0 25%;
  }
  .survey .lables-inputs .email {
    font-size: 20px;
    margin:0 25%;
  }
  .survey .lables-inputs .contact {
    font-size: 20px;
    margin:0 25%;
  }
  .survey .lables-inputs .date {
    font-size: 20px;
    margin:0 25%;
  }
 
  .survey .lables-inputs select {
    font-size: 25px;
    margin:0 15.3%;
  }

  .survey .favaurite-food {
    font-size: 25px;
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
    
        <h1>FILL OUT SURVEY</h1>
    
      </div>
       
	    <form action="" method="post" class="cotact">
        
        <div class="personal-details">

          <div class="top-lable">
            <label><b>Personal Details:</b></label>
          </div>

          <div class="lables-inputs">

            <label class="l">Full Names</label>
	          <br> <input class="fullnames" type="text" placeholder="Entrer your Full Names..." name="fullnames" required/> <br>
        
            <br><label class="l">Email</label>
	          <br> <input class="email" type="email" placeholder="Enter your Email..." name="email" required/> <br>
        
            <br><label class="l">Date of Birth</label>
            <br> <input class="date" type="date" name="date" required/> <br>

            <br><label class="l">Contact Number</label>
	          <br> <input class="contact" type="number" placeholder="Your Contact Number..." name="Contact" required/> <br> 
        

          </div>
	        
        </div>
        <br>
        <hr>

        <div class="favaurite-food">

            <label><b>What is your favourite food?</b></label>

            <label>
              <input class="c" type="checkbox" name="pizza">&nbsp;<b>Pizza</b>
            </label>
        
            <label>
              <input class="c" type="checkbox" name="pasta">&nbsp;<b>Pasta</b>
            </label>
        
            <label>
              <input class="c" type="checkbox" name="pap-wors">&nbsp;<b>Pap and Wors</b>
            </label>
            
            <label>
              <input class="c" type="checkbox" name="other">&nbsp;<b>Other</b>
            </label>


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

