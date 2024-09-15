<?php include 'config.php'; 

session_start(); 

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pwd = md5($_POST['password']);

    $select = "SELECT * FROM `userdata` WHERE email='$email' AND password='$pwd'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['email'] = $email;
        header('Location: index.php');
        exit();
    } else {
        $error[] = "Invalid email or password!";
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
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="background">
        <div class="form-container">
            <form method="post" action="login.php">
                <h1>Login</h1>
                <label for="email" class="label-text">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your e-mail" required>

                <label for="password" class="label-text">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" required>

                <input type="submit" name="submit" value="Login" class="btn">
                <p>Don't have an account? <a href="register.php">Sign up now</a></p>
            </form>
        </div>
    </div>
</body>
</html>
