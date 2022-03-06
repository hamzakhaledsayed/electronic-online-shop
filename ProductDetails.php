<?php
session_start();
if(isset($_SESSION["id"]))
{
	include_once "HeaderAfter.php";
}
else
	include_once "HeaderBefore.php";
?>
<?php
								include_once "Database.php";
								$db=new Database();
								$rs=$db->GetData("select * from products where prono='".$_GET["prono"]."'");
								while($row=mysqli_fetch_assoc($rs))
								{
							?>
							<form method="post">
<div class="banner-bootom-w3-agileits py-5">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span><?php echo $row["Name"]; ?></span> 
				 
			<!-- //tittle heading -->
			<div class="row">
				<div class="col-lg-5 col-md-8 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="images/Products/<?php echo $row["ProNo"]; ?>.jpg">
									<div class="thumb-image">
										<img src="images/Products/<?php echo $row["ProNo"]; ?>.jpg" data-imagezoom="true" class="img-fluid" alt=""> </div>
								</li>
								 
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="col-lg-7 single-right-left simpleCart_shelfItem">
					<h3 class="mb-3"><?php echo $row["Details"]; ?> </h3>
					<p class="mb-3">
						<span class="item_price"><?php echo $row["Price"]- ($row["Price"]* $row["discount"]); ?></span>
						<del class="mx-2 font-weight-light"><?php echo $row["Price"]; ?></del>
                        <br/>
                        <input type="number" name="txtqty" placeholder="Quantity"/>
						 
					</p>
					 
				 
					<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                        
							 
									 <?php
										if(isset($_SESSION["id"]))
										{
											echo '<input type="submit" name="submit" value="Add to cart" class="button" />';
										}
										else
										{
											echo '<a href="login.php" class="btn btn-lg btn-primary">Add to cart</a>';
										}
										if(isset($_POST["submit"]))
										{
											$p=$row["Price"]- ($row["Price"]* $row["discount"]);
											$t=$_POST["txtqty"]*$p;
											include_once "Database.php";
											$db=new Database();
											$msg=$db->RunDML("insert into ordertemp values('Default','".$row["ProNo"]."','".$row["Name"]."','".$_POST["txtqty"]."','".$p."','".$t."','".$_SESSION["id"]."')");
											if($msg=="ok")
											{
												echo "<div class='alert alert-success'>Product has been added in cart</div>";
											}
										}
									 ?>
									
							 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div></form>
<?php }?>
<?php
	include_once "Footer.php";
	?>