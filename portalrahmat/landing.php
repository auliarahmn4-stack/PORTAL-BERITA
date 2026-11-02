<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Rahmat - Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .hero-section {
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }
        .hero-content {
            text-align: center;
            color: white;
            padding: 20px;
        }
        .hero-content h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }
        .hero-content p {
            font-size: 1.5rem;
            margin-bottom: 40px;
            opacity: 0.9;
        }
        .hero-content .btn {
            padding: 15px 40px;
            font-size: 1.2rem;
            border-radius: 50px;
            margin: 10px;
        }
        .btn-hero-login {
            background-color: transparent;
            border: 3px solid white;
            color: white;
        }
        .btn-hero-login:hover {
            background-color: white;
            color: #667eea;
        }
        .btn-hero-register {
            background-color: white;
            border: 3px solid white;
            color: #667eea;
        }
        .btn-hero-register:hover {
            background-color: #f0f0f0;
            border-color: #f0f0f0;
            color: #667eea;
        }
    </style>
</head>
<body>
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: rgba(102, 126, 234, 0.9); position: absolute; width: 100%; top: 0; z-index: 10;">
        <div class="container">
            <a class="navbar-brand" href="#">Portal Rahmat</a>
            <div class="ms-auto">
                <a href="login.php" class="btn btn-outline-light me-2">Login</a>
                <a href="register.php" class="btn btn-light" style="color: #667eea;">Register</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-content">
            <h1>Welcome to Portal Rahmat</h1>
            <p>Semua berita terbaru tentang art dari seluruh dunia yang anda cari akan ada disini.</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
