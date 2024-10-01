<!-- Sidebar Section -->
<aside class="w-64 h-full">
    <h2 class="text-xl font-semibold mb-4 text-blue-600">Categories</h2>
    <ul class="space-y-2">
        @foreach($topics as $topic)

        <li>
            <a wire:navigate href="{{route('filter',['cat_id'=>$topic->id])}}" class=" flex items-center transition">
                <span class="text-lg flex items-center justify-between flex-1 p-2 hover:bg-slate-100">
                    <span>{{$topic->topic_name}} {{$topic->posts->count() > 0?"(".$topic ->posts->count().")" : ""}}</span>
                    <svg class="w-6 h-6 text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>

                </span>
            </a>
        </li>
        @endforeach
    </ul>
</aside>