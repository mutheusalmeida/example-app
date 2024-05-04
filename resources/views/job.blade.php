<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h1 class="text-lg font-medium">{{ $job['title'] }}</h1>

    <p>This job pays {{ $job['salary'] }} per year.</p>
</x-layout>
