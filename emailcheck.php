<?php
session_start();
include_once "Database.php";
$db=new Database();
$rs=$db->GetData("select * from Customer where email='".$_GET["user"]."'");
if($row=mysqli_fetch_assoc($rs))
{

    require_once "src/PHPMailer.php";
    require_once "src/Exception.php";
    require_once "src/SMTP.php";
    require_once "vendor/autoload.php";
        
        $mail = new  PHPMailer\PHPMailer\PHPMailer();
        $email=$_GET["user"];
        $mail->IsSMTP();
        //$mail->SMTPDebug = 1;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465; // or 587
        $mail->IsHTML(true);

        $mail->Username = "shopping308yat@gmail.com";
        $mail->Password = "ABC@123456";

        $mail->setFrom('yourmobileapp2017@gmail.com', 'Shop Yat 30-8');

        $mail->addAddress($email, "Shop Yat 30-8");
        $mail->Subject = 'Forget Password';
        $id=$row["CustomerId"];
        $code=rand(11111,99999);
        $_SESSION["activ"]=$code;
       
        $mail->Body = "Dear Mr/Mrs ".$row['name']."<br/>http://localhost/shop/ActivationCode.php?uid=$id<br/>Your Activation Code is <h2>$code</h2>";
        
        if(!$mail->send()) {
          //  echo "Opps! For some technical reasons we couldn't able to sent you an email. We will shortly get back to you with download details.";	
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
        else
            echo "ok";
}
else
    echo "<div class='alert alert-danger'> This email not exist  </div>";


?>