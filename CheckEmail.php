<?php
include_once "HeaderBefore.php";
?>

<script>
    function Login()
    {
        var user=document.getElementById("txtuser").value;
       
        xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
    
        if (this.readyState == 4 && this.status == 200) {
             var result=this.responseText;
            if(result=="ok")
            {
                document.getElementById("dvlogin").innerHTML = "<div class='alert alert-primary'> Please check your email </div>";
            }
            else
                document.getElementById("dvlogin").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "emailcheck.php?user="+user+"", true);
        xhttp.send();

    }
    </script>
<center>

 
			<div class="m-3"  style="width:45%;text-align:left">
				<div class="modal-header">
					<h5 class="modal-title text-center">Forget Password / Check Email</h5>
					
				</div>
                <div id="dvlogin">
                </div>
				<div class="modal-body">
					<form action="#" method="post">
						<div class="form-group">
							<label class="col-form-label">Email</label>
							<input type="email" class="form-control" placeholder="Please Enter Email ....." id="txtuser" required="">
						</div>
						 
						<div class="right-w3l">
							<button class="btn btn-primary form-control" type="button" onclick="Login()">Log in</button>
						</div>
						 
            <p class="text-left dont-do mt-3">Forget Password ?
							<a href="CheckEmail.php">
								Click here</a>
						</p>
					</form>
				</div>
			</div>
</center>
<?php
include_once "Footer.php";
?>