@extends('admin.adminlayout')
@section('content')
<!-- Dashboard Container -->
<div class="container mx-auto mt-8 flex p-2">

    <!-- Sidebar -->
    <aside class="w-1/5 bg-slate-300 shadow-lg rounded-lg p-4">
        <nav>
            <h2 class="text-xl font-bold text-gray-800 mb-6">Navigation</h2>
            <ul class="space-y-4">
                <li><a href="#" class="text-lg text-blue-600 hover:underline">Dashboard Overview</a></li>
                <li><a href="#" class="text-lg text-blue-600 hover:underline">Manage Users</a></li>
                <li><a href="#" class="text-lg text-blue-600 hover:underline">Manage Posts</a></li>
                <li><a href="#" class="text-lg text-blue-600 hover:underline">Analytics</a></li>
                <li><a href="#" class="text-lg text-blue-600 hover:underline">Settings</a></li>
            </ul>
        </nav>
    </aside>

    <!-- Main Dashboard Content -->
    <main class="flex-1 ml-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-8"> Admin Dashboard</h1>

        <!-- Metrics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3 p-2">
            <!-- Card 1 -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Total Users</h2>
                <p class="text-4xl font-bold text-blue-600">1,024</p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">New Posts</h2>
                <p class="text-4xl font-bold text-blue-600">256</p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Comments</h2>
                <p class="text-4xl font-bold text-blue-600">768</p>
            </div>

            <!-- Card 4 -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Pending Reviews</h2>
                <p class="text-4xl font-bold text-blue-600">34</p>
            </div>
        </div>

        <!-- Table for Latest Posts or Users -->
        <div class="bg-white shadow-lg rounded-lg mt-12 p-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Recent Posts</h2>
            <table class="w-full table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2 text-left text-gray-600">Post Title</th>
                        <th class="px-4 py-2 text-left text-gray-600">Author</th>
                        <th class="px-4 py-2 text-left text-gray-600">Date</th>
                        <th class="px-4 py-2 text-left text-gray-600">Status</th>
                        <th class="px-4 py-2 text-left text-gray-600">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border-t px-4 py-2">Learning JavaScript</td>
                        <td class="border-t px-4 py-2">John Doe</td>
                        <td class="border-t px-4 py-2">Sept 1, 2023</td>
                        <td class="border-t px-4 py-2"><span class="bg-green-200 text-green-700 py-1 px-3 rounded">Published</span></td>
                        <td class="border-t px-4 py-2"><a href="#" class="text-blue-600 hover:underline">Edit</a></td>
                    </tr>
                    <tr>
                        <td class="border-t px-4 py-2">Understanding AI</td>
                        <td class="border-t px-4 py-2">Jane Smith</td>
                        <td class="border-t px-4 py-2">Sept 5, 2023</td>
                        <td class="border-t px-4 py-2"><span class="bg-yellow-200 text-yellow-700 py-1 px-3 rounded">Pending</span></td>
                        <td class="border-t px-4 py-2"><a href="#" class="text-blue-600 hover:underline">Edit</a></td>
                    </tr>
                    <!-- More rows as needed -->
                </tbody>
            </table>
        </div>
    </main>
</div>
@endsection