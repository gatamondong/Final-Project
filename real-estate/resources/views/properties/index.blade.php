<x-app-layout>
    <div class="p-6">
        <a href="{{ env('APP_URL') }}/properties/create" class="bg-green-500 text-white px-4 py-2 rounded mb-4 inline-block">+ Add Property</a>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($properties as $property)
                <div class="border p-4 rounded shadow">
                    @if($property->image)
                        <img src="{{ asset('storage/' . $property->image) }}" class="mb-2 w-full h-48 object-cover rounded" />
                    @endif
                    <h2 class="text-xl font-bold">{{ $property->title }}</h2>
                    <p class="text-gray-600">{{ $property->location }}</p>
                    <p class="text-green-600 font-semibold">₱{{ number_format($property->price, 2) }}</p>
                    <p class="mb-2">{{ $property->description }}</p>
                    <a href="{{ route('properties.edit', $property) }}" class="text-blue-500">Edit</a>
                    <form action="{{ route('properties.destroy', $property) }}" method="POST" class="inline-block ml-2">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-red-500">Delete</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
