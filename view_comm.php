<?php
include 'config.php';

$query = "SELECT * FROM testimonials";
$result = mysqli_query($conn, $query);

if (!$result) {
    die('Query failed: ' . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Testimonials</title>
    <link rel="stylesheet" href="style.css">

    <style>
        {
            background-image: url('images/bg2.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-color: rgba(0, 0, 0, 0.5); 
        }
    </style>
    
</head>
<body>
    <nav>
        <label class="logo">Beauty Brush</label>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="view_comm.php">View Testimonials</a></li>
            <li><a href="submit_comm.php" >Submit Testimonial</a></li>
            <li><a href="register.php" class="btn btn-success">Sign Up</a></li>
            <li><a href="login.php" class="btn btn-success">Log In</a></li>
        </ul>
    </nav>

    <div class="container">
        <h1>Student's Testimonials</h1>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='testimonial'>";
                echo "<h3>" . htmlspecialchars($row['name']) . "</h3>";
                echo "<p>" . htmlspecialchars($row['message']) . "</p>";
                echo "<p><em>Submitted on: " . htmlspecialchars($row['created_at']) . "</em></p>";
                echo "<a href='edit_comm.php?id=" . $row['id'] . "' class='btn btn-edit'>Edit</a>";
                echo "<a href='delete_comm.php?id=" . $row['id'] . "' class='btn btn-delete' onclick='return confirm(\"Are you sure you want to delete this testimonial?\");'>Delete</a>";
                echo "</div>";
            }
        }
        ?>
    </div>
</body>
</html>
