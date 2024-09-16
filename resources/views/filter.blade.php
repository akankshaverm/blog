@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduBlog - Filter Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <!-- Page Container -->
    <div class="container mx-auto py-12 flex">

        <!-- Filter Sidebar -->
        <aside class="w-1/4 bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-2xl font-bold text-blue-600 mb-4">Filter By</h2>

            <!-- Categories Filter -->
            <div class="mb-6">
                <h3 class="text-lg font-semibold text-gray-700 mb-2">Categories</h3>
                <ul class="space-y-3">
                    <li>
                        <label class="flex items-center">
                            <input type="checkbox" class="mr-2 text-blue-600 border-gray-300 focus:ring-blue-500" />
                            Technology
                        </label>
                    </li>
                    <li>
                        <label class="flex items-center">
                            <input type="checkbox" class="mr-2 text-blue-600 border-gray-300 focus:ring-blue-500" />
                            Science
                        </label>
                    </li>
                    <li>
                        <label class="flex items-center">
                            <input type="checkbox" class="mr-2 text-blue-600 border-gray-300 focus:ring-blue-500" />
                            Mathematics
                        </label>
                    </li>
                    <li>
                        <label class="flex items-center">
                            <input type="checkbox" class="mr-2 text-blue-600 border-gray-300 focus:ring-blue-500" />
                            Literature
                        </label>
                    </li>
                </ul>
            </div>

            <!-- Tags Filter -->
            <div class="mb-6">
                <h3 class="text-lg font-semibold text-gray-700 mb-2">Tags</h3>
                <ul class="flex flex-wrap gap-2">
                    <li><button class="bg-gray-200 text-gray-700 px-3 py-1 rounded hover:bg-blue-600 hover:text-white">AI</button></li>
                    <li><button class="bg-gray-200 text-gray-700 px-3 py-1 rounded hover:bg-blue-600 hover:text-white">Data Science</button></li>
                    <li><button class="bg-gray-200 text-gray-700 px-3 py-1 rounded hover:bg-blue-600 hover:text-white">EdTech</button></li>
                    <li><button class="bg-gray-200 text-gray-700 px-3 py-1 rounded hover:bg-blue-600 hover:text-white">Online Learning</button></li>
                </ul>
            </div>

            <!-- Difficulty Filter -->
            <div class="mb-6">
                <h3 class="text-lg font-semibold text-gray-700 mb-2">Difficulty</h3>
                <ul class="space-y-3">
                    <li>
                        <label class="flex items-center">
                            <input type="radio" name="difficulty" class="mr-2 text-blue-600 border-gray-300 focus:ring-blue-500" />
                            Beginner
                        </label>
                    </li>
                    <li>
                        <label class="flex items-center">
                            <input type="radio" name="difficulty" class="mr-2 text-blue-600 border-gray-300 focus:ring-blue-500" />
                            Intermediate
                        </label>
                    </li>
                    <li>
                        <label class="flex items-center">
                            <input type="radio" name="difficulty" class="mr-2 text-blue-600 border-gray-300 focus:ring-blue-500" />
                            Advanced
                        </label>
                    </li>
                </ul>
            </div>

            <!-- Apply Filters Button -->
            <button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Apply Filters</button>
        </aside>

        <!-- Filtered Results -->
        <section class="flex-1 ml-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-8">Filtered Results</h1>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Post Card 1 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img class="w-full h-48 object-cover" src="https://source.unsplash.com/600x400/?education,technology" alt="Technology">
                    <div class="p-6">
                        <h2 class="text-xl font-bold text-gray-800 mb-2">Technology in Education</h2>
                        <p class="text-gray-600 mb-4">Explore how AI and emerging technologies are transforming the educational landscape.</p>
                        <a href="#read-more" class="text-blue-600 hover:underline">Read More</a>
                    </div>
                </div>

                <!-- Post Card 2 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img class="w-full h-48 object-cover" src="https://source.unsplash.com/600x400/?education,science" alt="Science">
                    <div class="p-6">
                        <h2 class="text-xl font-bold text-gray-800 mb-2">The Science of Learning</h2>
                        <p class="text-gray-600 mb-4">Learn about the neuroscience behind effective learning techniques.</p>
                        <a href="#read-more" class="text-blue-600 hover:underline">Read More</a>
                    </div>
                </div>

                <!-- Post Card 3 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img class="w-full h-48 object-cover" src="https://source.unsplash.com/600x400/?education,mathematics" alt="Mathematics">
                    <div class="p-6">
                        <h2 class="text-xl font-bold text-gray-800 mb-2">Mastering Mathematics</h2>
                        <p class="text-gray-600 mb-4">A comprehensive guide to enhancing your math skills.</p>
                        <a href="#read-more" class="text-blue-600 hover:underline">Read More</a>
                    </div>
                </div>

                <!-- Add more post cards as needed -->
            </div>
        </section>

    </div>

</body>

</html>

@endsection