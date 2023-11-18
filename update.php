<?php
require_once 'components/db_connect.php';

$sql = "SELECT * FROM `big_library` WHERE id = $_GET[bookID]";
$reuslt = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($reuslt);

if ((isset($_POST["submit"]))) {
    $title = $_POST["title"];
    $lastName = $_POST["author_last_name"];
    $firstName = $_POST["author_first_name"];
    $descr = $_POST["short_description"];
    $isbn = $_POST["isbn_code"];
    $pubName = $_POST["publisher_name"];
    $pubAddrs = $_POST["publisher_address"];
    $pubDate = $_POST["publish_date"];
    $pic = $_POST["image"];
    $type = $_POST["type"];

    $sql = "UPDATE `big_library` 
    SET `title`='$title',`author_last_name`='$lastName',`author_first_name`='$firstName',`short_description`='$descr',
    `isbn_code`='$isbn',`publisher_name`='$pubName',`publisher_address`='$pubAddrs',`publish_date`='$pubDate',`image`='$pic',`type`='$type'
     WHERE `id` = $_GET[bookID]";

        if(mysqli_query($connection, $sql)) {
            echo "
            <div class='alert alert-success' role='alert'>
                The entry was a successfully updated!
            </div>
            ";
        }else{
            echo "
            <div class='alert alert-danger' role='alert'>
                There was an error in the updating process!
            </div>
            ";
        }
}
mysqli_close($connection);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Update</title>
</head>

<body>

    <?php require_once 'components/betaNavbar.php'; ?>
    
    <div class="container mt-5">
            <h2>Update an entry in the Library!</h2>
            <form action ="" method = "POST" class="row g-3" style="margin-top: 20px">

            <div class="col-md-12">
                    <label for="title" class="form-label"> Update Title </label>
                    <input required value="<?= $row["title"]; ?>" class="form-control" type="text" name="title" placeholder="Enter the title of the book you want to add">
                </div>

                <div class="col-md-6">
                    <label for="author_last_name" class="form-label"> Update Last Name </label>
                    <input value="<?= $row["author_last_name"]; ?>" class="form-control" type="text" name="author_last_name" placeholder="Enter the last name of the author">
                </div>

                <div class="col-md-6">
                <label for="author_first_name" class="form-label"> Update First Name </label>
                <input value="<?= $row["author_first_name"]; ?>" type="text" class="form-control" name="author_first_name" placeholder="Enter the first name of the author">
                </div>



                <div class="col-md-12">
                <label for="short_description" class="form-label"> Update Short Book Description </label>
                    <textarea class="form-control" id="short_description" name="short_description" placeholder ="(max. 200 charachters.)"></textarea>
                </div>

                <div class="col-md-6">
                <label for="isbn_code" class="form-label"> Update ISBN </label>
                <input value="<?= $row["isbn_code"]; ?>" class="form-control" type="text" name="isbn_code" placeholder="example: ISBN 978-3-12-732320-7">
                </div>

                <div class="col-md-6">
                <label for="isbn_code" class="form-label"> Update Publisher </label>
                <input value="<?= $row["publisher_name"]; ?>" class="form-control" type="text" name="publisher_name" placeholder="Enter the name of the publisher">
                </div>

                <div class="col-md-6">
                <label for="publisher_address" class="form-label"> Update Publisher Address </label>
                <input value="<?= $row["publisher_address"]; ?>" class="form-control" type="text" name="publisher_address" placeholder="Enter the address of the publisher">
                </div>

                

                <div class="col-md-6">
                <label for="publish_date" class="form-label"> Update Published Date </label>
                <input value="<?= $row["publish_date"]; ?>" class="form-control" type="date" name="publish_date">
                </div>
                

                <div class="col-md-4">
                <label for="image" class="form-label"> Update Image </label>
                <input value="<?= $row["image"]; ?>" class="form-control" type="text" name="image" placeholder="Add picture URL">
                </div>
                

                <div class="col-md-4" style="margin-top: 55px; margin-left: 20px">
                <label for="type" class="form-label"> Select format </label>
                    <select name="type">
                    <option value="DVD" <?php echo $row["type"] == "DVD" ? "selected" : ""?>> DVD </option>
                        <option value="CD" <?php echo $row["type"] == "CD" ? "selected" : ""?>> CD </option>
                        <option value="book" <?php echo $row["type"] == "book" ? "selected" : ""?>> Book </option>
                    </select>
                </div>

                <div class="col-md-12">
                    <div class="float-end"> 
                        <input class="btn btn-warning btn-lg" type="submit" name="submit" value="Update the Database entry!">  
                    </div>
                </div>
                

            </form>
        </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>