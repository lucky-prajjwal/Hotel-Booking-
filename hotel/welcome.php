<?php
   include('session.php');
   require_once('connect.php');
   if (isset($_POST) & !empty($_POST)) {
	  $name = mysqli_real_escape_string($connection, $_POST['name']);
	  $email = mysqli_real_escape_string($connection, $_POST['email']);
	  $phone = mysqli_real_escape_string($connection, $_POST['phone']);
	  $checkin = mysql_real_escape_string($_POST['checkin']);
	  $new_date = date('Y-m-d',strtotime($checkin));
	  $days = mysqli_real_escape_string($connection, $_POST['days']);
	  $roomtype = mysqli_real_escape_string($connection, $_POST['roomtype']);
	  $roomnumber = mysqli_real_escape_string($connection, $_POST['roomnumber']);
	  $payment = mysqli_real_escape_string($connection, $_POST['payment']);



	  $sql = "INSERT INTO `book` (name, email, phone, checkin, days, roomtype, roomnumber, payment) VALUES ('$name', '$email', '$phone', '$checkin', '$days', '$roomtype', '$roomnumber', '$payment')";
	  $result = mysqli_query($connection, $sql);
	  if ($result) {
	  	echo "<script type='text/javascript'>alert('Room Booked Successfully')</script>";
		        
	  }else{
	  	echo "<script type='text/javascript'>alert('Error !! Please try again with different credentials')</script>";
	  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional web design">
   <meta name="keywords" content="web design, affordable web design, professional web design">
    <meta name="author" content="Prajjwal">
    <title>Hotel Booking System</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link href="css/main.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    
  </head>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script>
    $(document).ready(function() {
    $('select').material_select();
  });
  </script>
  <body>
  	<style>
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }

    body {
      background: #fff;
    }

    .input-field input[type=date]:focus + label,
    .input-field input[type=text]:focus + label,
    .input-field input[type=email]:focus + label,
    .input-field input[type=password]:focus + label {
      color: #e91e63;
    }

    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 2px solid #e91e63;
      box-shadow: none;
    }
  </style>
    <header>
      <div class="container">
        <div id="branding">
          <h1>5 Star Hotel</h1><br>
        </div>
        <nav>
          <ul>
            <li class="current"><a href="#">Welcome <?php echo $login_session; ?></a></li>
            <li><a href = "#">View Booking</a></li>
            <li><a href = "logout.php">Logout</a></li>
          </ul>
        </nav>
      </div>
    </header>

     <section id="newsletter">
      <div class="container">
        <h1>Accommodation</h1>
      </div>
    </section>

    <div class="container-fluid">
    <div class="row" >
      <img src="./image/myroom.jpg" id='imgleft'>
      <div id=heading>
        <h2>Suite</h2>
      </div>
      <br>
      <p>Hotel Four Seasons, among the premier business hotel.<br>luxuriously furnished room having a sofa cum bed
    for an extra adult or child with wall to wall carpet.
    this rooms are attached with private balconies over looking the
    palm view garden.<br><br><b> @ only &#8377 10,000.00 (Per day)* </b></p>
    </div>
    <div class="row">
      <img src="./image/standard room.jpg" id="imgright">
      <div id=heading>
        <h2>Super Deluxe</h2>
      </div>
      <br>
      <p>Hotel Four Seasons, among the premier business hotel.<br> luxuriously furnished room having a sofa cum bed
    for an extra adult or child with wall to wall carpet.
    this rooms are attached with private balconies over looking the
    palm view garden.<br><br><b> @ only &#8377 5000.00 (Per day)* </b></p>
      <div class="hr"></div>
    </div>
    <div class="row">
      <img src="./image/delux room.jpg" id="imgleft">
      <div id=heading>
        <h2>Deluxe</h2>
      </div>
      <br>
      <p>Hotel Four Seasons, among the premier business hotel.<br /> luxuriously furnished room having a sofa and bed for extra adult or child with wall to wall carpet.<br><br><b> @ only &#8377 3000.00 (Per day)* </b></p>
      <div class="hr"></div>
    </div>
    <div class="row">
      <img src="./image/standard room.jpg" id="imgright">
      <div id=heading>
        <h2>Standard</h2>
      </div>
      <br>   
      <p>Hotel Four Seasons, among the premier business hotel.<br /> luxuriously furnished room having a sofa cum bed for an extra adult or child with wall to wall carpet. <br><br><b> @ only &#8377 1000.00 (Per day)* </b></p>
      <div class="hr"></div>
    </div>

  </div>

  <script src="js/bootstrap.min.js"></script>


  <div class="section"></div>
  <main>
    <center>
     
      <div class="section"></div>

      <h5 class="indigo-text">Book Your Room</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" method="post">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <i class="material-icons prefix">account_circle</i>
                <input class='validate' type='text' name='name' id='name' />
                <label for='name'>Enter your name</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <i class="material-icons prefix">email</i>
                <input class='validate' type='email' name='email' id='email' />
                <label for='email'>Enter your email</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <i class="material-icons prefix">phone</i>
                <input class='validate' type='tel' name='phone' id='phone' />
                <label for='phone'>Enter your phone number</label>
              </div>

              <div class = "row">
                <i class="material-icons prefix">date_range</i>
                  <label>Check In Date</label>                             
                <input type = "date" name="checkin" class = "datepicker" /> 
              </div>


              <div class="input-field col s12">
              	<i class="material-icons prefix">schedule</i>
              <select name="days">
                <option value="" disabled selected>Number Of Days</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </div>

            <div class="input-field col s12">
            	<i class="material-icons prefix">hotel</i>
                 <select name="roomtype">
                    <option value="" disabled selected>Choose your Room Type</option>
                    <option value="Standard">Standard @ only ₹ 1000.00 (Per day)*</option>
                    <option value="Deluxe">Deluxe @ only ₹ 3000.00 (Per day)*</option>
                    <option value="Super">Super Deluxe @ only ₹ 5000.00 (Per day)</option>
                    <option value="suite">suite @ only ₹ 10,000.00 (Per day)*</option>
                  </select>
              </div>

              <div class="input-field col s12">
              <i class="material-icons prefix">local_offer</i>	
              <select name="roomnumber">
                <option value="" disabled selected>Room Number</option>
                <option value="101">101</option>
                <option value="102">102</option>
                <option value="103">103</option>
                <option value="104">104</option>
                <option value="201">201</option>
                <option value="202">202</option>
                <option value="203">203</option>
                <option value="204">204</option>
                <option value="301">301</option>
                <option value="302">302</option>
                <option value="303">303</option>
                <option value="304">304</option>
              </select>
            </div>

            <div class="input-field col s12">
            	<i class="material-icons prefix">account_balance</i>
            <select name="payment">
                <option value="" disabled selected>Payment Mode</option>
                <option value="credit">Credit/Debit Card</option>
                <option value="net">Net Banking</option>
                <option value="cash">By Cash</option>
            </select>
            </div>
            <br>
            <br>
            <br>
            <br>  
            

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Book</button>
              </div>
            </center>
          </form>
        </div>
      </div>
      
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

    <footer>
      <p>Copyright &copy; 2017</p>
    </footer>
  </body>
</html>