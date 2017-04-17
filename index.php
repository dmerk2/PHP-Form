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
$Age = $_POST['age']; 	

echo $userName;
echo $Password;
echo $Email;
echo $Age;

?>

</body>
</html>
