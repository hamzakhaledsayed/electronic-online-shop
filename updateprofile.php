<?php
session_start();
if(isset($_SESSION["id"]))
{
	include_once "HeaderAfter.php";
}
else
	include_once "HeaderBefore.php";
?>

<center>
	<div class="modal-content m-3" style="width:55%;text-align:left">
				<div class="modal-header">
					<h5 class="modal-title">Update Profile</h5>
					
				</div>
                <div class="modal-header">
					 
                        <?php
                        if(isset($_POST["btnregister"]))
                        {
                            
                                if($_POST["password"]==$_POST["ConfirmPassword"])
                                {
                                    include_once "Database.php";
                                    $db=new Database();
                                    $msg=$db->RunDML("update customer set name='".$_POST["Name"]."',phone='".$_POST["phone"]."',gender='".$_POST["gender"]."',email='".$_POST["email"]."',address='".$_POST["address"]."',password='".$_POST["password"]."'  where CustomerId='".$_SESSION["id"]."'");
                                    if($msg=="ok")
                                    {
                                        echo "<div class='alert alert-success'>User has been Updated success</div>";
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
                        ?>
                   
					
				</div>
                <?php
                          include_once "Database.php";
                          $db=new Database();
                       
                          $rs=$db->GetData("select * from Customer where CustomerId='".$_SESSION["id"]."'");
                          if($row=mysqli_fetch_assoc($rs))
                          {
                         
                    ?>
				<div class="modal-body">
					<form action="#" method="post">
						<div class="form-group">
							<label class="col-form-label">Your Name</label>
							<input type="text" class="form-control" value='<?php echo $row["name"]; ?>' placeholder=" " name="Name" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Email</label>
							<input type="email" class="form-control" value='<?php echo $row["email"]; ?>' placeholder=" " name="email" required="">
						</div>
                        <div class="form-group">
							<label class="col-form-label">Phone</label>
							<input type="text" class="form-control" placeholder=" " value='<?php echo $row["phone"]; ?>' name="phone" required="">
						</div>
                        <div class="form-group">
							<label class="col-form-label">Gender</label>
							<select name="gender" class="form-control">
                                <option>Choose Gender </option>
                                <option <?php if($row["gender"]=="Male") echo "Selected"; ?> ?> Male</option>
                                <option <?php if($row["gender"]=="Female") echo "Selected"; ?> ?>Female</option>
                            </select>
						</div>
						<div class="form-group">
							<label class="col-form-label">Password</label>
							<input type="password" class="form-control" placeholder=" " name="password"   required="">
						</div>
                        <div class="form-group">
							<label class="col-form-label">Address</label>
							<input type="text" class="form-control" value='<?php echo $row["address"]; ?>' placeholder=" " name="address"   required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Confirm Password</label>
							<input type="password" class="form-control" placeholder=" " name="ConfirmPassword"  required="">
						</div>
						<div class="right-w3l">
							<input type="submit" name="btnregister" class="form-control" value="Update My Profile">
						</div>
 						 
					</form>
				</div>
			</div>
            <?php
                          }
                          ?>
</center>
<?php
include_once "Footer.php";
?>