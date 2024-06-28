<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
          <a href="/jobs/{{ $job['id'] }}"> 
        <div class="border border-gray-900/10 rounded m-4 p-5">
            <h3 class="text-blue-500 font-bold  "> {{ $job->employer->name }}</h3>
            <li>{{ $job['title'] }} :Pays {{ $job['salary'] }} per Year</li>
        </div>
        </a>
        @endforeach
    </ul>
    
        {{$jobs->links()}}
    
</x-layout>
