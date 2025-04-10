@extends('layouts.app') {{-- If you have a layout file, otherwise remove this --}}

@section('content')
<div class="max-w-5xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
    <h1 class="text-2xl font-semibold text-gray-800 dark:text-white mb-6">Available Listings</h1>

    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ($listings as $listing)
            <div class="bg-white dark:bg-[#1e1e1e] shadow-md rounded-lg p-5 border dark:border-gray-700">
                <h2 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $listing['title'] }}</h2>
                <p class="text-gray-600 dark:text-gray-300">Location: {{ $listing['location'] }}</p>
                <p class="text-gray-800 dark:text-gray-100 font-medium">Price: {{ $listing['price'] }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection
