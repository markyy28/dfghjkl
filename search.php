<?php
// Assuming you have a database connection already established
$servername = "localhost";

$dbname = "inventorymanagement";

// Create connection
$conn = new mysqli($servername,  $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the search query is set
if (isset($_GET['search'])) {
    // Get the search query from the URL
    $search = $_GET['search'];

    // SQL query to search for items in your database table
    $sql = "SELECT * FROM batch20193 WHERE batch193 LIKE '%$search%'";
    $result = $conn->query($sql);

    // Check if any results were found
    if ($result->num_rows > 0) {
        // Output data of each row
        echo "<h2>Search Results:</h2>";
        echo "<table>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["batch193"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<h2>No results found</h2>";
    }
}

// Close the database connection
$conn->close();
?>
