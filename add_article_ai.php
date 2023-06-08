<?php
// Database connection details
$servername = "127.0.0.1";
$username = "root";
$password = '';
$dbname = "herbal_website";

// Create a new connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the form data
$title = $_POST["title"];
$content = $_POST["content"];
$author_id = $_POST["author_id"];
$category_id = $_POST["category_id"];

// Prepare the SQL statement
$sql = "INSERT INTO articles (title, content, author_id, category_id) 
        VALUES ('$title', '$content', '$content', '$category_id')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "new article created successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
