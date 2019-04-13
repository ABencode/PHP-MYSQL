<?php
# Incorporate the MYSQL connection script.
require('C:\Abyss Web Server/connect_db.php');

# Initialize a variable with SQL query string.
$q = 'SHOW TABLES';

# Initialize another variable  with the result 
# of a query to the database on the MySQL server.
$r = mysqli_query ($dbc, $q);

# Display a message.
if($r)
{echo '<h1>Tables on site_db database</h1>';
# Statements to display data contained in 
# each returned row and free the result set resource. 
while ( $row = mysqli_fetch_array($r, MYSQLI_NUM))
{
    echo '<br>'. $row[ 0 ];
}
 mysqli_free_result($r);
}
else
{ echo '<p>' . mysqli_error($dbc) . '</p>';}

# Close the MySQL server database connection.
mysqli_close ($dbc);