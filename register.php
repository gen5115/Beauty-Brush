<?php include 'config.php'; ?>

<?php
$error = [];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pwd = md5($_POST['password']);
    $cpwd = md5($_POST['cpassword']);

    $select = "SELECT * FROM `userdata` WHERE email='$email'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $error[] = "User already exists!";
    } elseif ($pwd !== $cpwd) {
        $error[] = "Passwords do not match!";
    } else {
        $insert = "INSERT INTO `userdata` (name, email, password) VALUES ('$name', '$email', '$pwd')";
        if (mysqli_query($conn, $insert)) {
            header('Location:login.php'); 
            exit();
        } else {
            $error[] = "Failed to register user!";
        }
    }
}

if (!empty($error)) {
    foreach ($error as $err) {
        echo '<div class="error">' . $err . '</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="background">
        <div class="form-container">
            <form method="post" action="register.php">
                <h1>Sign Up</h1>
                <label for="name" class="label-text">Name</label>
                <input type="text" name="name" id="name" placeholder="Enter your name" required>

                <label for="email" class="label-text">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your e-mail" required>

                <label for="password" class="label-text">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" required>

                <label for="cpassword" class="label-text">Confirm Password</label>
                <input type="password" name="cpassword" id="cpassword" placeholder="Confirm your password" required>

                <input type="submit" name="submit" value="Sign Up" class="btn">
                <p>Already have an account? <a href="login.php">Login now</a></p>
            </form>
        </div>
    </div>
</body>
</html>
