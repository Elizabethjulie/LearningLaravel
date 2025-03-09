<x-layout>
     <x-slot:heading>
        Job Listing
    </x-slot:heading>
    <h1 class="font-bold text-lg">{{ $job['title'] }}</h1>
     <p>This awesome job pays {{$job['salary'] }} annually</p>

</x-layout>
   