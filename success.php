<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Success</title>
    <style>
        body {
            background-color: #f0fff5;
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .message-box {
            background-color: #e0ffe6;
            border: 2px solid #00cc66;
            padding: 30px 50px;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 204, 102, 0.3);
            text-align: center;
            animation: fadeIn 0.8s ease-in-out;
        }

        .message-box h2 {
            color: #007f5f;
            margin-bottom: 10px;
        }

        .message-box p {
            color: #333;
        }

        .success-icon {
            font-size: 50px;
            color: #00cc66;
            margin-bottom: 10px;
        }

        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(-20px);}
            to {opacity: 1; transform: translateY(0);}
        }
    </style>
    <script>
        // Redirect after 3 seconds
        setTimeout(function(){
            window.location.href = "index.html"; // or use "login.php" if you want login next
        }, 3000);
    </script>
</head>
<body>
    <div class="message-box">
        <div class="success-icon">✅</div>
        <h2>Registration Successful!</h2>
        <p>Welcome to FurEver Homes 🐾<br>Redirecting you shortly...</p>
    </div>
</body>
</html>
