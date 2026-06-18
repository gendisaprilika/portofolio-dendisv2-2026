@props(['profile'])

<section class="text-center py-20">

    {{-- Skeleton --}}
    <div x-show="loading" class="space-y-4">
        <div class="w-32 h-32 rounded-full mx-auto skeleton"></div>
        <div class="h-6 w-48 mx-auto skeleton rounded"></div>
        <div class="h-4 w-64 mx-auto skeleton rounded"></div>
    </div>

    {{-- Real Content --}}
    <div x-show="!loading" x-transition>
        <img src="{{ $profile->photo_url }}"
             class="w-32 h-32 rounded-full mx-auto mb-4 object-cover">

        <h1 class="text-4xl font-bold">
            {{ $profile->name }}
        </h1>

        <p class="text-pink-500 mt-2">
            {{ $profile->title }}
        </p>

        <p class="mt-4 max-w-xl mx-auto text-gray-600">
            {{ $profile->bio }}
        </p>
    </div>

</section>