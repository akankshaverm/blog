@extends('layout')
@section('content')
<div class=" flex flex-1 px-[2%] mt-10 gap-5">
    <div class=" w-3/12">
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>EduBlog - Sidebar Categories</title>
            <script src="https://cdn.tailwindcss.com"></script>
        </head>

        <body class="bg-gray-100">

            <div class="container mx-auto flex mt-8">
                <!-- Sidebar Section -->
                <aside class="w-full bg-slate-50 shadow-lg rounded-lg p-6">
                    <h2 class="text-2xl font-semibold mb-4 text-blue-600">Categories</h2>
                    <ul class="space-y-4">
                        <li>
                            <a href="#technology" class="block text-lg text-gray-700 hover:text-blue-600 px-4 py-2 bg-slate-200 rounded">Technology</a>
                        </li>
                        <li>
                            <a href="#science" class="block text-lg text-gray-700 hover:text-blue-600 px-4 py-2 bg-slate-200 rounded">Science</a>
                        </li>
                        <li>
                            <a href="#mathematics" class="block text-lg text-gray-700 hover:text-blue-600 px-4 py-2 bg-slate-200 rounded ">Mathematics</a>
                        </li>
                        <li>
                            <a href="#literature" class="block text-lg text-gray-700 hover:text-blue-600 px-4 py-2 bg-slate-200 rounded">Literature</a>
                        </li>
                        <li>
                            <a href="#history" class="block text-lg text-gray-700 hover:text-blue-600 px-4 py-2 bg-slate-200 rounded">History</a>
                        </li>
                        <li>
                            <a href="#art" class="block text-lg text-gray-700 hover:text-blue-600 px-4 py-2 bg-slate-200 rounded">Art</a>
                        </li>
                        <li>
                            <a href="#languages" class="block text-lg text-gray-700 hover:text-blue-600 px-4 py-2 bg-slate-200 rounded">Languages</a>
                        </li>
                    </ul>
                </aside>


            </div>

        </body>

        </html>

    </div>
    <div class=" w-9/12">
        <div class="grid grid-cols-3 gap-3">
            <div class="container mx-auto py-12">
                <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
                    <img class="w-full h-40 object-cover" src="https://source.unsplash.com/600x400/?education,books" alt="Education Postcard Image">
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-gray-800 mb-3">The Future of Education</h2>
                        <p class="text-gray-600 mb-4">
                            Discover how technology is revolutionizing classrooms and reshaping education. Learn about the new trends in online learning, and how you can leverage them for personal growth.
                        </p>
                        <a href="{{route('post.show',45678)}}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Read More</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

</div>
@endsection