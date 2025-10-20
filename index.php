<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header>
        <h1 class="text-4xl font-bold text-center mt-10">Welcome to the Banking Application</h1>
        <p class="text-center mt-4">Your one-stop solution for all banking needs.</p>
        <nav class="mt-8">
            <ul class="flex justify-center space-x-4">
                <li><a href="/Banking/login.php" class="text-blue-500 hover:underline">Login</a></li>
                <li><a href="/Banking/register.php" class="text-blue-500 hover:underline">Register</a></li>
                <li><a href="/Banking/about.php" class="text-blue-500 hover:underline">About Us</a></li>
            </ul>
        </nav>
    </header>
    <main class="mt-10 text-center">
        <p class="text-lg">Manage your accounts, transfer funds, and view transaction history with ease.</p>
    </main>
    <footer class="mt-[400px] text-center text-sm text-gray-500">
        &copy; <?php echo date('Y'); ?> Banking. All rights reserved.
    </footer>
</body>

</html>