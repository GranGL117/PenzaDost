<?php
$connect = mysqli_connect('localhost', 'root', 'root', 'dost');

if (!$connect) {
    die('Error connect to DataBase');
}