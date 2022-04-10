<?php
$user = 'root';
$password = ''; //To be completed if you have set a password to root
$database = 'test'; //To be completed to connect to a database. The database must exist.
$port = null; //Default must be NULL to use default port
$mysqli = new mysqli('127.0.0.1', $user, $password, $database, $port);

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
$mysqli -> set_charset("utf8");