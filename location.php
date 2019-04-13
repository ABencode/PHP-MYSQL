
<!DOCTYPE HTML>
<html lang="en">
<head><meta charset="UTF-8">
<title>Moving Location ?></title>
<link rel="stylesheet" href="includes/style.css">
</head>

<body>

<?php
session_start();
if ( isset( $_SESSION['id']))
{
    $id = $_SESSION['id'];
    echo "Welcome user ID #$id";
}
?>



</body>
</html>
