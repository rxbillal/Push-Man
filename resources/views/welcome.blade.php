<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Portal | ZKTeco</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: radial-gradient(circle, #0f0c29, #302b63, #24243e);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            animation: backgroundAnimation 10s infinite alternate;
        }
        @keyframes backgroundAnimation {
            0% { background-position: left; }
            100% { background-position: right; }
        }
        .login-container {
            background: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 30px rgba(0, 255, 255, 0.5);
            text-align: center;
            max-width: 400px;
            width: 100%;
            backdrop-filter: blur(15px);
            transform: scale(0.9);
            animation: fadeIn 1s ease-out forwards;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.8); }
            to { opacity: 1; transform: scale(1); }
        }
        .login-container h2 {
            margin-bottom: 20px;
            color: #fff;
            text-shadow: 0 0 15px rgba(0, 255, 255, 0.8);
        }
        .login-container input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            font-size: 16px;
            text-align: center;
            transition: all 0.3s ease;
        }
        .login-container input:focus {
            background: rgba(0, 255, 255, 0.3);
            box-shadow: 0 0 10px rgba(0, 255, 255, 0.6);
        }
        .login-btn {
            background: linear-gradient(45deg, #ff00ff, #00ffff, #ffcc00);
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .login-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.9);
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login Portal</h2>
        <form action="{{ route('authenticate') }}" method="post">
            @csrf
            <div class="mb-3">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Email Address" required>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required>
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="login-btn">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
