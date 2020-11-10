<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medstore";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if($conn)
{
    echo "connection ok";
    ?>
<script>
    alert ('connection successfully');
    </script>

<?php
}
else
{
    echo "connection fail";
}

?>