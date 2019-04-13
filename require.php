<?php
# Incorporate the MYSQL connection script.
require('C:\Abyss Web Server/connect_db.php');

# Display MYSQL version and host.
if(mysqli_ping($dbc))
{echo 'MYSQL Server '. mysqli_get_server_info($dbc). 
        ' connected on '. mysqli_get_host_info($dbc);}