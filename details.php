<?php

require_once 'components/db_connect.php';


$sql = "SELECT * FROM `big_library` WHERE id = $_GET[bookID]";
$res = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($res);


        $card = "


            <div class='d-flex aligns-items-center justify-content-center card text-center w-75 mx-auto border-0' style='width: 20rem;'>
                <img src='$row[image]' class='card-img-top' alt='...' style='height: 20rem;'>
                <div class='card-body'>
                <p class='card-text'>$row[short_description]</p>
                <h5 class='card-title'>Title: $row[title]</h5>
                <p class='card-text'>Authors last name: $row[author_last_name]</p>
                <p class='card-text'>Authors first name: $row[author_first_name]</p>
                <p class='card-text'> Date the $row[type] was published: $row[publish_date]</p>
                <p class='card-text'> The name of the publisher: $row[publisher_name]</p>
                <p class='card-text'> Adress of Publisher: $row[publisher_address]</p>
                <p class='card-text'> ISBN: $row[isbn_code]</p>
                <p class='card-text'> Type of entry: $row[type]</p>
                </div>
                </div>

        ";
        mysqli_close($connection);
?>



<!DOCTYPE HTML>



<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Details</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
       

    <main>

    <?php require_once 'components/betaNavbar.php'; ?>
    <h3 class="text-center" style="margin-bottom: 25px margin-top: 25px"> Here you can view the details of the <?php echo $row["title"] ?> written by <?php echo $row["author_first_name"] . " " . $row["author_last_name"]; ?></h3> 
        <div>
                <?= $card; ?>  
        </div>



    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>