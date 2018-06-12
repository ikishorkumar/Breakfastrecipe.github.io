
<!DOCTYPE html>
<html>
<head>
	<title>BrekfastRecipe</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Philosopher' rel='stylesheet'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="validate.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css" >

</head>
<body class="container-fluid bdwdt">







	<!-- start of header navbar -->
	<div class="container-fluid">	
	<nav class="navbar navbar-inverse navbar-fixed-top">	
	
     <div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>

       <a href="index.php" class="navbar-brand"><img src="imgg/logo.png" alt="" class="logo"></a>
		 </div>
		<div class="collapse navbar-collapse" id="myNavbar">

     	<ul class="nav navbar-nav" class="active">
     	<li><a href="index.php" class="sty">Home</a></li>
     	<li><a href="breakfast.php" class="sty">Breakfast</a></li>
     	<li class="active"><a href="contact2.php" class="sty">Contact-Us</a></li>	</ul>
      	<li>
      		<input placeholder="Search....." type="text" name="search" class="srh">     	
     	<button class="btn btn-default bt" type="button" >Search</button></li>
	</nav>
	</div>
	
	<!-- End of Navbar/ Header -->
<!-- contactUs form  -->
<div class="cnt1">
	<section id="contact" style="">
            <div class="container">
                <div class="row">
                    <div class="about_our_company" style="margin-bottom: 20px;">
                        <h1 style="color:#fff;">Contact-Us For Further Details</h1>
                        <div class="titleline-icon"></div>
                        <p style="color:#fff;">Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <form action="contact2.php" method="post" name="sentMessage" id="contactForm" onsubmit="return validate">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
										<label style="color:#fff;">Enter Name:</label>
                                        <input type="text" name="name" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
										<label style="color:#fff;">Enter Email:</label>
                                        <input type="email" name="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
										<label style="color:#fff;">Phone No:</label>
                                        <input type="tel" name="contact" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
										<label for="comment" style="color:#fff;">Remarks:</label>
                                        <textarea name="comment"  class="form-control"  placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <button name="submit" type="submit" class="btn btn-xl get">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <p style="color:#fff;">
                            <strong><i class="fa fa-map-marker"></i> Address</strong><br>
                            Smiu Karachi, Sindh
                        </p>
                        <p style="color:#fff;"><strong><i class="fa fa-phone"></i> Phone Number</strong><br>
                            (+92)2123456</p>
                        <p style="color:#fff;">
                            <strong><i class="fa fa-envelope"></i>  Email Address</strong><br>
                            Email@info.com</p>
                        <p></p>
                    </div>
                </div>
            </div>
		</section>
</div>
<!-- end of contact us -->




<!-- form code start -->

      
<!-- Footer staRT coding -->
<footer class="nb-footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="about">
					<img src="images/logo.png" class="img-responsive center-block" alt="">
					<p>Bootstrap Footer example snippets with CSS, Javascript and HTML. Code example of bootstrap-3 footer using HTML, Javascript,
						jQuery, and CSS. 5 Beautiful and Responsive Footer Templates. Pin a fixed-height footer to the bottom of the viewport
						in desktop browsers with this custom HTML and CSS.</p>

					<div class="social-media">
						<ul class="list-inline">
							<li><a href="https://www.facebook.com/Breakfast-Recipe-1575054712523858/" target="_blank" title=""><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/FUNFOR4LIFE" target="_blank" title=""><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://plus.google.com/u/0/+NabeelAhmedKhan_Nak" target="_blank" title=""><i class="fa fa-google-plus"></i></a></li>
							<li><a href="https://www.linkedin.com/in/nabeel-khan-nak/" target="_blank" title=""><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-3 col-sm-6">
				<div class="footer-info-single">
					<h2 class="title">Help Center</h2>
					<ul class="list-unstyled">
						<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> How to Pay</a></li>
						<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> FAQ's</a></li>
						<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Sitemap</a></li>
						<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Delivery Info</a></li>
					</ul>
				</div>
			</div>

			<div class="col-md-3 col-sm-6">
				<div class="footer-info-single">
					<h2 class="title">Customer information</h2>
					<ul class="list-unstyled">
						<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> About Us</a></li>
						<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> FAQ's</a></li>
						<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Sell Your Items</a></li>
						<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Contact Us</a></li>
						<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> RSS</a></li>
					</ul>
				</div>
			</div>

			<div class="col-md-3 col-sm-6">
				<div class="footer-info-single">
					<h2 class="title">Security & privacy</h2>
					<ul class="list-unstyled">
						<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Terms Of Use</a></li>
						<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Privacy Policy</a></li>
						<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Return / Refund Policy</a></li>
						<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Store Locations</a></li>
					</ul>
				</div>
			</div>

			<div class="col-md-3 col-sm-6">
				<div class="footer-info-single">
					<h2 class="title">Payment</h2>
					<p>Sample HTML page with Twitter's Bootstrap. Code example of Easy Sticky Footer using HTML, Javascript, jQuery, and CSS.
						This bootstrap tutorial covers all the major elements of responsive</p>

				</div>
			</div>
		</div>
	</div>

	<section class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<p>Copyright © 2017. Your Company.</p>
				</div>
				<div class="col-sm-6"></div>
			</div>
		</div>
	</section>
</footer>
<!-- End of Footer -->


</body>

</html>
	<!-- PHP server code -->
<?php
$servername="localhost";
$username="databasenk";
$password="";
$dbname="datank";
// CREATE CONNECTION
$conn = new mysqli($servername,$username,$password,$dbname);
//check connection
if($conn->connect_error){
	
	die("connection failed:".$conn->connect_error);

}
if (isset($_POST['submit'])) {
	$contact = $_POST['contact'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$remarks = $_POST['comment'];
	# code...
	$sql="INSERT INTO nk (contact,name,email,comment) values('$contact','$name','$email','$remarks')";
	if ($conn->query($sql)===TRUE) {
		#echo "New record created successfully";
		echo '<script language="javascript">';
		echo 'alert("message successfully sent")';
		echo '</script>';
		# code...
	}
	else{
		echo "Error:".$sql."<br>".$conn->error;
	}
}
?>

<!-- end of php -->	