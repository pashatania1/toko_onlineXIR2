<?php

$conn=mysqli_connect('localhost','root','','toko_online');

//$conn1=mysqli_connect(172.10.168.23, 'pasha@gmail.com', '12345', 'toko_online');
/* check connection */

if (mysqli_connect_errno()) {

    printf("Connect failed: %s\n", mysqli_connect_error());

    exit();

}

?>