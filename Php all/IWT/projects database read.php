<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "admindb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare data for insertion (assuming form fields are named 'project', 'Supervisor', and 'cost')
$proname = mysqli_real_escape_string($conn, $_POST['project']);
$supervisor = mysqli_real_escape_string($conn, $_POST['Supervisor']);
$estcost = mysqli_real_escape_string($conn, $_POST['cost']);

// SQL query with prepared statement
$sql = "INSERT INTO projects (proname, supervisor, estcost) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "sss", $proname, $supervisor, $estcost);

// Execute query
if (mysqli_stmt_execute($stmt)) {
    echo "<script>alert('Details added');</script>";
} else {
    echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
}

// Close statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
