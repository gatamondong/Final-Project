<x-app-layout>
    <div class="p-6 max-w-xl mx-auto">
        <form method="POST" action="{{ route('properties.update', $property) }}" enctype="multipart/form-data">
            @csrf @method('PUT')
            <input name="title" value="{{ $property->title }}" class="w-full p-2 border mb-2 rounded" required />
            <textarea name="description" class="w-full p-2 border mb-2 rounded" required>{{ $property->description }}</textarea>
            <input name="price" type="number" value="{{ $property->price }}" class="w-full p-2 border mb-2 rounded" required />
            <input name="location" value="{{ $property->location }}" class="w-full p-2 border mb-2 rounded" required />
            @if($property->image)
                <img src="{{ asset('storage/' . $property->image) }}" class="mb-2 w-full h-48 object-cover rounded" />
            @endif
            <input type="file" name="image" class="w-full mb-2" />
            <button class="bg-green-500 text-white px-4 py-2 rounded">Update</button>
        </form>
    </div>
</x-app-layout>
