<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student CRUD System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 font-sans">

    <!-- NAVBAR -->
    <nav class="bg-blue-600 text-white p-4 shadow">
        <div class="container mx-auto flex justify-between">
            <h1 class="font-bold text-lg">Student Management System</h1>
            <a href="/students" class="hover:underline">Home</a>
        </div>
    </nav>

    <!-- PAGE CONTENT -->
    <div class="container mx-auto mt-6">
        @yield('content')
    </div>

</body>
</html>