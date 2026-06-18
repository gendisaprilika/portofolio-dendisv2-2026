@props(['skills'])

<section class="py-20 bg-gray-50">

    <h2 class="text-3xl font-bold text-center mb-10">Skills</h2>

    {{-- Skeleton --}}
    <div x-show="loading" class="max-w-2xl mx-auto space-y-4">
        @for ($i = 0; $i < 4; $i++)
            <div>
                <div class="h-4 w-1/3 skeleton mb-2 rounded"></div>
                <div class="h-3 w-full skeleton rounded"></div>
            </div>
        @endfor
    </div>

    {{-- Real --}}
    <div x-show="!loading" x-transition class="max-w-2xl mx-auto space-y-4">

        @foreach($skills as $skill)
            <div>
                <div class="flex justify-between">
                    <span>{{ $skill->name }}</span>
                    <span>{{ $skill->level }}%</span>
                </div>

                <div class="w-full bg-gray-200 h-2 rounded">
                    <div class="bg-pink-500 h-2 rounded"
                         style="width: {{ $skill->level }}%">
                    </div>
                </div>
            </div>
        @endforeach

    </div>

</section>