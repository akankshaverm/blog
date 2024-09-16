@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Single Page - EduBlog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <!-- Main Container -->
    <div class="container mx-auto py-12 px-4 lg:px-0">
        <!-- Main Post Section -->
        <article class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-6">
            <header class="mb-6">
                <h1 class="text-3xl font-bold text-gray-800">The Future of Education</h1>
                <div class="text-gray-600 mt-2">by <span class="font-semibold">John Doe</span> on September 13, 2024</div>
            </header>

            <img class="w-full h-64 object-cover rounded-lg mb-6" src="https://source.unsplash.com/800x400/?education,technology" alt="Post image">

            <div class="text-lg text-gray-700 leading-relaxed">
                <p>
                    Education is evolving faster than ever before. With the rise of technology, classrooms are no longer confined to physical spaces, and learning can take place anywhere and anytime. In this post, we will explore the current trends in education and how technology is shaping the future of learning.
                </p>
                <p class="mt-4">
                    Online learning platforms, virtual classrooms, and artificial intelligence are becoming integral parts of modern education systems. These innovations make education more accessible, personalized, and efficient. Students can now tailor their learning experiences to their individual needs, interests, and schedules.
                </p>
                <p class="mt-4">
                    As we look ahead, it’s clear that education will continue to evolve, embracing new technologies to better meet the needs of students and educators alike. The future of education is bright, and we’re excited to see how it will unfold.
                </p>
            </div>
        </article>

        <!-- Related Posts Section -->
        <section class="max-w-4xl mx-auto mt-12">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Related Posts</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Related Post 1 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img class="w-full h-48 object-cover" src="https://source.unsplash.com/600x400/?ai,education" alt="AI in Education">
                    <div class="p-4">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">AI in Education</h3>
                        <p class="text-gray-600">Discover how artificial intelligence is changing the landscape of education.</p>
                        <a href="#related-post-1" class="block text-blue-600 hover:underline mt-4">Read More</a>
                    </div>
                </div>

                <!-- Related Post 2 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img class="w-full h-48 object-cover" src="https://source.unsplash.com/600x400/?virtual,learning" alt="Virtual Learning">
                    <div class="p-4">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Virtual Learning Platforms</h3>
                        <p class="text-gray-600">How virtual learning is changing the way we teach and learn in the modern world.</p>
                        <a href="#related-post-2" class="block text-blue-600 hover:underline mt-4">Read More</a>
                    </div>
                </div>

                <!-- Related Post 3 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img class="w-full h-48 object-cover" src="https://source.unsplash.com/600x400/?future,school" alt="Classroom of the Future">
                    <div class="p-4">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Classroom of the Future</h3>
                        <p class="text-gray-600">Explore what future classrooms may look like with technology integration.</p>
                        <a href="#related-post-3" class="block text-blue-600 hover:underline mt-4">Read More</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

</body>

</html>

@endsection