<!DOCTYPE html>
<html>
<body>

<?php
$con = mysqli_init(); mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL); 
mysqli_real_connect($conn, "demo-server.mysql.database.azure.com", "demoserveradmin", "sWq*75AMm", "demo", 3306, MYSQLI_CLIENT_SSL);
?>


?>

</body>
</html>