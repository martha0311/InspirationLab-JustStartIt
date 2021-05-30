<?php
require_once "config.php";


$id = $_POST["id"];
$profileIconId = $_POST["profileIconId"];
$uid = $_POST["uid"];

echo "$uid";


$int = (int)$uid;
// foreach ($_POST as $key => $value) {
//     echo "{$key} => {$value} ";
// }

// Prepare an insert statement



// $sql = "UPDATE `users` SET `profileIconId` = '$profileIconId', `user_id` = '$id' WHERE `users`.`id` = `$uid` ";
$sql = "UPDATE `users` SET `profileIconId` = '$profileIconId', `user_id` = '$id' WHERE `users`.`id` = $int;";

if ($mysqli->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
