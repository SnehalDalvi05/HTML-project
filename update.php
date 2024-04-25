<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $newName = $_POST['n1'];
    $newMarks = $_POST['n2'];
    $newClass = $_POST['n3'];

    // Establish database connection
    $dbcnx = mysqli_connect("localhost", "root", "", "python");
    if (!$dbcnx) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Update the record in the database
    $sql = "UPDATE stud SET name='$newName', marks='$newMarks', class='$newClass' WHERE name='$newName'";
    if (mysqli_query($dbcnx, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($dbcnx);
    }

    // Close the database connection
    mysqli_close($dbcnx);
}
?>
