<?php
session_start();

// initializing variables
$firstname = "";
$lastname = "";
$email = "";
$phone = "";
$university = "";

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'forum');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $university = mysqli_real_escape_string($db, $_POST['university']);
  $query = "INSERT INTO register (firstname, lastname, email, phone,university) VALUES('$firstname', '$lastname', '$email', '$phone','$university')";
  mysqli_query($db, $query);
}
?>