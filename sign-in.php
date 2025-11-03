<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sign In - Access your CyberGuard account">
    <title>Sign In - CyberGuard</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .signin-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 2rem;
        }
        
        .signin-card {
            background: white;
            border-radius: 1.5rem;
            padding: 3rem;
            max-width: 450px;
            width: 100%;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }
        
        .signin-header {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .signin-logo {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            margin-bottom: 1.5rem;
        }
        
        .signin-logo .logo-text h2 {
            font-size: 1.5rem;
            color: #1F2937;
            margin-bottom: 0.25rem;
        }
        
        .signin-logo .logo-text p {
            font-size: 0.875rem;
            color: #6B7280;
        }
        
        .signin-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: #1F2937;
            margin-bottom: 0.5rem;
        }
        
        .signin-subtitle {
            color: #6B7280;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: #374151;
        }
        
        .form-input {
            width: 100%;
            padding: 0.875rem 1rem;
            border: 2px solid #E5E7EB;
            border-radius: 0.75rem;
            font-size: 1rem;
            transition: border-color 0.3s;
        }
        
        .form-input:focus {
            outline: none;
            border-color: #4F46E5;
        }
        
        .form-checkbox {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
        }
        
        .form-checkbox input {
            width: 18px;
            height: 18px;
            cursor: pointer;
        }
        
        .form-checkbox label {
            color: #6B7280;
            cursor: pointer;
        }
        
        .btn-submit {
            width: 100%;
            padding: 1rem;
            background: #4F46E5;
            color: white;
            border: none;
            border-radius: 0.75rem;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
        }
        
        .btn-submit:hover {
            background: #4338CA;
        }
        
        .divider {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin: 1.5rem 0;
            color: #9CA3AF;
        }
        
        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: #E5E7EB;
        }
        
        .social-signin {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }
        
        .btn-social {
            padding: 0.875rem;
            border: 2px solid #E5E7EB;
            border-radius: 0.75rem;
            background: white;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }
        
        .btn-social:hover {
            border-color: #4F46E5;
            color: #4F46E5;
        }
        
        .signup-link {
            text-align: center;
            color: #6B7280;
            margin-top: 1.5rem;
        }
        
        .signup-link a {
            color: #4F46E5;
            text-decoration: none;
            font-weight: 600;
        }
        
        .signup-link a:hover {
            text-decoration: underline;
        }
        
        .back-home {
            text-align: center;
            margin-top: 1.5rem;
        }
        
        .back-home a {
            color: white;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .back-home a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="signin-container">
        <div>
            <div class="signin-card">
                <div class="signin-header">
                    <div class="signin-logo">
                        <div class="logo-icon">
                            <svg width="40" height="40" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="32" height="32" rx="8" fill="#4F46E5"/>
                                <path d="M16 8L12 12H14V18H12L16 24L20 18H18V12H20L16 8Z" fill="white"/>
                            </svg>
                        </div>
                        <div class="logo-text">
                            <h2>CyberGuard</h2>
                            <p>Digital Bharat Initiative</p>
                        </div>
                    </div>
                    <h1 class="signin-title">Welcome Back</h1>
                    <p class="signin-subtitle">Sign in to your account to continue</p>
                </div>
                
                <form id="signinForm">
                    <div class="form-group">
                        <label class="form-label" for="email">Email Address</label>
                        <input 
                            type="email" 
                            id="email" 
                            class="form-input" 
                            placeholder="you@example.com"
                            required
                        />
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="password">Password</label>
                        <input 
                            type="password" 
                            id="password" 
                            class="form-input" 
                            placeholder="Enter your password"
                            required
                        />
                    </div>
                    
                    <div class="form-checkbox">
                        <input type="checkbox" id="remember" />
                        <label for="remember">Remember me</label>
                    </div>
                    
                    <button type="submit" class="btn-submit">Sign In</button>
                </form>
                
                <div class="divider">or continue with</div>
                
                <div class="social-signin">
                    <button class="btn-social">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.56 12.25C22.56 11.47 22.49 10.72 22.36 10H12V14.26H17.92C17.66 15.63 16.88 16.79 15.71 17.57V20.34H19.28C21.36 18.42 22.56 15.6 22.56 12.25Z" fill="#4285F4"/>
                            <path d="M12 23C14.97 23 17.46 22.02 19.28 20.34L15.71 17.57C14.73 18.23 13.48 18.63 12 18.63C9.13 18.63 6.71 16.7 5.84 14.1H2.18V16.94C3.99 20.53 7.7 23 12 23Z" fill="#34A853"/>
                            <path d="M5.84 14.1C5.62 13.44 5.49 12.73 5.49 12C5.49 11.27 5.62 10.56 5.84 9.9V7.06H2.18C1.43 8.55 1 10.22 1 12C1 13.78 1.43 15.45 2.18 16.94L5.84 14.1Z" fill="#FBBC05"/>
                            <path d="M12 5.38C13.62 5.38 15.06 5.94 16.21 7.02L19.36 3.87C17.45 2.09 14.97 1 12 1C7.7 1 3.99 3.47 2.18 7.06L5.84 9.9C6.71 7.3 9.13 5.38 12 5.38Z" fill="#EA4335"/>
                        </svg>
                        Google
                    </button>
                    <button class="btn-social">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 17.9895 4.3882 22.954 10.125 23.8542V15.4688H7.07812V12H10.125V9.35625C10.125 6.34875 11.9166 4.6875 14.6576 4.6875C15.9701 4.6875 17.3438 4.92188 17.3438 4.92188V7.875H15.8306C14.34 7.875 13.875 8.80008 13.875 9.75V12H17.2031L16.6711 15.4688H13.875V23.8542C19.6118 22.954 24 17.9895 24 12Z" fill="#1877F2"/>
                        </svg>
                        Facebook
                    </button>
                </div>
                
                <div class="signup-link">
                    Don't have an account? <a href="#">Sign up</a>
                </div>
            </div>
            
            <div class="back-home">
                <a href="index.php">
                    ← Back to Home
                </a>
            </div>
        </div>
    </div>
    
    <script>
        document.getElementById('signinForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Sign in functionality will be implemented in the backend!');
        });
    </script>
