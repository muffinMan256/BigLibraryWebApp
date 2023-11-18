<?php

require_once 'components/db_connect.php';


$sql = "SELECT * FROM `big_library` WHERE `type` = 'book'";
$res = mysqli_query($connection, $sql);
$card = "";


if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) { ## here we get all the entries, from the 'big_library'
        $card .= "
    
            <div class='p-2'>
                <div class='card'>
                    <img src='$row[image]' class='card-img-top' alt='Background Image'>
                    <div class='card-body'>
                        <h5 class='card-title'> Title: $row[title] </h5>
                        <p class='card-text'> Author's last name: $row[author_last_name] </p>
                        <p class='card-text'> Publish date: $row[publish_date] </p>
                        <p class='card-text'> Type of Entry: $row[type] </p>
                        <a href='details.php?bookID=$row[id]' class='btn btn-outline-primary'> Show details </a>
                        <a href='update.php?bookID=$row[id]' class='btn btn-outline-secondary'> Edit </a>
                        <a href='delete.php?bookID=$row[id]' class='btn btn-outline-danger'> Delete Entry </a>
                    </div>
                </div>
            </div>      
        
        ";
    }
}

?>



<!DOCTYPE HTML>



<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body> 

    <main>

    <?php require_once 'components/betaNavbar.php'; ?>

    <h3 class="text-center" style=" margin-top:35px"> Here you can view the Books only! </h3>
    <div class="container">
        <div class="row row-cols-3 g-3">
            <?= $card; ?>
        </div>
        
    </div>



    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>