<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .button-pulse {
            animation: pulse 1.5s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
        }

        body {
            background-image: url('https://source.unsplash.com/featured/?school'); /* Ganti URL dengan URL gambar sekolah Anda */
            background-size: cover;
            background-position: center;
        }

        .login-box {
            background-color: rgba(255, 255, 255, 0.8);
        }

        .login-box:hover {
            transform: scale(1.01);
        }
    </style>
</head>

<body class="flex justify-center items-center h-screen">
    <div class="p-8 rounded-lg shadow-md w-full sm:w-96 animate-fadeIn login-box">
        <h2 class="text-2xl font-semibold mb-6 text-center text-gray-800">Welcome Admin!</h2>
        <form>
            <div class="mb-4">
                <label for="username" class="block text-gray-700">Username</label>
                <input type="text" id="username" name="username" class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-400 focus:ring focus:ring-green-200 focus:ring-opacity-50">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-400 focus:ring focus:ring-green-200 focus:ring-opacity-50">
            </div>
            <div class="mb-6">
                <button id="loginButton" type="submit" class="w-full bg-green-400 text-white py-2 px-4 rounded hover:bg-green-500 focus:outline-none focus:bg-green-500 transform transition duration-300 hover:scale-105">Login</button>
            </div>
            <p class="text-sm text-center text-gray-600">Don't have an account? <a href="registrasi.html" class="text-green-400 hover:text-green-500">Sign up now</a>.</p>
        </form>
    </div>

    <script>
        const loginButton = document.getElementById('loginButton');

        loginButton.addEventListener('mouseover', function() {
            loginButton.classList.add('button-pulse');
        });

        loginButton.addEventListener('mouseout', function() {
            loginButton.classList.remove('button-pulse');
        });
    </script>
</body>

</html>
