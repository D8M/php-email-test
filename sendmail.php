<html>
 <head>
  <title>PHP-Test</title>
 </head>
 <body>
 <?php
    $to = 'daveswebsitetesting@gmail.com';
$subject = 'Hello from XAMPP!';
$message = 'This is a test of a php email sent from localhost';
$headers = "From:davdbmahon@gmail.com\r\n";
if (mail($to, $subject, $message, $headers)) {
   echo "SUCCESS";
} else {
   echo "ERROR";
}
   ?>
 </body>
</html>

 