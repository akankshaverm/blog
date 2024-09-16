<!-- Admin Header -->
<header class="bg-slate-600 text-white">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <!-- Logo -->
        <div class="text-2xl font-bold">
            <a href="/" class="hover:text-gray-200">Admin Header</a>
        </div>

        <!-- Navigation -->
        <nav class="space-x-6">
            <a href="{{route('admin.dashboard')}}" class="hover:text-gray-200">Dashboard</a>
            <a href="{{route('admin.topics')}}" class="hover:text-gray-200">Topics</a>
            <a href="/view/45678" class="hover:text-gray-200">Posts</a>
            <a href="#contact" class="hover:text-gray-200">Users</a>
            <a href="#contact" class="hover:text-gray-200">Settings</a>
        </nav>

        <!-- CTA Button -->
        <div>
            <a href="#subscribe" class="bg-blue-900 text-white px-4 py-2 rounded hover:bg-blue-400">Logout</a>
        </div>
    </div>
</header>