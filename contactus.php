<?php
    
    use PHPMailer\PHPMailer\PHPMailer;
	include_once "PHPMailer/PHPMailer.php";
	include_once "PHPMailer/Exception.php";
	include_once "PHPMailer/SMTP.php";
    
   

    if(isset($_POST['cSubmit'])){
        $name=$_POST['nameTxt'];
        $email=$_POST['mailTxt'];
        $tel=$_POST['teleTxt'];
        $subj=$_POST['subjectTxt'];
        $message=$_POST['msgTxt'];
        $body=$message.' by '.$name.'('.$tel.') - '.$email;

        $mail= new PHPMailer(true);
        try {
    $mail->SMTPDebug = 2;                                 
    //$mail->isSMTP();                                      
    $mail->Host = 'smtp.gmail.com';  
    $mail->SMTPAuth = true;                              
    $mail->UserName = 'hiredsl.com@example.com';                 
    $mail->Password = 'hired1998';                           
    $mail->SMTPSecure = 'tls';                            
    $mail->Port = 587;
    
    $mail->setFrom('hiredsl.com@gmail.com');
    $mail->addAddress('durekshawasala@gmail.com');                  
    $mail->isHTML(true);                                 
    $mail->Subject = "$subj";
    $mail->Body    = "$body";

    $mail->send();
        echo"<script>alert(\"Your email has been sent, thank you!\")</script>";
    }
 catch (Exception $e) {
        echo"<script>alert(Please try again!\")</script>";
}
    }

		
            
       
?>

<!DOCTYPE html>
<html>
<head>
<title>Contact Us</title>
<link rel="stylesheet" type="text/css" href="CSS\Stylesheet.css">
<link rel="stylesheet" type="text/css" href="CSS\Other.css">
<script>
    function contactValidate(){
    var msg=document.getElementById('msgTxt').value;
    var name=document.getElementById('nameTxt').value;
    var mail=document.getElementById('mailTxt').value;

    if(msg == ""){
        alert("Message Field Cannot Be Blank");
        return false;
    }
    if(name == ""){
        alert("Enter Name");
        return false;
    }
    if(mail == ""){
        alert("Enter E-mail");
        return false;
    }

}

</script>
</head>

<body>
<?php 
    include "header.php";
?>
<div style="padding-top:8px;">
    <h2>Contact Us</h2>
    <div class="contactContent1">
        
            <h3  class="contactContent">Get In Touch </h3><br>
            <h5  class="contactContent">Address</h5>
            <h4  class="contactContent">139/1,<br>High Level Road,<br>Nugegoda</h4><br><br>
            <h5  class="contactContent">Telephone Number</h5>
            <h4  class="contactContent">+94-112220546 / 112220547</h4><br><br>
            <h5  class="contactContent">E-mail</h5>
            <a  class="contactContent" href="https:\\www.gmail.com" target="#"><h4  class="contactContent">hiredsl.com@gmail.com</h4></a>
    </div>
    
    <div class="contactContent2">
            <form class="contactUsF" action="contactUs.php" method="post" name="form_contactUs" onsubmit="return contactValidate()">
                    <h3 class="contactUsF">Send US A Message</h3><br>
                    <input id="nameTxt" name="nameTxt" type="text" class="contactUsF" placeholder="Enter Name">
                    <input id="mailTxt" name="mailTxt" type="email" class="contactUsF" placeholder="Enter E-mail">
                    <input id="teleTxt" name="teleTxt" type="text" class="contactUsF" placeholder="Enter Telephone No">
                    <input id="subjectTxt" name="subjectTxt" type="text" class="contactUsF" placeholder="Enter Subject Of The Message">
                    <textarea id="msgTxt"  name="msgTxt" placeholder="Input Your Message" class="contactUsF"></textarea><br>
                    <input type="submit" name="cSubmit" class="contactUsF" value="Send">
                    <input type="reset" class="contactUsF" value="Reset">
                
    </div>




<?php 
    include "footer.php";
?>
</body>

</html>