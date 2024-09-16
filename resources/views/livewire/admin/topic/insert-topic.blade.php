<div>
    <!-- Form for Topic Insertion -->
    <form wire:submit.prevent="save" method="POST">
        <!-- Topic Title -->
        <div class="mb-6">
            <label for="topic-title" class="block text-lg font-semibold text-gray-700">Topic Title</label>
            <input type="text" id="topic-title" wire:model="topic_name" placeholder="Enter topic title" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 px-4 py-2 mt-1" required>
        </div>

        <!-- Topic Description -->
        <div class="mb-6">
            <label for="topic-description" class="block text-lg font-semibold text-gray-700">Topic Description</label>
            <textarea id="topic-description" wire:model="topic_description" rows="5" placeholder="Enter a brief description" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 px-4 py-2 mt-1" required></textarea>
        </div>

        <!-- Topic Category -->
        <div class="mb-6">
            <label for="topic-category" class="block text-lg font-semibold text-gray-700">Category</label>
            <select id="topic-category" name="topic-category" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 px-4 py-2 mt-1">
                <option value="Technology">Technology</option>
                <option value="Science">Science</option>
                <option value="Mathematics">Mathematics</option>
                <option value="Literature">Literature</option>
            </select>
        </div>

        <!-- Submit Button -->
        <div class="text-center">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">Insert Topic</button>
        </div>
    </form>
</div>