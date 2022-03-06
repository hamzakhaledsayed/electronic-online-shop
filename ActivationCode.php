<?php
session_start();
include_once "HeaderBefore.php";

?>

<center>

 
			<div class="m-3"  style="width:45%;text-align:left">
				<div class="modal-header">
					<h5 class="modal-title text-center">Forget Password / Activation Code</h5>
					
				</div>
                <div id="dvlogin">
                </div>
				<div class="modal-body">
					<form method="post">
						<div class="form-group">
							<label class="col-form-label">Activation Code</label>
							<input type="text" class="form-control" placeholder="Please Enter Activation Code ....." name="txtuser" required="">
						</div>
						 
						<div class="right-w3l">
                            <input type="submit" class="btn btn-primary form-control" name="check" value="Check Activation Code" />
                            <?php
                            if(isset($_POST["check"]))
                            {
                              
                                if($_POST["txtuser"]==$_SESSION["activ"])
                                {
                                    $id=$_GET["uid"];
									$_SESSION["id"]=$id;
                                    echo  "<script>window.open('UpdatePassword.php','_self');</script>";
                                }
                                else
                                echo "<div class='alert alert-danger'> This Activation is invaild  </div>";
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