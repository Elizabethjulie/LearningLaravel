<x-layout>
     <x-slot:heading>
        Job Listing
    </x-slot:heading>
    <h1 class="font-bold text-lg">{{ $job[ title }}</h1>
     <p>This awesome job pays {{$job salary }} annually</p>

     <p class="mt-6"><x-button href="/jobs/{{ $job=>id }}/edit">Edit job</x-button></p>
</x-layout>
   