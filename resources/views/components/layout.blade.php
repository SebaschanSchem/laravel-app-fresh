@props([
    'title' => 'My Laravel App',
])
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head> 
<style>
    body{
        background-color: #1c3056;
        color: white;
        font-family: Arial, sans-serif;
    }
    nav{
        background-color:rgb(252, 248, 242);
        padding: 10px;
        color:#000000;
        font-weight: bold;
    }
    a{
        padding: 10px;
    }
    </style>
<body>
    <nav class="flex items-center justify-center gap-2 shadow-md">
    <a href="/" class="hover:bg-gray-200 transition-colors duration-200">Home</a>
    <a href="/about" class="hover:bg-gray-200 transition-colors duration-200">About</a>
    <a href="/contact" class="hover:bg-gray-200 transition-colors duration-200">Contact</a>
    <a href="/posts" class="hover:bg-gray-200 transition-colors duration-200">Posts</a>
    <a href="/register" class="hover:bg-gray-200 transition-colors duration-200">User Registration</a>
</nav>
{{ $slot }}

</body>
</html>