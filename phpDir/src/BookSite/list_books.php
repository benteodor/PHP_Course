<?php
// Database connection code
$servername = "db";
$username = "root"; // Replace with your MySQL username
$password = "lionPass"; // Replace with your MySQL password
$dbname = "booksite";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to retrieve books
$sql = "SELECT * FROM books";
$result = mysqli_query($conn, $sql);

// Check if the query executed successfully
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

while ($row = mysqli_fetch_assoc($result)) {
    // Check if any of the expected keys are NULL
    if (!is_null($row['title']) && !is_null($row['author']) && !is_null($row['publishing_year']) && !is_null($row['genre']) && !is_null($row['description'])) {
        // Output row data here
    } else {
        echo "Incomplete book data found."; // This line will help identify incomplete data
    }
    while ($row = mysqli_fetch_assoc($result)) {
        // Print out the keys of the $row array
        print_r(array_keys($row));
    }
    
}

// Check if any books were found
if (mysqli_num_rows($result) > 0) {
    echo "<h2>Books</h2>";
    echo "<table border='1'>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Year</th>
                <th>Genre</th>
                <th>Description</th>
            </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        // Check if the expected keys exist in the $row array
        if (isset($row['title'], $row['author'], $row['publishing_year'], $row['genre'], $row['description'])) {
            echo "<tr>";
            echo "<td>".$row['title']."</td>";
            echo "<td>".$row['author']."</td>";
            echo "<td>".$row['publishing_year']."</td>";
            echo "<td>".$row['genre']."</td>";
            echo "<td>".$row['description']."</td>";
            echo "</tr>";
        } else {
            echo "Incomplete book data found."; // This line will help identify incomplete data
        }
    }
    echo "</table>";
} else {
    echo "No books found.";
}

// Close connection
mysqli_close($conn);




?>
