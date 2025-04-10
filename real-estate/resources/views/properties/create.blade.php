<x-app-layout>
    <div class="p-6 max-w-xl mx-auto">
        <form method="POST" action="{{ route('properties.store') }}" enctype="multipart/form-data">
            @csrf
            <input name="title" placeholder="Title" class="w-full p-2 border mb-2 rounded" required />
            <textarea name="description" placeholder="Description" class="w-full p-2 border mb-2 rounded" required></textarea>
            <input name="price" type="number" placeholder="Price" class="w-full p-2 border mb-2 rounded" required />
            <input name="location" placeholder="Location" class="w-full p-2 border mb-2 rounded" required />
            <input type="file" name="image" class="w-full mb-2" />
            <button class="bg-blue-500 text-white px-4 py-2 rounded">Submit</button>
        </form>
    </div>
</x-app-layout>
