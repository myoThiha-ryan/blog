<x-layout>
    <x-slot:heading>
        <h1 class="text-4xl font-bold my-4">Jobs</h1>
        <hr />
    </x-slot:heading>
    <h2 class="font-bold text-2xl">{{ $job['title'] }}</h2>
    <p class="font-bold">This job pays: {{ $job['salary'] }} </p>
</x-layout>
