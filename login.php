<?php
$message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Updated password to "hacked"
    if ($username == "admin" && $password == "hacked") {
        $message = "Login successful! Flag: FLAG-12345";
    } else {
        $message = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Challenge</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-dark text-white d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="container">
        <div class="card shadow-lg rounded-lg bg-dark border-light">
            <div class="card-body">
                <h2 class="card-title text-center">Login Challenge</h2>
                <form action="login.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control bg-dark text-white border-light" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control bg-dark text-white border-light" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-light btn-block">Login</button>
                </form>
                <p class="mt-3 text-center"><?php echo $message; ?></p>
            </div>
            <div class="card-footer bg-dark border-light text-center">
                <p class="mb-0">Follow us on 
                    <a href="#" class="text-white"><i class="fab fa-facebook"></i></a> 
                    <a href="#" class="text-white"><i class="fab fa-twitter"></i></a> 
                    <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                </p>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>