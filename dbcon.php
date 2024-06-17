
<?php 
$connection = mysqli_connect("mysql-db", "root", "your_root_password", "practice_vs");
    if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

    // Selecting a database 

    $db_select = mysqli_select_db($connection, "practice_vs");
    if (!$db_select) {
        die("Database selection failed: " . mysqli_connect_error());
    }
  ?>
