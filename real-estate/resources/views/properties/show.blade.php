<x-app-layout>
    <div class="p-6 max-w-xl mx-auto">
        <h1 class="text-2xl font-bold">{{ $property->title }}</h1>
        <p>{{ $property->description }}</p>
        <p>Price: ₱{{ number_format($property->price, 2) }}</p>
        <p>Location: {{ $property->location }}</p>

        @if($property->image)
            <img src="{{ asset('storage/' . $property->image) }}" alt="Property Image" class="mt-4 w-full h-48 object-cover">
        @endif
    </div>
</x-app-layout>