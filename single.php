<!DOCTYPE HTML>
<html lang="en">
<head><meta charset="UTF-8">
<title>Getting Started with PHP</title>
</head>
<body>
<?php
if($_SERVER['REQUEST_METHOD'] != 'POST')
{
    # Form display statement need to be inserted here.
}
else
{
    # For handling statement need to be inserted here.
}

echo '
<form action="single.php" method="POST">

<fieldset>
<legend>Send us your feedback.</legend>
<textarea rows="5" cols="20" name="comment"></textarea>
</fieldset> <p><input type="submit"></p>
</form>';

if(!empty($_POST['comment']))
{
    $comment = $_POST['comment'];
    echo "comment: $comment";
} 
else
{
    $comment = NULL;
    echo 'You must enter a comment.';
}


?>
</body>
</html>
