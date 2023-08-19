<?php 
//session_start();

?>

<div class="top-bar animate-dropdown">
	<div class="container">
		<div class="header-top-inner">
			<div class="cnt-account">
				<div class="left-box">
					<a href="index.php">
						<h2>ABRANTES GARDEN AND LANDSCAPES</h2>
					</a>
				</div>
				<div class="right-box">
					<ul class="list-unstyled">
						<?php if(strlen($_SESSION['login'])){?>
						<li>
							<a href="index2.php">
								<i class="icon fa fa-user"></i>Welcome -<?php echo htmlentities($_SESSION['username']);?>
							</a>
						</li>
						<?php } ?>
						
						<?php if(strlen($_SESSION['login'])==0){   ?>
						<li>
							<a href="login.php">
								<i class="icon fa fa-sign-in"></i>Login
							</a>
						</li>
						<?php }
						else{ ?>
						<li>
							<a href="logout.php"><i class="icon fa fa-sign-out"></i>Logout
							</a>
						</li>
						<?php } ?>	
					</ul>
				</div>
			</div><!-- /.cnt-account -->
		</div>
	</div>
</div><!-- /.header-top -->
