<html>
<body>

<?php

$uname=$_POST['username'];
$pass=$_POST['password'];

if($uname=="awesome"&&$pass=="123")
	echo "Login was Successful.";
else
	echo "invalid";

?>

</body>
</html>