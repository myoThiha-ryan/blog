<x-layout>
    <x-slot:heading>
        <h1 class="text-4xl font-bold my-4">Jobs</h1>
        <hr />
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <a class="text-blue-900 hover:underline" href="/jobs/{{ $job['id'] }}">
                <li><strong>{{ $job['title'] }}</strong> Pays: <strong>{{ $job['salary'] }}</strong> per year.</li>
            </a>
        @endforeach
    </ul>
</x-layout>
