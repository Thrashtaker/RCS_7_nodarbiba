<?php
session_start(); //šeit mēs sākam jaunu sesiju, kas iedos katram lietotājam cookie, lai viņam nebūtu katru reizi jāielogojas

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web_kurss";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); // ar šo datubāzei prasīsim izdarīt lietas