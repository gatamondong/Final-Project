<x-app-layout>
    <div class="p-6 max-w-xl mx-auto">

        <form method="POST" action="{{ env('APP_URL') }}/properties/store" enctype="multipart/form-data">
            @csrf

            <!-- Title Input -->
            <input name="title" placeholder="Title" class="w-full p-2 border mb-2 rounded" required />

            <!-- Description Input -->
            <textarea name="description" placeholder="Description" class="w-full p-2 border mb-2 rounded" required></textarea>

            <!-- Price Input -->
            <input name="price" type="number" placeholder="Price" class="w-full p-2 border mb-2 rounded" required />

            <!-- Location Input -->
            <input name="location" placeholder="Location" class="w-full p-2 border mb-2 rounded" required />

            <!-- Image Input -->
            <input type="file" name="image" class="w-full mb-2" />

            <!-- Submit Button -->
            <button class="bg-blue-500 text-white px-4 py-2 rounded">Submit</button>
        </form>
    </div>
</x-app-layout>

