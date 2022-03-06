<?php
session_start();
include_once "HeaderBefore.php";

?>

<center>

 
			<div class="m-3"  style="width:45%;text-align:left">
				<div class="modal-header">
					<h5 class="modal-title text-center">Forget Password / Update password</h5>
					
				</div>
                <div id="dvlogin">
                </div>
				<div class="modal-body">
					<form method="post">
						<div class="form-group">
							<label class="col-form-label">New Password</label>
							<input type="password" class="form-control" placeholder="Please Enter New Password ....." name="txtpass" required="">
						</div>
						 
						<div class="right-w3l">
                            <input type="submit" class="btn btn-primary form-control" name="check" value="Create New Password" />
                            <?php
                            if(isset($_POST["check"]))
                            {
                              
                                
                                    
                                    include_once "Database.php";
                                    $db=new Database();
                                    $msg=$db->RunDML("update customer set password ='".$_POST["txtpass"]."' where customerid='".$_SESSION["id"]."'");
                                    if($msg=="ok")
                                    {
                                        echo "<div class='alert alert-success'>Password has been updated success</div>";
                                    }
                              
                              
                            }
                            ?>

						 
						</div>
 
					</form>
				</div>
			</div>
</center>
<?php
include_once "Footer.php";
?>