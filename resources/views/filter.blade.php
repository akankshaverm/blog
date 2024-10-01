@extends('layout')
@section('content')

    <script src="https://cdn.tailwindcss.com"></script>


<body class="bg-gray-100">

    <!-- Page Container -->
    <div class="container mx-auto py-12 flex">

        <!-- Filter Sidebar -->
        <aside class="w-1/4 bg-white shadow-lg rounded-lg p-6 m-5">
           <livewire:public.sidebar/>
        </aside>

        <!-- Filtered Results -->
        <section class="flex-1 ml-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-8"> Results Found "{{$topic->topic_name}}"</h1>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Post Card 1 -->
                @forelse($topic->posts as $post)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img class="w-full h-48 object-cover" src="{{asset('storage/public/images/'.$post->featured_image)}}" alt="Technology">
                    <div class="p-6">
                        <h2 class="text-md font-bold text-gray-800 mb-2 truncate">{{$post->title}}</h2>
                        <p class="text-gray-600 mb-4 line-clamp-3 text-sm">{{$post->content}}</p>
                        <a wire:navigate href="{{route('post.show',$post->id)}}" class="text-blue-600 hover:underline">Read More</a>
                    </div>
                </div>
                @empty
                <p class=" text-2xl">Not Found Any Post</p>
                @endforelse





            </div>
        </section>

    </div>



@endsection