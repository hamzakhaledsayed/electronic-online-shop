<?php
session_start();
$x=1;
if(isset($_SESSION["id"]))
{
	include_once "HeaderAfter.php";
}
else
	include_once "HeaderBefore.php";
?>
	<!-- //page -->
	<!-- checkout page -->
	<div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>C</span>heckout
			</h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>SL No.</th>
								<th>Product</th>
								<th>Quality</th>
								<th>Product Name</th>

								<th>Price</th>
								<th>Total</th>
								<th>Remove</th>
							</tr>
						</thead>
						<tbody>
							<?php
	include_once "Database.php";
	$db=new Database();
	$rs=$db->GetData("select *  from ordertemp where userid='".$_SESSION["id"]."'");
$total=0;
	while($row=mysqli_fetch_assoc($rs))
	{
		$total=$total+$row["total"];
							?>
							<tr class="rem1">
								<td class="invert"><?php echo $x; ?></td>
								<td class="invert-image">
									<a href="single.html">
										<img src="images/Products/<?php echo $row["proid"]; ?>.jpg" alt=" " class="img-responsive">
									</a>
								</td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value">
												<span><?php echo $row["qty"]; ?></span>
											</div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</td>
								<td class="invert"><?php echo $row["proname"]; ?></td>
								<td class="invert"><?php echo $row["price"]; ?></td>
								<td class="invert"><?php echo $row["total"]; ?></td>
								<td class="invert">
									<div class="rem">
										<div class="close1"> </div>
									</div>
								</td>
							</tr>
						 
							<?php $x++; } ?>
						</tbody>
					</table>
					<h4 class="mb-sm-4 mb-3">Your Total shopping cart :
					<span><?php echo $total; ?> LE</span>
				</h4>
				</div>
			</div>
			<div class="checkout-left">
				<div class="address_form_agile mt-sm-5 mt-4">
					<h4 class="mb-sm-4 mb-3">Add a new Details</h4>
					<form action="payment.html" method="post" class="creditly-card-form agileinfo_form">
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									<div class="controls form-group">
										<input class="billing-address-name form-control" type="text" name="name" placeholder="Full Name" required="">
									</div>
									<div class="w3_agileits_card_number_grids">
										<div class="w3_agileits_card_number_grid_left form-group">
											<div class="controls">
												<input type="text" class="form-control" placeholder="Mobile Number" name="number" required="">
											</div>
										</div>
										<div class="w3_agileits_card_number_grid_right form-group">
											<div class="controls">
												<input type="text" class="form-control" placeholder="Landmark" name="landmark" required="">
											</div>
										</div>
									</div>
									<div class="controls form-group">
										<input type="text" class="form-control" placeholder="Town/City" name="city" required="">
									</div>
									<div class="controls form-group">
										<select class="option-w3ls">
											<option>Select Address type</option>
											<option>Office</option>
											<option>Home</option>
											<option>Commercial</option>

										</select>
									</div>
								</div>
								<button class="submit check_out btn">Confirm Order</button>
							</div>
						</div>
					</form>
					 
				</div>
			</div>
		</div>
	</div>
	<?php
	include_once "Footer.php";
	?>