<?php
# Incorporate the MYSQL connection script.
require('C:\Abyss Web Server/connect_db.php');

# Initialize a variable with SQL query string.
$q = 'SHOW TABLE';

# Initialize another variable  with the result 
# of a query to the database on the MySQL sever.
$r = mysqli_query ($dbc, $q);

# Display a message.
if($r)
{echo '<h1>Result Set Returned OK</h1>';}
else
{ echo '<p>' . mysqli_error($dbc) . '</p>';}

# Close the MySQL server database connection.
mysqli_close ($dbc);