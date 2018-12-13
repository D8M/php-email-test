<html>
 <head>
  <title>PHP-Test</title>
 </head>
 <body>
    $to = 'daveswebsitetesting@gmail.com.com';
$subject = 'Hello from XAMPP!';
$message = 'This is a test';
$headers = "From: your@email-address.com\r\n";
if (mail($to, $subject, $message, $headers)) {
   echo "SUCCESS";
} else {
   echo "ERROR";
}
    ?>
 </body>
</html>

 