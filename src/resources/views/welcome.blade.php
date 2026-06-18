<x-layouts.app>

    @include('components.navbar')

    <x-hero :profile="$profile" />

    <x-about :profile="$profile" />

    <x-skill :skills="$skills" />

    <x-project :projects="$projects" />

    <x-contact :contacts="$contacts" />

</x-layouts.app>