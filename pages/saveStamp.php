<?php

$id_stamp = $_GET["id_stamp"];
$number = $_GET["number"];
$name = $_GET["name"];
$term = $_GET["term"];
$description = $_GET["description"];
$party = $_GET["party"];
$size = '140x140';
$picture = $_GET['picture'];
$glued = 1;


$Id = "'" . $id_stamp . "'";
$Number = $number;
$Name = "'" . $name . "'";
$Term = "'" . $term . "'";
$Description = "'" . $description . "'";
$Party = "'" . $party . "'";
$Size = "'" . $size . "'";
$Picture = "'" . $picture . "'";
$Glued = $glued;

/* Connection with the DB */
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

$sql = "insert into stamps(id_stamp,party,picture,description,name,term,size,number,glued) values ($Id,$Party,$Picture,$Description,$Name,$Term,$Size,$Number,$Glued)";
$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <?php include('../includes/Header.php') ?>

    <style>
        body {
            background-color:grey;
        }
        a {color: yellow}
    </style>


</head>

<!--<a href="../index.php">Go Dashboard </a>-->

<body id="home" class="scrollspy">

    <?php include('../includes/Navbar.php') ?>

    <section>
        <div class="row">


            <div class="col s6 m2"></div>
            <div class="col s6 m10">

                <a href="../index.php">Back to Dashboard </a>
                <br>
                <br>

                <h3>President # <?php echo $number ?></h3>


                <div class="card">


                    <div class="col s6 m3">
                        <div class="card-image">
                            <img class="image" src=<?php echo '../' . trim($picture); ?> alt=<?php echo $name; ?> />
                        </div>
                    </div>
                    <div class="col s6 m7">
                        <table>
                            <th> </th>
                            <th>Term of Office</th>
                            <th>Party </th>
                            <tr>
                                <td>
                                    <h5><?php echo $name; ?></h5>
                                </td>
                                <td> <?php echo $term; ?></td>
                                <td> <?php echo $party; ?></td>
                            </tr>
                        </table>

                        <p> <?php echo $description; ?> </p>

                    </div>
                </div>
            </div>






        </div>


        </div>

        <?php include('../includes/Footer.php') ?>




</body>

</html>
