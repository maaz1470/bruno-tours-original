<?php



/* Subject and Email Variables */



	$emailSubject = 'Reservation request';

	$webMaster = 'info@brunotours.com';

	

	

/* Gathering Data Variable */	



	$nameField = $_POST['name'];

	$emailField = $_POST['email'];

	$phoneField = $_POST['phone'];

	$descriptionField = $_POST['description'];

	

	

	$body = <<<EOD

<br><hr><br>

Name: $nameField <br>

Email: $emailField <br>

Phone Number: $phoneField <br>

Message: $descriptionField <br>



EOD;



	$headers .= "From: $emailField\r\n";

	$headers .= "Content-type: text/html\r\n";

	$success = mail($webMaster, $emailSubject, $body,

$headers);

	

/* Results rendered as HTML */



	$theResults = <<<EOD

<html>

<head>

<title>Redirecting...</title>

<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=../../thankyou.html">

<style type="text/css">

<!--

body {

	background-color: #fff;

}

.style1 {

	color: #999;

	font-size: 24px;

	font-family:"Oswald", Arial;

	

}

-->

</style>                                                                                                                                   </head>



<body>

<span class="style1">Thank You For Your Reservation Request. We will get back to you shortly.

</span>     <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-18825843-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-18825843-1');
</script>
   </body>

</html>

EOD;

echo "$theResults";





?>