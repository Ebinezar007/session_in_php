<!DOCTYPE html>
<html>
<body>
<?php
session_start();
?>


<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"]="yellow". ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"]="lion" . ".";
?>

</body>
</html>
