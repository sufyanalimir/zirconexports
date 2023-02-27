<?php

$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['message'];
$subject = "New Enquiry at Zircon";
$email_header = "From: ".$name."<".$email.">\r\n";

$recipient = "contact@zirconexports.com";

mail($recipient, $subject, $msg, $email_header) or die('Error');

echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Zircon Exports | We Trade The World!</title>
    <link
      rel="icon"
      type="image/x-icon"
      href="./assets/img/zircon_exports_logo.svg"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="./assets/css/style.css" />
  </head>

  <body>
    <h1 style="text-align: center; padding: 1em">
      Thanks for contacting us. We\'ll get back to you soon.
    </h1>
    <h4 style="text-align: center">
      Click Here To <a href="./contact.html">Go Back</a>
    </h4>
  </body>
</html>
';
?>