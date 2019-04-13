<!DOCTYPE HTML>
<html lang="en">
<head><meta charset="UTF-8">
<title> Moving Location </title>
<link rel="stylesheet" href="includes/style.css">
</head>

<body>
<?php
if (isset ($_POST['id']))
{
# Handler statements to be inserted here.
$id = $_POST['id'];

if( $id == 123)
{
    session_start();
    $_SESSION['id'] = $id;
    header('Location: location.php');
    exit();
}

else {echo "<p>$id is an incorrect ID!</p>";}
}
echo '<form action="header.php" method="POST">
<fieldset> <legend>Enter Your User ID</legend>
<p>ID: <input type="text" name="id"></p>
</fielset> <input type="submit"</form>';

?>




</body>
</html>
