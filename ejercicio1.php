<?php
//connect to MySQL
$db = mysqli_connect(gethostname(), 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');

//create the main database if it doesn't already exist
$query = 'CREATE DATABASE IF NOT EXISTS moviesite';
mysqli_query($db,$query) or die(mysqli_error($db));

//make sure our recently created database is the active one
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

$query ="ALTER TABLE movie
        ADD CONSTRAINT FK_movie_leadactor
        FOREIGN KEY (movie_leadactor) REFERENCES people (people_id)";

mysqli_query($db,$query) or die (mysqli_error($db));