
 
<?php 


$id_stamp = $_GET["id_stamp"];

/* Conection with DB*/
$servername = "http://dleyva.techlaunch.online/stamps/";
$username = "dleyva";
$password = "Cuba1234567890";
$dbname = "collections";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "delete from stamps where id_stamp = ".$id_stamp;
$result = $conn->query($sql);

?>

<html> 
    <body>
        
        <?php echo 'The id: ' . $id_stamp . ' was delete successfully.'; ?>
        <br>
        <br>
        <a href="index.php">Go Dashboard </a>
</body>
</html>  





