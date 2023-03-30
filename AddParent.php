<?php


$link = mysqli_connect("sdb-58.hosting.stackcp.net", "student88-35303137e789", "ua92-studentAc", "student88-35303137e789");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $fname = $_POST['Parentname1'];
    $lname = $_POST['Parentname2'];
    $add = $_POST['address'];

    $sql = "INSERT INTO parent ('Parentname1','Parentname2','address') VALUES ('$Pfirstname'Plastname'Address')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>