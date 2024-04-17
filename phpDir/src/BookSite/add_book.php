
<?php
// Database connection code here

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $publishing_year = $_POST['publishing_year'];
    $genre = $_POST['genre'];
    $description = $_POST['description'];
    
    // Insert into database
    $sql = "INSERT INTO books (title, author, publishing_year, genre, description) 
            VALUES ('$title', '$author', '$year', '$genre', '$description')";
    
    if (mysqli_query($conn, $sql)) {
        echo "Book added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    // Close connection
    mysqli_close($conn);
}
?>


<?php

/**
 * Database connection using PDO
 */

 class DBConnect {
  private $server = 'db';
  private $dbname = 'booksite';
  private $user = 'root';
  private $pass = 'lionPass';

  public function  connect() {
    try {
      $conn = new PDO ('mysql:host=' .$this->server .';dbname=' . $this->dbname,
      $this->user, $this->pass);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conn;
    } catch (\Exception $e) {
      echo "Database Error: " . $e->getMessage();
    }
  }
 }
