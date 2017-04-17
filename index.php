<html>
<head>
  <title>php</title>
</head>
<body>

<?php

$localhost = 'http://localhost:8888/php/basicForm/index.php';
$userName = $_POST['username'];
$Password = $_POST['password'];
$Email = $_POST['email'];

echo $userName . '</br>';
echo $Password . '</br>';
echo $Email . '</br>';

?>

</body>
</html>
