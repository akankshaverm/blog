<div>
    <div class="flex flex-1 justify-between items-center py-5 px-3">
        <h2 class=" font-semibold text-2xl">Manage Topics</h2>
        <input type="text" wire:model.live="search" autofocus placeholder=" Search Here..." class="border px-3 py-2 rounded">
    </div>
    <div class="grid grid-cols-4 gap-4 w-full px-3">
        <div class="flex-1 bg-slate-500 text-white p-3">Id</div>
        <div class="flex-1  bg-slate-500 text-white p-3">Topic</div>
        <div class="flex-1  bg-slate-500 text-white p-3">Description</div>
        <div class="flex-1  bg-slate-500 text-white p-3">Actions</div>

        @foreach($topics as $topic)
        <div class="flex-1 bg-slate-200 p-3">{{$topic->id}}</div>
        <div class="flex-1  bg-slate-200 p-3">{{$topic->topic_name}}</div>
        <div class="flex-1  bg-slate-200 p-3">{{$topic->topic_description}}</div>
        <div class="flex-1  bg-slate-200 p-3">
            <button
                wire:confirm="Are you sure you want to delete this topic ?"
                wire:click="deleteTopic({{$topic->id}})"class="text-red-500 hover:text-red-700">Delete
            </button>
        </div>
        @endforeach
    </div>
</div>