<?php
include 'config.php'; // Assuming config.php connects to your database

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $sql = "INSERT INTO testimonials (name, message) VALUES ('$name', '$message')";
    
    if (mysqli_query($conn, $sql)) {
        echo "New testimonial added successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Testimonial</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <label class="logo">Beauty Brush</label>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="view_comm.php">View Testimonials</a></li>
            <li><a href="submit_comm.php">Submit Testimonial</a></li>
            <li><a href="register.php" class="btn btn-success">Sign Up</a></li>
            <li><a href="login.php" class="btn btn-success">Log In</a></li>
        </ul>
    </nav>

    <div class="container">
        <h1>Submit Testimonial</h1>
        <form method="post" action="">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>

            <label for="message">Testimonial</label>
            <textarea name="message" id="message" required></textarea>

            <input type="submit" name="submit" value="Submit" class="btn btn-success">
        </form>
    </div>
</body>
</html>
