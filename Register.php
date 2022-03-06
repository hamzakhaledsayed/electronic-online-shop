<?php
include_once "HeaderBefore.php";
?>
<center>
	<div class="modal-content m-3" style="width:55%;text-align:left">
				<div class="modal-header">
					<h5 class="modal-title">Register</h5>
					
				</div>
                <div class="modal-header">
					 
                        <?php
                        if(isset($_POST["btnregister"]))
                        {
                            if(isset($_POST["chkaccept"]))
                            {
                                if($_POST["password"]==$_POST["ConfirmPassword"])
                                {
                                    include_once "Database.php";
                                    $db=new Database();
                                    $msg=$db->RunDML("insert into customer values('Default','".$_POST["Name"]."','".$_POST["phone"]."','".$_POST["gender"]."','".$_POST["email"]."','".$_POST["address"]."','".$_POST["password"]."')");
                                    if($msg=="ok")
                                    {
                                        echo "<div class='alert alert-success'>User has been created success</div>";
                                    }
                                    else if(strpos($msg,"UQPhone"))
                                    {
                                        echo "<div class='alert alert-danger'>This phone already exsist</div>";
                                    }
                                    else if(strpos($msg,"UQEmail"))
                                    {
                                        echo "<div class='alert alert-danger'>This Email already exsist</div>";
                                    }
                                    else
                                    {
                                        echo "<div class='alert alert-danger'>$msg</div>";
                                    }
                                }
                                else{
                                    echo "<div class='alert alert-danger'>Sorry Password doesn't match</div>";
                                }
                            }
                            else
                            {
                                echo "<div class='alert alert-warning'>Please check the terms & conditions</div>";
                            }
                        }
                        ?>
                   
					
				</div>
				<div class="modal-body">
					<form action="#" method="post">
						<div class="form-group">
							<label class="col-form-label">Your Name</label>
							<input type="text" class="form-control" placeholder=" " name="Name" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Email</label>
							<input type="email" class="form-control" placeholder=" " name="email" required="">
						</div>
                        <div class="form-group">
							<label class="col-form-label">Phone</label>
							<input type="text" class="form-control" placeholder=" " name="phone" required="">
						</div>
                        <div class="form-group">
							<label class="col-form-label">Gender</label>
							<select name="gender" class="form-control">
                                <option>Choose Gender </option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
						</div>
						<div class="form-group">
							<label class="col-form-label">Password</label>
							<input type="password" class="form-control" placeholder=" " name="password"   required="">
						</div>
                        <div class="form-group">
							<label class="col-form-label">Address</label>
							<input type="text" class="form-control" placeholder=" " name="address"   required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Confirm Password</label>
							<input type="password" class="form-control" placeholder=" " name="ConfirmPassword"  required="">
						</div>
						<div class="right-w3l">
							<input type="submit" name="btnregister" class="form-control" value="Register">
						</div>
 						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" name="chkaccept" class="custom-control-input" id="customControlAutosizing2">
								<label class="custom-control-label" for="customControlAutosizing2">I Accept to the Terms & Conditions</label>
							</div>
						</div>
					</form>
				</div>
			</div>
</center>
<?php
include_once "Footer.php";
?>