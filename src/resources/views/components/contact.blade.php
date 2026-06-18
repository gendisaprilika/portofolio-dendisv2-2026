@props(['contacts'])

<section id="contact" class="py-20 text-center">

    <h2 class="text-3xl font-bold mb-10">Contact</h2>

    <div class="space-y-4">

        @foreach($contacts as $contact)
            <div class="transform transition hover:scale-105">
                <p class="text-gray-600">
                    <strong>{{ $contact->type }}:</strong>
                    <a href="{{ $contact->value }}" class="text-pink-500">
                        {{ $contact->value }}
                    </a>
                </p>
            </div>
        @endforeach

    </div>

</section>