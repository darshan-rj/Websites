<?php 

//Open a new connection to the MySQL server
$conn = new mysqli('localhost', 'root', 'darshan', 'atom');


//Output any connection error
if ($conn->connect_error) {
    die('Error : (' . $conn->connect_errno . ') ' . $conn->connect_error);
}

return $conn;