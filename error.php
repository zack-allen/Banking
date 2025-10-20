<?php
$code = $_SERVER['REDIRECT_STATUS'] ?? http_response_code() ?? 200;
$code = (int)$code;

$messages = [
    400 => 'Bad Request',
    401 => 'Unauthorized',
    403 => 'Forbidden',
    404 => 'Page Not Found',
    500 => 'Internal Server Error',
    502 => 'Bad Gateway',
    503 => 'Service Unavailable',
    504 => 'Gateway Timeout',
    505 => 'HTTP Version Not Supported',
];

if ($code === 200) {
    header("Location: /Banking/");
    exit;
}

http_response_code($code);
$message = $messages[$code] ?? 'Unexpected Error';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error <?php echo $code; ?> – <?php echo $message; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="Banking.png" type="image/png" rel="icon">
</head>

<body class="bg-white text-black flex flex-col items-center justify-center min-h-screen">
    <main class="text-center p-8">
        <h1 class="text-7xl font-extrabold mb-4 text-black">Error <?php echo $code; ?></h1>
        <p class="text-2xl mb-6 font-semibold text-gray-800"><?php echo htmlspecialchars($message); ?></p>
        <a href="http://localhost/VirtoRef/" class="px-6 py-3 bg-black text-white font-bold rounded-full shadow hover:bg-gray-700 transition">
            Return to Home
        </a>
    </main>
    <footer class="absolute bottom-4 text-sm text-gray-400">
        &copy; <?php echo date('Y'); ?> Banking — All Rights Reserved.
    </footer>
</body>

</html>