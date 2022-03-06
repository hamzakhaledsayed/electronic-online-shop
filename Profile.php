<?php
session_start();
if(isset($_SESSION["id"]))
{
	include_once "HeaderAfter.php";
}
else
	include_once "HeaderBefore.php";
?>

<script>
    function delete1(){
       
        xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
    
        if (this.readyState == 4 && this.status == 200) {
        
            var result=this.responseText;
            if(result=="ok")
            {
               
                window.open('index.php','_self');
            }
            else
            alert(result);
        }
            
        };
        xhttp.open("GET", "delete.php?", true);
        xhttp.send();

    }
    </script>
    <div class="m-3" style="width:55%;text-align:left">
				<div class="modal-header">
					<h5 class="modal-title">My Profile</h5>
					
				</div>
                <div class="modal-header">

 
                <table class='table table-borderd'>
                    <?php
                          include_once "Database.php";
                          $db=new Database();
                       
                          $rs=$db->GetData("select * from Customer where CustomerId='".$_SESSION["id"]."'");
                          if($row=mysqli_fetch_assoc($rs))
                          {
                         
                    ?>
                    <tr>
                        <th>
                            Your Name
                        </th>
                        <td>
                           <?php echo $row["name"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                           Phone
                        </th>
                        <td>
                           <?php echo $row["phone"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Gender
                        </th>
                        <td>
                           <?php echo $row["gender"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                           Email
                        </th>
                        <td>
                           <?php echo $row["email"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Your Name
                        </th>
                        <td>
                           <?php echo $row["address"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                        <button type="button"  class="btn btn-danger" onclick="delete1()">
                        Unsubscribe Now
                        </button>
                        </th>
                        <th>
                          <a href="updateprofile.php" class='btn btn-warning'>Update My Profile</a>
                        </th>
                    </tr>
                    <?php
                          }
                    ?>
                </table>



</div>
</div>
<?php
	include_once "Footer.php";
	?>