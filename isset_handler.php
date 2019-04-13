
<?php
if(isset($_POST['definition']))
{
    $definition = $_POST['definition'];
} 
else
{
    $definition = NULL;
}

if($definition != NULL)
{
    if($definition != 'Scripting')
    {echo "$definition is incorrect";}
    else
    {echo "$definition is correct";}
}
else
{echo 'You must select one answer';}

?>