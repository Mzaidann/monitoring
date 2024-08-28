<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Sistem Monitoring Akses Kunci Pintu</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('{{ asset('images/background2.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0;
        }
        .auth-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .auth-container h1 {
            margin-bottom: 20px;
            font-size: 2em;
        }
        .auth-container input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .auth-container button {
            width: 95%;
            padding: 10px;
            background-color: #007BFF;
            border: none;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }
        .auth-container button:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
            margin: 10px 0;
        }
        .form-toggle {
            margin-top: 20px;
            font-size: 0.9em;
        }
        .form-toggle a {
            color: #007BFF;
            text-decoration: none;
        }
        .form-toggle a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="auth-container">
        <h1>Register</h1>

        @if ($errors->any())
            <div class="error">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        @if (session('status'))
            <div class="success">
                <p>{{ session('status') }}</p>
            </div>
        @endif

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            <button type="submit">Register</button>
        </form>

        <div class="form-toggle">
            <a href="{{ route('login.form') }}">Already have an account? Login</a>
        </div>
    </div>
</body>
</html>
