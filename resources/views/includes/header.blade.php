<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <!-- Header Section -->
    <header class="bg-blue-400 text-white">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <!-- Logo -->
            <div class="text-2xl font-bold">
                <a href="/" class="hover:text-gray-200">EduBlog</a>
            </div>

            <!-- Navigation -->
            <nav class="space-x-6">
                <a href="{{route('homepage')}}" class="hover:text-gray-200">Home</a>
                <a href="#about" class="hover:text-gray-200">About</a>
                <a href="#courses" class="hover:text-gray-200">Courses</a>
                <a href="#contact" class="hover:text-gray-200">Contact</a>
            </nav>




            <!-- CTA Button -->
            @guest
            <div>
                <a href="{{route('signup')}}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500">Sign Up</a>
                <a href="{{route('login')}}" class="bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-300">Login</a>
            </div>
            @endguest

            @auth
            <div class=" flex items-center gap-3">
                <span>Hi,</span>
                <h2>{{auth()->user()->name}}</h2>
                <a href="{{route('logout')}}" class="bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-300">Logout</a>


            </div>
            
            @endauth

        </div>
    </header>

</body>

</html>