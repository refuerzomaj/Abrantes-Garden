<?php 
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
    {   
header('location:login.php');
}
else{
	if (isset($_POST['submit'])) {

		mysqli_query($con,"update orders set 	paymentMethod='".$_POST['paymethod']."' where userId='".$_SESSION['id']."' and paymentMethod is null ");
		unset($_SESSION['cart']);
		header('location:order-history.php');

	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>Shopping Portal | Payment Method</title>
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
		<link rel="stylesheet" href="assets/css/config.css">
		<link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="assets/images/favicon.ico">
		<link rel="stylesheet" href="assets/css/new-css.css">
	</head>
    <body class="cnt-home">
	
		
<header class="header-style-1">
<?php include('includes/top-header2.php');?>
<?php //include('includes/main-header.php');?>
<?php //include('includes/menu-bar.php');?>
</header>
<div class="title-section">
	<div>
		<center>
			<span>Payment Page</span>
		</center>
	</div>
</div>
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="index.php">Home</a></li>
				<li class='active'>Payment Method</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-bd">
	<div class="container">
		<div class="checkout-box faq-page inner-bottom-sm">
			<div class="row">
				<div class="col-md-12">
					<h2>Choose Payment Method</h2>
					<div class="panel-group checkout-steps" id="accordion">
						<!-- checkout-step-01  -->
<div class="panel panel-default checkout-step-01">

	<!-- panel-heading -->
		<div class="panel-heading">
    	<h4 class="unicase-checkout-title">
	        <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
	         Select to Continue
	        </a>
	     </h4>
    </div>
    <!-- panel-heading -->

	<div id="collapseOne" class="panel-collapse collapse in">

		<!-- panel-body  -->
	    <div class="panel-body">
	    <form id="myForm" name="payment" method="post">
	    <input type="radio" name="paymethod" id="cod-method" value="COD" checked="checked"> COD
		<!--<div id="paypal-button-container"></div>-->
	      <br /><br />
		  <input type="radio" name="paymethod" id="paypal-method" value="paypal"> Paypal 
		<div id="paypal-button-container"></div>
	      <br /><br />

	     <input type="submit" value="submit" name="submit" id="submitBtn" class="btn btn-primary">
	    	

	    </form>		
		</div>
		<!-- panel-body  -->

	</div><!-- row -->
</div>
<!-- checkout-step-01  -->
					  
					  	
					</div><!-- /.checkout-steps -->
				</div>
			</div><!-- /.row -->
		</div><!-- /.checkout-box -->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->

<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->
<?php include('includes/footer.php');?>
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	
	<script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	
	<script src="assets/js/echo.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
	<script src="assets/js/scripts.js"></script>

	<script src="switchstylesheet/switchstylesheet.js"></script>
	
	<script>
		var button = document.getElementById("submitBtn");
		function triggerSubmitBtn(){
			// Trigger the button click event
			button.click();
		}
		function hideBtn(){
			button.style.display = "none";
		}
		function showBtn(){
			button.style.display = "block";
		}
		$(document).ready(function(){ 
			
			//payment method
			$('#cod-method').prop('checked', true);
			$("#paypal-button-container").css("width","150px");
			$("#paypal-button-container").hide();
			$("#cod-method").click(function(e){
				$("#paypal-button-container").css("display","none");
				showBtn();
			});
			$("#paypal-method").click(function(e){
				$("#paypal-button-container").show();
				hideBtn();
			});

			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});

			
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script>
	

</body>
</html>
	<script src="https://www.paypal.com/sdk/js?client-id=AUHJg1-g7lSXNas4l8ygt3EI1AjrD3rdPLAw7046qul4_aU2GssxzM9T--u6c4V3lkfmzst2aXEpxsOX&currency=PHP"></script>
	<script>
		window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
			var containers = document.querySelectorAll(".top-bar .container");
			if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
				containers.forEach(function(container) {container.style.padding = "10px 0";});
				containers.forEach(function(container) {container.style.background = "#427306";});
				document.getElementById("top-bar container").style.padding = "15px 0";
				document.getElementByClassName("title-bar").style.fontSize = "20px";
			} else {
				containers.forEach(function(container) {container.style.padding = "20px 0";});
				containers.forEach(function(container) {container.style.background = "#42730600";});
				document.getElementById("top-bar container").style.padding = "30px 0";
				document.getElementByClassName("title-bar").style.fontSize = "40px";
			}
			}
	</script>
	<script>
		paypal.Buttons({
			createOrder: (data, actions)=> {
				return actions.order.create({
					purchase_units: [{
						amount: {
							value: <?php echo $_SESSION['tp'];?>
						}
					}]
				});
			},
			onApprove: (data, actions)=>{
				return actions.order.capture().then(function(orderData){
					console.log('capture result',orderData,JSON.stringify(orderData,null,2));
					const transaction = orderData.purchase_units[0].payments.captures[0];
					alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);

					//Trigger submit button
					// Assuming you have a button element with the ID "myButton"
					showBtn();
					triggerSubmitBtn();
				});
			}
		}).render('#paypal-button-container');
	</script>
<?php } ?>