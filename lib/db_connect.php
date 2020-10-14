<?php
$host_name = $_SERVER["HTTP_HOST"];
$user_name = "root";
$password = "";
$database_name = "study_orbit";

$mysqli = new mysqli($host_name, $user_name, $password, $database_name);