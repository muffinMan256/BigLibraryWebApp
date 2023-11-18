<?php 
require_once 'components/db_connect.php';

if(isset($_GET["bookID"]) && !empty($_GET["bookID"])){

    $id = $_GET["bookID"];

    $sql = "DELETE FROM `big_library` WHERE id = $id";
    
    if(mysqli_query( $connection, $sql )){

        echo "
        <div class='alert alert-success' role='alert'>
                The deletion of the entry was successful!
            </div>
    ";
    }

    
}

mysqli_close($connection);
header("Location: index.php");




