<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Electro Store Ecommerce Category Bootstrap Responsive Web Template | Home :: w3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
	<!-- //Custom-Files -->

	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">

		<!-- //web fonts -->

		<script>
			function logout2(){
    sessionStorage.removeItem('id');
document.cookie = "Shop=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";


}
			function Logout(){	
			
				xhttp = new XMLHttpRequest();

				xhttp.onreadystatechange = function() {

				if (this.readyState == 4 && this.status == 200) {
					// if (checkBox.checked == true){
					//     setCookie("Skills",user,3);
					// }
					var result=this.responseText;
						if(result=="ok")
						{
							logout2();
							window.open('index.php','_self');
						}	
					 
				}
				
				};
				xhttp.open("GET", "Logout.php", true);
				xhttp.send();
			}
			</script>
</head>

<body>
	<!-- top-header -->
	<div class="agile-main-top">
		<div class="container-fluid">
			<div class="row main-top-w3l py-2">
				<div class="col-lg-4 header-most-top">
					<p class="text-white text-lg-left text-center">Offer Zone Top Deals & Discounts
						<i class="fas fa-shopping-cart ml-1"></i>
					</p>
				</div>
				<div class="col-lg-8 header-right mt-lg-0 mt-2">
					<!-- header lists -->
					<ul>
						
						<li class="text-center border-right text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
								<i class="fas fa-truck mr-2"></i>Track Order</a>
						</li>
						<li class="text-center border-right text-white">
							<i class="fas fa-phone mr-2"></i> 001 234 5678
						</li>
						<li class="text-center border-right text-white">
							<button type="button" onclick="Logout()">
								<i class="fas fa-sign-in-alt mr-2"></i> Log Out </button>
						</li>
						
						<li class="text-center text-white">
							<a href="Profile.php"  class="text-white">
								<i class="fas fa-sign-out-alt mr-2"></i>My Profile </a>
						</li>
						<li class="text-center border-right text-white">
							<a class="play-icon popup-with-zoom-anim text-white" href="#small-dialog1">
							 Welcome <?php echo $_SESSION["name"]; ?>
						</li>
					</ul>
					<!-- //header lists -->
				</div>
			</div>
		</div>
	</div>

	<!-- Button trigger modal(select-location) -->
	 
	<!-- //shop locator (popup) -->

	 

	<!-- header-bottom-->
	<div class="header-bot">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid">
				<!-- logo -->
				<div class="col-md-3 logo_agile">
					<h1 class="text-center">
						<a href="index.html" class="font-weight-bold font-italic">
							<img src="images/logo2.png" alt=" " class="img-fluid">Electro Store
						</a>
					</h1>
				</div>
				<!-- //logo -->
				<!-- header-bot -->
				<div class="col-md-9 header mt-4 mb-md-0 mb-4">
					<div class="row">
						<!-- search -->
						<div class="col-10 agileits_search">
							<form class="form-inline" action="#" method="post">
								<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required>
								<button class="btn my-2 my-sm-0" type="submit">Search</button>
							</form>
						</div>
						<!-- //search -->
						<!-- cart details -->
						<div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
							 
									 <script>
	function Cart()
		{
		 
			window.open('checkout.php','_self');
		}
										 </script>
									<button class="btn w3view-cart" style="width:70%" onclick="Cart()">
										<i class="fas fa-cart-arrow-down">
											<?php
													include_once "Database.php";
													$db=new Database();
													$rs=$db->GetData("select count(*) as counttemp from ordertemp where userid='".$_SESSION["id"]."'");
													if($row=mysqli_fetch_assoc($rs))
													{
														echo $row["counttemp"];
													}
													else
														echo "0";
											?>
										</i>
									</button>
								</form>
							</div>
						 
						<!-- //cart details -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- //header-bottom -->
	<!-- navigation -->
	<div class="navbar-inner">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="agileits-navi_search">
					<form action="#" method="post">
						<select id="agileinfo-nav_search" name="agileinfo_search" class="border" required="">
							<option value="">All Categories</option>
							<?php
								include_once "Database.php";
								$db=new Database();
								$rs=$db->GetData("select * from Section");
								while($row=mysqli_fetch_assoc($rs))
								{
							?>
							<option value="<?php echo $row["SectionNo"]; ?>"><?php echo $row["SectionName"]; ?></option>
							 <?php } ?>
						</select>
					</form>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-5 text-start mr-xl-5">
						<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="index.html">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						 
                        <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="about.html">Latest Products</a>
						</li>
                        <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="about.html">Most Sales Product</a>
						</li>
                       
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="about.html">My Orders</a>
						</li>
						 
						 
						<li class="nav-item">
							<a class="nav-link" href="contact.html">My Favourite</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->
 