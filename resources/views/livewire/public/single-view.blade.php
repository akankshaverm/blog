<div>
    <article class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-6">
    <header class="mb-6">
        <h1 class="text-3xl font-bold text-gray-800">{{$post->title}}</h1>
        <div class="text-gray-600 mt-2">by <span class="font-semibold">Author:{{$post->user_id}}</span>Published on {{$post->created_at}}</div>
    </header>

    <img class=" h-96 object-contain object-top rounded-lg mb-6" src="{{asset('storage/public/images/'.$post->featured_image)}}" alt="Post image">

    <div class="text-xl text-gray-700 leading-loose text-justify">
        <p>
            {{$post->content}}
        </p>

    </div>
    </article>

    <!-- Related Posts Section -->
    <section class="max-w-4xl mx-auto mt-12">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Related Posts</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Related Post 1 -->
            @foreach($related_posts as $item)
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <a href="{{route('post.show',$post_id)}}" class=" flex items-start space-x-4 hover:bg-gray-100 p-3 rounded-lg">
                    <img class="w-full h-48 object-cover" src="{{asset('storage/images/'.$item->featured_image)}}" alt="AI in Education">
                    <div class="p-4">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">AI in Education</h3>
                        <p class="text-gray-600 text-sm">Discover how artificial intelligence is changing the landscape of education.</p>
                        <a href="#related-post-1" class="block text-blue-600 hover:underline mt-4">Read More</a>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
    </section>
</div>