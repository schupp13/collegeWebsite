<?php
$to =   'pschultz1988@gmail.com';
$subject = "Thank you for Registering!";

$message = "
<html>
<head>
<title>Registration Confirmation Email</title>
</head>
<body>

<p><?=$_SESSION["firstname"]?><?=$_SESSION["lastName"]?>, Thank you for registering and we are excited to have you as a student.</p>
<h3 class="card-title"><strong>Contact Information:</strong></h3><br>
<p class="card-text">Email: <?=$_SESSION["email"]?></p>
<p class="card-text">Phone: <?=$_SESSION["phone"]?></p><br><br>
<h3 class="card-title"><strong>Address:</strong></h3><br>

<p class="card-text"><?=$_SESSION["streetAddress"]?></p>
<p class="card-text"><?=$_SESSION["streetAddress2"]?></p>
<p class="card-text"><?=$_SESSION["city"]?>, <?=$_SESSION["state"]?> <?=$_SESSION["postCode"]?></p>

</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <pschultz1988@gmail.com>' . "\r\n";

mail($to,$subject,$message,$headers);
?>