</body>
</html>
 -->
<?php
session_start();
require_once 'includes/db_connect.php'; // Connect to PostgreSQL

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if ($email && $password) {
        $stmt = $pdo->prepare("SELECT id, email, password FROM users WHERE email = :email LIMIT 1");
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            header("Location: dashboard.php");
            exit;
        } else {
            $message = "❌ Invalid email or password";
        }
    } else {
        $message = "⚠️ Please fill in all fields";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sign In - Access your CyberGuard account">
    <title>Sign In - CyberGuard</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        /* your same CSS — unchanged */
        .signin-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 2rem;
        }
        .signin-card {
            background: white;
            border-radius: 1.5rem;
            padding: 3rem;
            max-width: 450px;
            width: 100%;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }
        .error-message {
            background: #fee2e2;
            color: #b91c1c;
            padding: 0.75rem;
            border-radius: 0.5rem;
            text-align: center;
            margin-bottom: 1rem;
        }
        /* keep rest of your styles unchanged */
    </style>
</head>
<body>
    <div class="signin-container">
        <div>
            <div class="signin-card">
                <div class="signin-header">
                    <div class="signin-logo">
                        <div class="logo-icon">
                            <svg width="40" height="40" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="32" height="32" rx="8" fill="#4F46E5"/>
                                <path d="M16 8L12 12H14V18H12L16 24L20 18H18V12H20L16 8Z" fill="white"/>
                            </svg>
                        </div>
                        <div class="logo-text">
                            <h2>CyberGuard</h2>
                            <p>Digital Bharat Initiative</p>
                        </div>
                    </div>
                    <h1 class="signin-title">Welcome Back</h1>
                    <p class="signin-subtitle">Sign in to your account to continue</p>
                </div>

                <?php if ($message): ?>
                    <div class="error-message"><?= htmlspecialchars($message) ?></div>
                <?php endif; ?>

                <form method="POST" action="sign-in.php">
                    <div class="form-group">
                        <label class="form-label" for="email">Email Address</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email"
                            class="form-input" 
                            placeholder="you@example.com"
                            required
                        />
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="password">Password</label>
                        <input 
                            type="password" 
                            id="password"
                            name="password"
                            class="form-input" 
                            placeholder="Enter your password"
                            required
                        />
                    </div>
                    
                    <div class="form-checkbox">
                        <input type="checkbox" id="remember" />
                        <label for="remember">Remember me</label>
                    </div>
                    
                    <button type="submit" class="btn-submit">Sign In</button>
                </form>
                
                <div class="divider">or continue with</div>
                
                <div class="social-signin">
                    <button class="btn-social">Google</button>
                    <button class="btn-social">Facebook</button>
                </div>
                
                <div class="signup-link">
                    Don't have an account? <a href="sign-up.php">Sign up</a>
                </div>
            </div>
            
            <div class="back-home">
                <a href="index.php">← Back to Home</a>
            </div>
        </div>
    </div>
</body>
</html>
