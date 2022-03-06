<?php
session_start();
if(isset($_SESSION["id"]))
{
	include_once "HeaderAfter.php";
}
else
	include_once "HeaderBefore.php";
?>

	<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>O</span>ur
				<span>N</span>ew
				<span>P</span>roducts</h3>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-12">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<h3 class="heading-tittle text-center font-italic">New Brand Mobiles</h3>
							<div class="row">
							<?php
								include_once "Database.php";
								$db=new Database();
                                if(isset($_GET["dno"]))
								    $rs=$db->GetData("select * from products where sectionno='".$_GET["dno"]."' order by prono desc");
                                else if(isset($_GET["search"]))
								    $rs=$db->GetData("select * from products where Name like '".$_GET["search"]."%' order by prono desc");
                                else
                                    $rs=$db->GetData("select * from products order by prono desc");
								while($row=mysqli_fetch_assoc($rs))
								{
							?>
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="images/Products/<?php echo $row["ProNo"]; ?>.jpg" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="ProductDetails.php?prono=<?php echo $row["ProNo"]; ?>" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="ProductDetails.php?prono=<?php echo $row["ProNo"]; ?>"><?php echo $row["Name"]; ?> </a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price"><?php echo $row["Price"]- ($row["Price"]* $row["discount"]); ?> </span>
												<del><?php echo $row["Price"]; ?> </del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												 
											</div>
										</div>
									</div>
								</div>
							 <?php } ?>
							</div>
						</div>
						<!-- //first section -->
						<!-- second section -->
					 
						<!-- //second section -->
						<!-- third section -->
						 
						<!-- //third section -->
						<!-- fourth section -->
						 
						<!-- //fourth section -->
					</div>
				</div>
				<!-- //product left -->

			 
			</div>
		</div>
	</div>
	<!-- //top products -->

<?php
	include_once "Footer.php";
	?>