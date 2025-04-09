<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investment SaaS</title>
    <!-- Favicon will be added here when available -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100">
    <header class="bg-blue-600 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Investment SaaS</h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="/" class="hover:underline">Home</a></li>
                    <li><a href="/login" class="hover:underline">Login</a></li>
                    <li><a href="/register" class="hover:underline">Register</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container mx-auto p-4">
        <?= $content ?>
    </main>

    <footer class="bg-gray-800 text-white p-4 mt-8">
        <div class="container mx-auto text-center">
            <p>&copy; <?= date('Y') ?> Investment SaaS. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
