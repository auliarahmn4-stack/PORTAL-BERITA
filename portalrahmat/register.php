<?php
session_start();

// Handle registration
$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    
    // Validation
    if (empty($username) || empty($password)) {
        $error = 'Username dan password harus diisi!';
    } elseif (strlen($username) < 3) {
        $error = 'Username minimal 3 karakter!';
    } elseif (strlen($password) < 6) {
        $error = 'Password minimal 6 karakter!';
    } elseif ($password !== $confirm_password) {
        $error = 'Password dan konfirmasi password tidak sama!';
    } else {
        // Load existing users
        $users_file = 'users.json';
        $users = [];
        if (file_exists($users_file)) {
            $users = json_decode(file_get_contents($users_file), true) ?? [];
        }
        
        // Check if username already exists
        $username_exists = false;
        foreach ($users as $user) {
            if ($user['username'] === $username) {
                $username_exists = true;
                break;
            }
        }
        
        if ($username_exists) {
            $error = 'Username sudah digunakan!';
        } else {
            // Add new user
            $users[] = [
                'username' => $username,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'created_at' => date('Y-m-d H:i:s')
            ];
            
            file_put_contents($users_file, json_encode($users, JSON_PRETTY_PRINT));
            $success = 'Registrasi berhasil! Silakan login dengan akun baru Anda.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Portal Rahmat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .register-container {
            text-align: center;
            padding: 40px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
            max-width: 400px;
            width: 90%;
        }
        .register-title {
            color: #333;
            font-weight: 700;
            margin-bottom: 30px;
        }
        .form-control {
            border-radius: 10px;
            padding: 12px 15px;
        }
        .btn-register {
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            font-size: 16px;
        }
        .login-link {
            margin-top: 20px;
            color: #666;
        }
        .alert {
            border-radius: 10px;
        }
    </style>
</head>
<body>
    
    <div class="register-container">
        <h1 class="register-title">Register</h1>
        <?php if ($error): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        <?php if ($success): ?>
            <div class="alert alert-success"><?php echo $success; ?></div>
            <a href="login.php" class="btn btn-primary btn-register">Go to Login</a>
        <?php else: ?>
            <form method="POST" action="">
                <div class="mb-3">
                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" name="confirm_password" placeholder="Konfirmasi Password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-register">Register</button>
            </form>
        <?php endif; ?>
        <p class="login-link">Sudah punya akun? <a href="login.php">Login</a></p>
        <a href="landing.php" class="btn btn-link mt-3">← Back to Home</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
