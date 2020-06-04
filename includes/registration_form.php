<?php

$servername = "localhost:3306";
$username = "adikeman_userform";
$password = "testPass2020";
$dbname = "adikeman_forms";
$users_name = $_POST['name'];
$users_age = $_POST['age'];
$users_role = $_POST['role'];
$users_email = $_POST['email'];
$users_econtact = $_POST['econtact'];
$users_enumber = $_POST['enumber'];
$users_gender = $_POST['gender'];
$users_satevent = $_POST['satevent'];
$users_sunevent = $_POST['sunevent'];
$users_acc = $_POST['accommodations'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql ="
  INSERT INTO `adikeman_forms`.`form_table` (`id`, `name`, `age`, `role`, `email`, `econtact`, `enumber`, `gender`, `satevent`,
  `sunevent`, `accommodations`) VALUES (NULL, '$users_name', '$users_age', '$users_role',
        '$users_email', '$users_econtact', '$users_enumber', '$users_gender', '$users_satevent', '$users_sunevent', '$users_acc');";


if ($conn->query($sql) === TRUE) {
    header("Location: success.html.php");

    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>