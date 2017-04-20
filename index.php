
<html>
<head>
  <title>php</title>
</head>
<body>

<?php

$userName = $_POST['username'];
$Password = $_POST['password'];
$Email = $_POST['email'];


echo $userName . '</br>';
echo $Password . '</br>';
echo $Email . '</br>';


date_default_timezone_set('UTC');
echo date('h:i:s a Y');

?>


</body>
</html>
