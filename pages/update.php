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

$sql = "SELECT id_stamp,number, name, term, description,party,picture, glued FROM stamps WHERE id_stamp = ".$id_stamp;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
   // $pic = '';
   
    while($row = $result->fetch_assoc()) {
     //   $pic = $row["picture"];
        $id_stamp = $row["id_stamp"];
        $number = $row["number"];
        $name = $row["name"];
        $term = $row["term"];
        $description = $row["description"];
        $party = $row["party"];
      //  $year_issued= $row["year_issued"];
      //  $size= $row["size"];
        $picture= $row["picture"];
        $glued = $row["glued"];
    }
  
} else {
    echo "0 results";
}
$conn->close();







?>

<!DOCTYPE html>

<html lang="en">

<head>
    <?php include('../includes/Header.php')?>
</head>

<body id="home" class="scrollspy">
   
    <?php include('../includes/Navbar.php') ?>

    <section>

    <div id="new-stamp">
   
    <h3>Update Stamp</h3>
    <div class="row">
    <form action="saveUpdate.php" method="get" class="col s12 m10">
      <div class="row">

        <div class="input-field col s12 m8">
          <input type="text" name="id_stamp" value=' <?php echo $id_stamp;?> ' required>
          <label>Stamp ID#</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m8">
          <input type="text" name="picture"  value=' <?php echo $picture;?> ' required>
          <label>Picture</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12 m8">
          <input type="text" name="number"  value=' <?php echo $number;?> ' required>
          <label>Number</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m8">
          <input type="text" name="name" value=' <?php echo $name;?> ' required>
          <label>Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m8">
          <input type="text" name="term"  value=' <?php echo $term;?> ' required>
          <label>Term of Office</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m8">
          <input type="text" name="party" value=' <?php echo $party;?> ' required>
          <label>Party</label>
        </div>
      </div>
    
      <div class="row">
        <div class="input-field col s12 m8">
        <label>Description</label>
          <textarea id="textarea1" class="materialize-textarea" name="description"   required> <?php echo $description;?> </textarea>
        
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m8">
        <label>Glued</label>
          <input type="text" name="glued" value=' <?php echo $glued;?> ' required>
        
        </div>
      </div>
      <button type="submit" class="btn">Submit</button>
      <a href="../index.php" class="btn black">Cancel </a>
    
    </form>
  </div>
  </div>

      
    </div>

     <?php include('../includes/Footer.php') ?>





</body>

</html>
