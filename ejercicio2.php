<?php
// connect to mysqli
$db = mysqli_connect(gethostname(), 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');
//make sure you're using the correct database
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));
// insert data into the movie table
$query = 'INSERT INTO movietype 
        (movietype_id, movietype_label)
    VALUES 
        (10,"War"),
        (11, "Musical"), 
        (12, "Clasics")';
mysqli_query($db,$query) or die(mysqli_error($db));

echo 'Data inserted successfully!';
?>