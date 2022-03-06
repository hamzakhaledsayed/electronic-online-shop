<?php
include_once "HeaderBefore.php";
?>
<script>
 function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires="+ d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

        var username = getCookie("Shop");
          if (username != "") {
            sessionStorage.setItem('id', username);
            window.open('index.php','_self');
          }  
  
function Login()
    {
        var user=document.getElementById("txtuser").value;
        var pass=document.getElementById("txtpass").value;
        var checkBox = document.getElementById("chkrem");

        xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
    
        if (this.readyState == 4 && this.status == 200) {
            if (checkBox.checked == true){
                setCookie("Shop",user,3);
            }

            var result=this.responseText;
            if(result=="ok")
            {
                window.open('index.php','_self');
            }
            else
                document.getElementById("dvlogin").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "checklogin.php?user="+user+"&pass="+pass+"", true);
        xhttp.send();

    }
    </script>
<center>
			<div class="modal-content m-3"  style="width:45%;text-align:left">
				<div class="modal-header">
					<h5 class="modal-title text-center">Log In</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
                <div id="dvlogin">
                </div>
				<div class="modal-body">
					<form action="#" method="post">
						<div class="form-group">
							<label class="col-form-label">Username</label>
							<input type="text" class="form-control" placeholder=" " id="txtuser" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Password</label>
							<input type="password" class="form-control" placeholder=" " id="txtpass" required="">
						</div>
						<div class="right-w3l">
							<button class="btn btn-primary form-control" type="button" onclick="Login()">Log in</button>
						</div>
						<div class="sub-w3l">
							<div class="mr-sm-2">
								<input type="checkbox"  id="chkrem">
								<label >Remember me?</label>
							</div>
						</div>
						<p class="text-center dont-do mt-3">Don't have an account?
							<a href="register.php">
								Register Now</a>
						</p>
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