@extends('admin.adminlayout')
@section('content')
<div class="flex flex-1 px-10 py-5 gap-5">
    <div class="w-8/12">


        <!-- Container for Topics -->
        <div class="container mx-auto mt-12">
            <div class="w-full bg-white shadow-lg rounded-lg p-8">
                <livewire:admin.topic.calling-topic />

            </div>
        </div>
    </div>
    <div class="w-4/12">
        <!-- Container for Form -->
        <div class="container mx-auto mt-12">
            <div class="w-full max-w-lg mx-auto bg-white shadow-lg rounded-lg p-8">
                <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">Insert New Topic</h1>

                <livewire:admin.topic.insert-topic />
            </div>
        </div>


    </div>
</div>
@endsection