@props(['profile'])

<section id="about" class="py-20 bg-pink-50 text-center">

    <h2 class="text-3xl font-bold mb-6">About Me</h2>

    <p class="max-w-2xl mx-auto text-gray-600">
        {{ $profile->bio }}
    </p>

</section>