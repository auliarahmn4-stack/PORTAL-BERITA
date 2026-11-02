<?php
session_start();

// Handle logout
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: login.php');
    exit;
}

// Handle login
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    // Default credentials
    if ($username === 'rahmat' && $password === 'rahmat123') {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;
        header('Location: index.php');
        exit;
    }
    
    // Check registered users
    $users_file = 'users.json';
    if (file_exists($users_file)) {
        $users = json_decode(file_get_contents($users_file), true) ?? [];
        foreach ($users as $user) {
            if ($user['username'] === $username && password_verify($password, $user['password'])) {
                $_SESSION['logged_in'] = true;
                $_SESSION['username'] = $username;
                header('Location: index.php');
                exit;
            }
        }
    }
    
    $error = 'Username atau password salah!';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Portal Rahmat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .login-container {
            text-align: center;
            padding: 40px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
            max-width: 400px;
            width: 90%;
        }
        .login-title {
            color: #333;
            font-weight: 700;
            margin-bottom: 30px;
        }
        .form-control {
            border-radius: 10px;
            padding: 12px 15px;
        }
        .btn-login {
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            font-size: 16px;
        }
        .register-link {
            margin-top: 20px;
            color: #666;
        }
        .alert {
            border-radius: 10px;
        }
    </style>
</head>
<body>
    
    <div class="login-container">
        <h1 class="login-title">Login</h1>
        <?php if ($error): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        <form method="POST" action="">
            <div class="mb-3">
                <input type="text" class="form-control" name="username" placeholder="Username" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-login">Login</button>
        </form>
        <p class="register-link">Belum punya akun? <a href="register.php">Register</a></p>
        <a href="landing.php" class="btn btn-link mt-3">← Back to Home</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
