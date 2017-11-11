<?php
   include('session.php');
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
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1>5 Star Hotel</h1><br>
        </div>
        <nav>
          <ul>
            <li class="current"><a href="#">Welcome <?php echo $login_session; ?></a></li>
            <li><a href = "book.php>">Book</a></li> 
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

    <footer>
      <p>Copyright &copy; 2017</p>
    </footer>
  </body>
</html>