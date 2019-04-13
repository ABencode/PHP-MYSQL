
<?php
if(!empty($_POST['comment']))
{
    $comment = $_POST['comment'];
    # Format validation to be inserted here
} 
else
{
    $comment = NULL;
    echo 'You must enter a comment.<br>';
}

$time = ( !isset($_POST['time']))? NULL : $_POST['time'];
$user = ( !isset($_POST['user']))? NULL : $_POST['user'];

if(($comment != NULL) &&
             ($time != NULL) && ($user != NULL))
{
    echo "<p>Comment received \" $comment \"<br>
             From $user at $time</p>";
}
