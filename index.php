
<html>
<head>
  <title>php</title>
</head>
<body>

<?php

$userName = $_POST['username'];
$Password = $_POST['password'];
$Email = $_POST['email'];
$City = $_POST['city']


echo $userName . '</br>';
echo $Password . '</br>';
echo $Email . '</br>';


date_default_timezone_set('UTC');
echo date('h:i:s a Y');

$str = <<<EOD 
Welcome $userName!   
EOD;
echo $str;

?>


</body>
</html>
