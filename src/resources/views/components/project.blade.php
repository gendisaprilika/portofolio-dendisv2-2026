@props(['projects'])

<section id="projects" class="py-20">

    <h2 class="text-3xl font-bold text-center mb-10">Projects</h2>

    {{-- Skeleton --}}
    <div x-show="loading" class="grid grid-cols-1 md:grid-cols-3 gap-6 px-10">
        @for ($i = 0; $i < 3; $i++)
            <div class="bg-white shadow rounded-xl p-4 space-y-3">
                <div class="h-40 w-full skeleton rounded"></div>
                <div class="h-5 w-3/4 skeleton rounded"></div>
                <div class="h-4 w-full skeleton rounded"></div>
                <div class="h-4 w-5/6 skeleton rounded"></div>
            </div>
        @endfor
    </div>

    {{-- Real --}}
    <div x-show="!loading" x-transition
         class="grid grid-cols-1 md:grid-cols-3 gap-6 px-10">

        @foreach($projects as $project)
            <div class="group bg-white shadow rounded-xl overflow-hidden hover:-translate-y-2 transition">

                <img src="{{ $project->image_url }}"
                     class="transition group-hover:scale-110">

                <div class="p-4">
                    <h3 class="text-xl font-semibold">
                        {{ $project->title }}
                    </h3>

                    <p class="text-gray-600 mt-2">
                        {{ $project->description }}
                    </p>
                </div>

            </div>
        @endforeach

    </div>

</section>