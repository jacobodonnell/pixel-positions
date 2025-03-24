<x-layout>
    @if(isset($query))
        <x-page-heading>Results for <i>{{ $query }}</i></x-page-heading>
    @elseif(isset($tag))
        <x-page-heading>Results for <i>{{ $tag }}</i></x-page-heading>
    @else
        <x-page-heading>Results</x-page-heading>
    @endif


    <div class="space-y-6">
        @foreach($jobs as $job)
            <x-job-card-wide :$job/>
        @endforeach
    </div>
</x-layout>
