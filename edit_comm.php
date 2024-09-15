<?php
include 'config.php';

if (!isset($_GET['id'])) {
    die('No ID specified.');
}

$id = intval($_GET['id']);

$query = "SELECT * FROM testimonials WHERE id = $id";
$result = mysqli_query($conn, $query);

if (!$result) {
    die('Query failed: ' . mysqli_error($conn));
}

$testimonial = mysqli_fetch_assoc($result);

if (!$testimonial) {
    die('Testimonial not found.');
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $message = $_POST['message'];

    $update = "UPDATE testimonials SET name = '$name', message = '$message' WHERE id = $id";
    if (mysqli_query($conn, $update)) {
        header('Location: view_comm.php');
        exit();
    } else {
        echo 'Failed to update testimonial.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Testimonial</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <!-- Your existing nav code -->
    </nav>

    <div class="container">
        <h1>Edit Testimonial</h1>
        <form method="post" action="">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($testimonial['name']); ?>" required>

            <label for="message">Message</label>
            <textarea name="message" id="message" required><?php echo htmlspecialchars($testimonial['message']); ?></textarea>

            <input type="submit" name="submit" value="Update" class="btn btn-success">
        </form>
    </div>
</body>
</html>
