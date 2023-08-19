<?php 
//session_start();

?>
<div class="top-bar animate-dropdown">
	<div class="container">
		<div class="header-top-inner">
			<div class="cnt-account">
				<div class="left-box">
					<a href="index.php">
						<img src="img/logo.png" />
						<h2>ABRANTES GARDEN & LANDSCAPES</h2>
					</a>
				</div>	
				<div class="right-box">
					<div class="navbar">
						<a href="index.php" data-hover="dropdown" class="dropdown-toggle">Home</a>
						<a href="category.php?cid=13?">Plants</a>
						<div class="dropdown">
							<button class="dropbtn">My Account
							<!--<i class="fa fa-caret-down"></i>-->
							</button>
							<div class="dropdown-content">
								<?php if(strlen($_SESSION['login'])==0){   ?>
									<a href="my-account.php">
										<i class="icon fa fa-user"></i>My Account
									</a>
									<a href="login.php">
										<i class="icon fa fa-sign-in"></i>Login
									</a>
									<?php }
									else{ ?>
									<a href="my-account.php">
										<i class="icon fa fa-user"></i>My Account
									</a>
									<br>
									<a href="index.php">
										<i class="icon fa fa-user"></i>Welcome -<?php echo htmlentities($_SESSION['username']);?>
									</a>
									<br>
									<a href="my-wishlist.php">
										<i class="icon fa fa-heart"></i>Wishlist
									</a>
									<br>
									<a href="my-cart.php">
										<i class="icon fa fa-shopping-cart"></i>My Cart
									</a>
									<br>
									<a href="order-history.php" class="dropdown-toggle" >
										<span class="key">
											Track Order
										</b>
									</a>
									<br>
									<a href="logout.php">
										<i class="icon fa fa-sign-out"></i>Logout
									</a>
								<?php } ?>
							</div>
						</div> 
					</div>
					<!--<div class="list-unstyled">
							<div class="active dropdown yamm-fw">
				                <a href="index.php" data-hover="dropdown" class="dropdown-toggle">Home</a>
			                </div>
			                <div class="dropdown yamm">
				                <a href="category.php?cid=13?">Plants</a>
			                </div>
						<?php if(strlen($_SESSION['login'])){   ?>
						<!--<li>
							<a href="index.php">
								<i class="icon fa fa-user"></i>Welcome -<?php echo htmlentities($_SESSION['username']);?>
							</a>
						</li>-->
						<?php } ?>
						<!--<div class="user-accounnt">
							<button class="dropbtn">Account</button>
							<br>
								<div class="dropdown-content">
									<?php if(strlen($_SESSION['login'])==0){   ?>
									<a href="my-account.php">
										<i class="icon fa fa-user"></i>My Account
									</a>
									<br>
									<a href="login.php">
										<i class="icon fa fa-sign-in"></i>Login
									</a>
									<?php }
									else{ ?>
									<a href="my-account.php">
										<i class="icon fa fa-user"></i>My Account
									</a>
									<br>
									<a href="index.php">
										<i class="icon fa fa-user"></i>Welcome -<?php echo htmlentities($_SESSION['username']);?>
									</a>
									<br>
									<a href="my-wishlist.php">
										<i class="icon fa fa-heart"></i>Wishlist
									</a>
									<br>
									<a href="my-cart.php">
										<i class="icon fa fa-shopping-cart"></i>My Cart
									</a>
									<br>
									<a href="order-history.php" class="dropdown-toggle" >
										<span class="key">
											Track Order
										</b>
									</a>
									<br>
									<a href="logout.php">
										<i class="icon fa fa-sign-out"></i>Logout
									</a>
									<?php } ?>
								</div>
						</div>
						<!--<li>
							<a href="my-wishlist.php">
								<i class="icon fa fa-heart"></i>Wishlist
							</a>
						</li>
						<li>
							<a href="my-cart.php">
								<i class="icon fa fa-shopping-cart"></i>My Cart
							</a>
						</li>-->
						<!--<li class="dropdown dropdown-small">
							<a href="order-history.php" class="dropdown-toggle" ><span class="key">Track Order</b></a>
						</li>-->
						<?php if(strlen($_SESSION['login'])==0){   ?>
						<!--<li>
							<a href="login.php">
								<i class="icon fa fa-sign-in"></i>Login
							</a>
						</li>-->
						<?php }
						else{ ?>
						<!--<li>
							<a href="logout.php">
								<i class="icon fa fa-sign-out"></i>Logout
							</a>
						</li>-->
						<?php } ?>	
					</div>
				</div>
				
			</div><!-- /.cnt-account -->
			
			<div class="clearfix">
			</div>
		</div><!-- /.header-top-inner -->
	</div><!-- /.container -->
</div><!-- /.header-top -->