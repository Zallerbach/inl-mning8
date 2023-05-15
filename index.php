<?php
$name = $_POST["name"];
$email = $_POST["email"];
$homepage = $_POST["homepage"];
$comment = $_POST["comment"];
$sql = "INSERT INTO Guestbook (name, email, homepage, comment, time) VALUES ('$name', '$email', '$homepage', '$comment', now())";
$conn->query($sql);