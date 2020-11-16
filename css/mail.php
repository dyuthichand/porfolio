<?php
$to = "dyuthichand@gmail.com";
$subject = "HTML email";
$name = $_POST['name'];
$email = $_POST['email'];
$message1 = $_POST['message'];
$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>"+ $name +"</th>
</tr>
<tr>
<th>Email</th>
<th>"+ $email +"</th>
</tr>
<tr>
<th>message</th>
<th>"+ $message1 +"</th>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
?>